<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Team;
use App\Entity\TeamInvite;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TeamInviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamInvite::class);
    }

    /**
     * @return list<TeamInvite>
     */
    public function findLatestForInvitedUser(User $user, ?string $status = null, int $limit = 50): array
    {
        $builder = $this->createQueryBuilder('teamInvite')
            ->andWhere('teamInvite.invitedUserId = :user')
            ->setParameter('user', $user)
            ->orderBy('teamInvite.createdAt', 'DESC')
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('teamInvite.status = :status')
                ->setParameter('status', $statusValue);
        }

        return $builder->getQuery()->getResult();
    }

    public function findOnePendingByIdForUser(int $inviteId, User $user): ?TeamInvite
    {
        return $this->findOneBy([
            'inviteId' => $inviteId,
            'invitedUserId' => $user,
            'status' => 'PENDING',
        ]);
    }

    /**
     * @return list<TeamInvite>
     */
    public function findLatestByTeam(Team $team, int $limit = 100): array
    {
        return $this->createQueryBuilder('teamInvite')
            ->innerJoin('teamInvite.invitedUserId', 'invitedUser')
            ->addSelect('invitedUser')
            ->leftJoin('invitedUser.profileImageId', 'invitedUserProfileImage')
            ->addSelect('invitedUserProfileImage')
            ->leftJoin('teamInvite.invitedByUserId', 'invitedByUser')
            ->addSelect('invitedByUser')
            ->andWhere('teamInvite.teamId = :team')
            ->setParameter('team', $team)
            ->orderBy('teamInvite.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findOnePendingByTeamAndUser(Team $team, User $user): ?TeamInvite
    {
        return $this->findOneBy([
            'teamId' => $team,
            'invitedUserId' => $user,
            'status' => 'PENDING',
        ]);
    }

    /**
     * @return list<int>
     */
    public function findPendingInvitedUserIdsByTeam(Team $team): array
    {
        $rows = $this->createQueryBuilder('teamInvite')
            ->select('IDENTITY(teamInvite.invitedUserId) AS invitedUserId')
            ->andWhere('teamInvite.teamId = :team')
            ->andWhere('teamInvite.status = :status')
            ->setParameter('team', $team)
            ->setParameter('status', 'PENDING')
            ->getQuery()
            ->getArrayResult();

        $invitedUserIds = [];
        foreach ($rows as $row) {
            $invitedUserId = (int) ($row['invitedUserId'] ?? 0);
            if ($invitedUserId > 0) {
                $invitedUserIds[] = $invitedUserId;
            }
        }

        return array_values(array_unique($invitedUserIds));
    }
}
