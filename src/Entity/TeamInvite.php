<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'team_invites')]
class TeamInvite
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'invite_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $inviteId = null;
    
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $teamId;
    
    #[ORM\Column(name: 'invited_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $invitedUserId;
    
    #[ORM\Column(name: 'invited_by_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $invitedByUserId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'message', type: Types::STRING, length: 255, nullable: true)]
    private ?string $message = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'responded_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $respondedAt = null;

    public function getInviteId(): ?int
    {
        return $this->inviteId;
    }

    public function setInviteId(?int $inviteId): static
    {
        $this->inviteId = $inviteId;

        return $this;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): static
    {
        $this->teamId = $teamId;

        return $this;
    }

    public function getInvitedUserId(): int
    {
        return $this->invitedUserId;
    }

    public function setInvitedUserId(int $invitedUserId): static
    {
        $this->invitedUserId = $invitedUserId;

        return $this;
    }

    public function getInvitedByUserId(): int
    {
        return $this->invitedByUserId;
    }

    public function setInvitedByUserId(int $invitedByUserId): static
    {
        $this->invitedByUserId = $invitedByUserId;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

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
