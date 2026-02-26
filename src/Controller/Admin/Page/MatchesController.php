<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\MatchTeam;
use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use App\Entity\User;
use App\Form\TournamentMatchType;
use App\Repository\GameRepository;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Admin\TableExportService;
use App\Service\Ai\MatchAiAssistantService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchesController extends AbstractController
{
    private const STATUSES = ['SCHEDULED', 'ONGOING', 'FINISHED', 'CANCELLED'];
    private const SORTS = ['latest', 'oldest', 'status', 'tournament'];

    #[Route('/admin/matches', name: 'admin_matches', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        GameRepository $gameRepository,
        EntityManagerInterface $entityManager,
        MatchAiAssistantService $matchAiAssistantService,
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingMatch = $editId > 0 ? $tournamentMatchRepository->find($editId) : null;
        if ($editId > 0 && !$editingMatch instanceof TournamentMatch) {
            $this->addFlash('error', 'Match introuvable pour edition.');

            return $this->redirectToRoute('admin_matches');
        }

        $tournaments = $tournamentRepository->findAllWithGameOrdered(500);

        $existingEntriesByTeamId = [];
        $existingTeams = [];
        if ($editingMatch instanceof TournamentMatch) {
            $existingEntries = $matchTeamRepository->findBy(['matchId' => $editingMatch]);
            foreach ($existingEntries as $existingEntry) {
                $team = $existingEntry->getTeamId();
                $teamId = $team?->getTeamId();
                if ($team instanceof Team && $teamId !== null) {
                    $existingEntriesByTeamId[$teamId] = $existingEntry;
                    $existingTeams[$teamId] = $team;
                }
            }
        }

        $selectedTournament = $this->resolveSelectedTournament($request, $editingMatch, $tournaments, $tournamentRepository);

        $teamChoicesById = [];
        if ($selectedTournament instanceof Tournament) {
            foreach ($this->getAcceptedTeamsForTournament($selectedTournament, $tournamentTeamRepository) as $team) {
                $teamId = $team->getTeamId();
                if ($teamId !== null) {
                    $teamChoicesById[$teamId] = $team;
                }
            }
        }
        foreach ($existingTeams as $teamId => $team) {
            $teamChoicesById[$teamId] = $team;
        }

        $matchEntity = $editingMatch instanceof TournamentMatch ? $editingMatch : new TournamentMatch();
        if (!$editingMatch instanceof TournamentMatch) {
            $matchEntity->setStatus('SCHEDULED');
            if ($selectedTournament instanceof Tournament) {
                $matchEntity->setTournamentId($selectedTournament);
            }
        }

        $form = $this->createForm(TournamentMatchType::class, $matchEntity, [
            'tournament_choices' => $tournaments,
            'team_choices' => array_values($teamChoicesById),
            'tournament_locked' => $editingMatch instanceof TournamentMatch,
        ]);
        if ($editingMatch instanceof TournamentMatch) {
            $form->get('participantTeams')->setData(array_values($existingTeams));
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participantTeams = [];
            $participantTeamsData = $form->get('participantTeams')->getData();
            if (!is_iterable($participantTeamsData)) {
                $participantTeamsData = [];
            }

            foreach ($participantTeamsData as $team) {
                if ($team instanceof Team) {
                    $participantTeams[] = $team;
                }
            }

            if (count($participantTeams) < 2) {
                $form->get('participantTeams')->addError(new FormError('Un match doit avoir au moins deux equipes.'));
            }

            $allowedTeamIds = [];
            foreach ($teamChoicesById as $teamId => $team) {
                $allowedTeamIds[$teamId] = true;
            }

            foreach ($participantTeams as $participantTeam) {
                $teamId = $participantTeam->getTeamId();
                if ($teamId === null || !isset($allowedTeamIds[$teamId])) {
                    $form->get('participantTeams')->addError(new FormError('Selection d equipes invalide pour ce tournoi.'));
                    break;
                }
            }

            if (count($form->get('participantTeams')->getErrors(true)) === 0) {
                $isEdit = $editingMatch instanceof TournamentMatch;
                $now = new \DateTime();

                if (!$isEdit) {
                    $matchEntity->setCreatedAt($now);
                    $entityManager->persist($matchEntity);
                }

                $matchEntity->setUpdatedAt($now);
                if ($matchEntity->getStatus() === 'FINISHED') {
                    $connectedUser = $this->getUser();
                    $matchEntity->setResultSubmittedByUserId($connectedUser instanceof User ? $connectedUser : null);
                } else {
                    $matchEntity->setResultSubmittedByUserId(null);
                }

                $teamScores = $request->request->all('team_scores');
                if (!is_array($teamScores)) {
                    $teamScores = [];
                }

                $winnerTeamIds = $request->request->all('team_winners');
                if (!is_array($winnerTeamIds)) {
                    $winnerTeamIds = [];
                }
                $winnerTeamIds = array_map('strval', $winnerTeamIds);

                $selectedTeamsById = [];
                foreach ($participantTeams as $participantTeam) {
                    $teamId = $participantTeam->getTeamId();
                    if ($teamId !== null) {
                        $selectedTeamsById[$teamId] = $participantTeam;
                    }
                }

                foreach ($existingEntriesByTeamId as $teamId => $existingEntry) {
                    if (!isset($selectedTeamsById[$teamId])) {
                        $entityManager->remove($existingEntry);
                    }
                }

                foreach ($selectedTeamsById as $teamId => $selectedTeam) {
                    $entry = $existingEntriesByTeamId[$teamId] ?? null;
                    if (!$entry instanceof MatchTeam) {
                        $entry = new MatchTeam();
                        $entry
                            ->setMatchId($matchEntity)
                            ->setTeamId($selectedTeam);
                        $entityManager->persist($entry);
                    }

                    $rawScore = $teamScores[(string) $teamId] ?? null;
                    $score = null;
                    if ($rawScore !== null && $rawScore !== '') {
                        $score = max(0, (int) $rawScore);
                    }

                    $entry
                        ->setScore($score)
                        ->setIsWinner(in_array((string) $teamId, $winnerTeamIds, true));
                }

                $entityManager->flush();

                $this->addFlash('success', $isEdit ? 'Match mis a jour.' : 'Match cree.');

                return $this->redirectToRoute('admin_matches');
            }
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'tournament' => $this->toPositiveInt($request->query->get('tournament')),
            'status' => $this->sanitizeEnum((string) $request->query->get('status', ''), self::STATUSES),
            'game' => $this->toPositiveInt($request->query->get('game')),
            'date_from' => trim((string) $request->query->get('date_from', '')),
            'date_to' => trim((string) $request->query->get('date_to', '')),
            'team' => trim((string) $request->query->get('team', '')),
            'sort' => $this->sanitizeEnum((string) $request->query->get('sort', 'latest'), self::SORTS) ?? 'latest',
        ];

        $dateFrom = $this->parseDate($filters['date_from']);
        $dateTo = $this->parseDate($filters['date_to']);

        $matches = $tournamentMatchRepository->searchForAdmin(
            $filters['q'],
            $filters['tournament'],
            $filters['game'],
            $filters['status'],
            $dateFrom,
            $dateTo,
            $filters['team'],
            (string) $filters['sort'],
            400
        );

        $matchIds = [];
        foreach ($matches as $match) {
            $matchId = $match->getMatchId();
            if (is_int($matchId) && $matchId > 0) {
                $matchIds[] = $matchId;
            }
        }

        $matchTeams = $matchTeamRepository->findByMatchIdsWithTeam($matchIds);
        $matchTeamsByMatchId = [];
        foreach ($matchTeams as $matchTeam) {
            $matchId = $matchTeam->getMatchId()?->getMatchId();
            if (!is_int($matchId) || $matchId <= 0) {
                continue;
            }

            $matchTeamsByMatchId[$matchId] ??= [];
            $matchTeamsByMatchId[$matchId][] = $matchTeam;
        }

        $matchAiLocalByMatchId = [];
        foreach ($matches as $match) {
            $matchId = $match->getMatchId();
            if (!is_int($matchId) || $matchId <= 0) {
                continue;
            }

            $matchAiLocalByMatchId[$matchId] = $matchAiAssistantService->analyzeMatchLocal(
                $match,
                $matchTeamsByMatchId[$matchId] ?? []
            );
        }

        $participantRows = $this->buildParticipantRows($request, $form, $existingEntriesByTeamId);

        return $this->render('admin/pages/matches.html.twig', [
            'matchForm' => $form->createView(),
            'editingMatch' => $editingMatch,
            'selectedTournament' => $selectedTournament,
            'participantRows' => $participantRows,
            'matches' => $matches,
            'matchTeamsByMatchId' => $matchTeamsByMatchId,
            'matchAiLocalByMatchId' => $matchAiLocalByMatchId,
            'availableTournaments' => $tournaments,
            'availableGames' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => $filters,
            'statusOptions' => self::STATUSES,
            'sortOptions' => self::SORTS,
            'counter' => count($matches),
        ]);
    }

    #[Route('/admin/matches/export/{format}', name: 'admin_matches_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
        TableExportService $tableExportService,
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'tournament' => $this->toPositiveInt($request->query->get('tournament')),
            'status' => $this->sanitizeEnum((string) $request->query->get('status', ''), self::STATUSES),
            'game' => $this->toPositiveInt($request->query->get('game')),
            'date_from' => trim((string) $request->query->get('date_from', '')),
            'date_to' => trim((string) $request->query->get('date_to', '')),
            'team' => trim((string) $request->query->get('team', '')),
            'sort' => $this->sanitizeEnum((string) $request->query->get('sort', 'latest'), self::SORTS) ?? 'latest',
        ];

        $dateFrom = $this->parseDate($filters['date_from']);
        $dateTo = $this->parseDate($filters['date_to']);

        $matches = $tournamentMatchRepository->searchForAdmin(
            $filters['q'],
            $filters['tournament'],
            $filters['game'],
            $filters['status'],
            $dateFrom,
            $dateTo,
            $filters['team'],
            (string) $filters['sort'],
            5000
        );

        $matchIds = [];
        foreach ($matches as $match) {
            $matchId = $match->getMatchId();
            if (is_int($matchId) && $matchId > 0) {
                $matchIds[] = $matchId;
            }
        }

        $matchTeamsByMatchId = [];
        foreach ($matchTeamRepository->findByMatchIdsWithTeam($matchIds) as $matchTeam) {
            $matchId = $matchTeam->getMatchId()?->getMatchId();
            if (!is_int($matchId) || $matchId <= 0) {
                continue;
            }

            $matchTeamsByMatchId[$matchId] ??= [];
            $matchTeamsByMatchId[$matchId][] = $matchTeam;
        }

        $headers = ['ID', 'Tournoi', 'Jeu', 'Round', 'Participants', 'Horaire', 'Status'];
        $rows = [];
        $pdfRows = [];
        $statusCounts = [];
        $tournamentIds = [];
        foreach ($matches as $match) {
            $matchId = (int) ($match->getMatchId() ?? 0);
            $matchTeams = $matchTeamsByMatchId[$matchId] ?? [];
            $participantLabels = [];
            $participantRows = [];
            foreach ($matchTeams as $relation) {
                $teamName = (string) ($relation->getTeamId()?->getName() ?? '-');
                $score = $relation->getScore();
                $scoreLabel = $score !== null ? (string) $score : '-';
                $winner = $relation->isWinner() === true;

                $participantLabels[] = sprintf(
                    '%s%s%s',
                    $teamName,
                    $score !== null ? ' (' . $scoreLabel . ')' : '',
                    $winner ? ' W' : ''
                );

                $participantRows[] = [
                    'team' => $teamName,
                    'score' => $scoreLabel,
                    'isWinner' => $winner,
                ];
            }

            $roundName = trim((string) ($match->getRoundName() ?? ''));
            $bestOf = (int) ($match->getBestOf() ?? 0);
            $roundLabel = $roundName !== '' ? $roundName : '-';
            if ($bestOf > 0) {
                $roundLabel .= sprintf(' - BO%d', $bestOf);
            }

            $statusValue = (string) ($match->getStatus() ?? '-');
            $tournament = $match->getTournamentId();
            $tournamentId = $tournament?->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[$tournamentId] = true;
            }

            $rows[] = [
                $matchId,
                (string) ($tournament?->getTitle() ?? '-'),
                (string) ($tournament?->getGameId()?->getName() ?? '-'),
                $roundLabel,
                $participantLabels !== [] ? implode(', ', $participantLabels) : '-',
                $match->getScheduledAt()?->format('Y-m-d H:i') ?? '-',
                $statusValue,
            ];

            $pdfRows[] = [
                'id' => $matchId,
                'tournament' => (string) ($tournament?->getTitle() ?? '-'),
                'tournamentId' => (int) ($tournamentId ?? 0),
                'game' => (string) ($tournament?->getGameId()?->getName() ?? '-'),
                'round' => $roundLabel,
                'participants' => $participantRows,
                'participantsText' => $participantLabels !== [] ? implode(', ', $participantLabels) : '-',
                'scheduledAt' => $match->getScheduledAt()?->format('d/m/Y H:i') ?? '-',
                'status' => $statusValue,
            ];

            $statusCounts[$statusValue] = (int) ($statusCounts[$statusValue] ?? 0) + 1;
        }

        $timestamp = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Matchs', $headers, $rows, sprintf('admin_matches_%s.xlsx', $timestamp));
        }

        $activeFilters = [];
        if ($filters['q'] !== '') {
            $activeFilters[] = ['label' => 'Recherche', 'value' => $filters['q']];
        }
        if ($filters['tournament'] !== null) {
            $activeFilters[] = ['label' => 'Tournoi', 'value' => '#' . $filters['tournament']];
        }
        if ($filters['status'] !== null) {
            $activeFilters[] = ['label' => 'Status', 'value' => (string) $filters['status']];
        }
        if ($filters['game'] !== null) {
            $activeFilters[] = ['label' => 'Game', 'value' => '#' . $filters['game']];
        }
        if ($filters['date_from'] !== '') {
            $activeFilters[] = ['label' => 'Date debut', 'value' => $filters['date_from']];
        }
        if ($filters['date_to'] !== '') {
            $activeFilters[] = ['label' => 'Date fin', 'value' => $filters['date_to']];
        }
        if ($filters['team'] !== '') {
            $activeFilters[] = ['label' => 'Equipe', 'value' => $filters['team']];
        }
        $activeFilters[] = ['label' => 'Tri', 'value' => strtoupper((string) $filters['sort'])];

        $html = $this->renderView('admin/pdf/matches_export.html.twig', [
            'reportTitle' => 'Gestion matchs',
            'reportSubtitle' => 'Export admin - planning et resultats',
            'generatedAt' => new \DateTimeImmutable(),
            'summaryCards' => [
                ['label' => 'Resultats', 'value' => (string) count($matches)],
                ['label' => 'Tournois', 'value' => (string) count($tournamentIds)],
                ['label' => 'Scheduled', 'value' => (string) ($statusCounts['SCHEDULED'] ?? 0)],
                ['label' => 'Ongoing', 'value' => (string) ($statusCounts['ONGOING'] ?? 0)],
                ['label' => 'Finished', 'value' => (string) ($statusCounts['FINISHED'] ?? 0)],
                ['label' => 'Cancelled', 'value' => (string) ($statusCounts['CANCELLED'] ?? 0)],
            ],
            'activeFilters' => $activeFilters,
            'rows' => $pdfRows,
        ]);

        return $tableExportService->exportPdfHtml(
            $html,
            sprintf('admin_matches_%s.pdf', $timestamp),
            'A3',
            'landscape'
        );
    }

    #[Route('/admin/matches/{id}/delete', name: 'admin_match_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        EntityManagerInterface $entityManager,
    ): Response {
        if (!$this->isCsrfTokenValid('delete_match_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_matches');
        }

        $match = $tournamentMatchRepository->find($id);
        if (!$match instanceof TournamentMatch) {
            $this->addFlash('error', 'Match introuvable.');

            return $this->redirectToRoute('admin_matches');
        }

        $entityManager->remove($match);
        $entityManager->flush();

        $this->addFlash('success', 'Match supprime.');

        return $this->redirectToRoute('admin_matches');
    }

    /**
     * @param list<Tournament> $tournaments
     */
    private function resolveSelectedTournament(
        Request $request,
        ?TournamentMatch $editingMatch,
        array $tournaments,
        TournamentRepository $tournamentRepository,
    ): ?Tournament {
        if ($editingMatch instanceof TournamentMatch && $editingMatch->getTournamentId() instanceof Tournament) {
            return $editingMatch->getTournamentId();
        }

        $submitted = $request->request->all('tournament_match');
        $submittedTournamentId = is_array($submitted) ? (int) ($submitted['tournamentId'] ?? 0) : 0;
        $queryTournamentId = $request->query->getInt('tournament', 0);
        $selectedTournamentId = $submittedTournamentId > 0 ? $submittedTournamentId : $queryTournamentId;

        if ($selectedTournamentId > 0) {
            $selectedTournament = $tournamentRepository->find($selectedTournamentId);
            if ($selectedTournament instanceof Tournament) {
                return $selectedTournament;
            }
        }

        return $tournaments[0] ?? null;
    }

    /**
     * @return list<Team>
     */
    private function getAcceptedTeamsForTournament(
        Tournament $tournament,
        TournamentTeamRepository $tournamentTeamRepository,
    ): array {
        $registrations = $tournamentTeamRepository->findBy([
            'tournamentId' => $tournament,
            'status' => 'ACCEPTED',
        ]);

        $teams = [];
        foreach ($registrations as $registration) {
            $team = $registration->getTeamId();
            $teamId = $team?->getTeamId();
            if ($team instanceof Team && $teamId !== null) {
                $teams[$teamId] = $team;
            }
        }

        return array_values($teams);
    }

    /**
     * @param array<int, MatchTeam> $existingEntriesByTeamId
     * @return list<array{team: Team, score: ?int, isWinner: bool}>
     */
    private function buildParticipantRows(
        Request $request,
        FormInterface $form,
        array $existingEntriesByTeamId,
    ): array {
        $requestedScores = $request->request->all('team_scores');
        if (!is_array($requestedScores)) {
            $requestedScores = [];
        }

        $requestedWinners = $request->request->all('team_winners');
        if (!is_array($requestedWinners)) {
            $requestedWinners = [];
        }
        $requestedWinnerIds = array_map('strval', $requestedWinners);

        $rows = [];
        $participantTeamsData = $form->get('participantTeams')->getData();
        if (!is_iterable($participantTeamsData)) {
            $participantTeamsData = [];
        }

        foreach ($participantTeamsData as $team) {
            if (!$team instanceof Team || $team->getTeamId() === null) {
                continue;
            }

            $teamId = $team->getTeamId();
            $existingEntry = $existingEntriesByTeamId[$teamId] ?? null;

            $score = $existingEntry?->getScore();
            if (array_key_exists((string) $teamId, $requestedScores)) {
                $rawScore = $requestedScores[(string) $teamId];
                $score = ($rawScore === '' || $rawScore === null) ? null : max(0, (int) $rawScore);
            }

            $isWinner = $existingEntry?->isWinner() ?? false;
            if ($request->isMethod('POST')) {
                $isWinner = in_array((string) $teamId, $requestedWinnerIds, true);
            }

            $rows[] = [
                'team' => $team,
                'score' => $score,
                'isWinner' => $isWinner,
            ];
        }

        return $rows;
    }

    private function toPositiveInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $parsed = (int) $value;

        return $parsed > 0 ? $parsed : null;
    }

    /**
     * @param list<string> $allowedValues
     */
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
