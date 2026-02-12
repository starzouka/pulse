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
        return $this->findActiveByUserFiltered($user, null, null, 'latest', $limit);
    }

    /**
     * @return list<TeamMember>
     */
    public function findActiveByUserFiltered(
        User $user,
        ?string $query = null,
        ?string $region = null,
        string $sort = 'latest',
        int $limit = 50
    ): array {
        $builder = $this->createQueryBuilder('teamMember')
            ->innerJoin('teamMember.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'logoImage')
            ->addSelect('logoImage')
            ->leftJoin('team.captainUserId', 'captain')
            ->addSelect('captain')
            ->andWhere('teamMember.userId = :user')
            ->andWhere('teamMember.isActive = :active')
            ->andWhere('teamMember.leftAt IS NULL')
            ->setParameter('user', $user)
            ->setParameter('active', true)
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(team.name) LIKE :query
                    OR LOWER(COALESCE(team.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(team.region, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $regionValue = trim((string) $region);
        if ($regionValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(team.region, \'\')) = :region')
                ->setParameter('region', mb_strtolower($regionValue));
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('teamMember.joinedAt', 'ASC')
                    ->addOrderBy('team.name', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy('team.name', 'ASC')
                    ->addOrderBy('teamMember.joinedAt', 'DESC');
                break;

            case 'region':
                $builder
                    ->orderBy('team.region', 'ASC')
                    ->addOrderBy('team.name', 'ASC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('teamMember.joinedAt', 'DESC')
                    ->addOrderBy('team.name', 'ASC');
                break;
        }

        return $builder->getQuery()->getResult();
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
     * @return list<TeamMember>
     */
    public function findByTeamWithFilters(
        Team $team,
        ?string $query = null,
        ?string $role = null,
        bool $activeOnly = true,
        string $sort = 'joined_oldest',
        int $limit = 200
    ): array {
        $builder = $this->createQueryBuilder('teamMember')
            ->innerJoin('teamMember.userId', 'user')
            ->addSelect('user')
            ->leftJoin('user.profileImageId', 'profileImage')
            ->addSelect('profileImage')
            ->andWhere('teamMember.teamId = :team')
            ->setParameter('team', $team)
            ->setMaxResults($limit);

        if ($activeOnly) {
            $builder
                ->andWhere('teamMember.isActive = :active')
                ->andWhere('teamMember.leftAt IS NULL')
                ->setParameter('active', true);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(user.username) LIKE :query
                    OR LOWER(user.displayName) LIKE :query
                    OR LOWER(COALESCE(user.country, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $roleValue = strtoupper(trim((string) $role));
        if (in_array($roleValue, ['PLAYER', 'CAPTAIN', 'ORGANIZER', 'ADMIN'], true)) {
            $builder
                ->andWhere('user.role = :role')
                ->setParameter('role', $roleValue);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'joined_latest':
                $builder
                    ->orderBy('teamMember.joinedAt', 'DESC')
                    ->addOrderBy('user.displayName', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy('user.displayName', 'ASC')
                    ->addOrderBy('teamMember.joinedAt', 'ASC');
                break;

            case 'role':
                $builder
                    ->orderBy('user.role', 'ASC')
                    ->addOrderBy('user.displayName', 'ASC');
                break;

            case 'joined_oldest':
            default:
                $builder
                    ->orderBy('teamMember.joinedAt', 'ASC')
                    ->addOrderBy('user.displayName', 'ASC');
                break;
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

    /**
     * @param list<int> $teamIds
     * @return array<int, int>
     */
    public function countActiveByTeamIds(array $teamIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $teamIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0
        )));

        if ($filteredIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('teamMember')
            ->select('IDENTITY(teamMember.teamId) AS teamId')
            ->addSelect('COUNT(teamMember.userId) AS membersCount')
            ->andWhere('IDENTITY(teamMember.teamId) IN (:teamIds)')
            ->andWhere('teamMember.isActive = :active')
            ->andWhere('teamMember.leftAt IS NULL')
            ->setParameter('teamIds', $filteredIds)
            ->setParameter('active', true)
            ->groupBy('teamMember.teamId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['teamId']] = (int) $row['membersCount'];
        }

        return $counts;
    }
}
