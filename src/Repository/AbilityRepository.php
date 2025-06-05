<?php

namespace App\Repository;

use App\Entity\Ability;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ability>
 */
class AbilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ability::class);
    }

//    /**
//     * @return Ability[] Returns an array of Ability objects
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

//    public function findOneBySomeField($value): ?Ability
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function getAbilitiesQueryBuilder(array $filters = []): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('ability');

        if (!empty($filters['filter'])) {
            $filter = '%' . $filters['filter'] . '%';

            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('ability.name', ':filter'),
                    $queryBuilder->expr()->like('ability.description', ':filter'),
                    $queryBuilder->expr()->like('ability.cost', ':filter'),
                    $queryBuilder->expr()->like('ability.value', ':filter')
                )
            )
                ->setParameter('filter', $filter);
        }

        $queryBuilder->orderBy('ability.name', 'ASC');

        return $queryBuilder;
    }

    public function countAbilitiesByCategory(): array
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->select('c.name AS category', 'COUNT(a.id) AS abilityCount')
            ->join('a.category', 'c')
            ->groupBy('c.id');

        $results = $queryBuilder->getQuery()->getResult();

        $data = [];
        foreach ($results as $row) {
            $data[$row['category']] = (int) $row['abilityCount'];
        }

        return $data;
    }
}
