<?php

namespace App\Controller\Api;

use App\Entity\Ability;
use App\Repository\AbilityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/ability')]
class ApiAbilityController extends AbstractController
{
    #[Route('/all', name: 'api_ability_all', methods: ['GET'])]
    public function list(AbilityRepository   $abilityRepository,
                         SerializerInterface $serializer): JsonResponse
    {
        $abilities = $abilityRepository->findAll();
        $json = $serializer->serialize($abilities, 'json', ['groups' => 'ability:read']);

        return JsonResponse::fromJsonString($json, 200);
    }

    #[Route('/{id}', name: 'api_ability_show', methods: ['GET'])]
    public function show(Ability             $ability,
                         SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($ability, 'json', ['groups' => 'ability:read']);

        return JsonResponse::fromJsonString($json, 200);
    }
}
