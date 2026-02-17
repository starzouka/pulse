<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
#[ORM\Table(name: 'comments')]
class Comment
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'comment_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $commentId = null;
    
    #[ORM\ManyToOne(targetEntity: Post::class)]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'post_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le post est obligatoire.')]
    private Post $postId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'author_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'auteur est obligatoire.")]
    private User $authorUserId;
    
    #[ORM\ManyToOne(targetEntity: Comment::class)]
    #[ORM\JoinColumn(name: 'parent_comment_id', referencedColumnName: 'comment_id', nullable: true, onDelete: 'SET NULL')]
    private ?Comment $parentCommentId;
    
    #[ORM\Column(name: 'content_text', type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Le commentaire est obligatoire.')]
    #[Assert\Length(max: 5000)]
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

    public function getPostId(): ?Post
    {
        return $this->postId;
    }

    public function setPostId(?Post $postId): static
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

    public function getParentCommentId(): ?self
    {
        return $this->parentCommentId;
    }

    public function setParentCommentId(?self $parentCommentId): static
    {
        $this->parentCommentId = $parentCommentId;

        return $this;
    }

    public function getContentText(): ?string
    {
        return $this->contentText;
    }

    public function setContentText(string $contentText): static
    {
        $this->contentText = $contentText;

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
