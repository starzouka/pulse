<?php

declare(strict_types=1);

namespace App\Controller\Front;

use App\Repository\GameRepository;
use App\Repository\ProductImageRepository;
use App\Repository\ProductRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\TeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'front_root', methods: ['GET'])]
    #[Route('/home', name: 'front_home', methods: ['GET'])]
    public function index(
        GameRepository $gameRepository,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        ProductRepository $productRepository,
        ProductImageRepository $productImageRepository,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        UserRepository $userRepository,
    ): Response {
        $today = new \DateTimeImmutable('today');
        $weekStart = $today->modify('monday this week');
        $weekEnd = $today->modify('sunday this week');

        $weekTournaments = $tournamentRepository->findForHomeWeek($weekStart, $weekEnd, 12);
        if ($weekTournaments === []) {
            $weekTournaments = $tournamentRepository->findLatestVisibleForHome(12);
        }

        $tournamentIds = [];
        foreach ($weekTournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $participantsByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);
        $totalMatchesByTournamentId = $tournamentMatchRepository->countByTournamentIds($tournamentIds);
        $finishedMatchesByTournamentId = $tournamentMatchRepository->countFinishedByTournamentIds($tournamentIds);

        $weekTournamentCards = [];
        foreach ($weekTournaments as $tournament) {
            $tournamentId = (int) ($tournament->getTournamentId() ?? 0);
            $totalMatches = (int) ($totalMatchesByTournamentId[$tournamentId] ?? 0);
            $finishedMatches = (int) ($finishedMatchesByTournamentId[$tournamentId] ?? 0);
            $progressPercent = $totalMatches > 0
                ? (int) round(($finishedMatches / $totalMatches) * 100)
                : 0;

            $weekTournamentCards[] = [
                'tournament' => $tournament,
                'participants_count' => (int) ($participantsByTournamentId[$tournamentId] ?? 0),
                'total_matches' => $totalMatches,
                'finished_matches' => $finishedMatches,
                'progress_percent' => max(0, min(100, $progressPercent)),
            ];
        }

        $homeGames = $gameRepository->searchCatalog(
            query: null,
            categoryId: null,
            publisher: null,
            withActiveTournamentsOnly: false,
            sort: 'latest',
            limit: 24
        );

        $gameIds = [];
        foreach ($homeGames as $game) {
            $gameId = $game->getGameId();
            if (is_int($gameId) && $gameId > 0) {
                $gameIds[] = $gameId;
            }
        }

        $totalTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds);
        $activeTournamentsByGameId = $tournamentRepository->countByGameIds($gameIds, ['OPEN', 'ONGOING']);

        usort($homeGames, static function ($leftGame, $rightGame) use ($activeTournamentsByGameId, $totalTournamentsByGameId): int {
            $leftId = $leftGame->getGameId() ?? 0;
            $rightId = $rightGame->getGameId() ?? 0;

            $leftActive = $activeTournamentsByGameId[$leftId] ?? 0;
            $rightActive = $activeTournamentsByGameId[$rightId] ?? 0;
            if ($leftActive !== $rightActive) {
                return $rightActive <=> $leftActive;
            }

            $leftTotal = $totalTournamentsByGameId[$leftId] ?? 0;
            $rightTotal = $totalTournamentsByGameId[$rightId] ?? 0;
            if ($leftTotal !== $rightTotal) {
                return $rightTotal <=> $leftTotal;
            }

            return strcasecmp((string) $leftGame->getName(), (string) $rightGame->getName());
        });

        $homeGameCards = [];
        foreach (array_slice($homeGames, 0, 10) as $game) {
            $gameId = (int) ($game->getGameId() ?? 0);
            $homeGameCards[] = [
                'game' => $game,
                'active_tournaments_count' => (int) ($activeTournamentsByGameId[$gameId] ?? 0),
                'total_tournaments_count' => (int) ($totalTournamentsByGameId[$gameId] ?? 0),
            ];
        }

        $homeProducts = $productRepository->searchForShop(
            query: '',
            teamId: null,
            minPrice: null,
            maxPrice: null,
            inStockOnly: true,
            activeOnly: true,
            sort: 'latest',
            limit: 12
        );

        $homeProductPrimaryImagesByProductId = $productImageRepository->findPrimaryImagesByProducts($homeProducts);

        $homeTeams = $teamRepository->searchCatalog(
            query: null,
            region: null,
            hasProducts: false,
            activeInTournaments: false,
            sort: 'latest',
            limit: 24
        );

        $teamIds = [];
        foreach ($homeTeams as $team) {
            $teamId = $team->getTeamId();
            if (is_int($teamId) && $teamId > 0) {
                $teamIds[] = $teamId;
            }
        }

        $membersCountByTeamId = $teamMemberRepository->countActiveByTeamIds($teamIds);
        $productsCountByTeamId = $productRepository->countByTeamIds($teamIds, true);
        $activeTournamentsCountByTeamId = $tournamentTeamRepository->countByTeamIds($teamIds, ['PENDING', 'ACCEPTED']);

        usort($homeTeams, static function ($leftTeam, $rightTeam) use (
            $activeTournamentsCountByTeamId,
            $productsCountByTeamId,
            $membersCountByTeamId
        ): int {
            $leftId = $leftTeam->getTeamId() ?? 0;
            $rightId = $rightTeam->getTeamId() ?? 0;

            $leftActiveTournaments = $activeTournamentsCountByTeamId[$leftId] ?? 0;
            $rightActiveTournaments = $activeTournamentsCountByTeamId[$rightId] ?? 0;
            if ($leftActiveTournaments !== $rightActiveTournaments) {
                return $rightActiveTournaments <=> $leftActiveTournaments;
            }

            $leftProducts = $productsCountByTeamId[$leftId] ?? 0;
            $rightProducts = $productsCountByTeamId[$rightId] ?? 0;
            if ($leftProducts !== $rightProducts) {
                return $rightProducts <=> $leftProducts;
            }

            $leftMembers = $membersCountByTeamId[$leftId] ?? 0;
            $rightMembers = $membersCountByTeamId[$rightId] ?? 0;
            if ($leftMembers !== $rightMembers) {
                return $rightMembers <=> $leftMembers;
            }

            return strcasecmp((string) $leftTeam->getName(), (string) $rightTeam->getName());
        });

        $homeTeamCards = [];
        foreach (array_slice($homeTeams, 0, 10) as $team) {
            $teamId = (int) ($team->getTeamId() ?? 0);
            $homeTeamCards[] = [
                'team' => $team,
                'members_count' => (int) ($membersCountByTeamId[$teamId] ?? 0),
                'products_count' => (int) ($productsCountByTeamId[$teamId] ?? 0),
                'active_tournaments_count' => (int) ($activeTournamentsCountByTeamId[$teamId] ?? 0),
            ];
        }

        return $this->render('front/home/index.html.twig', [
            'week_tournament_cards' => $weekTournamentCards,
            'home_game_cards' => $homeGameCards,
            'home_products' => $homeProducts,
            'home_product_primary_images_by_product_id' => $homeProductPrimaryImagesByProductId,
            'home_team_cards' => $homeTeamCards,
            'week_window' => [
                'start' => $weekStart,
                'end' => $weekEnd,
            ],
            'hero_stats' => [
                'matches' => (int) $tournamentMatchRepository->count([]),
                'tournaments' => (int) $tournamentRepository->count([]),
                'players' => (int) $userRepository->count(['isActive' => true]),
            ],
        ]);
    }
}
