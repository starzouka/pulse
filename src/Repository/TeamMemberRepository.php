<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TeamMember;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TeamMemberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamMember::class);
    }

    /**
     * @return list<TeamMember>
     */
    public function findActiveByUser(User $user, int $limit = 20): array
    {
        return $this->createQueryBuilder('teamMember')
            ->andWhere('teamMember.userId = :user')
            ->andWhere('teamMember.isActive = :active')
            ->andWhere('teamMember.leftAt IS NULL')
            ->setParameter('user', $user)
            ->setParameter('active', true)
            ->orderBy('teamMember.joinedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
