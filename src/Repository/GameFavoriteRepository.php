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
        return $this->findOneByUserAndGame($user, $game) instanceof GameFavorite;
    }

    public function countByGame(Game $game): int
    {
        return (int) $this->createQueryBuilder('favorite')
            ->select('COUNT(favorite.favoriteId)')
            ->andWhere('favorite.gameId = :game')
            ->setParameter('game', $game)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @param list<int> $gameIds
     * @return array<int, int>
     */
    public function countByGameIds(array $gameIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $gameIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0
        )));

        if ($filteredIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('favorite')
            ->select('IDENTITY(favorite.gameId) AS gameId')
            ->addSelect('COUNT(favorite.favoriteId) AS favoritesCount')
            ->andWhere('IDENTITY(favorite.gameId) IN (:gameIds)')
            ->setParameter('gameIds', $filteredIds)
            ->groupBy('favorite.gameId')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) ($row['gameId'] ?? 0)] = (int) ($row['favoritesCount'] ?? 0);
        }

        return $counts;
    }
}
