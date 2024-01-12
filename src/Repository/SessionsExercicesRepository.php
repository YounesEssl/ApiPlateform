<?php

namespace App\Repository;

use App\Entity\SessionsExercices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SessionsExercices>
 *
 * @method SessionsExercices|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionsExercices|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionsExercices[]    findAll()
 * @method SessionsExercices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionsExercicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionsExercices::class);
    }

//    /**
//     * @return SessionsExercices[] Returns an array of SessionsExercices objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SessionsExercices
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
