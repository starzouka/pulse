<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
#[ORM\Table(name: 'messages')]
class Message
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'message_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $messageId = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'sender_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $senderUserId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'receiver_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $receiverUserId;
    
    #[ORM\Column(name: 'body_text', type: Types::TEXT)]
    private string $bodyText;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'is_read', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isRead = false;
    
    #[ORM\Column(name: 'read_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $readAt = null;
    
    #[ORM\Column(name: 'is_deleted_by_sender', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isDeletedBySender = false;
    
    #[ORM\Column(name: 'is_deleted_by_receiver', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isDeletedByReceiver = false;

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function setMessageId(?int $messageId): static
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getSenderUserId(): ?User
    {
        return $this->senderUserId;
    }

    public function setSenderUserId(?User $senderUserId): static
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    public function getReceiverUserId(): ?User
    {
        return $this->receiverUserId;
    }

    public function setReceiverUserId(?User $receiverUserId): static
    {
        $this->receiverUserId = $receiverUserId;

        return $this;
    }

    public function getBodyText(): ?string
    {
        return $this->bodyText;
    }

    public function setBodyText(string $bodyText): static
    {
        $this->bodyText = $bodyText;

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

    public function isRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): static
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getReadAt(): ?\DateTime
    {
        return $this->readAt;
    }

    public function setReadAt(?\DateTime $readAt): static
    {
        $this->readAt = $readAt;

        return $this;
    }

    public function isDeletedBySender(): ?bool
    {
        return $this->isDeletedBySender;
    }

    public function setIsDeletedBySender(bool $isDeletedBySender): static
    {
        $this->isDeletedBySender = $isDeletedBySender;

        return $this;
    }

    public function isDeletedByReceiver(): ?bool
    {
        return $this->isDeletedByReceiver;
    }

    public function setIsDeletedByReceiver(bool $isDeletedByReceiver): static
    {
        $this->isDeletedByReceiver = $isDeletedByReceiver;

        return $this;
    }
}
