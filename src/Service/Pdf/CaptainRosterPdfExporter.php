<?php

declare(strict_types=1);

namespace App\Service\Pdf;

use App\Entity\Team;
use App\Entity\TeamMember;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class CaptainRosterPdfExporter
{
    public function __construct(
        private readonly Environment $twig,
    ) {
    }

    /**
     * @param list<TeamMember> $activeMembers
     * @param list<TeamMember> $inactiveMembers
     * @param array{total_active:int,captains:int,co_captains:int,starters:int,substitutes:int} $rosterStats
     */
    public function export(Team $team, array $activeMembers, array $inactiveMembers, array $rosterStats): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);

        $html = $this->twig->render('front/pdf/captain-roster-sheet.html.twig', [
            'team' => $team,
            'active_members' => $activeMembers,
            'inactive_members' => $inactiveMembers,
            'roster_stats' => $rosterStats,
            'generated_at' => new \DateTimeImmutable(),
        ]);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $safeTeamName = preg_replace('/[^A-Za-z0-9_-]+/', '_', (string) ($team->getName() ?? 'team')) ?? 'team';

        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="roster_%s.pdf"', trim($safeTeamName, '_')));

        return $response;
    }
}
