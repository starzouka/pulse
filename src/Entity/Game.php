<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: GameRepository::class)]
#[ORM\Table(name: 'games')]
#[UniqueEntity(fields: ['name'], message: 'Ce jeu existe deja.')]
#[UniqueEntity(fields: ['slug'], message: 'Le slug du jeu doit etre unique.')]
#[Vich\Uploadable]
class Game
{
    public const STATUS_DRAFT = 'DRAFT';
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PUBLISHED = 'PUBLISHED';
    public const STATUS_ARCHIVED = 'ARCHIVED';
    /** @var list<string> */
    public const ALLOWED_STATUSES = [
        self::STATUS_DRAFT,
        self::STATUS_PENDING,
        self::STATUS_PUBLISHED,
        self::STATUS_ARCHIVED,
    ];
    
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

    #[Gedmo\Slug(fields: ['name'], updatable: true, unique: true, separator: '-')]
    #[ORM\Column(name: 'slug', type: Types::STRING, length: 160, unique: true)]
    private string $slug = '';
    
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

    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(name: 'status', type: Types::STRING, length: 20, options: ['default' => self::STATUS_DRAFT])]
    #[Assert\Choice(choices: self::ALLOWED_STATUSES, message: 'Statut jeu invalide.')]
    private string $status = self::STATUS_DRAFT;

    #[ORM\Column(name: 'popularity_score', type: Types::INTEGER, options: ['default' => 0])]
    private int $popularityScore = 0;

    #[ORM\Column(name: 'views_count', type: Types::INTEGER, options: ['default' => 0])]
    private int $viewsCount = 0;

    #[ORM\Column(name: 'favorites_count', type: Types::INTEGER, options: ['default' => 0])]
    private int $favoritesCount = 0;

    #[ORM\Column(name: 'cover_name', type: Types::STRING, length: 255, nullable: true)]
    private ?string $coverName = null;

    #[Vich\UploadableField(mapping: 'game_cover', fileNameProperty: 'coverName')]
    private ?File $coverFile = null;

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

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = trim($slug);

        return $this;
    }

    public function getSeoIdentifier(): string
    {
        $slug = trim($this->slug);
        $gameId = $this->gameId;
        if (!is_int($gameId) || $gameId <= 0) {
            return $slug;
        }

        $idSuffix = '-' . $gameId;
        if ($slug !== '' && str_ends_with($slug, $idSuffix)) {
            return $slug;
        }

        $baseSlug = preg_replace('/-\d+$/', '', $slug);
        $baseSlug = trim((string) $baseSlug, '-');
        if ($baseSlug === '') {
            $baseSlug = 'game';
        }

        return $baseSlug . $idSuffix;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $normalized = strtoupper(trim($status));
        if (!in_array($normalized, self::ALLOWED_STATUSES, true)) {
            $normalized = self::STATUS_DRAFT;
        }

        $this->status = $normalized;

        return $this;
    }

    public function getPopularityScore(): int
    {
        return $this->popularityScore;
    }

    public function setPopularityScore(int $popularityScore): static
    {
        $this->popularityScore = max(0, $popularityScore);

        return $this;
    }

    public function getViewsCount(): int
    {
        return $this->viewsCount;
    }

    public function setViewsCount(int $viewsCount): static
    {
        $this->viewsCount = max(0, $viewsCount);

        return $this;
    }

    public function incrementViewsCount(): static
    {
        $this->viewsCount++;

        return $this;
    }

    public function getFavoritesCount(): int
    {
        return $this->favoritesCount;
    }

    public function setFavoritesCount(int $favoritesCount): static
    {
        $this->favoritesCount = max(0, $favoritesCount);

        return $this;
    }

    public function getCoverName(): ?string
    {
        return $this->coverName;
    }

    public function setCoverName(?string $coverName): static
    {
        $this->coverName = $coverName;

        return $this;
    }

    public function getCoverFile(): ?File
    {
        return $this->coverFile;
    }

    public function setCoverFile(?File $coverFile): static
    {
        $this->coverFile = $coverFile;

        if ($coverFile !== null) {
            $this->updatedAt = new \DateTime();
        }

        return $this;
    }

    public function getCoverPublicPath(): ?string
    {
        if ($this->coverName === null || trim($this->coverName) === '') {
            return null;
        }

        return '/uploads/games/' . ltrim($this->coverName, '/');
    }
}
