<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Game;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class GameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Game::class);
    }

    /**
     * @return list<Game>
     */
    public function findAllWithCategoryOrdered(): array
    {
        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->orderBy('game.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Game>
     */
    public function searchCatalog(
        ?string $query = null,
        ?int $categoryId = null,
        ?string $publisher = null,
        bool $withActiveTournamentsOnly = false,
        string $sort = 'name',
        int $limit = 120
    ): array {
        $builder = $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(game.name) LIKE :query
                    OR LOWER(COALESCE(game.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(game.publisher, \'\')) LIKE :query
                    OR LOWER(COALESCE(category.name, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        if ($categoryId !== null && $categoryId > 0) {
            $builder
                ->andWhere('IDENTITY(game.categoryId) = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }

        $publisherValue = trim((string) $publisher);
        if ($publisherValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(game.publisher, \'\')) = :publisher')
                ->setParameter('publisher', mb_strtolower($publisherValue));
        }

        if ($withActiveTournamentsOnly) {
            $builder->andWhere(
                $builder->expr()->exists(
                    $this->getEntityManager()->createQueryBuilder()
                        ->select('1')
                        ->from(\App\Entity\Tournament::class, 'tournamentFilter')
                        ->andWhere('tournamentFilter.gameId = game')
                        ->andWhere('tournamentFilter.status IN (:activeStatuses)')
                        ->getDQL()
                )
            )
            ->setParameter('activeStatuses', ['OPEN', 'ONGOING']);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'latest':
                $builder
                    ->orderBy('game.createdAt', 'DESC')
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'publisher':
                $builder
                    ->orderBy('game.publisher', 'ASC')
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'category':
                $builder
                    ->orderBy('category.name', 'ASC')
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'name':
            default:
                $builder
                    ->orderBy('game.name', 'ASC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<string>
     */
    public function findDistinctPublishers(): array
    {
        $rows = $this->createQueryBuilder('game')
            ->select('DISTINCT game.publisher AS publisher')
            ->andWhere('game.publisher IS NOT NULL')
            ->andWhere('game.publisher <> :empty')
            ->setParameter('empty', '')
            ->orderBy('game.publisher', 'ASC')
            ->getQuery()
            ->getArrayResult();

        $publishers = [];
        foreach ($rows as $row) {
            $publisher = trim((string) ($row['publisher'] ?? ''));
            if ($publisher === '') {
                continue;
            }
            $publishers[] = $publisher;
        }

        return array_values(array_unique($publishers));
    }

    public function findOneWithRelationsById(int $id): ?Game
    {
        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->andWhere('game.gameId = :id')
            ->setParameter('id', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return list<Game>
     */
    public function searchForAdmin(
        ?string $query,
        ?int $categoryId,
        ?string $publisher,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(game.name) LIKE :query
                    OR LOWER(COALESCE(game.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(game.publisher, \'\')) LIKE :query
                    OR LOWER(COALESCE(category.name, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        if (is_int($categoryId) && $categoryId > 0) {
            $builder
                ->andWhere('IDENTITY(game.categoryId) = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }

        $publisherValue = trim((string) $publisher);
        if ($publisherValue !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(game.publisher, \'\')) LIKE :publisher')
                ->setParameter('publisher', '%' . mb_strtolower($publisherValue) . '%');
        }

        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';
        $sortKey = strtolower(trim($sortBy));
        switch ($sortKey) {
            case 'id':
                $builder->orderBy('game.gameId', $sortDirection);
                break;

            case 'name':
                $builder
                    ->orderBy('game.name', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;

            case 'category':
                $builder
                    ->orderBy('category.name', $sortDirection)
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'publisher':
                $builder
                    ->orderBy('game.publisher', $sortDirection)
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('game.createdAt', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @param list<int> $categoryIds
     * @return array<int, int>
     */
    public function countByCategoryIds(array $categoryIds): array
    {
        $filteredCategoryIds = array_values(array_unique(array_filter(
            $categoryIds,
            static fn (mixed $categoryId): bool => is_int($categoryId) && $categoryId > 0
        )));
        if ($filteredCategoryIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('game')
            ->select('IDENTITY(game.categoryId) AS categoryId')
            ->addSelect('COUNT(game.gameId) AS gamesCount')
            ->andWhere('IDENTITY(game.categoryId) IN (:categoryIds)')
            ->setParameter('categoryIds', $filteredCategoryIds)
            ->groupBy('game.categoryId')
            ->getQuery()
            ->getArrayResult();

        $countsByCategoryId = [];
        foreach ($rows as $row) {
            $rowCategoryId = (int) ($row['categoryId'] ?? 0);
            if ($rowCategoryId <= 0) {
                continue;
            }

            $countsByCategoryId[$rowCategoryId] = (int) ($row['gamesCount'] ?? 0);
        }

        return $countsByCategoryId;
    }
}
