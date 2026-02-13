<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Tournament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TournamentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournament::class);
    }

    /**
     * @return list<Tournament>
     */
    public function findForHomeWeek(\DateTimeInterface $weekStart, \DateTimeInterface $weekEnd, int $limit = 12): array
    {
        return $this->createQueryBuilder('tournament')
            ->leftJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->andWhere('tournament.startDate >= :weekStart')
            ->andWhere('tournament.startDate <= :weekEnd')
            ->andWhere('tournament.status IN (:visibleStatuses)')
            ->setParameter('weekStart', $weekStart->format('Y-m-d'))
            ->setParameter('weekEnd', $weekEnd->format('Y-m-d'))
            ->setParameter('visibleStatuses', ['OPEN', 'ONGOING', 'FINISHED'])
            ->addSelect('(CASE tournament.status WHEN \'ONGOING\' THEN 0 WHEN \'OPEN\' THEN 1 ELSE 2 END) AS HIDDEN statusRank')
            ->orderBy('statusRank', 'ASC')
            ->addOrderBy('tournament.startDate', 'ASC')
            ->addOrderBy('tournament.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Tournament>
     */
    public function findLatestVisibleForHome(int $limit = 12): array
    {
        return $this->createQueryBuilder('tournament')
            ->leftJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->andWhere('tournament.status IN (:visibleStatuses)')
            ->setParameter('visibleStatuses', ['OPEN', 'ONGOING', 'FINISHED'])
            ->orderBy('tournament.startDate', 'DESC')
            ->addOrderBy('tournament.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Tournament>
     */
    public function searchCatalog(
        ?string $query,
        ?int $gameId,
        ?int $categoryId,
        ?string $status,
        ?string $format,
        ?string $registrationMode,
        ?\DateTimeInterface $dateFrom,
        ?\DateTimeInterface $dateTo,
        ?float $prizeMin,
        ?float $prizeMax,
        string $sort = 'latest',
        int $limit = 100,
    ): array {
        $builder = $this->createQueryBuilder('tournament')
            ->leftJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere('(LOWER(tournament.title) LIKE :query OR LOWER(COALESCE(tournament.description, \'\')) LIKE :query OR LOWER(game.name) LIKE :query)')
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(tournament.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        if ($categoryId !== null && $categoryId > 0) {
            $builder
                ->andWhere('IDENTITY(game.categoryId) = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }

        if ($status !== null && $status !== '') {
            $builder
                ->andWhere('tournament.status = :status')
                ->setParameter('status', strtoupper($status));
        }

        if ($format !== null && $format !== '') {
            $builder
                ->andWhere('tournament.format = :format')
                ->setParameter('format', strtoupper($format));
        }

        if ($registrationMode !== null && $registrationMode !== '') {
            $builder
                ->andWhere('tournament.registrationMode = :registrationMode')
                ->setParameter('registrationMode', strtoupper($registrationMode));
        }

        if ($dateFrom instanceof \DateTimeInterface) {
            $builder
                ->andWhere('tournament.startDate >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom->format('Y-m-d'));
        }

        if ($dateTo instanceof \DateTimeInterface) {
            $builder
                ->andWhere('tournament.endDate <= :dateTo')
                ->setParameter('dateTo', $dateTo->format('Y-m-d'));
        }

        if ($prizeMin !== null) {
            $builder
                ->andWhere('tournament.prizePool >= :prizeMin')
                ->setParameter('prizeMin', $prizeMin);
        }

        if ($prizeMax !== null) {
            $builder
                ->andWhere('tournament.prizePool <= :prizeMax')
                ->setParameter('prizeMax', $prizeMax);
        }

        switch ($sort) {
            case 'oldest':
                $builder
                    ->orderBy('tournament.startDate', 'ASC')
                    ->addOrderBy('tournament.createdAt', 'ASC');
                break;
            case 'prize':
                $builder
                    ->orderBy('tournament.prizePool', 'DESC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'progress':
                $builder
                    ->addSelect('(CASE tournament.status WHEN \'ONGOING\' THEN 0 WHEN \'OPEN\' THEN 1 WHEN \'FINISHED\' THEN 2 ELSE 3 END) AS HIDDEN statusRank')
                    ->orderBy('statusRank', 'ASC')
                    ->addOrderBy('tournament.startDate', 'ASC');
                break;
            case 'latest':
            default:
                $builder
                    ->orderBy('tournament.startDate', 'DESC')
                    ->addOrderBy('tournament.createdAt', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @param list<int> $gameIds
     * @param list<string>|null $statuses
     * @return array<int, int>
     */
    public function countByGameIds(array $gameIds, ?array $statuses = null): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $gameIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0
        )));

        if ($filteredIds === []) {
            return [];
        }

        $builder = $this->createQueryBuilder('tournament')
            ->select('IDENTITY(tournament.gameId) AS gameId')
            ->addSelect('COUNT(tournament.tournamentId) AS tournamentCount')
            ->andWhere('IDENTITY(tournament.gameId) IN (:gameIds)')
            ->setParameter('gameIds', $filteredIds)
            ->groupBy('tournament.gameId');

        if (is_array($statuses) && $statuses !== []) {
            $builder
                ->andWhere('tournament.status IN (:statuses)')
                ->setParameter('statuses', array_map('strtoupper', $statuses));
        }

        $rows = $builder->getQuery()->getArrayResult();
        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['gameId']] = (int) $row['tournamentCount'];
        }

        return $counts;
    }

    /**
     * @return list<Tournament>
     */
    public function findAllWithGameOrdered(int $limit = 200): array
    {
        return $this->createQueryBuilder('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->orderBy('tournament.startDate', 'DESC')
            ->addOrderBy('tournament.title', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Tournament>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $status,
        ?int $gameId,
        string $sort = 'latest',
        int $limit = 300
    ): array
    {
        $builder = $this->createQueryBuilder('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    '(LOWER(tournament.title) LIKE :query
                    OR LOWER(COALESCE(tournament.description, \'\')) LIKE :query
                    OR LOWER(game.name) LIKE :query
                    OR LOWER(organizer.username) LIKE :query
                    OR LOWER(organizer.email) LIKE :query)'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('tournament.status = :status')
                ->setParameter('status', $statusValue);
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(tournament.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('tournament.startDate', 'ASC')
                    ->addOrderBy('tournament.createdAt', 'ASC');
                break;
            case 'title':
                $builder
                    ->orderBy('tournament.title', 'ASC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'prize':
                $builder
                    ->orderBy('tournament.prizePool', 'DESC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'status':
                $builder
                    ->addSelect('(CASE tournament.status WHEN \'OPEN\' THEN 0 WHEN \'ONGOING\' THEN 1 WHEN \'FINISHED\' THEN 2 ELSE 3 END) AS HIDDEN statusRank')
                    ->orderBy('statusRank', 'ASC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'latest':
            default:
                $builder
                    ->orderBy('tournament.startDate', 'DESC')
                    ->addOrderBy('tournament.createdAt', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneWithRelationsById(int $id): ?Tournament
    {
        return $this->createQueryBuilder('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->andWhere('tournament.tournamentId = :id')
            ->setParameter('id', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return list<Tournament>
     */
    public function searchForOrganizer(
        int $organizerUserId,
        ?string $query,
        ?string $status,
        ?int $gameId,
        string $sort = 'latest',
        int $limit = 300
    ): array {
        $builder = $this->createQueryBuilder('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->andWhere('IDENTITY(tournament.organizerUserId) = :organizerUserId')
            ->setParameter('organizerUserId', $organizerUserId)
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    '(LOWER(tournament.title) LIKE :query
                    OR LOWER(COALESCE(tournament.description, \'\')) LIKE :query
                    OR LOWER(game.name) LIKE :query)'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('tournament.status = :status')
                ->setParameter('status', $statusValue);
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(tournament.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('tournament.startDate', 'ASC')
                    ->addOrderBy('tournament.createdAt', 'ASC');
                break;
            case 'title':
                $builder
                    ->orderBy('tournament.title', 'ASC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'status':
                $builder
                    ->addSelect('(CASE tournament.status WHEN \'OPEN\' THEN 0 WHEN \'ONGOING\' THEN 1 WHEN \'FINISHED\' THEN 2 ELSE 3 END) AS HIDDEN statusRank')
                    ->orderBy('statusRank', 'ASC')
                    ->addOrderBy('tournament.startDate', 'DESC');
                break;
            case 'latest':
            default:
                $builder
                    ->orderBy('tournament.startDate', 'DESC')
                    ->addOrderBy('tournament.createdAt', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }
}
