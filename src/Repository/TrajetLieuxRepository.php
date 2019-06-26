<?php

namespace App\Repository;

use App\Entity\TrajetLieux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TrajetLieux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrajetLieux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrajetLieux[]    findAll()
 * @method TrajetLieux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrajetLieuxRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TrajetLieux::class);
    }

    // /**
    //  * @return TrajetLieux[] Returns an array of TrajetLieux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrajetLieux
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
