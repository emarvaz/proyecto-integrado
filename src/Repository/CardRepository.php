<?php

namespace App\Repository;

use App\Entity\Card;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Card>
 */
class CardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Card::class);
    }

    //    /**
    //     * @return Card[] Returns an array of Card objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Card
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function getCardsQueryBuilder(array $filters = []): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('card');

        if (!empty($filters['filter'])) {
            $filter = '%' . $filters['filter'] . '%';

            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('card.name', ':filter'),
                    $queryBuilder->expr()->like('card.description', ':filter'),
                    $queryBuilder->expr()->like('card.health', ':filter'),
                )
            )
                ->setParameter('filter', $filter);
        }

        $queryBuilder->orderBy('card.name', 'ASC');

        return $queryBuilder;
    }

    public function countCardsByAbility(): array
    {
        $queryBuilder = $this->createQueryBuilder('c')
            ->select('a.name AS ability', 'COUNT(c.id) AS cardCount')
            ->join('c.abilities', 'a')
            ->groupBy('a.id')
            ->orderBy('cardCount', 'DESC');

        $results = $queryBuilder->getQuery()->getResult();

        $data = [];
        foreach ($results as $row) {
            $data[$row['ability']] = (int) $row['cardCount'];
        }

        return $data;
    }
}
