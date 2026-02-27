<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GameRepository::class)]
#[ORM\Table(name: 'games')]
#[UniqueEntity(fields: ['name'], message: 'Ce jeu existe deja.')]
#[UniqueEntity(fields: ['slug'], message: 'Ce slug existe deja.')]
class Game
{
    public const STATUS_DRAFT = 'DRAFT';
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PUBLISHED = 'PUBLISHED';
    public const STATUS_ARCHIVED = 'ARCHIVED';

    /**
     * @var list<string>
     */
    public const STATUSES = [
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

    #[ORM\Column(name: 'slug', type: Types::STRING, length: 191, unique: true)]
    #[Assert\NotBlank(message: 'Le slug est obligatoire.')]
    #[Assert\Length(min: 3, max: 191)]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]+(?:-[a-z0-9]+)*-[0-9]+$/',
        message: 'Le slug doit etre au format nom-id (ex: free-fire-19).',
    )]
    private string $slug = '';

    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 5000)]
    private ?string $description = null;

    #[ORM\Column(name: 'publisher', type: Types::STRING, length: 120, nullable: true)]
    #[Assert\Length(max: 120)]
    private ?string $publisher = null;

    #[ORM\Column(name: 'status', type: Types::STRING, length: 10, options: ['default' => self::STATUS_DRAFT])]
    #[Assert\Choice(choices: self::STATUSES, message: 'Statut de jeu invalide.')]
    private string $status = self::STATUS_DRAFT;

    #[ORM\Column(name: 'popularity_score', type: Types::INTEGER, options: ['default' => 0, 'unsigned' => true])]
    #[Assert\PositiveOrZero(message: 'Le score de popularite doit etre positif.')]
    private int $popularityScore = 0;

    #[ORM\Column(name: 'views_count', type: Types::INTEGER, options: ['default' => 0, 'unsigned' => true])]
    #[Assert\PositiveOrZero(message: 'Le compteur de vues doit etre positif.')]
    private int $viewsCount = 0;

    #[ORM\Column(name: 'favorites_count', type: Types::INTEGER, options: ['default' => 0, 'unsigned' => true])]
    #[Assert\PositiveOrZero(message: 'Le compteur de favoris doit etre positif.')]
    private int $favoritesCount = 0;

    #[ORM\Column(name: 'cover_name', type: Types::STRING, length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $coverName = null;

    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'cover_image_id', referencedColumnName: 'image_id', nullable: true, onDelete: 'SET NULL')]
    private ?Image $coverImageId = null;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(name: 'reviewed_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $reviewedAt = null;

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
        $this->name = trim($name);

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $normalized = strtolower(trim($slug));
        $normalized = preg_replace('/[^a-z0-9-]+/', '-', $normalized) ?? $normalized;
        $normalized = trim($normalized, '-');
        $normalized = preg_replace('/-+/', '-', $normalized) ?? $normalized;
        $this->slug = $normalized;

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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $normalizedStatus = strtoupper(trim($status));
        if (!in_array($normalizedStatus, self::STATUSES, true)) {
            $normalizedStatus = self::STATUS_DRAFT;
        }

        $this->status = $normalizedStatus;

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

    public function incrementViewsCount(int $by = 1): static
    {
        $this->viewsCount = max(0, $this->viewsCount + max(0, $by));

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

    public function incrementFavoritesCount(int $by = 1): static
    {
        $this->favoritesCount = max(0, $this->favoritesCount + max(0, $by));

        return $this;
    }

    public function decrementFavoritesCount(int $by = 1): static
    {
        $this->favoritesCount = max(0, $this->favoritesCount - max(0, $by));

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

    public function getReviewedAt(): ?\DateTime
    {
        if (!$this->reviewedAt instanceof \DateTime) {
            return $this->reviewedAt instanceof \DateTimeImmutable
                ? \DateTime::createFromImmutable($this->reviewedAt)
                : null;
        }

        return $this->reviewedAt;
    }

    public function setReviewedAt(?\DateTimeInterface $reviewedAt): static
    {
        $this->reviewedAt = $reviewedAt;

        return $this;
    }
}
