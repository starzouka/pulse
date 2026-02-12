<?php

declare(strict_types=1);

namespace App\Service\Profile;

use App\Entity\Team;
use App\Entity\User;
use App\Repository\CommentRepository;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\TeamMemberRepository;

final class ProfilePageDataProvider
{
    public function __construct(
        private readonly PostRepository $postRepository,
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
     *     likes_count: int,
     *     comments_count: int,
     *     is_liked_by_viewer: bool,
     *     comments: list<\App\Entity\Comment>
     *   }>,
     *   stats: array{friends: int, teams: int, posts: int}
     * }
     */
    public function build(User $profileUser, ?User $viewer): array
    {
        $isOwnProfile = $viewer instanceof User
            && $viewer->getUserId() !== null
            && $viewer->getUserId() === $profileUser->getUserId();

        $friendships = $this->friendshipRepository->findByUser($profileUser, 200);
        $friendsById = [];
        foreach ($friendships as $friendship) {
            $firstUser = $friendship->getUserId1();
            $secondUser = $friendship->getUserId2();
            if (!$firstUser instanceof User || !$secondUser instanceof User) {
                continue;
            }

            $friend = $firstUser->getUserId() === $profileUser->getUserId() ? $secondUser : $firstUser;
            $friendId = $friend->getUserId();
            if ($friendId === null) {
                continue;
            }

            $friendsById[$friendId] = $friend;
        }

        $friends = array_values($friendsById);

        $teamMembers = $this->teamMemberRepository->findActiveByUser($profileUser, 20);
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

        $posts = $this->postRepository->findBy(
            ['authorUserId' => $profileUser, 'isDeleted' => false],
            ['createdAt' => 'DESC'],
            25,
        );

        $postsData = [];
        foreach ($posts as $post) {
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
        ];
    }
}

