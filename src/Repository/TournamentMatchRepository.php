<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\MatchTeam;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TournamentMatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentMatch::class);
    }

    /**
     * @param list<int> $tournamentIds
     * @return array<int, int>
     */
    public function countByTournamentIds(array $tournamentIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $tournamentIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('tournamentMatch')
            ->select('IDENTITY(tournamentMatch.tournamentId) AS tournamentId')
            ->addSelect('COUNT(tournamentMatch.matchId) AS matchesCount')
            ->andWhere('IDENTITY(tournamentMatch.tournamentId) IN (:tournamentIds)')
            ->setParameter('tournamentIds', $filteredIds)
            ->groupBy('tournamentMatch.tournamentId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['tournamentId']] = (int) $row['matchesCount'];
        }

        return $counts;
    }

    /**
     * @param list<int> $tournamentIds
     * @return array<int, int>
     */
    public function countFinishedByTournamentIds(array $tournamentIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $tournamentIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('tournamentMatch')
            ->select('IDENTITY(tournamentMatch.tournamentId) AS tournamentId')
            ->addSelect('COUNT(tournamentMatch.matchId) AS matchesCount')
            ->andWhere('IDENTITY(tournamentMatch.tournamentId) IN (:tournamentIds)')
            ->andWhere('tournamentMatch.status = :status')
            ->setParameter('tournamentIds', $filteredIds)
            ->setParameter('status', 'FINISHED')
            ->groupBy('tournamentMatch.tournamentId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['tournamentId']] = (int) $row['matchesCount'];
        }

        return $counts;
    }

    /**
     * @return list<TournamentMatch>
     */
    public function findByTournamentOrdered(Tournament $tournament): array
    {
        return $this->createQueryBuilder('tournamentMatch')
            ->andWhere('tournamentMatch.tournamentId = :tournament')
            ->setParameter('tournament', $tournament)
            ->orderBy('tournamentMatch.scheduledAt', 'ASC')
            ->addOrderBy('tournamentMatch.matchId', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<TournamentMatch>
     */
    public function searchForAdmin(
        ?string $query,
        ?int $tournamentId,
        ?int $gameId,
        ?string $status,
        ?\DateTimeInterface $dateFrom,
        ?\DateTimeInterface $dateTo,
        ?string $teamQuery,
        string $sort = 'latest',
        int $limit = 300,
    ): array {
        $builder = $this->createQueryBuilder('tournamentMatch')
            ->innerJoin('tournamentMatch.tournamentId', 'tournament')
            ->addSelect('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    '(LOWER(COALESCE(tournamentMatch.roundName, \'\')) LIKE :query
                    OR LOWER(tournament.title) LIKE :query
                    OR LOWER(game.name) LIKE :query
                    OR LOWER(organizer.username) LIKE :query)'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        if ($tournamentId !== null && $tournamentId > 0) {
            $builder
                ->andWhere('IDENTITY(tournamentMatch.tournamentId) = :tournamentId')
                ->setParameter('tournamentId', $tournamentId);
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(tournament.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('tournamentMatch.status = :status')
                ->setParameter('status', $statusValue);
        }

        if ($dateFrom instanceof \DateTimeInterface) {
            $dateFromAtMidnight = \DateTimeImmutable::createFromInterface($dateFrom)->setTime(0, 0, 0);
            $builder
                ->andWhere('tournamentMatch.scheduledAt IS NOT NULL')
                ->andWhere('tournamentMatch.scheduledAt >= :dateFrom')
                ->setParameter('dateFrom', $dateFromAtMidnight);
        }

        if ($dateTo instanceof \DateTimeInterface) {
            $dateToEndOfDay = \DateTimeImmutable::createFromInterface($dateTo)->setTime(23, 59, 59);
            $builder
                ->andWhere('tournamentMatch.scheduledAt IS NOT NULL')
                ->andWhere('tournamentMatch.scheduledAt <= :dateTo')
                ->setParameter('dateTo', $dateToEndOfDay);
        }

        $teamQueryValue = trim((string) $teamQuery);
        if ($teamQueryValue !== '') {
            $builder
                ->andWhere(
                    $builder->expr()->exists(
                        $this->getEntityManager()->createQueryBuilder()
                            ->select('1')
                            ->from(MatchTeam::class, 'matchTeamFilter')
                            ->innerJoin('matchTeamFilter.teamId', 'teamFilter')
                            ->andWhere('matchTeamFilter.matchId = tournamentMatch')
                            ->andWhere('LOWER(teamFilter.name) LIKE :teamQuery')
                            ->getDQL()
                    )
                )
                ->setParameter('teamQuery', '%' . mb_strtolower($teamQueryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->addSelect('(CASE WHEN tournamentMatch.scheduledAt IS NULL THEN 1 ELSE 0 END) AS HIDDEN scheduledNullRank')
                    ->orderBy('scheduledNullRank', 'ASC')
                    ->addOrderBy('tournamentMatch.scheduledAt', 'ASC')
                    ->addOrderBy('tournamentMatch.matchId', 'ASC');
                break;
            case 'status':
                $builder
                    ->addSelect('(CASE tournamentMatch.status WHEN \'ONGOING\' THEN 0 WHEN \'SCHEDULED\' THEN 1 WHEN \'FINISHED\' THEN 2 ELSE 3 END) AS HIDDEN statusRank')
                    ->orderBy('statusRank', 'ASC')
                    ->addOrderBy('tournamentMatch.scheduledAt', 'ASC')
                    ->addOrderBy('tournamentMatch.matchId', 'ASC');
                break;
            case 'tournament':
                $builder
                    ->orderBy('tournament.title', 'ASC')
                    ->addOrderBy('tournamentMatch.scheduledAt', 'DESC')
                    ->addOrderBy('tournamentMatch.matchId', 'DESC');
                break;
            case 'latest':
            default:
                $builder
                    ->addSelect('(CASE WHEN tournamentMatch.scheduledAt IS NULL THEN 1 ELSE 0 END) AS HIDDEN scheduledNullRank')
                    ->orderBy('scheduledNullRank', 'ASC')
                    ->addOrderBy('tournamentMatch.scheduledAt', 'DESC')
                    ->addOrderBy('tournamentMatch.matchId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<TournamentMatch>
     */
    public function searchMatches(
        ?string $query,
        ?int $tournamentId,
        ?int $gameId,
        ?string $status,
        ?\DateTimeInterface $dateFrom,
        ?\DateTimeInterface $dateTo,
        ?string $teamQuery,
        string $sort = 'upcoming',
        int $limit = 200,
    ): array {
        $builder = $this->createQueryBuilder('tournamentMatch')
            ->innerJoin('tournamentMatch.tournamentId', 'tournament')
            ->addSelect('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere('(LOWER(COALESCE(tournamentMatch.roundName, \'\')) LIKE :query OR LOWER(tournament.title) LIKE :query OR LOWER(game.name) LIKE :query)')
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        if ($tournamentId !== null && $tournamentId > 0) {
            $builder
                ->andWhere('IDENTITY(tournamentMatch.tournamentId) = :tournamentId')
                ->setParameter('tournamentId', $tournamentId);
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(tournament.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        if ($status !== null && $status !== '') {
            $builder
                ->andWhere('tournamentMatch.status = :status')
                ->setParameter('status', strtoupper($status));
        }

        if ($dateFrom instanceof \DateTimeInterface) {
            $dateFromAtMidnight = \DateTimeImmutable::createFromInterface($dateFrom)->setTime(0, 0, 0);
            $builder
                ->andWhere('tournamentMatch.scheduledAt IS NOT NULL')
                ->andWhere('tournamentMatch.scheduledAt >= :dateFrom')
                ->setParameter('dateFrom', $dateFromAtMidnight);
        }

        if ($dateTo instanceof \DateTimeInterface) {
            $dateToEndOfDay = \DateTimeImmutable::createFromInterface($dateTo)->setTime(23, 59, 59);
            $builder
                ->andWhere('tournamentMatch.scheduledAt IS NOT NULL')
                ->andWhere('tournamentMatch.scheduledAt <= :dateTo')
                ->setParameter('dateTo', $dateToEndOfDay);
        }

        $teamQueryValue = trim((string) $teamQuery);
        if ($teamQueryValue !== '') {
            $builder
                ->andWhere(
                    $builder->expr()->exists(
                        $this->getEntityManager()->createQueryBuilder()
                            ->select('1')
                            ->from(MatchTeam::class, 'matchTeamFilter')
                            ->innerJoin('matchTeamFilter.teamId', 'teamFilter')
                            ->andWhere('matchTeamFilter.matchId = tournamentMatch')
                            ->andWhere('LOWER(teamFilter.name) LIKE :teamQuery')
                            ->getDQL()
                    )
                )
                ->setParameter('teamQuery', '%' . mb_strtolower($teamQueryValue) . '%');
        }

        if ($sort === 'latest') {
            $builder
                ->orderBy('tournamentMatch.scheduledAt', 'DESC')
                ->addOrderBy('tournamentMatch.matchId', 'DESC');
        } else {
            $builder
                ->addSelect('(CASE tournamentMatch.status WHEN \'ONGOING\' THEN 0 WHEN \'SCHEDULED\' THEN 1 WHEN \'FINISHED\' THEN 2 ELSE 3 END) AS HIDDEN statusRank')
                ->orderBy('statusRank', 'ASC')
                ->addOrderBy('tournamentMatch.scheduledAt', 'ASC')
                ->addOrderBy('tournamentMatch.matchId', 'ASC');
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneWithContextById(int $matchId): ?TournamentMatch
    {
        return $this->createQueryBuilder('tournamentMatch')
            ->innerJoin('tournamentMatch.tournamentId', 'tournament')
            ->addSelect('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->andWhere('tournamentMatch.matchId = :matchId')
            ->setParameter('matchId', $matchId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findLatestWithContext(): ?TournamentMatch
    {
        return $this->createQueryBuilder('tournamentMatch')
            ->innerJoin('tournamentMatch.tournamentId', 'tournament')
            ->addSelect('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('tournament.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->orderBy('tournamentMatch.scheduledAt', 'DESC')
            ->addOrderBy('tournamentMatch.matchId', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
