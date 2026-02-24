<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\Report;
use App\Entity\Team;
use App\Entity\User;
use App\Form\ReportType;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\ReportRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReportDetailController extends AbstractController
{
    #[Route('/admin/report-detail/{id}', name: 'admin_report_detail', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function index(
        int $id,
        Request $request,
        ReportRepository $reportRepository,
        PostRepository $postRepository,
        CommentRepository $commentRepository,
        UserRepository $userRepository,
        TeamRepository $teamRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $report = $reportRepository->findOneForAdminDetail($id);
        if (!$report instanceof Report) {
            throw $this->createNotFoundException('Signalement introuvable.');
        }

        $form = $this->createForm(ReportType::class, $report, [
            'include_admin_assignment' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentUser = $this->getUser();
            if (in_array($report->getStatus(), ['IN_REVIEW', 'CLOSED'], true)) {
                if ($report->getHandledAt() === null) {
                    $report->setHandledAt(new \DateTime());
                }

                if ($report->getHandledByAdminId() === null && $currentUser instanceof User) {
                    $report->setHandledByAdminId($currentUser);
                }
            } elseif ($report->getStatus() === 'OPEN') {
                $report->setHandledAt(null);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Signalement mis a jour.');

            return $this->redirectToRoute('admin_report_detail', ['id' => $id]);
        }

        $targetType = strtoupper((string) $report->getTargetType());
        $targetId = (int) $report->getTargetId();

        $targetEntity = null;
        if ($targetId > 0) {
            if ($targetType === 'POST') {
                $targetEntity = $postRepository->find($targetId);
            } elseif ($targetType === 'COMMENT') {
                $targetEntity = $commentRepository->find($targetId);
            } elseif ($targetType === 'USER') {
                $targetEntity = $userRepository->find($targetId);
            } elseif ($targetType === 'TEAM') {
                $targetEntity = $teamRepository->find($targetId);
            }
        }

        return $this->render('admin/pages/report-detail.html.twig', [
            'report' => $report,
            'reportForm' => $form->createView(),
            'targetEntity' => $targetEntity,
            'targetType' => $targetType,
        ]);
    }

    #[Route('/admin/report-detail', name: 'admin_report_detail_legacy', methods: ['GET'])]
    public function legacy(Request $request): Response
    {
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            return $this->redirectToRoute('admin_report_detail', ['id' => $id]);
        }

        return $this->redirectToRoute('admin_reports');
    }
}