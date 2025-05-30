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
    #[Route('/community', name: 'card_deck_list')]
    public function list(CardDeckRepository     $cardDeckRepository,
                         CardRepository         $cardRepository,
                         EntityManagerInterface $entityManager,
                         Request                $request): Response
    {
        $cardDecks = $cardDeckRepository->findFavorites();

        return $this->render('card-deck/list.html.twig', [
            'cardDecks' => $cardDecks
        ]);
    }

    #[Route('/card-deck/{id?}', name: 'card_deck_edit', requirements: ['id' => '\d+'], defaults: ['id' => null])]
    public function edit(?int $id, CardDeckRepository $cardDeckRepository, CardRepository $cardRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        $allCardDecks = $cardDeckRepository->findAll(); // O $cardDeckRepository->findBy(['user' => $user]);
        $currentCardDeck = null;

        if (null === $id) {
            if (!empty($allCardDecks)) {
                return $this->redirectToRoute('card_deck_edit', ['id' => $allCardDecks[0]->getId()]);
            }

            $currentCardDeck = new CardDeck();
        } else {
            $currentCardDeck = $cardDeckRepository->find($id);

            if (!$currentCardDeck) {
                $this->addFlash('error', 'Mazo no encontrado.');
                return $this->redirectToRoute('card_deck_edit');
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
            return $this->redirectToRoute('card_deck_edit', ['id' => $currentCardDeck->getId()]);
        }

        return $this->render('card-deck/edit.html.twig', [
            'form' => $form->createView(),
            'cardDecks' => $allCardDecks,
            'currentCardDeckId' => $currentCardDeck ? $currentCardDeck->getId() : null,
            'cards' => $cardRepository->findAll(),
        ]);
    }
}