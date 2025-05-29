<?php

namespace App\Controller;

use App\Entity\Card;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/cards')]
class CardAPIController extends AbstractController
{
    #[Route('', name: 'api_card_list', methods: ['GET'])]
    public function list(CardRepository $repository, SerializerInterface $serializer): JsonResponse
    {
        $cards = $repository->findAll();
        $json = $serializer->serialize($cards, 'json', ['groups' => 'card:read']);

        return JsonResponse::fromJsonString($json, 200);
    }

    #[Route('/{id}', name: 'api_card_show', methods: ['GET'])]
    public function show(Card $card, SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($card, 'json', ['groups' => 'card:read']);

        return JsonResponse::fromJsonString($json, 200);
    }

    #[Route('', name: 'api_card_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em, SerializerInterface $serializer): JsonResponse
    {
        $card = $serializer->deserialize($request->getContent(), Card::class, 'json');

        $em->persist($card);
        $em->flush();

        return new JsonResponse(['status' => 'Card created'], 201);
    }
}
