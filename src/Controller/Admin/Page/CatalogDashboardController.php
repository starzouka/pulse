<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Game;
use App\Repository\GameRepository;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogDashboardController extends AbstractController
{
    #[Route('/admin/catalog-dashboard', name: 'admin_catalog_dashboard', methods: ['GET'])]
    public function index(Connection $connection, GameRepository $gameRepository): Response
    {
        $firstDayOfMonth = (new \DateTimeImmutable('first day of this month'))->setTime(0, 0, 0);
        $lastDayOfMonth = (new \DateTimeImmutable('last day of this month'))->setTime(23, 59, 59);

        $totalGames = (int) $connection->fetchOne('SELECT COUNT(*) FROM games');
        $publishedGames = (int) $connection->fetchOne(
            'SELECT COUNT(*) FROM games WHERE status = :status',
            ['status' => Game::STATUS_PUBLISHED]
        );

        $publicationRate = $totalGames > 0
            ? round(($publishedGames / $totalGames) * 100, 2)
            : 0.0;

        $avgReviewDelayHours = (float) $connection->fetchOne(
            "SELECT COALESCE(AVG(TIMESTAMPDIFF(HOUR, created_at, updated_at)), 0)
             FROM games
             WHERE status = :status
               AND updated_at IS NOT NULL
               AND updated_at >= created_at",
            ['status' => Game::STATUS_PUBLISHED]
        );

        $topCategoriesMonthly = $connection->fetchAllAssociative(
            "SELECT c.name AS category_name, COUNT(g.game_id) AS games_count
             FROM categories c
             LEFT JOIN games g
               ON g.category_id = c.category_id
              AND g.created_at BETWEEN :fromDate AND :toDate
             GROUP BY c.category_id, c.name
             ORDER BY games_count DESC, c.name ASC
             LIMIT 6",
            [
                'fromDate' => $firstDayOfMonth->format('Y-m-d H:i:s'),
                'toDate' => $lastDayOfMonth->format('Y-m-d H:i:s'),
            ]
        );

        $trendingGames = $gameRepository->findTrending(10, [
            Game::STATUS_DRAFT,
            Game::STATUS_PENDING,
            Game::STATUS_PUBLISHED,
        ]);

        return $this->render('admin/pages/catalog_dashboard.html.twig', [
            'kpi' => [
                'total_games' => $totalGames,
                'published_games' => $publishedGames,
                'publication_rate' => $publicationRate,
                'avg_review_delay_hours' => round($avgReviewDelayHours, 2),
                'month_label' => $firstDayOfMonth->format('m/Y'),
            ],
            'top_categories_monthly' => $topCategoriesMonthly,
            'trending_games' => $trendingGames,
        ]);
    }
}
