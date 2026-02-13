<?php

declare(strict_types=1);

namespace App\Service\Shop;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use Doctrine\ORM\EntityManagerInterface;

final class CartManager
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly CartRepository $cartRepository,
        private readonly CartItemRepository $cartItemRepository,
    ) {
    }

    public function getOrCreateCart(User $user): Cart
    {
        $cart = $this->cartRepository->findOneByUser($user);
        if ($cart instanceof Cart) {
            return $cart;
        }

        $now = new \DateTime();
        $cart = (new Cart())
            ->setUserId($user)
            ->setStatus('OPEN')
            ->setCreatedAt($now)
            ->setUpdatedAt($now)
            ->setLockedAt(null);

        $this->entityManager->persist($cart);

        return $cart;
    }

    public function addProduct(Cart $cart, Product $product, int $quantity): void
    {
        $this->assertCartIsEditable($cart);

        $quantityToAdd = max(1, $quantity);
        $cartItem = $this->cartItemRepository->findOneBy([
            'cartId' => $cart,
            'productId' => $product,
        ]);

        if (!$cartItem instanceof CartItem) {
            $cartItem = (new CartItem())
                ->setCartId($cart)
                ->setProductId($product)
                ->setQuantity($quantityToAdd)
                ->setUnitPriceAtAdd((string) ($product->getPrice() ?? '0'))
                ->setAddedAt(new \DateTime())
                ->setUpdatedAt(new \DateTime());

            $this->entityManager->persist($cartItem);
        } else {
            $cartItem
                ->setQuantity($cartItem->getQuantity() + $quantityToAdd)
                ->setUpdatedAt(new \DateTime());
        }

        $cart->setUpdatedAt(new \DateTime());
    }

    public function updateQuantity(Cart $cart, Product $product, int $quantity): void
    {
        $this->assertCartIsEditable($cart);

        $cartItem = $this->cartItemRepository->findOneBy([
            'cartId' => $cart,
            'productId' => $product,
        ]);

        if (!$cartItem instanceof CartItem) {
            return;
        }

        if ($quantity <= 0) {
            $this->entityManager->remove($cartItem);
            $cart->setUpdatedAt(new \DateTime());
            return;
        }

        $cartItem
            ->setQuantity($quantity)
            ->setUpdatedAt(new \DateTime());

        $cart->setUpdatedAt(new \DateTime());
    }

    public function removeProduct(Cart $cart, Product $product): void
    {
        $this->assertCartIsEditable($cart);

        $cartItem = $this->cartItemRepository->findOneBy([
            'cartId' => $cart,
            'productId' => $product,
        ]);
        if (!$cartItem instanceof CartItem) {
            return;
        }

        $this->entityManager->remove($cartItem);
        $cart->setUpdatedAt(new \DateTime());
    }

    /**
     * @return array{
     *   items:list<array{
     *     product:\App\Entity\Product,
     *     quantity:int,
     *     unit_price:float,
     *     line_total:float
     *   }>,
     *   subtotal:float,
     *   total_quantity:int
     * }
     */
    public function buildSummary(Cart $cart): array
    {
        $items = [];
        $subtotal = 0.0;
        $totalQuantity = 0;

        foreach ($this->cartItemRepository->findByCart($cart) as $cartItem) {
            $product = $cartItem->getProductId();
            if (!$product instanceof Product) {
                continue;
            }

            $quantity = max(0, (int) $cartItem->getQuantity());
            $unitPrice = (float) ($cartItem->getUnitPriceAtAdd() ?? 0);
            $lineTotal = $quantity * $unitPrice;
            $subtotal += $lineTotal;
            $totalQuantity += $quantity;

            $items[] = [
                'product' => $product,
                'quantity' => $quantity,
                'unit_price' => $unitPrice,
                'line_total' => $lineTotal,
            ];
        }

        return [
            'items' => $items,
            'subtotal' => $subtotal,
            'total_quantity' => $totalQuantity,
        ];
    }

    private function assertCartIsEditable(Cart $cart): void
    {
        if ($cart->getStatus() !== 'OPEN') {
            throw new \LogicException('Ce panier est verrouille et ne peut plus etre modifie.');
        }
    }
}
