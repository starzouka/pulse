<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Game;
use App\Entity\GameFavorite;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class GameFavoriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameFavorite::class);
    }

    public function findOneByUserAndGame(User $user, Game $game): ?GameFavorite
    {
        return $this->createQueryBuilder('favorite')
            ->andWhere('favorite.userId = :user')
            ->andWhere('favorite.gameId = :game')
            ->setParameter('user', $user)
            ->setParameter('game', $game)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function existsForUserAndGame(User $user, Game $game): bool
    {
        $count = $this->createQueryBuilder('favorite')
            ->select('COUNT(favorite.gameId)')
            ->andWhere('favorite.userId = :user')
            ->andWhere('favorite.gameId = :game')
            ->setParameter('user', $user)
            ->setParameter('game', $game)
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $count > 0;
    }

    /**
     * @param list<int> $gameIds
     * @return array<int, int>
     */
    public function countByGameIds(array $gameIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $gameIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('favorite')
            ->select('IDENTITY(favorite.gameId) AS gameId')
            ->addSelect('COUNT(favorite.userId) AS favoritesCount')
            ->andWhere('IDENTITY(favorite.gameId) IN (:gameIds)')
            ->setParameter('gameIds', $filteredIds)
            ->groupBy('favorite.gameId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $gameId = (int) ($row['gameId'] ?? 0);
            if ($gameId <= 0) {
                continue;
            }

            $counts[$gameId] = (int) ($row['favoritesCount'] ?? 0);
        }

        return $counts;
    }

    /**
     * @return array<int, int>
     */
    public function countMonthlyByCategory(\DateTimeInterface $monthStart): array
    {
        $rows = $this->createQueryBuilder('favorite')
            ->select('IDENTITY(game.categoryId) AS categoryId')
            ->addSelect('COUNT(favorite.userId) AS favoritesCount')
            ->innerJoin('favorite.gameId', 'game')
            ->andWhere('favorite.createdAt >= :monthStart')
            ->setParameter('monthStart', $monthStart)
            ->groupBy('game.categoryId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $categoryId = (int) ($row['categoryId'] ?? 0);
            if ($categoryId <= 0) {
                continue;
            }

            $counts[$categoryId] = (int) ($row['favoritesCount'] ?? 0);
        }

        return $counts;
    }
}
