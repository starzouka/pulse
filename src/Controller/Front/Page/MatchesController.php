<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\GameRepository;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchesController extends AbstractController
{
    private const STATUSES = ['SCHEDULED', 'ONGOING', 'FINISHED', 'CANCELLED'];
    private const SORTS = ['upcoming', 'latest'];

    #[Route('/pages/matches', name: 'front_matches', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TournamentRepository $tournamentRepository,
        GameRepository $gameRepository,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $tournamentId = $this->toPositiveInt($request->query->get('tournament'));
        $status = $this->sanitizeEnum((string) $request->query->get('status', ''), self::STATUSES);
        $gameId = $this->toPositiveInt($request->query->get('game'));
        $teamQuery = trim((string) $request->query->get('team', ''));
        $sort = $this->sanitizeEnum((string) $request->query->get('sort', 'upcoming'), self::SORTS) ?? 'upcoming';

        $dateFromRaw = trim((string) $request->query->get('date_from', ''));
        $dateToRaw = trim((string) $request->query->get('date_to', ''));
        $dateFrom = $this->parseDate($dateFromRaw);
        $dateTo = $this->parseDate($dateToRaw);

        $matches = $tournamentMatchRepository->searchMatches(
            $query,
            $tournamentId,
            $gameId,
            $status,
            $dateFrom,
            $dateTo,
            $teamQuery,
            $sort,
            200,
        );

        $matchIds = [];
        foreach ($matches as $match) {
            $matchId = $match->getMatchId();
            if (is_int($matchId) && $matchId > 0) {
                $matchIds[] = $matchId;
            }
        }

        $matchTeams = $matchTeamRepository->findByMatchIdsWithTeam($matchIds);
        $teamsByMatchId = [];
        foreach ($matchTeams as $matchTeam) {
            $matchId = $matchTeam->getMatchId()?->getMatchId();
            if (!is_int($matchId) || $matchId <= 0) {
                continue;
            }

            $teamsByMatchId[$matchId] ??= [];
            $teamsByMatchId[$matchId][] = $matchTeam;
        }

        $matchesData = [];
        foreach ($matches as $match) {
            $matchId = (int) ($match->getMatchId() ?? 0);
            $teams = $teamsByMatchId[$matchId] ?? [];

            $teamNames = [];
            foreach ($teams as $teamRelation) {
                $teamName = $teamRelation->getTeamId()?->getName();
                if (is_string($teamName) && $teamName !== '') {
                    $teamNames[] = $teamName;
                }
            }

            $matchesData[] = [
                'match' => $match,
                'tournament' => $match->getTournamentId(),
                'game' => $match->getTournamentId()?->getGameId(),
                'teams' => $teams,
                'teams_label' => $teamNames !== [] ? implode(' vs ', $teamNames) : 'Aucune equipe',
            ];
        }

        return $this->render('front/pages/matches.html.twig', [
            'matches_data' => $matchesData,
            'available_tournaments' => $tournamentRepository->findAllWithGameOrdered(300),
            'available_games' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => [
                'q' => $query,
                'tournament' => $tournamentId,
                'status' => $status,
                'game' => $gameId,
                'date_from' => $dateFrom !== null ? $dateFrom->format('Y-m-d') : '',
                'date_to' => $dateTo !== null ? $dateTo->format('Y-m-d') : '',
                'team' => $teamQuery,
                'sort' => $sort,
            ],
            'filter_options' => [
                'statuses' => self::STATUSES,
                'sorts' => self::SORTS,
            ],
        ]);
    }

    private function toPositiveInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $parsed = (int) $value;

        return $parsed > 0 ? $parsed : null;
    }

    private function sanitizeEnum(string $value, array $allowedValues): ?string
    {
        $normalized = strtoupper(trim($value));
        if ($normalized === '') {
            return null;
        }

        foreach ($allowedValues as $allowedValue) {
            if ($normalized === strtoupper($allowedValue)) {
                return (string) $allowedValue;
            }
        }

        return null;
    }

    private function parseDate(string $value): ?\DateTimeImmutable
    {
        $normalized = trim($value);
        if ($normalized === '') {
            return null;
        }

        $parsed = \DateTimeImmutable::createFromFormat('Y-m-d', $normalized);

        return $parsed instanceof \DateTimeImmutable ? $parsed : null;
    }
}
