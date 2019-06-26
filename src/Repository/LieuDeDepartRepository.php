<?php

namespace App\Repository;

use App\Entity\LieuDeDepart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LieuDeDepart|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuDeDepart|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuDeDepart[]    findAll()
 * @method LieuDeDepart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuDeDepartRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LieuDeDepart::class);
    }

    // /**
    //  * @return LieuDeDepart[] Returns an array of LieuDeDepart objects
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
    public function findOneBySomeField($value): ?LieuDeDepart
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
