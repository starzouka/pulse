<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\CommentRepository;
use App\Repository\PostImageRepository;
use App\Repository\PostRepository;
use App\Repository\ReportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostDetailController extends AbstractController
{
    #[Route('/admin/post-detail/{id}', name: 'admin_post_detail', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function index(
        int $id,
        Request $request,
        PostRepository $postRepository,
        CommentRepository $commentRepository,
        ReportRepository $reportRepository,
        PostImageRepository $postImageRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $post = $postRepository->find($id);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $form = $this->createForm(PostType::class, $post, [
            'include_deleted' => true,
            'include_author' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTime();
            $post->setUpdatedAt($now);

            if ($post->isDeleted()) {
                if ($post->getDeletedAt() === null) {
                    $post->setDeletedAt($now);
                }
            } else {
                $post->setDeletedAt(null);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Post mis a jour.');

            return $this->redirectToRoute('admin_post_detail', ['id' => $id]);
        }

        $sorts = [
            'images' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('images_sort', 'position'),
                    ['image_id', 'position'],
                    'position'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('images_direction', 'asc')),
            ],
            'comments' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('comments_sort', 'created_at'),
                    ['id', 'author', 'content', 'created_at', 'deleted'],
                    'created_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('comments_direction', 'desc')),
            ],
            'reports' => [
                'sort' => $this->sanitizeSort(
                    (string) $request->query->get('reports_sort', 'created_at'),
                    ['id', 'reporter', 'status', 'created_at'],
                    'created_at'
                ),
                'direction' => $this->sanitizeDirection((string) $request->query->get('reports_direction', 'desc')),
            ],
        ];

        $imageOrderMap = [
            'image_id' => 'imageId',
            'position' => 'position',
        ];
        $commentOrderMap = [
            'id' => 'commentId',
            'author' => 'authorUserId',
            'content' => 'contentText',
            'created_at' => 'createdAt',
            'deleted' => 'isDeleted',
        ];
        $reportOrderMap = [
            'id' => 'reportId',
            'reporter' => 'reporterUserId',
            'status' => 'status',
            'created_at' => 'createdAt',
        ];

        $imageOrderBy = [$imageOrderMap[$sorts['images']['sort']] => strtoupper($sorts['images']['direction'])];
        $commentOrderBy = [$commentOrderMap[$sorts['comments']['sort']] => strtoupper($sorts['comments']['direction'])];
        $reportOrderBy = [$reportOrderMap[$sorts['reports']['sort']] => strtoupper($sorts['reports']['direction'])];

        return $this->render('admin/pages/post-detail.html.twig', [
            'post' => $post,
            'postForm' => $form->createView(),
            'comments' => $commentRepository->findBy(['postId' => $post], $commentOrderBy, 300),
            'reports' => $reportRepository->findBy([
                'targetType' => 'POST',
                'targetId' => (string) $id,
            ], $reportOrderBy, 300),
            'postImages' => $postImageRepository->findBy(['postId' => $post], $imageOrderBy),
            'sorts' => $sorts,
        ]);
    }

    #[Route('/admin/post-detail', name: 'admin_post_detail_legacy', methods: ['GET'])]
    public function legacy(Request $request): Response
    {
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            return $this->redirectToRoute('admin_post_detail', ['id' => $id]);
        }

        return $this->redirectToRoute('admin_posts');
    }

    /**
     * @param list<string> $allowed
     */
    private function sanitizeSort(string $value, array $allowed, string $default): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, $allowed, true) ? $normalized : $default;
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'asc' ? 'asc' : 'desc';
    }
}
