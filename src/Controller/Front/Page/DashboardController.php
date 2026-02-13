<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\MessageRepository;
use App\Repository\NotificationRepository;
use App\Repository\TeamInviteRepository;
use App\Repository\TeamJoinRequestRepository;
use App\Service\Post\FeedPostAssembler;
use App\Service\Profile\ProfilePageDataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/pages/dashboard', name: 'front_dashboard', methods: ['GET'])]
    public function index(
        Request $request,
        ProfilePageDataProvider $profilePageDataProvider,
        NotificationRepository $notificationRepository,
        FriendRequestRepository $friendRequestRepository,
        TeamInviteRepository $teamInviteRepository,
        TeamJoinRequestRepository $teamJoinRequestRepository,
        MessageRepository $messageRepository,
        FeedPostAssembler $feedPostAssembler,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        $profileData = $profilePageDataProvider->build($viewer, $viewer);

        $feedQuery = trim((string) $request->query->get('feed_q', ''));
        $feedVisibility = strtoupper(trim((string) $request->query->get('feed_visibility', '')));
        if (!in_array($feedVisibility, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $feedVisibility = '';
        }

        $feedSort = strtolower(trim((string) $request->query->get('feed_sort', 'latest')));
        if (!in_array($feedSort, ['latest', 'oldest', 'liked', 'commented'], true)) {
            $feedSort = 'latest';
        }

        $feedFilters = [
            'q' => $feedQuery,
            'visibility' => $feedVisibility,
            'sort' => $feedSort,
        ];

        $recentNotifications = $notificationRepository->findLatestForUser($viewer, false, 5);
        $pendingFriendRequests = $friendRequestRepository->count([
            'toUserId' => $viewer,
            'status' => 'PENDING',
        ]);
        $pendingTeamInvites = $teamInviteRepository->count([
            'invitedUserId' => $viewer,
            'status' => 'PENDING',
        ]);
        $pendingTeamJoinRequests = $teamJoinRequestRepository->count([
            'userId' => $viewer,
            'status' => 'PENDING',
        ]);
        $unreadMessagesCount = $messageRepository->countUnreadForReceiver($viewer);

        $dashboardFeedLimit = 8;
        $dashboardFeedPosts = $feedPostAssembler->latest($viewer, $dashboardFeedLimit, 0, $feedFilters);

        $chunkQueryParams = array_filter([
            'q' => $feedQuery,
            'visibility' => $feedVisibility,
            'sort' => $feedSort,
        ], static fn (mixed $value): bool => is_string($value) && $value !== '');

        return $this->render('front/pages/dashboard.html.twig', [
            'viewer_user' => $viewer,
            'profile_data' => $profileData,
            'dashboard_feed_posts' => $dashboardFeedPosts,
            'dashboard_feed_limit' => $dashboardFeedLimit,
            'dashboard_feed_has_more' => count($dashboardFeedPosts) === $dashboardFeedLimit,
            'dashboard_feed_filters' => [
                'q' => $feedQuery,
                'visibility' => $feedVisibility,
                'sort' => $feedSort,
            ],
            'dashboard_feed_query_string' => http_build_query($chunkQueryParams),
            'recent_notifications' => $recentNotifications,
            'pending_friend_requests_count' => $pendingFriendRequests,
            'pending_team_invites_count' => $pendingTeamInvites,
            'pending_team_join_requests_count' => $pendingTeamJoinRequests,
            'unread_messages_count' => $unreadMessagesCount,
            'unread_notifications_count' => $notificationRepository->countUnreadForUser($viewer),
        ]);
    }
}
