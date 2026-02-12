<?php

declare(strict_types=1);

namespace App\Service\Post;

use App\Entity\User;
use App\Repository\CommentRepository;
use App\Repository\PostImageRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;

final class FeedPostAssembler
{
    public function __construct(
        private readonly PostRepository $postRepository,
        private readonly PostImageRepository $postImageRepository,
        private readonly PostLikeRepository $postLikeRepository,
        private readonly CommentRepository $commentRepository,
    ) {
    }

    /**
     * @return list<array{
     *   post:\App\Entity\Post,
     *   images:list<\App\Entity\Image>,
     *   likes_count:int,
     *   comments_count:int,
     *   latest_comments:list<\App\Entity\Comment>,
     *   is_liked_by_viewer:bool
     * }>
     */
    public function latest(?User $viewerUser, int $limit = 10, int $offset = 0): array
    {
        $posts = $this->postRepository->findLatestVisiblePaged($limit, $offset);
        if ($posts === []) {
            return [];
        }

        $imagesByPostId = $this->postImageRepository->findImagesByPosts($posts);
        $feedPosts = [];

        foreach ($posts as $post) {
            $postId = $post->getPostId();
            $feedPosts[] = [
                'post' => $post,
                'images' => $postId !== null ? ($imagesByPostId[$postId] ?? []) : [],
                'likes_count' => $this->postLikeRepository->count(['postId' => $post]),
                'comments_count' => $this->commentRepository->count(['postId' => $post, 'isDeleted' => false]),
                'latest_comments' => array_reverse($this->commentRepository->findLatestRootCommentsForPost($post, 2)),
                'is_liked_by_viewer' => $viewerUser instanceof User
                    ? ($this->postLikeRepository->findOneByPostAndUser($post, $viewerUser) !== null)
                    : false,
            ];
        }

        return $feedPosts;
    }
}
