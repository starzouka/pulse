<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\GameFavoriteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: GameFavoriteRepository::class)]
#[ORM\Table(name: 'game_favorites')]
#[ORM\UniqueConstraint(name: 'uniq_game_favorite_user_game', columns: ['user_id', 'game_id'])]
#[UniqueEntity(fields: ['userId', 'gameId'], message: 'Ce jeu est deja en favoris pour cet utilisateur.')]
class GameFavorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'favorite_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $favoriteId = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private User $userId;

    #[ORM\ManyToOne(targetEntity: Game::class)]
    #[ORM\JoinColumn(name: 'game_id', referencedColumnName: 'game_id', nullable: false, onDelete: 'CASCADE')]
    private Game $gameId;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getFavoriteId(): ?int
    {
        return $this->favoriteId;
    }

    public function getUserId(): User
    {
        return $this->userId;
    }

    public function setUserId(User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getGameId(): Game
    {
        return $this->gameId;
    }

    public function setGameId(Game $gameId): static
    {
        $this->gameId = $gameId;

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
}
