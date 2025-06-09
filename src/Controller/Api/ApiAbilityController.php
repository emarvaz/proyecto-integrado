<?php

namespace App\Controller\Api;

use App\Entity\Ability;
use App\Repository\AbilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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

    #[Route('/new', name: 'api_ability_create', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function create(Request                $request,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $ability = $serializer->deserialize($request->getContent(), Ability::class, 'json', ['groups' => 'ability:write']);

        $errors = $validator->validate($ability);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->persist($ability);
        $entityManager->flush();

        $json = $serializer->serialize($ability, 'json', ['groups' => 'ability:read']);
        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}/edit', name: 'api_ability_update', methods: ['PUT'])]
    #[IsGranted('ROLE_ADMIN')]
    public function update(Request                $request, Ability $ability,
                           SerializerInterface    $serializer,
                           EntityManagerInterface $entityManager,
                           ValidatorInterface     $validator): JsonResponse
    {
        $serializer->deserialize($request->getContent(), Ability::class, 'json', [
            AbstractNormalizer::OBJECT_TO_POPULATE => $ability,
            'groups' => 'ability:write'
        ]);

        $errors = $validator->validate($ability);
        if (count($errors) > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->flush();

        $json = $serializer->serialize($ability, 'json', ['groups' => 'ability:read']);
        return JsonResponse::fromJsonString($json, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}/delete', name: 'api_ability_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Ability $ability, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($ability);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
