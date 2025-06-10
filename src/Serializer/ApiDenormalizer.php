<?php

namespace App\Serializer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ApiDenormalizer implements DenormalizerInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return str_starts_with($type, 'App\\Entity\\') && is_string($data) && str_starts_with($data, '/api/');
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): ?object
    {
        $id = preg_replace('/[^0-9]/', '', $data);

        if (!$id) {
            throw new ResourceNotFoundException("No se encontró un ID válido en la IRI: $data");
        }

        return $this->entityManager->getRepository($type)->find($id);
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['*' => true];
    }
}