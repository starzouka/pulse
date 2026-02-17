<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TournamentMatchRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TournamentMatchRepository::class)]
#[ORM\Table(name: 'matches')]
class TournamentMatch
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'match_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $matchId = null;
    
    #[ORM\ManyToOne(targetEntity: Tournament::class)]
    #[ORM\JoinColumn(name: 'tournament_id', referencedColumnName: 'tournament_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le tournoi est obligatoire.')]
    private Tournament $tournamentId;
    
    #[ORM\Column(name: 'scheduled_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $scheduledAt = null;
    
    #[ORM\Column(name: 'round_name', type: Types::STRING, length: 80, nullable: true)]
    #[Assert\Length(max: 80)]
    private ?string $roundName = null;
    
    #[ORM\Column(name: 'best_of', type: Types::SMALLINT, nullable: true, options: ['unsigned' => true])]
    #[Assert\Choice(choices: [1, 3, 5], message: 'Le format BO est invalide.')]
    private ?int $bestOf = null;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'SCHEDULED'])]
    #[Assert\Choice(choices: ['SCHEDULED', 'ONGOING', 'FINISHED', 'CANCELLED'], message: 'Statut invalide.')]
    private string $status = 'SCHEDULED';
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'result_submitted_by_user_id', referencedColumnName: 'user_id', nullable: true, onDelete: 'SET NULL')]
    private ?User $resultSubmittedByUserId;

    public function getMatchId(): ?int
    {
        return $this->matchId;
    }

    public function setMatchId(?int $matchId): static
    {
        $this->matchId = $matchId;

        return $this;
    }

    public function getTournamentId(): ?Tournament
    {
        return $this->tournamentId;
    }

    public function setTournamentId(?Tournament $tournamentId): static
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    public function getScheduledAt(): ?\DateTime
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(?\DateTime $scheduledAt): static
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

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

    public function getResultSubmittedByUserId(): ?User
    {
        return $this->resultSubmittedByUserId;
    }

    public function setResultSubmittedByUserId(?User $resultSubmittedByUserId): static
    {
        $this->resultSubmittedByUserId = $resultSubmittedByUserId;

        return $this;
    }
}
