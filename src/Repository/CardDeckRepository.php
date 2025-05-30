<?php

namespace App\Repository;

use App\Entity\CardDeck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CardDeck>
 */
class CardDeckRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CardDeck::class);
    }

    //    /**
    //     * @return CardDeck[] Returns an array of CardDeck objects
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

    //    public function findOneBySomeField($value): ?CardDeck
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findFavorites(): array
    {
        return $this->createQueryBuilder('cardDeck')
            ->andWhere('cardDeck.isFavorite = :true')
            ->setParameter('true', true)
            ->orderBy('cardDeck.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
