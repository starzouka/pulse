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
        return $this->findForInvitedUserFiltered($user, $status, null, 'latest', $limit);
    }

    /**
     * @return list<TeamInvite>
     */
    public function findForInvitedUserFiltered(
        User $user,
        ?string $status = null,
        ?string $query = null,
        string $sort = 'latest',
        int $limit = 50
    ): array {
        $builder = $this->createQueryBuilder('teamInvite')
            ->innerJoin('teamInvite.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->leftJoin('teamInvite.invitedByUserId', 'invitedBy')
            ->addSelect('invitedBy')
            ->andWhere('teamInvite.invitedUserId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'], true)) {
            $builder
                ->andWhere('teamInvite.status = :status')
                ->setParameter('status', $statusValue);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(team.name) LIKE :query
                    OR LOWER(COALESCE(team.region, \'\')) LIKE :query
                    OR LOWER(COALESCE(teamInvite.message, \'\')) LIKE :query
                    OR LOWER(invitedBy.username) LIKE :query
                    OR LOWER(invitedBy.displayName) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('teamInvite.createdAt', 'ASC')
                    ->addOrderBy('teamInvite.inviteId', 'ASC');
                break;

            case 'team':
                $builder
                    ->orderBy('team.name', 'ASC')
                    ->addOrderBy('teamInvite.createdAt', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('teamInvite.status', 'ASC')
                    ->addOrderBy('teamInvite.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('teamInvite.createdAt', 'DESC')
                    ->addOrderBy('teamInvite.inviteId', 'DESC');
                break;
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
