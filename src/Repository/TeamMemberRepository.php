<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Team;
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

    public function findOneByTeamAndUser(Team $team, User $user): ?TeamMember
    {
        return $this->findOneBy([
            'teamId' => $team,
            'userId' => $user,
        ]);
    }

    /**
     * @return list<TeamMember>
     */
    public function findByTeamWithUser(Team $team, bool $activeOnly = true): array
    {
        $builder = $this->createQueryBuilder('teamMember')
            ->innerJoin('teamMember.userId', 'user')
            ->addSelect('user')
            ->leftJoin('user.profileImageId', 'profileImage')
            ->addSelect('profileImage')
            ->andWhere('teamMember.teamId = :team')
            ->setParameter('team', $team)
            ->orderBy('teamMember.joinedAt', 'ASC');

        if ($activeOnly) {
            $builder
                ->andWhere('teamMember.isActive = :active')
                ->andWhere('teamMember.leftAt IS NULL')
                ->setParameter('active', true);
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<int>
     */
    public function findActiveUserIdsByTeam(Team $team): array
    {
        $rows = $this->createQueryBuilder('teamMember')
            ->select('IDENTITY(teamMember.userId) AS userId')
            ->andWhere('teamMember.teamId = :team')
            ->andWhere('teamMember.isActive = :active')
            ->andWhere('teamMember.leftAt IS NULL')
            ->setParameter('team', $team)
            ->setParameter('active', true)
            ->getQuery()
            ->getArrayResult();

        $userIds = [];
        foreach ($rows as $row) {
            $userId = (int) ($row['userId'] ?? 0);
            if ($userId > 0) {
                $userIds[] = $userId;
            }
        }

        return array_values(array_unique($userIds));
    }
}
