<?php

namespace App\Repository;

use App\Entity\Supplier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SupplierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supplier::class);
    }

    public function search(?string $term): array
    {
        $qb = $this->createQueryBuilder('s')->orderBy('s.createdAt', 'DESC');
        if ($term) {
            $qb->andWhere('LOWER(s.name) LIKE :term OR LOWER(s.email) LIKE :term OR s.phone LIKE :term')
               ->setParameter('term', '%' . strtolower($term) . '%');
        }
        return $qb->getQuery()->getResult();
    }
}
