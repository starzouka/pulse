<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\ProductRatingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductRatingRepository::class)]
#[ORM\Table(name: 'product_ratings')]
#[UniqueEntity(fields: ['product', 'user'], message: 'Vous avez déjà noté ce produit.')]
class ProductRating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'rating_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $ratingId = null;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'ratings')]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'product_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le produit est obligatoire.')]
    private Product $product;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'L\'utilisateur est obligatoire.')]
    private User $user;

    #[ORM\Column(name: 'rating', type: Types::INTEGER, options: ['unsigned' => true])]
    #[Assert\NotBlank(message: 'La note est obligatoire.')]
    #[Assert\Range(min: 1, max: 5, notInRangeMessage: 'La note doit être entre 1 et 5.')]
    private int $rating;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getRatingId(): ?int
    {
        return $this->ratingId;
    }

    public function setRatingId(?int $ratingId): static
    {
        $this->ratingId = $ratingId;
        return $this;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): static
    {
        $this->product = $product;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): static
    {
        $this->rating = $rating;
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
