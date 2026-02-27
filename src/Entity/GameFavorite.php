<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\GameFavoriteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GameFavoriteRepository::class)]
#[ORM\Table(name: 'game_favorites')]
class GameFavorite
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Utilisateur favori requis.')]
    private User $userId;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Game::class)]
    #[ORM\JoinColumn(name: 'game_id', referencedColumnName: 'game_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Jeu favori requis.')]
    private Game $gameId;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getGameId(): ?Game
    {
        return $this->gameId;
    }

    public function setGameId(?Game $gameId): static
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
