<?php

namespace App\Repository;

use App\Entity\ChoixUE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChoixUE|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChoixUE|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChoixUE[]    findAll()
 * @method ChoixUE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChoixUERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChoixUE::class);
    }

    // /**
    //  * @return ChoixUE[] Returns an array of ChoixUE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChoixUE
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
