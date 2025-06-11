<?php

namespace App\Controller;

use App\Entity\CardDeck;
use App\Entity\User;
use App\Form\UserType;
use App\Service\MailerService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/sign-in', name: 'sign_in')]
    public function signIn(Request $request, MailerService $mailerService, EntityManagerInterface $entityManagerInterface, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('password')->getData();

            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $plainPassword
            );
            $user->setPassword($hashedPassword);

            $cardDeckNumber = 4;
            for ($cardDeckIterator = 1; $cardDeckIterator <= $cardDeckNumber; $cardDeckIterator++) {
                $cardDeck = new CardDeck();
                $cardDeck->setName("Mazo {$cardDeckIterator}");
                $cardDeck->setIsFavorite(false);
                $user->addCardDeck($cardDeck);
            }
            $user->setRegisterDate(new DateTime('now'));

            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();

            $emailSent = $mailerService->sendEmail(
                $user->getEmail(),
                'Tu cuenta ha sido creada correctamente en Mundo de Cartas',
                'security/sign-in-confirmation.html.twig',
                [
                    'user' => $user,
                    'user_email' => $user->getEmail(),
                ]
            );

            if ($emailSent) {
                $this->addFlash('success', 'Usuario creado correctamente y correo de bienvenida enviado.');
            } else {
                $this->addFlash('warning', 'Usuario creado, pero no se ha podido enviar el correo de bienvenida.');
            }

            return $this->redirectToRoute('login');
        }

        return $this->render('security/sign-in.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route(path: '/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
