<?php

namespace App\Repository;

use App\Entity\CampCollaboration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CampCollaboration|null find($id, $lockMode = null, $lockVersion = null)
 * @method CampCollaboration|null findOneBy(array $criteria, array $orderBy = null)
 * @method CampCollaboration[]    findAll()
 * @method CampCollaboration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CampCollaborationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CampCollaboration::class);
    }

    // /**
    //  * @return CampCollaboration[] Returns an array of CampCollaboration objects
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
    public function findOneBySomeField($value): ?CampCollaboration
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
