<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\MatchTeam;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MatchTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchTeam::class);
    }

    /**
     * @return list<MatchTeam>
     */
    public function findByTournamentWithRelations(Tournament $tournament): array
    {
        return $this->createQueryBuilder('matchTeam')
            ->innerJoin('matchTeam.matchId', 'tournamentMatch')
            ->addSelect('tournamentMatch')
            ->innerJoin('matchTeam.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->andWhere('tournamentMatch.tournamentId = :tournament')
            ->setParameter('tournament', $tournament)
            ->orderBy('tournamentMatch.scheduledAt', 'ASC')
            ->addOrderBy('tournamentMatch.matchId', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param list<int> $matchIds
     * @return list<MatchTeam>
     */
    public function findByMatchIdsWithTeam(array $matchIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $matchIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        return $this->createQueryBuilder('matchTeam')
            ->innerJoin('matchTeam.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->andWhere('IDENTITY(matchTeam.matchId) IN (:matchIds)')
            ->setParameter('matchIds', $filteredIds)
            ->orderBy('matchTeam.matchId', 'ASC')
            ->addOrderBy('team.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<MatchTeam>
     */
    public function findByMatchWithTeam(TournamentMatch $match): array
    {
        return $this->createQueryBuilder('matchTeam')
            ->innerJoin('matchTeam.teamId', 'team')
            ->addSelect('team')
            ->leftJoin('team.logoImageId', 'teamLogo')
            ->addSelect('teamLogo')
            ->andWhere('matchTeam.matchId = :match')
            ->setParameter('match', $match)
            ->addOrderBy('matchTeam.isWinner', 'DESC')
            ->addOrderBy('team.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
