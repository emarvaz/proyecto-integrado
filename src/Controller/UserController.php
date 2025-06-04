<?php

namespace App\Controller;

use App\Entity\CardDeck;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/profile/{id}', name: 'profile')]
    public function profile(int $id, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);

        return $this->render('user/profile.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/profile/edit/{id}', name: 'user_edit')]
    public function profileEdit(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $userRepository->find($id);
        $originalPassword = $user->getPassword();

        $form = $this->createForm(UserType::class, $user, [
            'edit_mode' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $profilePic */
            $profilePic = $form->get('profilePic')->getData();

            if ($profilePic) {
                $newFilename = uniqid() . '.' . $profilePic->guessExtension();

                $profilePic->move(
                    $this->getParameter('user_images_directory'),
                    $newFilename
                );

                $user->setProfilePic($newFilename);
            }

            $newPassword = $form->get('password')->getData();

            if ($newPassword) {
                $user->setPassword(password_hash($newPassword, PASSWORD_BCRYPT));
            } else {
                $user->setPassword($originalPassword);
            }

            $entityManager->flush();

            return $this->redirectToRoute('profile', ['id' => $id]);
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/administration/user/list', name: 'administration_user_list')]
    public function administrationUserList(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $filters = [
            'filter' => $request->query->get('filter'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $userRepository->getUsersQueryBuilder($activeFilters);

        $pagination = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1), 10, [
            'defaultSortFieldName' => 'user.username',
            'defaultSortDirection' => 'asc',
        ]);


        return $this->render('administration/user/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }

    #[Route('/administration/user/create', name: 'administration_user_create')]
    public function administrationUserCreate(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user, [
            'administration' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));
            $user->setRegisterDate(new DateTime('now'));

            $cardDeckNumber = 4;

            for ($cardDeckIterator = 1; $cardDeckIterator <= $cardDeckNumber; $cardDeckIterator++) {
                $cardDeck = new CardDeck();
                $cardDeck->setName("Mazo {$cardDeckIterator}");
                $cardDeck->setIsFavorite(false);

                $user->addCardDeck($cardDeck);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/administration/user/edit/{id}', name: 'administration_user_edit')]
    public function administrationUserEdit(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $userRepository->find($id);
        $originalPassword = $user->getPassword();

        $form = $this->createForm(UserType::class, $user, [
            'administration' => true,
            'edit_mode' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $form->get('password')->getData();

            if ($newPassword) {
                $user->setPassword(password_hash($newPassword, PASSWORD_BCRYPT));
            } else {
                $user->setPassword($originalPassword);
            }

            $entityManager->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/administration/user/delete/{id}', name: 'administration_user_delete')]
    public function administrationUserDelete(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $userRepository->find($id);

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('administration_user_list');
    }
}
