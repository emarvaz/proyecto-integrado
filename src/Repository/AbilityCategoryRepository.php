<?php

namespace App\Repository;

use App\Entity\AbilityCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AbilityCategory>
 */
class AbilityCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AbilityCategory::class);
    }

    //    /**
    //     * @return AbilityCategory[] Returns an array of AbilityCategory objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AbilityCategory
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function getAbilityCategoriesQueryBuilder(array $filters = []): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('abilityCategory');

        if (!empty($filters['filter'])) {
            $filter = '%' . $filters['filter'] . '%';

            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('abilityCategory.name', ':filter'),
                    $queryBuilder->expr()->like('abilityCategory.description', ':filter'),
                )
            )
                ->setParameter('filter', $filter);
        }

        $queryBuilder->orderBy('abilityCategory.name', 'ASC');

        return $queryBuilder;
    }
}
