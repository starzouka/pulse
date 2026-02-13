<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Report;
use App\Entity\User;
use App\Form\ReportType;
use App\Repository\ReportRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReportsController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = [
        'id',
        'reporter',
        'target',
        'target_id',
        'status',
        'created_at',
    ];

    #[Route('/admin/reports', name: 'admin_reports', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        ReportRepository $reportRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingReport = $editId > 0 ? $reportRepository->find($editId) : null;
        if ($editId > 0 && !$editingReport instanceof Report) {
            $this->addFlash('error', 'Signalement introuvable pour edition.');

            return $this->redirectToRoute('admin_reports');
        }

        $report = $editingReport instanceof Report ? $editingReport : new Report();
        $form = $this->createForm(ReportType::class, $report, [
            'include_admin_assignment' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $isEdit = $editingReport instanceof Report;
            $currentUser = $this->getUser();
            $now = new \DateTime();

            if (!$isEdit) {
                $report->setCreatedAt($now);
                $entityManager->persist($report);
            }

            if (in_array($report->getStatus(), ['IN_REVIEW', 'CLOSED'], true)) {
                if ($report->getHandledAt() === null) {
                    $report->setHandledAt($now);
                }

                if ($report->getHandledByAdminId() === null && $currentUser instanceof User) {
                    $report->setHandledByAdminId($currentUser);
                }
            } elseif ($report->getStatus() === 'OPEN') {
                $report->setHandledAt(null);
                if (!$isEdit) {
                    $report->setHandledByAdminId(null);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', $isEdit ? 'Signalement mis a jour.' : 'Signalement cree.');

            return $this->redirectToRoute('admin_reports');
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'target' => strtoupper(trim((string) $request->query->get('target', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $reports = $reportRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['target'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        return $this->render('admin/pages/reports.html.twig', [
            'reports' => $reports,
            'reportForm' => $form->createView(),
            'editingReport' => $editingReport,
            'filters' => $filters,
            'statusOptions' => ['OPEN', 'IN_REVIEW', 'CLOSED'],
            'targetOptions' => ['POST', 'COMMENT', 'USER', 'TEAM'],
        ]);
    }

    #[Route('/admin/reports/{id}/delete', name: 'admin_report_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        ReportRepository $reportRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_report_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_reports');
        }

        $report = $reportRepository->find($id);
        if (!$report instanceof Report) {
            $this->addFlash('error', 'Signalement introuvable.');

            return $this->redirectToRoute('admin_reports');
        }

        $entityManager->remove($report);
        $entityManager->flush();

        $this->addFlash('success', 'Signalement supprime.');

        return $this->redirectToRoute('admin_reports');
    }

    #[Route('/admin/reports/export/{format}', name: 'admin_reports_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        ReportRepository $reportRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'status' => strtoupper(trim((string) $request->query->get('status', ''))),
            'target' => strtoupper(trim((string) $request->query->get('target', ''))),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $reports = $reportRepository->searchForAdmin(
            $filters['q'],
            $filters['status'],
            $filters['target'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $headers = ['ID', 'Reporter', 'Target', 'Target ID', 'Status', 'Raison', 'Date'];
        $rows = [];
        foreach ($reports as $report) {
            $rows[] = [
                (int) ($report->getReportId() ?? 0),
                (string) ($report->getReporterUserId()?->getUsername() ?? '-'),
                (string) ($report->getTargetType() ?? '-'),
                (string) ($report->getTargetId() ?? '-'),
                (string) ($report->getStatus() ?? '-'),
                mb_substr(trim((string) $report->getReason()), 0, 140),
                $report->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Signalements', $headers, $rows, sprintf('admin_reports_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Signalements', $headers, $rows, sprintf('admin_reports_%s.pdf', $fileSuffix));
    }

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'created_at';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }
}
