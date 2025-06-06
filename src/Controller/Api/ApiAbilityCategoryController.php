<?php

namespace App\Controller\Api;

use App\Entity\AbilityCategory;
use App\Repository\AbilityCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/ability-category')]
class ApiAbilityCategoryController extends AbstractController
{
    #[Route('/all', name: 'api_ability_category_all', methods: ['GET'])]
    public function list(AbilityCategoryRepository $abilityCategoryRepository,
                         SerializerInterface       $serializer): JsonResponse
    {
        $abilities = $abilityCategoryRepository->findAll();
        $json = $serializer->serialize($abilities, 'json', ['groups' => 'abilityCategory:read']);

        return JsonResponse::fromJsonString($json, 200);
    }

    #[Route('/{id}', name: 'api_ability_category_show', methods: ['GET'])]
    public function show(AbilityCategory     $abilityCategory,
                         SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($abilityCategory, 'json', ['groups' => 'abilityCategory:read']);

        return JsonResponse::fromJsonString($json, 200);
    }
}
