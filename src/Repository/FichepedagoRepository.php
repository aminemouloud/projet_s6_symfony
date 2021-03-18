<?php

namespace App\Repository;

use App\Entity\Fichepedago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fichepedago|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichepedago|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichepedago[]    findAll()
 * @method Fichepedago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichepedagoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichepedago::class);
    }

    // /**
    //  * @return Fichepedago[] Returns an array of Fichepedago objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fichepedago
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
