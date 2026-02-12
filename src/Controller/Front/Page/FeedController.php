<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\PostImage;
use App\Entity\PostLike;
use App\Entity\Report;
use App\Entity\User;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\ReportRepository;
use App\Service\Post\FeedPostAssembler;
use App\Service\Post\PostImageUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FeedController extends AbstractController
{
    #[Route('/pages/feed', name: 'front_feed', methods: ['GET'])]
    public function index(
        FeedPostAssembler $feedPostAssembler,
    ): Response
    {
        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;

        $initialLimit = 12;
        $feedPosts = $feedPostAssembler->latest($viewerUser, $initialLimit, 0);

        return $this->render('front/pages/feed.html.twig', [
            'viewer_user' => $viewerUser,
            'feed_posts' => $feedPosts,
            'feed_limit' => $initialLimit,
            'feed_has_more' => count($feedPosts) === $initialLimit,
        ]);
    }

    #[Route('/pages/feed/chunk', name: 'front_feed_chunk', methods: ['GET'])]
    public function chunk(
        Request $request,
        FeedPostAssembler $feedPostAssembler,
    ): JsonResponse
    {
        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;

        $offsetRaw = $request->query->get('offset', 0);
        $limitRaw = $request->query->get('limit', 10);
        $offset = is_scalar($offsetRaw) ? max(0, (int) $offsetRaw) : 0;
        $limit = is_scalar($limitRaw) ? max(1, min(20, (int) $limitRaw)) : 10;
        $redirectUri = trim((string) $request->query->get('redirect', ''));

        $chunkPosts = $feedPostAssembler->latest($viewerUser, $limit, $offset);
        $html = '';
        foreach ($chunkPosts as $postData) {
            $html .= $this->renderView('front/partials/_post_card.html.twig', [
                'post_data' => $postData,
                'viewer_user' => $viewerUser,
                'like_route' => 'front_feed_post_like',
                'comment_route' => 'front_feed_post_comment',
                'report_route' => 'front_feed_post_report',
                'like_token_prefix' => 'feed_post_like_',
                'comment_token_prefix' => 'feed_post_comment_',
                'report_token_prefix' => 'feed_post_report_',
                'redirect_uri' => $redirectUri !== '' ? $redirectUri : $request->getUri(),
            ]);
        }

        return $this->json([
            'html' => $html,
            'count' => count($chunkPosts),
            'next_offset' => $offset + count($chunkPosts),
            'has_more' => count($chunkPosts) === $limit,
        ]);
    }

    #[Route('/pages/feed/posts/create', name: 'front_feed_post_create', methods: ['POST'])]
    public function createPost(
        Request $request,
        PostImageUploader $postImageUploader,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->headers->get('referer') ?: $request->getUri(),
            ]);
        }

        if (!$this->isCsrfTokenValid('feed_post_create', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $content = trim((string) $request->request->get('content_text', ''));
        $rawFiles = (array) $request->files->all('images');
        $hasUpload = $postImageUploader->hasAnyUpload($rawFiles);
        if ($content === '' && !$hasUpload) {
            $this->addFlash('error', 'Le post doit contenir du texte ou au moins une image.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $visibility = strtoupper((string) $request->request->get('visibility', 'PUBLIC'));
        if (!in_array($visibility, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $visibility = 'PUBLIC';
        }

        $now = new \DateTime();
        $post = (new Post())
            ->setAuthorUserId($viewer)
            ->setContentText($content)
            ->setVisibility($visibility)
            ->setIsDeleted(false)
            ->setCreatedAt($now)
            ->setUpdatedAt($now);

        $entityManager->persist($post);

        try {
            $uploadResult = $postImageUploader->createPostImages($rawFiles, $viewer, $post);
            /** @var list<PostImage> $postImages */
            $postImages = $uploadResult['post_images'];
            foreach ($postImages as $postImage) {
                $image = $postImage->getImageId();
                if ($image !== null) {
                    $entityManager->persist($image);
                }
                $entityManager->persist($postImage);
            }

            if ($content === '' && $postImages === []) {
                $this->addFlash('error', 'Aucune image valide trouvee. Formats acceptes: JPG, PNG, WEBP, GIF.');
                return $this->redirectToRequestTarget($request, 'front_feed');
            }

            if (($uploadResult['skipped'] ?? 0) > 0) {
                $this->addFlash('info', 'Certaines images ont ete ignorees (format non supporte ou fichier invalide).');
            }
        } catch (\Throwable) {
            $this->addFlash('error', 'Impossible de traiter les images du post.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $entityManager->flush();

        $this->addFlash('success', 'Publication ajoutee au fil.');

        return $this->redirectToRequestTarget($request, 'front_feed');
    }

    #[Route('/pages/feed/posts/{id}/like', name: 'front_feed_post_like', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function toggleLike(
        int $id,
        Request $request,
        PostRepository $postRepository,
        PostLikeRepository $postLikeRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', ['_target_path' => $request->headers->get('referer') ?: $request->getUri()]);
        }

        if (!$this->isCsrfTokenValid('feed_post_like_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $existingLike = $postLikeRepository->findOneByPostAndUser($post, $viewer);
        if ($existingLike instanceof PostLike) {
            $entityManager->remove($existingLike);
        } else {
            $entityManager->persist(
                (new PostLike())
                    ->setPostId($post)
                    ->setUserId($viewer)
                    ->setCreatedAt(new \DateTime())
            );
        }

        $entityManager->flush();

        return $this->redirectToRequestTarget($request, 'front_feed');
    }

    #[Route('/pages/feed/posts/{id}/comment', name: 'front_feed_post_comment', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addComment(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', ['_target_path' => $request->headers->get('referer') ?: $request->getUri()]);
        }

        if (!$this->isCsrfTokenValid('feed_post_comment_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $content = trim((string) $request->request->get('content_text', ''));
        if ($content === '') {
            $this->addFlash('error', 'Le commentaire ne peut pas etre vide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $now = new \DateTime();
        $comment = (new Comment())
            ->setPostId($post)
            ->setAuthorUserId($viewer)
            ->setParentCommentId(null)
            ->setContentText($content)
            ->setIsDeleted(false)
            ->setCreatedAt($now)
            ->setUpdatedAt($now);

        $entityManager->persist($comment);
        $entityManager->flush();

        return $this->redirectToRequestTarget($request, 'front_feed');
    }

    #[Route('/pages/feed/posts/{id}/report', name: 'front_feed_post_report', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function report(
        int $id,
        Request $request,
        PostRepository $postRepository,
        ReportRepository $reportRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', ['_target_path' => $request->headers->get('referer') ?: $request->getUri()]);
        }

        if (!$this->isCsrfTokenValid('feed_post_report_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $alreadyReported = $reportRepository->findOneBy([
            'reporterUserId' => $viewer,
            'targetType' => 'POST',
            'targetId' => (string) $id,
            'status' => 'OPEN',
        ]);
        if ($alreadyReported instanceof Report) {
            $this->addFlash('info', 'Vous avez deja signale ce post.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $reason = trim((string) $request->request->get('reason', 'Contenu non conforme.'));
        if ($reason === '') {
            $reason = 'Contenu non conforme.';
        }

        $report = (new Report())
            ->setReporterUserId($viewer)
            ->setTargetType('POST')
            ->setTargetId((string) $id)
            ->setReason($reason)
            ->setStatus('OPEN')
            ->setCreatedAt(new \DateTime())
            ->setHandledByAdminId(null);

        $entityManager->persist($report);
        $entityManager->flush();

        $this->addFlash('success', 'Signalement envoye.');

        return $this->redirectToRequestTarget($request, 'front_feed');
    }

    #[Route('/pages/posts/{id}/delete', name: 'front_post_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deletePost(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', ['_target_path' => $request->headers->get('referer') ?: $request->getUri()]);
        }

        if (!$this->isCsrfTokenValid('post_delete_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRequestTarget($request, 'front_feed');
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $authorId = $post->getAuthorUserId()?->getUserId();
        $viewerId = $viewer->getUserId();
        $canDelete = $authorId !== null && $viewerId !== null && $authorId === $viewerId;
        if (!$canDelete && !in_array('ROLE_ADMIN', $viewer->getRoles(), true)) {
            throw $this->createAccessDeniedException('Suppression non autorisee.');
        }

        $now = new \DateTime();
        $post
            ->setIsDeleted(true)
            ->setDeletedAt($now)
            ->setUpdatedAt($now);

        $entityManager->flush();

        $this->addFlash('success', 'Post supprime.');

        return $this->redirectToRequestTarget($request, 'front_feed');
    }

    private function redirectToRequestTarget(Request $request, string $fallbackRoute): Response
    {
        $targetPath = $request->request->get('_redirect');
        if (is_string($targetPath) && $targetPath !== '') {
            return $this->redirect($targetPath);
        }

        $referer = $request->headers->get('referer');
        if (is_string($referer) && $referer !== '') {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute($fallbackRoute);
    }
}
