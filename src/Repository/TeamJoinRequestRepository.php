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
        return $this->findByUserWithFilters($user, null, null, 'latest', $limit);
    }

    /**
     * @return list<TeamJoinRequest>
     */
    public function findByUserWithFilters(
        User $user,
        ?string $status = null,
        ?string $query = null,
        string $sort = 'latest',
        int $limit = 100
    ): array {
        $builder = $this->createQueryBuilder('teamJoinRequest')
            ->innerJoin('teamJoinRequest.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->leftJoin('teamJoinRequest.respondedByCaptainId', 'captainResponder')
            ->addSelect('captainResponder')
            ->andWhere('teamJoinRequest.userId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'], true)) {
            $builder
                ->andWhere('teamJoinRequest.status = :status')
                ->setParameter('status', $statusValue);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(team.name) LIKE :query
                    OR LOWER(COALESCE(team.region, \'\')) LIKE :query
                    OR LOWER(COALESCE(teamJoinRequest.note, \'\')) LIKE :query
                    OR LOWER(COALESCE(captainResponder.username, \'\')) LIKE :query
                    OR LOWER(COALESCE(captainResponder.displayName, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('teamJoinRequest.createdAt', 'ASC')
                    ->addOrderBy('teamJoinRequest.requestId', 'ASC');
                break;

            case 'team':
                $builder
                    ->orderBy('team.name', 'ASC')
                    ->addOrderBy('teamJoinRequest.createdAt', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('teamJoinRequest.status', 'ASC')
                    ->addOrderBy('teamJoinRequest.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('teamJoinRequest.createdAt', 'DESC')
                    ->addOrderBy('teamJoinRequest.requestId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
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
