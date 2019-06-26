<?php

namespace App\Repository;

use App\Entity\MemorialAllerRetour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MemorialAllerRetour|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemorialAllerRetour|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemorialAllerRetour[]    findAll()
 * @method MemorialAllerRetour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemorialAllerRetourRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MemorialAllerRetour::class);
    }

    // /**
    //  * @return MemorialAllerRetour[] Returns an array of MemorialAllerRetour objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MemorialAllerRetour
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
