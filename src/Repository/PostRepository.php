<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * @return list<Post>
     */
    public function findLatestVisible(int $limit = 25): array
    {
        return $this->createQueryBuilder('post')
            ->andWhere('(post.isDeleted = :isDeleted OR post.isDeleted IS NULL)')
            ->setParameter('isDeleted', false)
            ->orderBy('post.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Post>
     */
    public function findLatestVisiblePaged(int $limit = 25, int $offset = 0): array
    {
        return $this->searchVisiblePaged(
            query: null,
            visibility: null,
            author: null,
            sort: 'latest',
            limit: $limit,
            offset: $offset,
        );
    }

    /**
     * @return list<Post>
     */
    public function findLatestByAuthor(User $author, int $limit = 25): array
    {
        return $this->searchVisiblePaged(
            query: null,
            visibility: null,
            author: $author,
            sort: 'latest',
            limit: $limit,
            offset: 0,
        );
    }

    /**
     * @return list<Post>
     */
    public function searchVisiblePaged(
        ?string $query = null,
        ?string $visibility = null,
        ?User $author = null,
        string $sort = 'latest',
        int $limit = 25,
        int $offset = 0
    ): array {
        $safeLimit = max(1, min(80, $limit));
        $safeOffset = max(0, $offset);

        $builder = $this->createQueryBuilder('post')
            ->leftJoin('post.authorUserId', 'author')
            ->addSelect('author')
            ->andWhere('(post.isDeleted = :isDeleted OR post.isDeleted IS NULL)')
            ->setParameter('isDeleted', false)
            ->setFirstResult($safeOffset)
            ->setMaxResults($safeLimit);

        if ($author instanceof User) {
            $builder
                ->andWhere('post.authorUserId = :author')
                ->setParameter('author', $author);
        }

        $visibilityValue = strtoupper(trim((string) $visibility));
        if (in_array($visibilityValue, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $builder
                ->andWhere('post.visibility = :visibility')
                ->setParameter('visibility', $visibilityValue);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(COALESCE(post.contentText, \'\')) LIKE :query
                    OR LOWER(author.username) LIKE :query
                    OR LOWER(author.displayName) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('post.createdAt', 'ASC')
                    ->addOrderBy('post.postId', 'ASC');
                break;

            case 'liked':
                $builder
                    ->addSelect('(SELECT COUNT(postLikeSub.userId) FROM App\Entity\PostLike postLikeSub WHERE postLikeSub.postId = post) AS HIDDEN likesCount')
                    ->orderBy('likesCount', 'DESC')
                    ->addOrderBy('post.createdAt', 'DESC');
                break;

            case 'commented':
                $builder
                    ->addSelect('(SELECT COUNT(commentSub.commentId) FROM App\Entity\Comment commentSub WHERE commentSub.postId = post AND commentSub.isDeleted = false) AS HIDDEN commentsCount')
                    ->orderBy('commentsCount', 'DESC')
                    ->addOrderBy('post.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('post.createdAt', 'DESC')
                    ->addOrderBy('post.postId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<Post>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $visibility,
        ?bool $isDeleted,
        ?string $authorSearch,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('post')
            ->leftJoin('post.authorUserId', 'author')
            ->addSelect('author')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(post.contentText, \'\')) LIKE :query')
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $visibilityValue = strtoupper(trim((string) $visibility));
        if (in_array($visibilityValue, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $builder
                ->andWhere('post.visibility = :visibility')
                ->setParameter('visibility', $visibilityValue);
        }

        if ($isDeleted !== null) {
            $builder
                ->andWhere('post.isDeleted = :isDeleted')
                ->setParameter('isDeleted', $isDeleted);
        }

        $authorQuery = trim((string) $authorSearch);
        if ($authorQuery !== '') {
            $builder
                ->andWhere(
                    'LOWER(author.username) LIKE :authorQuery
                    OR LOWER(author.email) LIKE :authorQuery
                    OR LOWER(author.displayName) LIKE :authorQuery'
                )
                ->setParameter('authorQuery', '%' . mb_strtolower($authorQuery) . '%');
        }

        $sortKey = strtolower(trim($sortBy));
        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';

        switch ($sortKey) {
            case 'id':
                $builder
                    ->orderBy('post.postId', $sortDirection);
                break;

            case 'author':
                $builder
                    ->orderBy('author.username', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'content':
                $builder
                    ->orderBy('post.contentText', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'visibility':
                $builder
                    ->orderBy('post.visibility', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'deleted':
                $builder
                    ->orderBy('post.isDeleted', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'images':
                $builder
                    ->addSelect('(SELECT COUNT(postImageSub.imageId) FROM App\Entity\PostImage postImageSub WHERE postImageSub.postId = post) AS HIDDEN imagesCount')
                    ->orderBy('imagesCount', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'comments':
                $builder
                    ->addSelect('(SELECT COUNT(commentSub.commentId) FROM App\Entity\Comment commentSub WHERE commentSub.postId = post) AS HIDDEN commentsCount')
                    ->orderBy('commentsCount', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'likes':
                $builder
                    ->addSelect('(SELECT COUNT(postLikeSub.userId) FROM App\Entity\PostLike postLikeSub WHERE postLikeSub.postId = post) AS HIDDEN likesCount')
                    ->orderBy('likesCount', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('post.createdAt', $sortDirection)
                    ->addOrderBy('post.postId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }
}
