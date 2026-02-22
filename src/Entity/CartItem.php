<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\CartItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CartItemRepository::class)]
#[ORM\Table(name: 'cart_items')]
class CartItem
{
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Cart::class)]
    #[ORM\JoinColumn(name: 'cart_id', referencedColumnName: 'cart_id', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Le panier est obligatoire.')]
    private Cart $cartId;
    
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'product_id', nullable: false, onDelete: 'RESTRICT')]
    #[Assert\NotNull(message: 'Le produit est obligatoire.')]
    private Product $productId;
    
    #[ORM\Column(name: 'quantity', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 1])]
    #[Assert\Positive(message: 'La quantite doit etre superieure a 0.')]
    private int $quantity = 1;
    
    #[ORM\Column(name: 'unit_price_at_add', type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\PositiveOrZero(message: "Le prix unitaire doit etre superieur ou egal a 0.")]
    private string $unitPriceAtAdd;
    
    #[ORM\Column(name: 'added_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $addedAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getCartId(): ?Cart
    {
        return $this->cartId;
    }

    public function setCartId(?Cart $cartId): static
    {
        $this->cartId = $cartId;

        return $this;
    }

    public function getProductId(): ?Product
    {
        return $this->productId;
    }

    public function setProductId(?Product $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnitPriceAtAdd(): ?string
    {
        return $this->unitPriceAtAdd;
    }

    public function setUnitPriceAtAdd(string $unitPriceAtAdd): static
    {
        $this->unitPriceAtAdd = $unitPriceAtAdd;

        return $this;
    }

    public function getAddedAt(): ?\DateTime
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTime $addedAt): static
    {
        $this->addedAt = $addedAt;

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
