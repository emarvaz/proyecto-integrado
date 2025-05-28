<?php

namespace App\Controller;

use App\Entity\CardDeck;
use App\Form\CardDeckForm;
use App\Repository\CardDeckRepository;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardDeckController extends AbstractController
{
    #[Route('/card-deck/{id?}', name: 'card_deck__list', requirements: ['id' => '\d+'], defaults: ['id' => null])]
    public function list(?int $id, CardDeckRepository $cardDeckRepository, CardRepository $cardRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        $allCardDecks = $cardDeckRepository->findAll(); // O $cardDeckRepository->findBy(['user' => $user]);

        $currentCardDeck = null;

        if (null === $id) {
            if (!empty($allCardDecks)) {
                return $this->redirectToRoute('card_deck__list', ['id' => $allCardDecks[0]->getId()]);
            }
            $currentCardDeck = new CardDeck();
        } else {
            $currentCardDeck = $cardDeckRepository->find($id);
            if (!$currentCardDeck) {
                $this->addFlash('error', 'Mazo no encontrado.');
                return $this->redirectToRoute('card_deck__list');
            }
        }

        $form = $this->createForm(CardDeckForm::class, $currentCardDeck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$currentCardDeck->getId() && $user) {
                $currentCardDeck->setUser($user);
            }

            $entityManager->persist($currentCardDeck);
            $entityManager->flush();

            $this->addFlash('success', 'Mazo guardado correctamente.');
            return $this->redirectToRoute('card_deck__list', ['id' => $currentCardDeck->getId()]);
        }

        return $this->render('card-deck/index.html.twig', [
            'form' => $form->createView(),
            'cardDecks' => $allCardDecks,
            'currentCardDeckId' => $currentCardDeck ? $currentCardDeck->getId() : null,
        ]);
    }
}