<?php

namespace App\Controller\Api;

use App\Entity\AbilityCategory;
use App\Repository\AbilityCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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

    #[Route('/new', name: 'api_ability_category_create', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function create(Request                $request,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $category = $serializer->deserialize($request->getContent(), AbilityCategory::class, 'json', ['groups' => 'abilityCategory:write']);

        $errors = $validator->validate($category);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->persist($category);
        $entityManager->flush();

        $json = $serializer->serialize($category, 'json', ['groups' => 'abilityCategory:read']);
        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}/edit', name: 'api_ability_category_update', methods: ['PUT'])]
    #[IsGranted('ROLE_ADMIN')]
    public function update(Request                $request,
                           AbilityCategory        $category,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $serializer->deserialize($request->getContent(), AbilityCategory::class, 'json', [
            AbstractNormalizer::OBJECT_TO_POPULATE => $category,
            'groups' => 'abilityCategory:write'
        ]);

        $errors = $validator->validate($category);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->flush();

        $json = $serializer->serialize($category, 'json', ['groups' => 'abilityCategory:read']);
        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}/delete', name: 'api_ability_category_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(AbilityCategory $category, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($category);
        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
