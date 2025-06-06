<?php

namespace App\Controller\Api;

use App\Entity\Card;
use App\Repository\CardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/card')]
class ApiCardController extends AbstractController
{
    #[Route('/all', name: 'api_card_all', methods: ['GET'])]
    public function list(CardRepository      $cardRepository,
                         SerializerInterface $serializer): JsonResponse
    {
        $cards = $cardRepository->findAll();
        $json = $serializer->serialize($cards, 'json', ['groups' => 'card:read']);

        return JsonResponse::fromJsonString($json, 200);
    }

    #[Route('/{id}', name: 'api_card_show', methods: ['GET'])]
    public function show(Card                $card,
                         SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($card, 'json', ['groups' => 'card:read']);

        return JsonResponse::fromJsonString($json, 200);
    }
}
