<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TeamInviteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamInviteRepository::class)]
#[ORM\Table(name: 'team_invites')]
class TeamInvite
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'invite_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $inviteId = null;
    
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    private Team $teamId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'invited_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $invitedUserId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'invited_by_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $invitedByUserId;
    
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

    public function getTeamId(): ?Team
    {
        return $this->teamId;
    }

    public function setTeamId(?Team $teamId): static
    {
        $this->teamId = $teamId;

        return $this;
    }

    public function getInvitedUserId(): ?User
    {
        return $this->invitedUserId;
    }

    public function setInvitedUserId(?User $invitedUserId): static
    {
        $this->invitedUserId = $invitedUserId;

        return $this;
    }

    public function getInvitedByUserId(): ?User
    {
        return $this->invitedByUserId;
    }

    public function setInvitedByUserId(?User $invitedByUserId): static
    {
        $this->invitedByUserId = $invitedByUserId;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

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
