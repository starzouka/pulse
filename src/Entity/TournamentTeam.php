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
    #[ORM\Column(name: 'tournament_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $tournamentId;
    
    #[ORM\Id]
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $teamId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'seed', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $seed = null;
    
    #[ORM\Column(name: 'registered_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $registeredAt;
    
    #[ORM\Column(name: 'decided_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $decidedAt = null;
    
    #[ORM\Column(name: 'decided_by_user_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $decidedByUserId = null;
    
    #[ORM\Column(name: 'checked_in', type: Types::BOOLEAN, options: ['default' => false])]
    private bool $checkedIn = false;
    
    #[ORM\Column(name: 'checkin_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $checkinAt = null;

    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }

    public function setTournamentId(int $tournamentId): static
    {
        $this->tournamentId = $tournamentId;

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

    public function getStatus(): string
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

    public function getRegisteredAt(): \DateTimeInterface
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(\DateTimeInterface $registeredAt): static
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    public function getDecidedAt(): ?\DateTimeInterface
    {
        return $this->decidedAt;
    }

    public function setDecidedAt(?\DateTimeInterface $decidedAt): static
    {
        $this->decidedAt = $decidedAt;

        return $this;
    }

    public function getDecidedByUserId(): ?int
    {
        return $this->decidedByUserId;
    }

    public function setDecidedByUserId(?int $decidedByUserId): static
    {
        $this->decidedByUserId = $decidedByUserId;

        return $this;
    }

    public function isCheckedIn(): bool
    {
        return $this->checkedIn;
    }

    public function setCheckedIn(bool $checkedIn): static
    {
        $this->checkedIn = $checkedIn;

        return $this;
    }

    public function getCheckinAt(): ?\DateTimeInterface
    {
        return $this->checkinAt;
    }

    public function setCheckinAt(?\DateTimeInterface $checkinAt): static
    {
        $this->checkinAt = $checkinAt;

        return $this;
    }
}
