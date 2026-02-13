<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CartRepository::class)]
#[ORM\Table(name: 'carts')]
class Cart
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'cart_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $cartId = null;
    
    #[ORM\OneToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE', unique: true)]
    #[Assert\NotNull(message: "L'utilisateur du panier est obligatoire.")]
    private User $userId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 7, options: ['default' => 'OPEN'])]
    #[Assert\Choice(choices: ['OPEN', 'LOCKED', 'ORDERED'], message: 'Statut de panier invalide.')]
    private string $status = 'OPEN';
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;
    
    #[ORM\Column(name: 'locked_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lockedAt = null;

    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    public function setCartId(?int $cartId): static
    {
        $this->cartId = $cartId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

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

    public function getLockedAt(): ?\DateTime
    {
        return $this->lockedAt;
    }

    public function setLockedAt(?\DateTime $lockedAt): static
    {
        $this->lockedAt = $lockedAt;

        return $this;
    }
}
