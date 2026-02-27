<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Game;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
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
        $builder = $this->createCatalogQueryBuilder(
            query: $query,
            categoryId: $categoryId,
            publisher: $publisher,
            withActiveTournamentsOnly: $withActiveTournamentsOnly,
            sort: $sort,
            limit: $limit,
        );

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
            ->andWhere('game.status <> :archivedStatus')
            ->setParameter('empty', '')
            ->setParameter('archivedStatus', Game::STATUS_ARCHIVED)
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

    public function findOneWithRelationsBySlug(string $slug): ?Game
    {
        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->andWhere('game.slug = :slug')
            ->setParameter('slug', trim($slug))
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param list<int> $gameIds
     * @return list<Game>
     */
    public function findByIdsWithRelations(array $gameIds): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $gameIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0,
        )));

        if ($filteredIds === []) {
            return [];
        }

        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->andWhere('game.gameId IN (:ids)')
            ->setParameter('ids', $filteredIds)
            ->orderBy('game.popularityScore', 'DESC')
            ->addOrderBy('game.viewsCount', 'DESC')
            ->addOrderBy('game.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function createAdminSearchQueryBuilder(
        ?string $query,
        ?int $categoryId,
        ?string $publisher,
        ?string $status,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        ?int $limit = null
    ): QueryBuilder {
        $builder = $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage');

        if (is_int($limit) && $limit > 0) {
            $builder->setMaxResults($limit);
        }

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(game.name) LIKE :query
                    OR LOWER(COALESCE(game.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(game.publisher, \'\')) LIKE :query
                    OR LOWER(COALESCE(category.name, \'\')) LIKE :query
                    OR LOWER(COALESCE(game.slug, \'\')) LIKE :query'
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

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '' && in_array($statusValue, Game::STATUSES, true)) {
            $builder
                ->andWhere('game.status = :status')
                ->setParameter('status', $statusValue);
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

            case 'slug':
                $builder
                    ->orderBy('game.slug', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('game.status', $sortDirection)
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

            case 'views':
                $builder
                    ->orderBy('game.viewsCount', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;

            case 'favorites':
                $builder
                    ->orderBy('game.favoritesCount', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;

            case 'score':
                $builder
                    ->orderBy('game.popularityScore', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('game.createdAt', $sortDirection)
                    ->addOrderBy('game.gameId', 'DESC');
                break;
        }

        return $builder;
    }

    /**
     * @return list<Game>
     */
    public function searchForAdmin(
        ?string $query,
        ?int $categoryId,
        ?string $publisher,
        ?string $status,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        return $this->createAdminSearchQueryBuilder(
            query: $query,
            categoryId: $categoryId,
            publisher: $publisher,
            status: $status,
            sortBy: $sortBy,
            direction: $direction,
            limit: $limit,
        )
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Game>
     */
    public function findTrending(int $limit = 8): array
    {
        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->andWhere('game.status <> :archivedStatus')
            ->setParameter('archivedStatus', Game::STATUS_ARCHIVED)
            ->orderBy('game.popularityScore', 'DESC')
            ->addOrderBy('game.favoritesCount', 'DESC')
            ->addOrderBy('game.viewsCount', 'DESC')
            ->addOrderBy('game.name', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
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

    /**
     * @return array<string, int>
     */
    public function countByStatus(): array
    {
        $rows = $this->createQueryBuilder('game')
            ->select('game.status AS status')
            ->addSelect('COUNT(game.gameId) AS total')
            ->groupBy('game.status')
            ->getQuery()
            ->getArrayResult();

        $counts = [];
        foreach ($rows as $row) {
            $status = strtoupper((string) ($row['status'] ?? 'UNKNOWN'));
            $counts[$status] = (int) ($row['total'] ?? 0);
        }

        return $counts;
    }

    private function createCatalogQueryBuilder(
        ?string $query,
        ?int $categoryId,
        ?string $publisher,
        bool $withActiveTournamentsOnly,
        string $sort,
        int $limit,
    ): QueryBuilder {
        $builder = $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('game.coverImageId', 'coverImage')
            ->addSelect('coverImage')
            ->andWhere('game.status <> :archivedStatus')
            ->setParameter('archivedStatus', Game::STATUS_ARCHIVED)
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

            case 'popular':
                $builder
                    ->orderBy('game.popularityScore', 'DESC')
                    ->addOrderBy('game.favoritesCount', 'DESC')
                    ->addOrderBy('game.viewsCount', 'DESC')
                    ->addOrderBy('game.name', 'ASC');
                break;

            case 'name':
            default:
                $builder
                    ->orderBy('game.name', 'ASC');
                break;
        }

        return $builder;
    }
}
