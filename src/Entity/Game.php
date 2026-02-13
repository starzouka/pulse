<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GameRepository::class)]
#[ORM\Table(name: 'games')]
#[UniqueEntity(fields: ['name'], message: 'Ce jeu existe deja.')]
class Game
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'game_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $gameId = null;
    
    #[ORM\ManyToOne(targetEntity: Category::class)]
    #[ORM\JoinColumn(name: 'category_id', referencedColumnName: 'category_id', nullable: false, onDelete: 'RESTRICT')]
    #[Assert\NotNull(message: 'La categorie est obligatoire.')]
    private Category $categoryId;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 120)]
    #[Assert\NotBlank(message: 'Le nom du jeu est obligatoire.')]
    #[Assert\Length(min: 2, max: 120)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 5000)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'publisher', type: Types::STRING, length: 120, nullable: true)]
    #[Assert\Length(max: 120)]
    private ?string $publisher = null;
    
    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'cover_image_id', referencedColumnName: 'image_id', nullable: true, onDelete: 'SET NULL')]
    private ?Image $coverImageId;
    
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

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategoryId(?Category $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getName(): ?string
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

    public function getCoverImageId(): ?Image
    {
        return $this->coverImageId;
    }

    public function setCoverImageId(?Image $coverImageId): static
    {
        $this->coverImageId = $coverImageId;

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
}
