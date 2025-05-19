<?php

namespace App\Controller;

use App\Repository\CardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CardController extends AbstractController
{
    #[Route('/card', name: 'app_card')]
    public function index(): Response
    {
        return $this->render('card/index.html.twig', [
            'controller_name' => 'CardController',
        ]);
    }

    #[Route('/card/list', name: 'card_list')]
    public function cardList(CardRepository $cardRepository): Response
    {
        $cards = $cardRepository->findAll();

        return $this->render('card/list.html.twig', ['cards' => $cards]);
    }
}
