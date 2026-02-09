<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'matches')]
class TournamentMatch
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'match_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $matchId = null;
    
    #[ORM\Column(name: 'tournament_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $tournamentId;
    
    #[ORM\Column(name: 'scheduled_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $scheduledAt = null;
    
    #[ORM\Column(name: 'round_name', type: Types::STRING, length: 80, nullable: true)]
    private ?string $roundName = null;
    
    #[ORM\Column(name: 'best_of', type: Types::SMALLINT, nullable: true, options: ['unsigned' => true])]
    private ?int $bestOf = null;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'SCHEDULED'])]
    private string $status = 'SCHEDULED';
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;
    
    #[ORM\Column(name: 'result_submitted_by_user_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $resultSubmittedByUserId = null;

    public function getMatchId(): ?int
    {
        return $this->matchId;
    }

    public function setMatchId(?int $matchId): static
    {
        $this->matchId = $matchId;

        return $this;
    }

    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }

    public function setTournamentId(int $tournamentId): static
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    public function getScheduledAt(): ?\DateTimeInterface
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(?\DateTimeInterface $scheduledAt): static
    {
        $this->scheduledAt = $scheduledAt;

        return $this;
    }

    public function getRoundName(): ?string
    {
        return $this->roundName;
    }

    public function setRoundName(?string $roundName): static
    {
        $this->roundName = $roundName;

        return $this;
    }

    public function getBestOf(): ?int
    {
        return $this->bestOf;
    }

    public function setBestOf(?int $bestOf): static
    {
        $this->bestOf = $bestOf;

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

    public function getResultSubmittedByUserId(): ?int
    {
        return $this->resultSubmittedByUserId;
    }

    public function setResultSubmittedByUserId(?int $resultSubmittedByUserId): static
    {
        $this->resultSubmittedByUserId = $resultSubmittedByUserId;

        return $this;
    }
}
