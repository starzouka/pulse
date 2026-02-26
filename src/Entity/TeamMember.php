<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TeamMemberRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TeamMemberRepository::class)]
#[ORM\Table(name: 'team_members')]
class TeamMember
{
    public const ROSTER_ROLE_CAPTAIN = 'CAPTAIN';
    public const ROSTER_ROLE_CO_CAPTAIN = 'CO_CAPTAIN';
    public const ROSTER_ROLE_STARTER = 'STARTER';
    public const ROSTER_ROLE_SUBSTITUTE = 'SUBSTITUTE';
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'equipe est obligatoire.")]
    private Team $teamId;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'utilisateur est obligatoire.")]
    private User $userId;
    
    #[ORM\Column(name: 'joined_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $joinedAt;
    
    #[ORM\Column(name: 'is_active', type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;
    
    #[ORM\Column(name: 'left_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $leftAt = null;

    #[ORM\Column(name: 'roster_role', type: Types::STRING, length: 20, options: ['default' => self::ROSTER_ROLE_STARTER])]
    private string $rosterRole = self::ROSTER_ROLE_STARTER;

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

    public function getJoinedAt(): ?\DateTime
    {
        return $this->joinedAt;
    }

    public function setJoinedAt(\DateTime $joinedAt): static
    {
        $this->joinedAt = $joinedAt;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getLeftAt(): ?\DateTime
    {
        return $this->leftAt;
    }

    public function setLeftAt(?\DateTime $leftAt): static
    {
        $this->leftAt = $leftAt;

        return $this;
    }

    public function getRosterRole(): string
    {
        return $this->rosterRole;
    }

    public function setRosterRole(string $rosterRole): static
    {
        $normalized = strtoupper(trim($rosterRole));
        if (!in_array($normalized, [
            self::ROSTER_ROLE_CAPTAIN,
            self::ROSTER_ROLE_CO_CAPTAIN,
            self::ROSTER_ROLE_STARTER,
            self::ROSTER_ROLE_SUBSTITUTE,
        ], true)) {
            $normalized = self::ROSTER_ROLE_STARTER;
        }

        $this->rosterRole = $normalized;

        return $this;
    }
}
