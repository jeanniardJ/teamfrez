<?php

namespace App\Repository;

use App\Entity\UserComplement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserComplement|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserComplement|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserComplement[]    findAll()
 * @method UserComplement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserComplementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserComplement::class);
    }

    // /**
    //  * @return UserComplement[] Returns an array of UserComplement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserComplement
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
