<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TeamJoinRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamJoinRequestRepository::class)]
#[ORM\Table(name: 'team_join_requests')]
class TeamJoinRequest
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'request_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $requestId = null;
    
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    private Team $teamId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $userId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'note', type: Types::STRING, length: 255, nullable: true)]
    private ?string $note = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'responded_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $respondedAt = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'responded_by_captain_id', referencedColumnName: 'user_id', nullable: true, onDelete: 'SET NULL')]
    private ?User $respondedByCaptainId;

    public function getRequestId(): ?int
    {
        return $this->requestId;
    }

    public function setRequestId(?int $requestId): static
    {
        $this->requestId = $requestId;

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

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;

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

    public function getRespondedByCaptainId(): ?User
    {
        return $this->respondedByCaptainId;
    }

    public function setRespondedByCaptainId(?User $respondedByCaptainId): static
    {
        $this->respondedByCaptainId = $respondedByCaptainId;

        return $this;
    }
}
