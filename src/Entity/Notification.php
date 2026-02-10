<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
#[ORM\Table(name: 'notifications')]
class Notification
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'notification_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $notificationId = null;
    
    #[ORM\Column(name: 'user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $userId;
    
    #[ORM\Column(name: 'type', type: Types::STRING, length: 25)]
    private string $type;
    
    #[ORM\Column(name: 'ref_table', type: Types::STRING, length: 64, nullable: true)]
    private ?string $refTable = null;
    
    #[ORM\Column(name: 'ref_id', type: Types::BIGINT, nullable: true, options: ['unsigned' => true])]
    private ?string $refId = null;
    
    #[ORM\Column(name: 'content', type: Types::STRING, length: 255)]
    private string $content;
    
    #[ORM\Column(name: 'is_read', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isRead = false;
    
    #[ORM\Column(name: 'read_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $readAt = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getNotificationId(): ?int
    {
        return $this->notificationId;
    }

    public function setNotificationId(?int $notificationId): static
    {
        $this->notificationId = $notificationId;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getRefTable(): ?string
    {
        return $this->refTable;
    }

    public function setRefTable(?string $refTable): static
    {
        $this->refTable = $refTable;

        return $this;
    }

    public function getRefId(): ?string
    {
        return $this->refId;
    }

    public function setRefId(?string $refId): static
    {
        $this->refId = $refId;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): static
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getReadAt(): ?\DateTimeInterface
    {
        return $this->readAt;
    }

    public function setReadAt(?\DateTimeInterface $readAt): static
    {
        $this->readAt = $readAt;

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
}
