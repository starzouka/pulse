<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'cart_items')]
class CartItem
{
    
    #[ORM\Id]
    #[ORM\Column(name: 'cart_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $cartId;
    
    #[ORM\Id]
    #[ORM\Column(name: 'product_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $productId;
    
    #[ORM\Column(name: 'quantity', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 1])]
    private int $quantity = 1;
    
    #[ORM\Column(name: 'unit_price_at_add', type: Types::DECIMAL, precision: 10, scale: 2)]
    private string $unitPriceAtAdd;
    
    #[ORM\Column(name: 'added_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $addedAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getCartId(): int
    {
        return $this->cartId;
    }

    public function setCartId(int $cartId): static
    {
        $this->cartId = $cartId;

        return $this;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnitPriceAtAdd(): string
    {
        return $this->unitPriceAtAdd;
    }

    public function setUnitPriceAtAdd(string $unitPriceAtAdd): static
    {
        $this->unitPriceAtAdd = $unitPriceAtAdd;

        return $this;
    }

    public function getAddedAt(): \DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeInterface $addedAt): static
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
