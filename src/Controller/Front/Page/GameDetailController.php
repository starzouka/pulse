<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Game;
use App\Repository\GameRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameDetailController extends AbstractController
{
    #[Route('/pages/game-detail/{id}', name: 'front_game_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        GameRepository $gameRepository,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
    ): Response {
        $queryId = $request->query->getInt('id', 0);
        if ($id === null && $queryId > 0) {
            $id = $queryId;
        }

        $game = $this->resolveGame($id, $gameRepository);
        if (!$game instanceof Game) {
            throw $this->createNotFoundException('Jeu introuvable.');
        }

        $tournamentQuery = trim((string) $request->query->get('tq', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        if (!in_array($status, ['', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED', 'DRAFT'], true)) {
            $status = '';
        }

        $format = strtoupper(trim((string) $request->query->get('format', '')));
        if (!in_array($format, ['', 'BO1', 'BO3', 'BO5'], true)) {
            $format = '';
        }

        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'prize', 'progress'], true)) {
            $sort = 'latest';
        }

        $activeTab = strtolower(trim((string) $request->query->get('tab', 'open')));
        if (!in_array($activeTab, ['open', 'ongoing', 'finished'], true)) {
            $activeTab = 'open';
        }

        $tournaments = $tournamentRepository->searchCatalog(
            $tournamentQuery !== '' ? $tournamentQuery : null,
            $game->getGameId(),
            null,
            $status !== '' ? $status : null,
            $format !== '' ? $format : null,
            null,
            null,
            null,
            null,
            null,
            $sort,
            250
        );

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if ($tournamentId !== null) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $participantsCountByTournamentId = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);
        $totalMatchesByTournamentId = $tournamentMatchRepository->countByTournamentIds($tournamentIds);
        $finishedMatchesByTournamentId = $tournamentMatchRepository->countFinishedByTournamentIds($tournamentIds);

        $groupedTournaments = [
            'open' => [],
            'ongoing' => [],
            'finished' => [],
        ];

        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId() ?? 0;
            $totalMatches = $totalMatchesByTournamentId[$tournamentId] ?? 0;
            $finishedMatches = $finishedMatchesByTournamentId[$tournamentId] ?? 0;
            $progressPercent = $totalMatches > 0
                ? (int) round(($finishedMatches / $totalMatches) * 100)
                : 0;

            $statusKey = strtolower((string) $tournament->getStatus());
            if (!isset($groupedTournaments[$statusKey])) {
                if ($statusKey === 'cancelled' || $statusKey === 'draft') {
                    continue;
                }
                $statusKey = 'open';
            }

            $groupedTournaments[$statusKey][] = [
                'tournament' => $tournament,
                'participants_count' => $participantsCountByTournamentId[$tournamentId] ?? 0,
                'total_matches' => $totalMatches,
                'finished_matches' => $finishedMatches,
                'progress_percent' => max(0, min(100, $progressPercent)),
            ];
        }

        $totalTournamentsCount = count($tournaments);
        $activeTournamentsCount = count($groupedTournaments['open']) + count($groupedTournaments['ongoing']);
        $totalParticipantsCount = 0;
        foreach ($participantsCountByTournamentId as $participantsCount) {
            $totalParticipantsCount += (int) $participantsCount;
        }

        return $this->render('front/pages/game-detail.html.twig', [
            'game' => $game,
            'tournaments_by_status' => $groupedTournaments,
            'active_tab' => $activeTab,
            'stats' => [
                'total_tournaments' => $totalTournamentsCount,
                'active_tournaments' => $activeTournamentsCount,
                'participants' => $totalParticipantsCount,
            ],
            'filters' => [
                'tq' => $tournamentQuery,
                'status' => $status,
                'format' => $format,
                'sort' => $sort,
            ],
        ]);
    }

    private function resolveGame(?int $id, GameRepository $gameRepository): ?Game
    {
        if ($id !== null) {
            return $gameRepository->findOneWithRelationsById($id);
        }

        $latestGames = $gameRepository->searchCatalog(
            query: null,
            categoryId: null,
            publisher: null,
            withActiveTournamentsOnly: false,
            sort: 'latest',
            limit: 1
        );

        return $latestGames[0] ?? null;
    }
}
