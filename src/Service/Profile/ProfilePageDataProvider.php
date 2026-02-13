<?php

declare(strict_types=1);

namespace App\Service\Profile;

use App\Entity\Team;
use App\Entity\User;
use App\Repository\CommentRepository;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\PostImageRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\TeamMemberRepository;

final class ProfilePageDataProvider
{
    public function __construct(
        private readonly PostRepository $postRepository,
        private readonly PostImageRepository $postImageRepository,
        private readonly PostLikeRepository $postLikeRepository,
        private readonly CommentRepository $commentRepository,
        private readonly FriendshipRepository $friendshipRepository,
        private readonly FriendRequestRepository $friendRequestRepository,
        private readonly TeamMemberRepository $teamMemberRepository,
    ) {
    }

    /**
     * @return array{
     *   is_own_profile: bool,
     *   friend_status: string,
     *   friends: list<User>,
     *   teams: list<Team>,
     *   posts: list<array{
     *     post: \App\Entity\Post,
     *     images: list<\App\Entity\Image>,
     *     likes_count: int,
     *     comments_count: int,
     *     is_liked_by_viewer: bool,
     *     comments: list<\App\Entity\Comment>
     *   }>,
     *   stats: array{friends: int, teams: int, posts: int},
     *   applied_filters: array{
     *     posts_q:string,
     *     posts_visibility:string,
     *     posts_sort:string,
     *     friends_q:string,
     *     friends_sort:string,
     *     teams_q:string,
     *     teams_region:string,
     *     teams_sort:string
     *   }
     * }
     */
    public function build(User $profileUser, ?User $viewer, array $filters = []): array
    {
        $isOwnProfile = $viewer instanceof User
            && $viewer->getUserId() !== null
            && $viewer->getUserId() === $profileUser->getUserId();

        $postsQuery = trim((string) ($filters['posts_q'] ?? ''));
        $postsVisibility = strtoupper(trim((string) ($filters['posts_visibility'] ?? '')));
        if (!in_array($postsVisibility, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $postsVisibility = '';
        }

        $postsSort = strtolower(trim((string) ($filters['posts_sort'] ?? 'latest')));
        if (!in_array($postsSort, ['latest', 'oldest', 'liked', 'commented'], true)) {
            $postsSort = 'latest';
        }

        $friendsQuery = trim((string) ($filters['friends_q'] ?? ''));
        $friendsSort = strtolower(trim((string) ($filters['friends_sort'] ?? 'recent')));
        if (!in_array($friendsSort, ['recent', 'oldest', 'name'], true)) {
            $friendsSort = 'recent';
        }

        $teamsQuery = trim((string) ($filters['teams_q'] ?? ''));
        $teamsRegion = trim((string) ($filters['teams_region'] ?? ''));
        $teamsSort = strtolower(trim((string) ($filters['teams_sort'] ?? 'latest')));
        if (!in_array($teamsSort, ['latest', 'oldest', 'name', 'region'], true)) {
            $teamsSort = 'latest';
        }

        $friends = $this->friendshipRepository->findFriendsByUser(
            $profileUser,
            $friendsQuery,
            $friendsSort,
            200
        );

        $teamMembers = $this->teamMemberRepository->findActiveByUserFiltered(
            $profileUser,
            $teamsQuery,
            $teamsRegion !== '' ? $teamsRegion : null,
            $teamsSort,
            50
        );
        $teamsById = [];
        foreach ($teamMembers as $teamMember) {
            $team = $teamMember->getTeamId();
            $teamId = $team?->getTeamId();
            if (!$team instanceof Team || $teamId === null) {
                continue;
            }

            $teamsById[$teamId] = $team;
        }
        $teams = array_values($teamsById);

        $posts = $this->postRepository->searchVisiblePaged(
            $postsQuery,
            $postsVisibility !== '' ? $postsVisibility : null,
            $profileUser,
            $postsSort,
            25,
            0,
        );
        $imagesByPostId = $this->postImageRepository->findImagesByPosts($posts);

        $postsData = [];
        foreach ($posts as $post) {
            $postId = $post->getPostId();
            $likesCount = $this->postLikeRepository->count(['postId' => $post]);
            $commentsCount = $this->commentRepository->count([
                'postId' => $post,
                'isDeleted' => false,
            ]);

            $latestComments = array_reverse(
                $this->commentRepository->findLatestRootCommentsForPost($post, 3),
            );

            $isLikedByViewer = false;
            if ($viewer instanceof User) {
                $isLikedByViewer = $this->postLikeRepository->findOneByPostAndUser($post, $viewer) !== null;
            }

            $postsData[] = [
                'post' => $post,
                'images' => $postId !== null ? ($imagesByPostId[$postId] ?? []) : [],
                'likes_count' => $likesCount,
                'comments_count' => $commentsCount,
                'is_liked_by_viewer' => $isLikedByViewer,
                'comments' => $latestComments,
            ];
        }

        $friendStatus = 'guest';
        if ($isOwnProfile) {
            $friendStatus = 'self';
        } elseif ($viewer instanceof User) {
            if ($this->friendshipRepository->existsBetweenUsers($viewer, $profileUser)) {
                $friendStatus = 'friends';
            } else {
                $pendingRequest = $this->friendRequestRepository->findPendingBetweenUsers($viewer, $profileUser);
                if ($pendingRequest !== null && $pendingRequest->getFromUserId() instanceof User) {
                    $friendStatus = $pendingRequest->getFromUserId()?->getUserId() === $viewer->getUserId()
                        ? 'request_sent'
                        : 'request_received';
                } else {
                    $friendStatus = 'none';
                }
            }
        }

        return [
            'is_own_profile' => $isOwnProfile,
            'friend_status' => $friendStatus,
            'friends' => array_slice($friends, 0, 12),
            'teams' => $teams,
            'posts' => $postsData,
            'stats' => [
                'friends' => count($friends),
                'teams' => count($teams),
                'posts' => count($postsData),
            ],
            'applied_filters' => [
                'posts_q' => $postsQuery,
                'posts_visibility' => $postsVisibility,
                'posts_sort' => $postsSort,
                'friends_q' => $friendsQuery,
                'friends_sort' => $friendsSort,
                'teams_q' => $teamsQuery,
                'teams_region' => $teamsRegion,
                'teams_sort' => $teamsSort,
            ],
        ];
    }
}
