<?php

namespace App\Repository;

use App\Entity\Cpus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cpus>
 *
 * @method Cpus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cpus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cpus[]    findAll()
 * @method Cpus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CpusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cpus::class);
    }

//    /**
//     * @return Cpus[] Returns an array of Cpus objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Cpus
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
