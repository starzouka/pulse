<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'friend_requests')]
class FriendRequest
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'request_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $requestId = null;
    
    #[ORM\Column(name: 'from_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $fromUserId;
    
    #[ORM\Column(name: 'to_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $toUserId;
    
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

    public function getFromUserId(): int
    {
        return $this->fromUserId;
    }

    public function setFromUserId(int $fromUserId): static
    {
        $this->fromUserId = $fromUserId;

        return $this;
    }

    public function getToUserId(): int
    {
        return $this->toUserId;
    }

    public function setToUserId(int $toUserId): static
    {
        $this->toUserId = $toUserId;

        return $this;
    }

    public function getStatus(): string
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

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getRespondedAt(): ?\DateTimeInterface
    {
        return $this->respondedAt;
    }

    public function setRespondedAt(?\DateTimeInterface $respondedAt): static
    {
        $this->respondedAt = $respondedAt;

        return $this;
    }
}
