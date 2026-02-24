<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\CommentRepository;
use App\Repository\PostImageRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostsController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = [
        'id',
        'author',
        'content',
        'visibility',
        'created_at',
        'deleted',
        'images',
        'comments',
        'likes',
    ];

    #[Route('/admin/posts', name: 'admin_posts', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        PostRepository $postRepository,
        PostImageRepository $postImageRepository,
        CommentRepository $commentRepository,
        PostLikeRepository $postLikeRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingPost = $editId > 0 ? $postRepository->find($editId) : null;
        if ($editId > 0 && !$editingPost instanceof Post) {
            $this->addFlash('error', 'Post introuvable pour edition.');

            return $this->redirectToRoute('admin_posts');
        }

        $post = $editingPost instanceof Post ? $editingPost : new Post();
        $form = $this->createForm(PostType::class, $post, [
            'include_deleted' => true,
            'include_author' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $isEdit = $editingPost instanceof Post;
            $now = new \DateTime();

            if (!$isEdit) {
                $post->setCreatedAt($now);
                $entityManager->persist($post);
            }

            $post->setUpdatedAt($now);
            if ($post->isDeleted()) {
                if ($post->getDeletedAt() === null) {
                    $post->setDeletedAt($now);
                }
            } else {
                $post->setDeletedAt(null);
            }

            $entityManager->flush();

            $this->addFlash('success', $isEdit ? 'Post mis a jour.' : 'Post cree.');

            return $this->redirectToRoute('admin_posts');
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'visibility' => strtoupper(trim((string) $request->query->get('visibility', ''))),
            'deleted' => trim((string) $request->query->get('deleted', '')),
            'author' => trim((string) $request->query->get('author', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $posts = $postRepository->searchForAdmin(
            $filters['q'],
            $filters['visibility'],
            $this->parseBooleanFilter($filters['deleted']),
            $filters['author'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        $postIds = [];
        foreach ($posts as $postRow) {
            $postId = $postRow->getPostId();
            if (is_int($postId) && $postId > 0) {
                $postIds[] = $postId;
            }
        }

        return $this->render('admin/pages/posts.html.twig', [
            'posts' => $posts,
            'postForm' => $form->createView(),
            'editingPost' => $editingPost,
            'filters' => $filters,
            'visibilityOptions' => ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'],
            'imagesByPostId' => $postImageRepository->countByPostIds($postIds),
            'commentsByPostId' => $commentRepository->countByPostIds($postIds),
            'likesByPostId' => $postLikeRepository->countByPostIds($postIds),
        ]);
    }

    #[Route('/admin/posts/{id}/delete', name: 'admin_post_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_post_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_posts');
        }

        $post = $postRepository->find($id);
        if (!$post instanceof Post) {
            $this->addFlash('error', 'Post introuvable.');

            return $this->redirectToRoute('admin_posts');
        }

        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post supprime.');

        return $this->redirectToRoute('admin_posts');
    }

    #[Route('/admin/posts/export/{format}', name: 'admin_posts_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        PostRepository $postRepository,
        PostImageRepository $postImageRepository,
        CommentRepository $commentRepository,
        PostLikeRepository $postLikeRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'visibility' => strtoupper(trim((string) $request->query->get('visibility', ''))),
            'deleted' => trim((string) $request->query->get('deleted', '')),
            'author' => trim((string) $request->query->get('author', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'created_at')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'desc')),
        ];

        $posts = $postRepository->searchForAdmin(
            $filters['q'],
            $filters['visibility'],
            $this->parseBooleanFilter($filters['deleted']),
            $filters['author'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $postIds = [];
        foreach ($posts as $post) {
            $postId = $post->getPostId();
            if (is_int($postId) && $postId > 0) {
                $postIds[] = $postId;
            }
        }

        $imagesByPostId = $postImageRepository->countByPostIds($postIds);
        $commentsByPostId = $commentRepository->countByPostIds($postIds);
        $likesByPostId = $postLikeRepository->countByPostIds($postIds);

        $headers = ['ID', 'Auteur', 'Visibility', 'Deleted', 'Images', 'Commentaires', 'Likes', 'Cree le'];
        $rows = [];
        foreach ($posts as $post) {
            $postId = (int) ($post->getPostId() ?? 0);
            $rows[] = [
                $postId,
                (string) ($post->getAuthorUserId()?->getUsername() ?? '-'),
                (string) ($post->getVisibility() ?? '-'),
                $post->isDeleted() ? 'Oui' : 'Non',
                (int) ($imagesByPostId[$postId] ?? 0),
                (int) ($commentsByPostId[$postId] ?? 0),
                (int) ($likesByPostId[$postId] ?? 0),
                $post->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Posts', $headers, $rows, sprintf('admin_posts_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Posts', $headers, $rows, sprintf('admin_posts_%s.pdf', $fileSuffix));
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
