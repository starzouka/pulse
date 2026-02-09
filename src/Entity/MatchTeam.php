<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'match_teams')]
class MatchTeam
{
    
    #[ORM\Id]
    #[ORM\Column(name: 'match_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $matchId;
    
    #[ORM\Id]
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $teamId;
    
    #[ORM\Column(name: 'score', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $score = null;
    
    #[ORM\Column(name: 'is_winner', type: Types::BOOLEAN, nullable: true)]
    private ?bool $isWinner = null;

    public function getMatchId(): int
    {
        return $this->matchId;
    }

    public function setMatchId(int $matchId): static
    {
        $this->matchId = $matchId;

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
