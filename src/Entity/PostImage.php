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
    #[ORM\Column(name: 'post_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $postId;
    
    #[ORM\Id]
    #[ORM\Column(name: 'image_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $imageId;
    
    #[ORM\Column(name: 'position', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 1])]
    private int $position = 1;

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): static
    {
        $this->postId = $postId;

        return $this;
    }

    public function getImageId(): int
    {
        return $this->imageId;
    }

    public function setImageId(int $imageId): static
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }
}
