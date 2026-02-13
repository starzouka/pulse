<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\PostImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostImageRepository::class)]
#[ORM\Table(name: 'post_images')]
class PostImage
{
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Post::class)]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'post_id', nullable: false, onDelete: 'CASCADE')]
    private Post $postId;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'image_id', referencedColumnName: 'image_id', nullable: false, onDelete: 'RESTRICT')]
    private Image $imageId;
    
    #[ORM\Column(name: 'position', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 1])]
    private int $position = 1;

    public function getPostId(): ?Post
    {
        return $this->postId;
    }

    public function setPostId(?Post $postId): static
    {
        $this->postId = $postId;

        return $this;
    }

    public function getImageId(): ?Image
    {
        return $this->imageId;
    }

    public function setImageId(?Image $imageId): static
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }
}
