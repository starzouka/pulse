<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: 'orders')]
#[UniqueEntity(fields: ['orderNumber'], message: 'Ce numero de commande existe deja.')]
class Order
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'order_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $orderId = null;
    
    #[ORM\Column(name: 'order_number', type: Types::STRING, length: 30)]
    #[Assert\NotBlank(message: 'Le numero de commande est obligatoire.')]
    #[Assert\Length(max: 30)]
    private string $orderNumber;
    
    #[ORM\OneToOne(targetEntity: Cart::class)]
    #[ORM\JoinColumn(name: 'cart_id', referencedColumnName: 'cart_id', nullable: false, onDelete: 'RESTRICT', unique: true)]
    #[Assert\NotNull(message: 'Le panier est obligatoire.')]
    private Cart $cartId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'RESTRICT')]
    #[Assert\NotNull(message: "L'utilisateur est obligatoire.")]
    private User $userId;
    
    #[ORM\Column(name: 'status', type: Types::STRING, length: 9, options: ['default' => 'PENDING'])]
    #[Assert\Choice(choices: ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'], message: 'Statut invalide.')]
    private string $status = 'PENDING';
    
    #[ORM\Column(name: 'payment_method', type: Types::STRING, length: 5, nullable: true)]
    #[Assert\Choice(choices: ['CARD', 'CASH', 'OTHER'], message: 'Methode de paiement invalide.')]
    private ?string $paymentMethod = null;
    
    #[ORM\Column(name: 'payment_status', type: Types::STRING, length: 8, options: ['default' => 'UNPAID'])]
    #[Assert\Choice(choices: ['UNPAID', 'PAID', 'REFUNDED'], message: 'Statut de paiement invalide.')]
    private string $paymentStatus = 'UNPAID';
    
    #[ORM\Column(name: 'total_amount', type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\PositiveOrZero(message: 'Le montant total doit etre superieur ou egal a 0.')]
    private string $totalAmount;
    
    #[ORM\Column(name: 'shipping_address', type: Types::STRING, length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $shippingAddress = null;
    
    #[ORM\Column(name: 'phone_for_delivery', type: Types::STRING, length: 30, nullable: true)]
    #[Assert\Length(max: 30)]
    #[Assert\Regex(pattern: '/^$|^[0-9+\-\s().]{6,30}$/', message: 'Telephone de livraison invalide.')]
    private ?string $phoneForDelivery = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'paid_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $paidAt = null;
    
    #[ORM\Column(name: 'shipped_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $shippedAt = null;
    
    #[ORM\Column(name: 'delivered_at', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deliveredAt = null;

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(?int $orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): static
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getCartId(): ?Cart
    {
        return $this->cartId;
    }

    public function setCartId(Cart $cartId): static
    {
        $this->cartId = $cartId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
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

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(string $totalAmount): static
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getShippingAddress(): ?string
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(?string $shippingAddress): static
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    public function getPhoneForDelivery(): ?string
    {
        return $this->phoneForDelivery;
    }

    public function setPhoneForDelivery(?string $phoneForDelivery): static
    {
        $this->phoneForDelivery = $phoneForDelivery;

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

    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(?\DateTime $paidAt): static
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    public function getShippedAt(): ?\DateTime
    {
        return $this->shippedAt;
    }

    public function setShippedAt(?\DateTime $shippedAt): static
    {
        $this->shippedAt = $shippedAt;

        return $this;
    }

    public function getDeliveredAt(): ?\DateTime
    {
        return $this->deliveredAt;
    }

    public function setDeliveredAt(?\DateTime $deliveredAt): static
    {
        $this->deliveredAt = $deliveredAt;

        return $this;
    }
}
