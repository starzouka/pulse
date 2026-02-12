<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TournamentTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentTeam::class);
    }

    /**
     * @param list<int> $tournamentIds
     * @param list<string>|null $statuses
     * @return array<int, int>
     */
    public function countByTournamentIds(array $tournamentIds, ?array $statuses = null): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $tournamentIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        $builder = $this->createQueryBuilder('tournamentTeam')
            ->select('IDENTITY(tournamentTeam.tournamentId) AS tournamentId')
            ->addSelect('COUNT(tournamentTeam.teamId) AS teamCount')
            ->andWhere('IDENTITY(tournamentTeam.tournamentId) IN (:tournamentIds)')
            ->setParameter('tournamentIds', $filteredIds)
            ->groupBy('tournamentTeam.tournamentId');

        if (is_array($statuses) && $statuses !== []) {
            $builder
                ->andWhere('tournamentTeam.status IN (:statuses)')
                ->setParameter('statuses', array_map('strtoupper', $statuses));
        }

        $rows = $builder->getQuery()->getArrayResult();
        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['tournamentId']] = (int) $row['teamCount'];
        }

        return $counts;
    }

    /**
     * @param list<string>|null $statuses
     */
    public function countByTournament(Tournament $tournament, ?array $statuses = null): int
    {
        $builder = $this->createQueryBuilder('tournamentTeam')
            ->select('COUNT(tournamentTeam.teamId)')
            ->andWhere('tournamentTeam.tournamentId = :tournament')
            ->setParameter('tournament', $tournament);

        if (is_array($statuses) && $statuses !== []) {
            $builder
                ->andWhere('tournamentTeam.status IN (:statuses)')
                ->setParameter('statuses', array_map('strtoupper', $statuses));
        }

        return (int) $builder->getQuery()->getSingleScalarResult();
    }

    /**
     * @return list<TournamentTeam>
     */
    public function findByTournamentOrdered(Tournament $tournament): array
    {
        return $this->createQueryBuilder('tournamentTeam')
            ->innerJoin('tournamentTeam.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->andWhere('tournamentTeam.tournamentId = :tournament')
            ->setParameter('tournament', $tournament)
            ->addSelect('(CASE tournamentTeam.status WHEN \'ACCEPTED\' THEN 0 WHEN \'PENDING\' THEN 1 ELSE 2 END) AS HIDDEN statusRank')
            ->orderBy('statusRank', 'ASC')
            ->addOrderBy('tournamentTeam.registeredAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findOneByTournamentAndTeam(Tournament $tournament, Team $team): ?TournamentTeam
    {
        return $this->createQueryBuilder('tournamentTeam')
            ->andWhere('tournamentTeam.tournamentId = :tournament')
            ->andWhere('tournamentTeam.teamId = :team')
            ->setParameter('tournament', $tournament)
            ->setParameter('team', $team)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param list<Team> $teams
     * @return list<TournamentTeam>
     */
    public function findByTournamentAndTeams(Tournament $tournament, array $teams): array
    {
        if ($teams === []) {
            return [];
        }

        return $this->createQueryBuilder('tournamentTeam')
            ->andWhere('tournamentTeam.tournamentId = :tournament')
            ->andWhere('tournamentTeam.teamId IN (:teams)')
            ->setParameter('tournament', $tournament)
            ->setParameter('teams', $teams)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<TournamentTeam>
     */
    public function findByTeamWithTournament(Team $team, int $limit = 200): array
    {
        return $this->createQueryBuilder('tournamentTeam')
            ->innerJoin('tournamentTeam.tournamentId', 'tournament')
            ->addSelect('tournament')
            ->innerJoin('tournament.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->andWhere('tournamentTeam.teamId = :team')
            ->setParameter('team', $team)
            ->orderBy('tournament.startDate', 'DESC')
            ->addOrderBy('tournamentTeam.registeredAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
