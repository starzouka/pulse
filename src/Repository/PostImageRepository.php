<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Image;
use App\Entity\Post;
use App\Entity\PostImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostImage::class);
    }

    /**
     * @param list<Post> $posts
     *
     * @return array<int, list<Image>>
     */
    public function findImagesByPosts(array $posts): array
    {
        if ($posts === []) {
            return [];
        }

        $postImages = $this->createQueryBuilder('postImage')
            ->leftJoin('postImage.imageId', 'image')
            ->addSelect('image')
            ->andWhere('postImage.postId IN (:posts)')
            ->setParameter('posts', $posts)
            ->orderBy('postImage.postId', 'ASC')
            ->addOrderBy('postImage.position', 'ASC')
            ->getQuery()
            ->getResult();

        $imagesByPost = [];
        foreach ($postImages as $postImage) {
            if (!$postImage instanceof PostImage) {
                continue;
            }

            $postId = $postImage->getPostId()?->getPostId();
            $image = $postImage->getImageId();
            if ($postId === null || !$image instanceof Image) {
                continue;
            }

            if (!isset($imagesByPost[$postId])) {
                $imagesByPost[$postId] = [];
            }

            $imagesByPost[$postId][] = $image;
        }

        return $imagesByPost;
    }
}
