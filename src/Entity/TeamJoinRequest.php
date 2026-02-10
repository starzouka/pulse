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
    
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $teamId;
    
    #[ORM\Column(name: 'user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $userId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'note', type: Types::STRING, length: 255, nullable: true)]
    private ?string $note = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'responded_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $respondedAt = null;
    
    #[ORM\Column(name: 'responded_by_captain_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $respondedByCaptainId = null;

    public function getRequestId(): ?int
    {
        return $this->requestId;
    }

    public function setRequestId(?int $requestId): static
    {
        $this->requestId = $requestId;

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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): static
    {
        $this->userId = $userId;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;

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

    public function getRespondedByCaptainId(): ?int
    {
        return $this->respondedByCaptainId;
    }

    public function setRespondedByCaptainId(?int $respondedByCaptainId): static
    {
        $this->respondedByCaptainId = $respondedByCaptainId;

        return $this;
    }
}
