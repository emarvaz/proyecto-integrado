<?php

namespace App\Controller\Api;

use App\Entity\Card;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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

    #[Route('/new', name: 'api_card_create', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function create(Request                $request,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $card = $serializer->deserialize($request->getContent(), Card::class, 'json', [
            'groups' => 'card:write'
        ]);

        $errors = $validator->validate($card);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'),
                             JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->persist($card);
        $entityManager->flush();

        $json = $serializer->serialize($card, 'json', ['groups' => 'card:read']);
        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}/edit', name: 'api_card_update', methods: ['PUT'])]
    #[IsGranted('ROLE_ADMIN')]
    public function update(Request                $request,
                           Card                   $card,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $serializer->deserialize($request->getContent(), Card::class, 'json', [
            AbstractNormalizer::OBJECT_TO_POPULATE => $card,
            'groups' => 'card:write'
        ]);

        $errors = $validator->validate($card);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->flush();

        $json = $serializer->serialize($card, 'json', ['groups' => 'card:read']);

        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}/delete', name: 'api_card_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Card $card, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($card);
        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
