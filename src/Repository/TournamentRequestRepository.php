<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TournamentRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TournamentRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentRequest::class);
    }

    /**
     * @return list<TournamentRequest>
     */
    public function searchForAdmin(?string $query, ?string $status, ?int $gameId, int $limit = 500): array
    {
        $builder = $this->createQueryBuilder('request')
            ->innerJoin('request.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('request.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->leftJoin('request.reviewedByAdminId', 'reviewer')
            ->addSelect('reviewer')
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    '(LOWER(request.title) LIKE :query
                    OR LOWER(COALESCE(request.description, \'\')) LIKE :query
                    OR LOWER(game.name) LIKE :query
                    OR LOWER(organizer.username) LIKE :query
                    OR LOWER(organizer.email) LIKE :query)'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if ($statusValue !== '') {
            $builder
                ->andWhere('request.status = :status')
                ->setParameter('status', $statusValue);
        }

        if ($gameId !== null && $gameId > 0) {
            $builder
                ->andWhere('IDENTITY(request.gameId) = :gameId')
                ->setParameter('gameId', $gameId);
        }

        return $builder
            ->orderBy('request.createdAt', 'DESC')
            ->addOrderBy('request.requestId', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findOneWithRelationsById(int $id): ?TournamentRequest
    {
        return $this->createQueryBuilder('request')
            ->innerJoin('request.gameId', 'game')
            ->addSelect('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->leftJoin('request.organizerUserId', 'organizer')
            ->addSelect('organizer')
            ->leftJoin('request.reviewedByAdminId', 'reviewer')
            ->addSelect('reviewer')
            ->andWhere('request.requestId = :id')
            ->setParameter('id', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
