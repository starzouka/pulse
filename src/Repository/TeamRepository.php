<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Team;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Team::class);
    }

    public function existsByCaptain(User $user): bool
    {
        $result = $this->createQueryBuilder('team')
            ->select('1')
            ->andWhere('team.captainUserId = :user')
            ->setParameter('user', $user)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result !== null;
    }

    /**
     * @return list<Team>
     */
    public function findByCaptainUser(User $user, int $limit = 50): array
    {
        return $this->createQueryBuilder('team')
            ->leftJoin('team.logoImageId', 'logo')
            ->addSelect('logo')
            ->andWhere('team.captainUserId = :user')
            ->setParameter('user', $user)
            ->orderBy('team.name', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findOneByCaptainAndId(User $user, int $teamId): ?Team
    {
        if ($teamId <= 0) {
            return null;
        }

        return $this->createQueryBuilder('team')
            ->leftJoin('team.logoImageId', 'logo')
            ->addSelect('logo')
            ->andWhere('team.captainUserId = :user')
            ->andWhere('team.teamId = :teamId')
            ->setParameter('user', $user)
            ->setParameter('teamId', $teamId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
