<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Comment;
use App\Entity\FriendRequest;
use App\Entity\Post;
use App\Entity\PostLike;
use App\Entity\Report;
use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\ReportRepository;
use App\Repository\UserRepository;
use App\Service\Profile\ProfilePageDataProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileController extends AbstractController
{
    #[Route('/pages/profile', name: 'front_profile', methods: ['GET'])]
    public function index(
        Request $request,
        ProfilePageDataProvider $profilePageDataProvider,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToLogin($request);
        }

        $profileData = $profilePageDataProvider->build($viewer, $viewer);

        return $this->render('front/pages/profile.html.twig', [
            'profile_user' => $viewer,
            'viewer_user' => $viewer,
            'active_tab' => $this->sanitizeTab($request->query->get('tab')),
            ...$profileData,
        ]);
    }

    #[Route('/pages/profile/posts/create', name: 'front_profile_post_create', methods: ['POST'])]
    public function createPost(
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToLogin($request);
        }

        if (!$this->isCsrfTokenValid('profile_post_create', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_profile', ['tab' => 'posts']);
        }

        $content = trim((string) $request->request->get('content_text', ''));
        if ($content == '') {
            $this->addFlash('error', 'Le contenu du post est obligatoire.');
            return $this->redirectToRoute('front_profile', ['tab' => 'posts']);
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
            ->setUpdatedAt($now)
        ;

        $entityManager->persist($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post publie avec succes.');

        return $this->redirectToRoute('front_profile', ['tab' => 'posts']);
    }

    #[Route('/pages/profile/posts/{id}/like', name: 'front_profile_post_like', requirements: ['id' => '\d+'], methods: ['POST'])]
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
            return $this->redirectToLogin($request);
        }

        if (!$this->isCsrfTokenValid('profile_post_like_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToProfileByRequest($request, $viewer);
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $existingLike = $postLikeRepository->findOneByPostAndUser($post, $viewer);
        if ($existingLike instanceof PostLike) {
            $entityManager->remove($existingLike);
        } else {
            $newLike = (new PostLike())
                ->setPostId($post)
                ->setUserId($viewer)
                ->setCreatedAt(new \DateTime())
            ;
            $entityManager->persist($newLike);
        }

        $entityManager->flush();

        return $this->redirectToProfileByRequest($request, $viewer);
    }

    #[Route('/pages/profile/posts/{id}/comment', name: 'front_profile_post_comment', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addComment(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToLogin($request);
        }

        if (!$this->isCsrfTokenValid('profile_post_comment_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToProfileByRequest($request, $viewer);
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $content = trim((string) $request->request->get('content_text', ''));
        if ($content == '') {
            $this->addFlash('error', 'Le commentaire ne peut pas etre vide.');
            return $this->redirectToProfileByRequest($request, $viewer);
        }

        $now = new \DateTime();
        $comment = (new Comment())
            ->setPostId($post)
            ->setAuthorUserId($viewer)
            ->setParentCommentId(null)
            ->setContentText($content)
            ->setIsDeleted(false)
            ->setCreatedAt($now)
            ->setUpdatedAt($now)
        ;

        $entityManager->persist($comment);
        $entityManager->flush();

        return $this->redirectToProfileByRequest($request, $viewer);
    }

    #[Route('/pages/profile/posts/{id}/report', name: 'front_profile_post_report', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reportPost(
        int $id,
        Request $request,
        PostRepository $postRepository,
        ReportRepository $reportRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToLogin($request);
        }

        if (!$this->isCsrfTokenValid('profile_post_report_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToProfileByRequest($request, $viewer);
        }

        $post = $postRepository->findOneBy(['postId' => $id, 'isDeleted' => false]);
        if (!$post instanceof Post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $existingReport = $reportRepository->findOneBy([
            'reporterUserId' => $viewer,
            'targetType' => 'POST',
            'targetId' => (string) $id,
            'status' => 'OPEN',
        ]);

        if ($existingReport instanceof Report) {
            $this->addFlash('info', 'Vous avez deja signale ce post.');
            return $this->redirectToProfileByRequest($request, $viewer);
        }

        $reason = trim((string) $request->request->get('reason', 'Contenu non conforme.'));
        if ($reason == '') {
            $reason = 'Contenu non conforme.';
        }

        $report = (new Report())
            ->setReporterUserId($viewer)
            ->setTargetType('POST')
            ->setTargetId((string) $id)
            ->setReason($reason)
            ->setStatus('OPEN')
            ->setCreatedAt(new \DateTime())
            ->setHandledByAdminId(null)
        ;

        $entityManager->persist($report);
        $entityManager->flush();

        $this->addFlash('success', 'Signalement envoye.');

        return $this->redirectToProfileByRequest($request, $viewer);
    }

    #[Route('/pages/profile/{id}/add-friend', name: 'front_profile_add_friend', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addFriend(
        int $id,
        Request $request,
        UserRepository $userRepository,
        FriendRequestRepository $friendRequestRepository,
        FriendshipRepository $friendshipRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToLogin($request);
        }

        if (!$this->isCsrfTokenValid('profile_add_friend_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_player_profile', ['id' => $id, 'tab' => 'friends']);
        }

        $targetUser = $userRepository->find($id);
        if (!$targetUser instanceof User) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        if ($viewer->getUserId() === $targetUser->getUserId()) {
            $this->addFlash('error', 'Vous ne pouvez pas vous ajouter vous-meme.');
            return $this->redirectToRoute('front_profile', ['tab' => 'friends']);
        }

        if ($friendshipRepository->existsBetweenUsers($viewer, $targetUser)) {
            $this->addFlash('info', 'Vous etes deja amis.');
            return $this->redirectToRoute('front_player_profile', ['id' => $id, 'tab' => 'friends']);
        }

        $pendingRequest = $friendRequestRepository->findPendingBetweenUsers($viewer, $targetUser);
        if ($pendingRequest instanceof FriendRequest) {
            $this->addFlash('info', 'Une demande est deja en attente.');
            return $this->redirectToRoute('front_player_profile', ['id' => $id, 'tab' => 'friends']);
        }

        $friendRequest = (new FriendRequest())
            ->setFromUserId($viewer)
            ->setToUserId($targetUser)
            ->setStatus('PENDING')
            ->setCreatedAt(new \DateTime())
            ->setRequestMessage(null)
            ->setRespondedAt(null)
        ;

        $entityManager->persist($friendRequest);
        $entityManager->flush();

        $this->addFlash('success', 'Demande d\'ami envoyee.');

        return $this->redirectToRoute('front_player_profile', ['id' => $id, 'tab' => 'friends']);
    }

    private function sanitizeTab(mixed $tab): string
    {
        $allowedTabs = ['posts', 'about', 'friends', 'teams'];
        $tabAsString = is_string($tab) ? $tab : 'posts';

        return in_array($tabAsString, $allowedTabs, true) ? $tabAsString : 'posts';
    }

    private function redirectToLogin(Request $request): Response
    {
        $targetPath = $request->headers->get('referer');
        if (!is_string($targetPath) || $targetPath == '') {
            $targetPath = $request->getUri();
        }

        return $this->redirectToRoute('front_login', [
            '_target_path' => $targetPath,
        ]);
    }

    private function redirectToProfileByRequest(Request $request, User $viewer): Response
    {
        $profileIdRaw = $request->request->get('profile_id');
        $profileId = is_scalar($profileIdRaw) ? (int) $profileIdRaw : 0;

        if ($profileId > 0 && $viewer->getUserId() !== $profileId) {
            return $this->redirectToRoute('front_player_profile', [
                'id' => $profileId,
                'tab' => 'posts',
            ]);
        }

        return $this->redirectToRoute('front_profile', ['tab' => 'posts']);
    }
}
