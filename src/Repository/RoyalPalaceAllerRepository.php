<?php

namespace App\Repository;

use App\Entity\RoyalPalaceAller;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RoyalPalaceAller|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoyalPalaceAller|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoyalPalaceAller[]    findAll()
 * @method RoyalPalaceAller[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoyalPalaceAllerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoyalPalaceAller::class);
    }

    // /**
    //  * @return RoyalPalaceAller[] Returns an array of RoyalPalaceAller objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoyalPalaceAller
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
