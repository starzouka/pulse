<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
#[ORM\Table(name: 'games')]
class Game
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'game_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $gameId = null;
    
    #[ORM\Column(name: 'category_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $categoryId;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 120)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'publisher', type: Types::STRING, length: 120, nullable: true)]
    private ?string $publisher = null;
    
    #[ORM\Column(name: 'cover_image_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $coverImageId = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getGameId(): ?int
    {
        return $this->gameId;
    }

    public function setGameId(?int $gameId): static
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): static
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getCoverImageId(): ?int
    {
        return $this->coverImageId;
    }

    public function setCoverImageId(?int $coverImageId): static
    {
        $this->coverImageId = $coverImageId;

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
