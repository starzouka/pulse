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

    /**
     * @return list<Team>
     */
    public function searchCatalog(
        ?string $query = null,
        ?string $region = null,
        bool $hasProducts = false,
        bool $activeInTournaments = false,
        string $sort = 'latest',
        int $limit = 120
    ): array {
        $builder = $this->createQueryBuilder('team')
            ->leftJoin('team.logoImageId', 'logo')
            ->addSelect('logo')
            ->leftJoin('team.captainUserId', 'captain')
            ->addSelect('captain')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(team.name) LIKE :query
                    OR LOWER(COALESCE(team.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(team.region, \'\')) LIKE :query
                    OR LOWER(COALESCE(captain.username, \'\')) LIKE :query
                    OR LOWER(COALESCE(captain.displayName, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $regionValue = trim((string) $region);
        if ($regionValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(team.region, \'\')) = :region')
                ->setParameter('region', mb_strtolower($regionValue));
        }

        if ($hasProducts) {
            $builder->andWhere(
                $builder->expr()->exists(
                    $this->getEntityManager()->createQueryBuilder()
                        ->select('1')
                        ->from(\App\Entity\Product::class, 'productFilter')
                        ->andWhere('productFilter.teamId = team')
                        ->andWhere('productFilter.isActive = :activeProduct')
                        ->getDQL()
                )
            )
            ->setParameter('activeProduct', true);
        }

        if ($activeInTournaments) {
            $builder->andWhere(
                $builder->expr()->exists(
                    $this->getEntityManager()->createQueryBuilder()
                        ->select('1')
                        ->from(\App\Entity\TournamentTeam::class, 'tournamentTeamFilter')
                        ->innerJoin('tournamentTeamFilter.tournamentId', 'tournamentFilter')
                        ->andWhere('tournamentTeamFilter.teamId = team')
                        ->andWhere('tournamentTeamFilter.status IN (:activeRegistrationStatuses)')
                        ->andWhere('tournamentFilter.status IN (:activeTournamentStatuses)')
                        ->getDQL()
                )
            )
            ->setParameter('activeRegistrationStatuses', ['PENDING', 'ACCEPTED'])
            ->setParameter('activeTournamentStatuses', ['OPEN', 'ONGOING']);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'name':
                $builder
                    ->orderBy('team.name', 'ASC')
                    ->addOrderBy('team.createdAt', 'DESC');
                break;

            case 'region':
                $builder
                    ->orderBy('team.region', 'ASC')
                    ->addOrderBy('team.name', 'ASC');
                break;

            case 'oldest':
                $builder
                    ->orderBy('team.createdAt', 'ASC')
                    ->addOrderBy('team.name', 'ASC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('team.createdAt', 'DESC')
                    ->addOrderBy('team.name', 'ASC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<string>
     */
    public function findDistinctRegions(): array
    {
        $rows = $this->createQueryBuilder('team')
            ->select('DISTINCT team.region AS region')
            ->andWhere('team.region IS NOT NULL')
            ->andWhere('team.region <> :empty')
            ->setParameter('empty', '')
            ->orderBy('team.region', 'ASC')
            ->getQuery()
            ->getArrayResult();

        $regions = [];
        foreach ($rows as $row) {
            $region = trim((string) ($row['region'] ?? ''));
            if ($region === '') {
                continue;
            }
            $regions[] = $region;
        }

        return array_values(array_unique($regions));
    }

    public function findOneWithRelationsById(int $teamId): ?Team
    {
        if ($teamId <= 0) {
            return null;
        }

        return $this->createQueryBuilder('team')
            ->leftJoin('team.logoImageId', 'logo')
            ->addSelect('logo')
            ->leftJoin('team.captainUserId', 'captain')
            ->addSelect('captain')
            ->andWhere('team.teamId = :teamId')
            ->setParameter('teamId', $teamId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return list<Team>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $region,
        ?string $captainQuery,
        ?bool $withProducts,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('team')
            ->leftJoin('team.logoImageId', 'logo')
            ->addSelect('logo')
            ->leftJoin('team.captainUserId', 'captain')
            ->addSelect('captain')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(team.name) LIKE :query
                    OR LOWER(COALESCE(team.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(team.region, \'\')) LIKE :query
                    OR LOWER(captain.username) LIKE :query
                    OR LOWER(COALESCE(captain.displayName, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $regionValue = trim((string) $region);
        if ($regionValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(team.region, \'\')) LIKE :region')
                ->setParameter('region', '%' . mb_strtolower($regionValue) . '%');
        }

        $captainSearch = trim((string) $captainQuery);
        if ($captainSearch !== '') {
            $builder
                ->andWhere(
                    'LOWER(captain.username) LIKE :captainQuery
                    OR LOWER(COALESCE(captain.displayName, \'\')) LIKE :captainQuery
                    OR LOWER(captain.email) LIKE :captainQuery'
                )
                ->setParameter('captainQuery', '%' . mb_strtolower($captainSearch) . '%');
        }

        if ($withProducts !== null) {
            $existsProductsDql = $this->getEntityManager()->createQueryBuilder()
                ->select('1')
                ->from(\App\Entity\Product::class, 'productFilter')
                ->andWhere('productFilter.teamId = team')
                ->getDQL();

            if ($withProducts) {
                $builder->andWhere($builder->expr()->exists($existsProductsDql));
            } else {
                $builder->andWhere($builder->expr()->not($builder->expr()->exists($existsProductsDql)));
            }
        }

        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';
        $sortKey = strtolower(trim($sortBy));

        switch ($sortKey) {
            case 'id':
                $builder->orderBy('team.teamId', $sortDirection);
                break;

            case 'name':
                $builder
                    ->orderBy('team.name', $sortDirection)
                    ->addOrderBy('team.teamId', 'DESC');
                break;

            case 'region':
                $builder
                    ->orderBy('team.region', $sortDirection)
                    ->addOrderBy('team.name', 'ASC');
                break;

            case 'captain':
                $builder
                    ->orderBy('captain.username', $sortDirection)
                    ->addOrderBy('team.teamId', 'DESC');
                break;

            case 'members':
                $builder
                    ->addSelect('(SELECT COUNT(teamMemberSub.userId) FROM App\Entity\TeamMember teamMemberSub WHERE teamMemberSub.teamId = team AND teamMemberSub.isActive = true) AS HIDDEN membersCount')
                    ->orderBy('membersCount', $sortDirection)
                    ->addOrderBy('team.teamId', 'DESC');
                break;

            case 'products':
                $builder
                    ->addSelect('(SELECT COUNT(productSub.productId) FROM App\Entity\Product productSub WHERE productSub.teamId = team) AS HIDDEN productsCount')
                    ->orderBy('productsCount', $sortDirection)
                    ->addOrderBy('team.teamId', 'DESC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('team.createdAt', $sortDirection)
                    ->addOrderBy('team.teamId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }
}
