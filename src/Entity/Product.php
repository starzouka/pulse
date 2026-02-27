<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ORM\Table(name: 'products')]
#[UniqueEntity(fields: ['sku'], message: 'Ce SKU existe deja.')]
class Product
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'product_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $productId = null;
    
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'team_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'equipe vendeuse est obligatoire.")]
    private Team $teamId;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 150)]
    #[Assert\NotBlank(message: 'Le nom du produit est obligatoire.')]
    #[Assert\Length(min: 2, max: 150)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 5000)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'price', type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\PositiveOrZero(message: 'Le prix doit etre superieur ou egal a 0.')]
    private string $price;
    
    #[ORM\Column(name: 'stock_qty', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 0])]
    #[Assert\PositiveOrZero(message: 'Le stock doit etre superieur ou egal a 0.')]
    private int $stockQty = 0;
    
    #[ORM\Column(name: 'sku', type: Types::STRING, length: 64, nullable: true)]
    #[Assert\Length(max: 64)]
    private ?string $sku = null;
    
    #[ORM\Column(name: 'is_active', type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): static
    {
        $this->productId = $productId;

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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStockQty(): ?int
    {
        return $this->stockQty;
    }

    public function setStockQty(int $stockQty): static
    {
        $this->stockQty = $stockQty;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): static
    {
        $this->sku = $sku;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
