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
}
