<?php

namespace App\Repository;

use App\Entity\Libro1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Libro1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Libro1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Libro1[]    findAll()
 * @method Libro1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Libro1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Libro1::class);
    }

    // /**
    //  * @return Libro1[] Returns an array of Libro1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Libro1
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
