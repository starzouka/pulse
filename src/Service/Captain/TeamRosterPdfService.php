<?php

declare(strict_types=1);

namespace App\Service\Captain;

use App\Entity\Team;
use App\Entity\TeamJoinRequest;
use App\Entity\TeamMember;
use App\Repository\TeamJoinRequestRepository;
use App\Repository\TeamMemberRepository;
use App\Service\Admin\PdfImageResolver;
use App\Service\Admin\TableExportService;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class TeamRosterPdfService
{
    public function __construct(
        private readonly TeamMemberRepository $teamMemberRepository,
        private readonly TeamJoinRequestRepository $teamJoinRequestRepository,
        private readonly PdfImageResolver $pdfImageResolver,
        private readonly TableExportService $tableExportService,
        private readonly Environment $twig,
    ) {
    }

    public function buildResponse(Team $team): Response
    {
        $generatedAt = new \DateTimeImmutable();

        $activeMembers = $this->teamMemberRepository->findByTeamWithUser($team, true);
        $this->sortMembersForRosterSheet($activeMembers);

        $rosterHistory = $this->teamMemberRepository->findRosterHistoryWithUser($team, 400);
        $joinRequests = $this->teamJoinRequestRepository->findByTeamWithUser($team, null, 300);
        $roleDistribution = $this->teamMemberRepository->countActiveByRosterRole($team);

        $inactiveMembers = array_values(array_filter(
            $rosterHistory,
            static fn (TeamMember $teamMember): bool => $teamMember->isActive() !== true || $teamMember->getLeftAt() !== null
        ));

        $stats = [
            'active_members' => count($activeMembers),
            'inactive_members' => count($inactiveMembers),
            'average_seniority_days' => $this->computeAverageSeniorityDays($activeMembers, $generatedAt),
            'join_requests' => $this->summarizeJoinRequests($joinRequests),
        ];

        $logoSrc = $this->pdfImageResolver->resolveFromPublicPath(
            $team->getLogoImageId()?->getFileUrl(),
            'assets/img/logo.jpeg',
        );

        $html = $this->twig->render('front/pdf/team_roster_sheet.html.twig', [
            'team' => $team,
            'generated_at' => $generatedAt,
            'logo_src' => $logoSrc,
            'stats' => $stats,
            'role_distribution' => $roleDistribution,
            'active_members' => $activeMembers,
            'roster_history' => $rosterHistory,
            'join_requests' => $joinRequests,
        ]);

        return $this->tableExportService->exportPdfFromHtml(
            $html,
            sprintf('roster_%s_%s.pdf', $this->slugify($team->getName() ?? 'team'), $generatedAt->format('Ymd_His')),
            'A4',
            'portrait',
        );
    }

    /**
     * @param list<TeamMember> $members
     */
    private function sortMembersForRosterSheet(array &$members): void
    {
        usort($members, function (TeamMember $left, TeamMember $right): int {
            $leftPriority = $this->resolveRosterPriority($left->getRosterRole());
            $rightPriority = $this->resolveRosterPriority($right->getRosterRole());

            if ($leftPriority !== $rightPriority) {
                return $leftPriority <=> $rightPriority;
            }

            $leftJoinedAt = $left->getJoinedAt()?->getTimestamp() ?? 0;
            $rightJoinedAt = $right->getJoinedAt()?->getTimestamp() ?? 0;
            if ($leftJoinedAt !== $rightJoinedAt) {
                return $leftJoinedAt <=> $rightJoinedAt;
            }

            $leftUser = $left->getUserId();
            $rightUser = $right->getUserId();

            return strcasecmp(
                (string) ($leftUser?->getDisplayName() ?: $leftUser?->getUsername() ?: ''),
                (string) ($rightUser?->getDisplayName() ?: $rightUser?->getUsername() ?: ''),
            );
        });
    }

    private function resolveRosterPriority(string $rosterRole): int
    {
        return match (strtoupper(trim($rosterRole))) {
            TeamMember::ROSTER_ROLE_CAPTAIN => 0,
            TeamMember::ROSTER_ROLE_CO_CAPTAIN => 1,
            TeamMember::ROSTER_ROLE_STARTER => 2,
            TeamMember::ROSTER_ROLE_SUBSTITUTE => 3,
            default => 99,
        };
    }

    /**
     * @param list<TeamMember> $activeMembers
     */
    private function computeAverageSeniorityDays(array $activeMembers, \DateTimeImmutable $generatedAt): int
    {
        if ($activeMembers === []) {
            return 0;
        }

        $totalDays = 0;
        $count = 0;

        foreach ($activeMembers as $member) {
            $joinedAt = $member->getJoinedAt();
            if (!$joinedAt instanceof \DateTimeInterface) {
                continue;
            }

            $days = (int) $generatedAt->diff(\DateTimeImmutable::createFromInterface($joinedAt))->format('%a');
            $totalDays += max(0, $days);
            ++$count;
        }

        if ($count === 0) {
            return 0;
        }

        return (int) floor($totalDays / $count);
    }

    /**
     * @param list<TeamJoinRequest> $joinRequests
     * @return array{pending:int,accepted:int,refused:int,cancelled:int}
     */
    private function summarizeJoinRequests(array $joinRequests): array
    {
        $summary = [
            'pending' => 0,
            'accepted' => 0,
            'refused' => 0,
            'cancelled' => 0,
        ];

        foreach ($joinRequests as $joinRequest) {
            $status = strtoupper(trim($joinRequest->getStatus() ?? ''));
            if ($status === 'PENDING') {
                ++$summary['pending'];
            } elseif ($status === 'ACCEPTED') {
                ++$summary['accepted'];
            } elseif ($status === 'REFUSED') {
                ++$summary['refused'];
            } elseif ($status === 'CANCELLED') {
                ++$summary['cancelled'];
            }
        }

        return $summary;
    }

    private function slugify(string $value): string
    {
        $normalized = mb_strtolower(trim($value), 'UTF-8');
        $slug = preg_replace('/[^a-z0-9]+/', '_', $normalized);
        if (!is_string($slug) || trim($slug, '_') === '') {
            return 'team';
        }

        return trim($slug, '_');
    }
}
