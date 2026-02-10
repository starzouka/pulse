<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
#[ORM\Table(name: 'comments')]
class Comment
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'comment_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $commentId = null;
    
    #[ORM\Column(name: 'post_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $postId;
    
    #[ORM\Column(name: 'author_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $authorUserId;
    
    #[ORM\Column(name: 'parent_comment_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $parentCommentId = null;
    
    #[ORM\Column(name: 'content_text', type: Types::TEXT)]
    private string $contentText;
    
    #[ORM\Column(name: 'is_deleted', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isDeleted = false;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getCommentId(): ?int
    {
        return $this->commentId;
    }

    public function setCommentId(?int $commentId): static
    {
        $this->commentId = $commentId;

        return $this;
    }

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): static
    {
        $this->postId = $postId;

        return $this;
    }

    public function getAuthorUserId(): int
    {
        return $this->authorUserId;
    }

    public function setAuthorUserId(int $authorUserId): static
    {
        $this->authorUserId = $authorUserId;

        return $this;
    }

    public function getParentCommentId(): ?int
    {
        return $this->parentCommentId;
    }

    public function setParentCommentId(?int $parentCommentId): static
    {
        $this->parentCommentId = $parentCommentId;

        return $this;
    }

    public function getContentText(): string
    {
        return $this->contentText;
    }

    public function setContentText(string $contentText): static
    {
        $this->contentText = $contentText;

        return $this;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): static
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
