<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Team;
use App\Entity\TeamJoinRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TeamJoinRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamJoinRequest::class);
    }

    /**
     * @return list<TeamJoinRequest>
     */
    public function findLatestByUser(User $user, int $limit = 100): array
    {
        return $this->createQueryBuilder('teamJoinRequest')
            ->andWhere('teamJoinRequest.userId = :user')
            ->setParameter('user', $user)
            ->orderBy('teamJoinRequest.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array{pending:int,accepted:int,refused:int}
     */
    public function summarizeStatusesForUser(User $user): array
    {
        $rows = $this->createQueryBuilder('teamJoinRequest')
            ->select('teamJoinRequest.status AS status')
            ->andWhere('teamJoinRequest.userId = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getArrayResult();

        $summary = [
            'pending' => 0,
            'accepted' => 0,
            'refused' => 0,
        ];

        foreach ($rows as $row) {
            $status = strtoupper((string) ($row['status'] ?? ''));
            if ($status === 'PENDING') {
                ++$summary['pending'];
            } elseif ($status === 'ACCEPTED') {
                ++$summary['accepted'];
            } elseif ($status === 'REFUSED') {
                ++$summary['refused'];
            }
        }

        return $summary;
    }

    public function findOnePendingByIdForUser(int $requestId, User $user): ?TeamJoinRequest
    {
        return $this->findOneBy([
            'requestId' => $requestId,
            'userId' => $user,
            'status' => 'PENDING',
        ]);
    }

    /**
     * @return list<TeamJoinRequest>
     */
    public function findByTeamWithUser(Team $team, ?string $status = null, int $limit = 100): array
    {
        $builder = $this->createQueryBuilder('teamJoinRequest')
            ->innerJoin('teamJoinRequest.userId', 'user')
            ->addSelect('user')
            ->leftJoin('user.profileImageId', 'profileImage')
            ->addSelect('profileImage')
            ->leftJoin('teamJoinRequest.respondedByCaptainId', 'captainResponder')
            ->addSelect('captainResponder')
            ->andWhere('teamJoinRequest.teamId = :team')
            ->setParameter('team', $team)
            ->orderBy('teamJoinRequest.createdAt', 'DESC')
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('teamJoinRequest.status = :status')
                ->setParameter('status', $statusValue);
        }

        return $builder->getQuery()->getResult();
    }

    public function findOnePendingByIdForTeam(int $requestId, Team $team): ?TeamJoinRequest
    {
        if ($requestId <= 0) {
            return null;
        }

        return $this->findOneBy([
            'requestId' => $requestId,
            'teamId' => $team,
            'status' => 'PENDING',
        ]);
    }

    public function findOnePendingByTeamAndUser(Team $team, User $user): ?TeamJoinRequest
    {
        return $this->findOneBy([
            'teamId' => $team,
            'userId' => $user,
            'status' => 'PENDING',
        ]);
    }
}
