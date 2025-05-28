<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function getUsersQueryBuilder(array $filters = []): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('user');

        if (!empty($filters['filter'])) {
            $filter = '%' . $filters['filter'] . '%';

            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('user.username', ':filter'),
                    $queryBuilder->expr()->like('user.email', ':filter'),
                    $queryBuilder->expr()->like('user.name', ':filter'),
                    $queryBuilder->expr()->like('user.lastname', ':filter')
                )
            )
                ->setParameter('filter', $filter);
        }

        $queryBuilder->orderBy('user.username', 'ASC');

        return $queryBuilder;
    }


    public function getUserCountByRole(): array
    {
        $users = $this->findAll();
        $roleCounts = [];

        foreach ($users as $user) {
            foreach ($user->getRoles() as $role) {
                if (!isset($roleCounts[$role])) {
                    $roleCounts[$role] = 0;
                }
                $roleCounts[$role]++;
            }
        }

        arsort($roleCounts);

        return $roleCounts;
    }
}
