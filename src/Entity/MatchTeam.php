<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\MatchTeamRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatchTeamRepository::class)]
#[ORM\Table(name: 'match_teams')]
class MatchTeam
{
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: TournamentMatch::class)]
    #[ORM\JoinColumn(name: 'match_id', referencedColumnName: 'match_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le match est obligatoire.')]
    private TournamentMatch $matchId;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'equipe est obligatoire.")]
    private Team $teamId;
    
    #[ORM\Column(name: 'score', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    #[Assert\PositiveOrZero(message: 'Le score doit etre superieur ou egal a 0.')]
    private ?int $score = null;
    
    #[ORM\Column(name: 'is_winner', type: Types::BOOLEAN, nullable: true)]
    private ?bool $isWinner = null;

    public function getMatchId(): ?TournamentMatch
    {
        return $this->matchId;
    }

    public function setMatchId(?TournamentMatch $matchId): static
    {
        $this->matchId = $matchId;

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

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function isWinner(): ?bool
    {
        return $this->isWinner;
    }

    public function setIsWinner(?bool $isWinner): static
    {
        $this->isWinner = $isWinner;

        return $this;
    }
}
