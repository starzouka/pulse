<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Table(name: 'posts')]
class Post
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'post_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $postId = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'author_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'auteur est obligatoire.")]
    private User $authorUserId;
    
    #[ORM\Column(name: 'content_text', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 5000)]
    private ?string $contentText = null;
    
    #[ORM\Column(name: 'visibility', type: Types::STRING, length: 9, options: ['default' => 'PUBLIC'])]
    #[Assert\Choice(choices: ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], message: 'Visibilite invalide.')]
    private string $visibility = 'PUBLIC';
    
    #[ORM\Column(name: 'is_deleted', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isDeleted = false;
    
    #[ORM\Column(name: 'deleted_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deletedAt = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getPostId(): ?int
    {
        return $this->postId;
    }

    public function setPostId(?int $postId): static
    {
        $this->postId = $postId;

        return $this;
    }

    public function getAuthorUserId(): ?User
    {
        return $this->authorUserId;
    }

    public function setAuthorUserId(?User $authorUserId): static
    {
        $this->authorUserId = $authorUserId;

        return $this;
    }

    public function getContentText(): ?string
    {
        return $this->contentText;
    }

    public function setContentText(?string $contentText): static
    {
        $this->contentText = $contentText;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): static
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): static
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTime $deletedAt): static
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
