<?php

namespace App\Repository;

use App\Entity\MemorialAller;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MemorialAller|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemorialAller|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemorialAller[]    findAll()
 * @method MemorialAller[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemorialAllerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MemorialAller::class);
    }

    // /**
    //  * @return MemorialAller[] Returns an array of MemorialAller objects
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
    public function findOneBySomeField($value): ?MemorialAller
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
