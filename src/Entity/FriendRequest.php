<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\FriendRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FriendRequestRepository::class)]
#[ORM\Table(name: 'friend_requests')]
class FriendRequest
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'request_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $requestId = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'from_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $fromUserId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'to_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $toUserId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'request_message', type: Types::STRING, length: 255, nullable: true)]
    private ?string $requestMessage = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'responded_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $respondedAt = null;

    public function getRequestId(): ?int
    {
        return $this->requestId;
    }

    public function setRequestId(?int $requestId): static
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getFromUserId(): ?User
    {
        return $this->fromUserId;
    }

    public function setFromUserId(?User $fromUserId): static
    {
        $this->fromUserId = $fromUserId;

        return $this;
    }

    public function getToUserId(): ?User
    {
        return $this->toUserId;
    }

    public function setToUserId(?User $toUserId): static
    {
        $this->toUserId = $toUserId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getRequestMessage(): ?string
    {
        return $this->requestMessage;
    }

    public function setRequestMessage(?string $requestMessage): static
    {
        $this->requestMessage = $requestMessage;

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

    public function getRespondedAt(): ?\DateTime
    {
        return $this->respondedAt;
    }

    public function setRespondedAt(?\DateTime $respondedAt): static
    {
        $this->respondedAt = $respondedAt;

        return $this;
    }
}
