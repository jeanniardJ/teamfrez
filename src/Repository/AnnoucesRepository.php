<?php

namespace App\Repository;

use App\Entity\Annouces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Annouces|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annouces|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annouces[]    findAll()
 * @method Annouces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnoucesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annouces::class);
    }

    // /**
    //  * @return Annouces[] Returns an array of Annouces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Annouces
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
