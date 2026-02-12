<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommentsController extends AbstractController
{
    #[Route('/admin/comments', name: 'admin_comments', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        CommentRepository $commentRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingComment = $editId > 0 ? $commentRepository->find($editId) : null;
        if ($editId > 0 && !$editingComment instanceof Comment) {
            $this->addFlash('error', 'Commentaire introuvable pour edition.');

            return $this->redirectToRoute('admin_comments');
        }

        $comment = $editingComment instanceof Comment ? $editingComment : new Comment();
        $form = $this->createForm(CommentType::class, $comment, [
            'include_deleted' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $isEdit = $editingComment instanceof Comment;
            $now = new \DateTime();

            if (!$isEdit) {
                $comment->setCreatedAt($now);
                $entityManager->persist($comment);
            }

            $comment->setUpdatedAt($now);
            $entityManager->flush();

            $this->addFlash('success', $isEdit ? 'Commentaire mis a jour.' : 'Commentaire cree.');

            return $this->redirectToRoute('admin_comments');
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'deleted' => trim((string) $request->query->get('deleted', '')),
            'date' => trim((string) $request->query->get('date', '')),
            'post' => trim((string) $request->query->get('post', '')),
        ];

        $filterDate = null;
        if ($filters['date'] !== '') {
            try {
                $filterDate = new \DateTimeImmutable($filters['date']);
            } catch (\Throwable) {
                $filterDate = null;
            }
        }

        $comments = $commentRepository->searchForAdmin(
            $filters['q'],
            $this->parseBooleanFilter($filters['deleted']),
            $filterDate,
            ctype_digit($filters['post']) ? (int) $filters['post'] : null,
            500
        );

        return $this->render('admin/pages/comments.html.twig', [
            'comments' => $comments,
            'commentForm' => $form->createView(),
            'editingComment' => $editingComment,
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/comments/{id}/delete', name: 'admin_comment_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        CommentRepository $commentRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_comment_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_comments');
        }

        $comment = $commentRepository->find($id);
        if (!$comment instanceof Comment) {
            $this->addFlash('error', 'Commentaire introuvable.');

            return $this->redirectToRoute('admin_comments');
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire supprime.');

        return $this->redirectToRoute('admin_comments');
    }

    #[Route('/admin/comments/export/{format}', name: 'admin_comments_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        CommentRepository $commentRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'deleted' => trim((string) $request->query->get('deleted', '')),
            'date' => trim((string) $request->query->get('date', '')),
            'post' => trim((string) $request->query->get('post', '')),
        ];

        $filterDate = null;
        if ($filters['date'] !== '') {
            try {
                $filterDate = new \DateTimeImmutable($filters['date']);
            } catch (\Throwable) {
                $filterDate = null;
            }
        }

        $comments = $commentRepository->searchForAdmin(
            $filters['q'],
            $this->parseBooleanFilter($filters['deleted']),
            $filterDate,
            ctype_digit($filters['post']) ? (int) $filters['post'] : null,
            5000
        );

        $headers = ['ID', 'Post', 'Auteur', 'Contenu', 'Deleted', 'Cree le'];
        $rows = [];
        foreach ($comments as $comment) {
            $rows[] = [
                (int) ($comment->getCommentId() ?? 0),
                (int) ($comment->getPostId()?->getPostId() ?? 0),
                (string) ($comment->getAuthorUserId()?->getUsername() ?? '-'),
                mb_substr(trim((string) $comment->getContentText()), 0, 120),
                $comment->isDeleted() ? 'Oui' : 'Non',
                $comment->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Commentaires', $headers, $rows, sprintf('admin_comments_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Commentaires', $headers, $rows, sprintf('admin_comments_%s.pdf', $fileSuffix));
    }

    private function parseBooleanFilter(string $value): ?bool
    {
        $normalized = strtolower(trim($value));
        if ($normalized === '') {
            return null;
        }

        if (in_array($normalized, ['1', 'true', 'yes', 'oui'], true)) {
            return true;
        }

        if (in_array($normalized, ['0', 'false', 'no', 'non'], true)) {
            return false;
        }

        return null;
    }
}