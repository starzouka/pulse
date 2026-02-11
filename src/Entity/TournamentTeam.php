<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournamentTeamRepository::class)]
#[ORM\Table(name: 'tournament_teams')]
class TournamentTeam
{
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Tournament::class)]
    #[ORM\JoinColumn(name: 'tournament_id', referencedColumnName: 'tournament_id', nullable: false, onDelete: 'CASCADE')]
    private Tournament $tournamentId;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    private Team $teamId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'seed', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $seed = null;
    
    #[ORM\Column(name: 'registered_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $registeredAt;
    
    #[ORM\Column(name: 'decided_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $decidedAt = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'decided_by_user_id', referencedColumnName: 'user_id', nullable: true, onDelete: 'SET NULL')]
    private ?User $decidedByUserId;
    
    #[ORM\Column(name: 'checked_in', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $checkedIn = false;
    
    #[ORM\Column(name: 'checkin_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $checkinAt = null;

    public function getTournamentId(): ?Tournament
    {
        return $this->tournamentId;
    }

    public function setTournamentId(?Tournament $tournamentId): static
    {
        $this->tournamentId = $tournamentId;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getSeed(): ?int
    {
        return $this->seed;
    }

    public function setSeed(?int $seed): static
    {
        $this->seed = $seed;

        return $this;
    }

    public function getRegisteredAt(): ?\DateTime
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(\DateTime $registeredAt): static
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    public function getDecidedAt(): ?\DateTime
    {
        return $this->decidedAt;
    }

    public function setDecidedAt(?\DateTime $decidedAt): static
    {
        $this->decidedAt = $decidedAt;

        return $this;
    }

    public function getDecidedByUserId(): ?User
    {
        return $this->decidedByUserId;
    }

    public function setDecidedByUserId(?User $decidedByUserId): static
    {
        $this->decidedByUserId = $decidedByUserId;

        return $this;
    }

    public function isCheckedIn(): ?bool
    {
        return $this->checkedIn;
    }

    public function setCheckedIn(bool $checkedIn): static
    {
        $this->checkedIn = $checkedIn;

        return $this;
    }

    public function getCheckinAt(): ?\DateTime
    {
        return $this->checkinAt;
    }

    public function setCheckinAt(?\DateTime $checkinAt): static
    {
        $this->checkinAt = $checkinAt;

        return $this;
    }
}
