<?php

namespace App\Controller;

use App\Entity\CardDeck;
use App\Form\CardDeckForm;
use App\Form\CopyCardDeckForm;
use App\Repository\CardDeckRepository;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardDeckController extends AbstractController
{
    #[Route('/', name: 'card_deck_list')]
    public function list(CardDeckRepository     $cardDeckRepository,
                         CardRepository         $cardRepository,
                         EntityManagerInterface $entityManager,
                         Request                $request): Response
    {
        $user = $this->getUser();
        $cardDecks = $cardDeckRepository->findFavorites();

        $copyForms = [];

        foreach ($cardDecks as $deck) {
            if (!$user) {
                continue;
            }

            $form = $this->createForm(CopyCardDeckForm::class, null, [
                'user' => $user,
                'source_deck' => $deck,
                'action' => $this->generateUrl('card_deck_list')
            ]);
            $form->add('submit', SubmitType::class, [
                'label' => 'Copiar',
                'attr' => ['name' => 'copy_deck_' . $deck->getId()]
            ]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();
                $targetDeck = $data['targetDeck'];

                $targetDeck->clearCards();
                foreach ($deck->getCards() as $card) {
                    $targetDeck->addCard($card);
                }

                $entityManager->flush();

                $this->addFlash('success', sprintf('Cartas copiadas de "%s" a "%s".', $deck->getName(), $targetDeck->getName()));
                return $this->redirectToRoute('card_deck_edit', ['id' => $targetDeck->getId()]);
            }

            $copyForms[$deck->getId()] = $form->createView();
        }

        return $this->render('card-deck/list.html.twig', [
            'cardDecks' => $cardDecks,
            'copyForms' => $copyForms
        ]);
    }

    #[Route('/card-deck/{id}/export', name: 'card_deck_export_json')]
    public function export(CardDeck $cardDeck): Response
    {
        $data = [
            'name' => $cardDeck->getName(),
            'cards' => []
        ];

        foreach ($cardDeck->getCards() as $card) {
            $data['cards'][] = $card->getId();
        }

        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return new Response($json, 200, [
            'Content-Type' => 'application/json',
            'Content-Disposition' => 'attachment; filename="' . $cardDeck->getName() . '.json"',
        ]);
    }

    #[Route('/card-deck/{id?}', name: 'card_deck_edit', requirements: ['id' => '\d+'], defaults: ['id' => null])]
    public function edit(?int                   $id,
                         CardDeckRepository     $cardDeckRepository,
                         CardRepository         $cardRepository,
                         EntityManagerInterface $entityManager,
                         Request                $request): Response
    {
        $user = $this->getUser();

        $allCardDecks = $cardDeckRepository->findBy(['user' => $user]);
        $currentCardDeck = null;

        if (null === $id) {
            if (!empty($allCardDecks)) {
                return $this->redirectToRoute('card_deck_edit', ['id' => $allCardDecks[0]->getId()]);
            }
            $currentCardDeck = new CardDeck();
            $currentCardDeck->setUser($user);
        } else {
            $currentCardDeck = $cardDeckRepository->findOneBy(['id' => $id, 'user' => $user]);

            if (!$currentCardDeck) {
                $this->addFlash('error', 'Mazo no encontrado o no tienes permiso para editarlo.');
                return $this->redirectToRoute('card_deck_edit');
            }
        }

        $form = $this->createForm(CardDeckForm::class, $currentCardDeck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$currentCardDeck->getUser() && $user) {
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
        ]);
    }
}