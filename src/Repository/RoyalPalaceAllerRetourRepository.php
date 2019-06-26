<?php

namespace App\Repository;

use App\Entity\RoyalPalaceAllerRetour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RoyalPalaceAllerRetour|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoyalPalaceAllerRetour|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoyalPalaceAllerRetour[]    findAll()
 * @method RoyalPalaceAllerRetour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoyalPalaceAllerRetourRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoyalPalaceAllerRetour::class);
    }

    // /**
    //  * @return RoyalPalaceAllerRetour[] Returns an array of RoyalPalaceAllerRetour objects
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
    public function findOneBySomeField($value): ?RoyalPalaceAllerRetour
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
