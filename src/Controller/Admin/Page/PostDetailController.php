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

        return $this->render('admin/pages/post-detail.html.twig', [
            'post' => $post,
            'postForm' => $form->createView(),
            'comments' => $commentRepository->findBy(['postId' => $post], ['createdAt' => 'DESC'], 300),
            'reports' => $reportRepository->findBy([
                'targetType' => 'POST',
                'targetId' => (string) $id,
            ], ['createdAt' => 'DESC'], 300),
            'postImages' => $postImageRepository->findBy(['postId' => $post], ['position' => 'ASC']),
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
}