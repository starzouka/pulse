<?php

declare(strict_types=1);

namespace App\Tests\Unit\Service\Shop;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use App\Service\Shop\CartManager;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class CartManagerTest extends TestCase
{
    /** @var EntityManagerInterface&MockObject */
    private EntityManagerInterface $entityManager;

    /** @var CartRepository&MockObject */
    private CartRepository $cartRepository;

    /** @var CartItemRepository&MockObject */
    private CartItemRepository $cartItemRepository;

    private CartManager $cartManager;

    protected function setUp(): void
    {
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->cartRepository = $this->createMock(CartRepository::class);
        $this->cartItemRepository = $this->createMock(CartItemRepository::class);

        $this->cartManager = new CartManager(
            $this->entityManager,
            $this->cartRepository,
            $this->cartItemRepository,
        );
    }

    public function testGetOrCreateCartReturnsExistingCartWhenFound(): void
    {
        $user = (new User())->setUserId(1);
        $existingCart = (new Cart())->setUserId($user)->setStatus('OPEN');

        $this->cartRepository
            ->expects(self::once())
            ->method('findOneByUser')
            ->with($user)
            ->willReturn($existingCart);

        $this->entityManager
            ->expects(self::never())
            ->method('persist');

        $result = $this->cartManager->getOrCreateCart($user);

        self::assertSame($existingCart, $result);
    }

    public function testGetOrCreateCartCreatesOpenCartWhenMissing(): void
    {
        $user = (new User())->setUserId(2);

        $this->cartRepository
            ->expects(self::once())
            ->method('findOneByUser')
            ->with($user)
            ->willReturn(null);

        $this->entityManager
            ->expects(self::once())
            ->method('persist')
            ->with(self::callback(function (mixed $entity) use ($user): bool {
                self::assertInstanceOf(Cart::class, $entity);
                self::assertSame($user, $entity->getUserId());
                self::assertSame('OPEN', $entity->getStatus());
                self::assertNull($entity->getLockedAt());
                self::assertNotNull($entity->getCreatedAt());
                self::assertNotNull($entity->getUpdatedAt());

                return true;
            }));

        $cart = $this->cartManager->getOrCreateCart($user);

        self::assertInstanceOf(Cart::class, $cart);
        self::assertSame('OPEN', $cart->getStatus());
    }

    public function testAddProductCreatesCartItemWhenProductNotInCart(): void
    {
        $user = (new User())->setUserId(3);
        $cart = (new Cart())
            ->setUserId($user)
            ->setStatus('OPEN')
            ->setCreatedAt(new \DateTime('-1 day'))
            ->setUpdatedAt(new \DateTime('-1 day'));
        $product = (new Product())->setPrice('19.99');

        $this->cartItemRepository
            ->expects(self::once())
            ->method('findOneBy')
            ->willReturn(null);

        $persistedItem = null;
        $this->entityManager
            ->expects(self::once())
            ->method('persist')
            ->with(self::callback(function (mixed $entity) use (&$persistedItem): bool {
                self::assertInstanceOf(CartItem::class, $entity);
                $persistedItem = $entity;

                return true;
            }));

        $this->cartManager->addProduct($cart, $product, 3);

        self::assertInstanceOf(CartItem::class, $persistedItem);
        self::assertSame($cart, $persistedItem->getCartId());
        self::assertSame($product, $persistedItem->getProductId());
        self::assertSame(3, $persistedItem->getQuantity());
        self::assertSame('19.99', $persistedItem->getUnitPriceAtAdd());
    }

    public function testUpdateQuantityRemovesItemWhenQuantityIsZero(): void
    {
        $user = (new User())->setUserId(4);
        $cart = (new Cart())
            ->setUserId($user)
            ->setStatus('OPEN')
            ->setCreatedAt(new \DateTime('-1 day'))
            ->setUpdatedAt(new \DateTime('-1 day'));
        $product = (new Product())->setPrice('9.90');
        $existingItem = (new CartItem())
            ->setCartId($cart)
            ->setProductId($product)
            ->setQuantity(2)
            ->setUnitPriceAtAdd('9.90')
            ->setAddedAt(new \DateTime('-1 day'))
            ->setUpdatedAt(new \DateTime('-1 day'));

        $this->cartItemRepository
            ->expects(self::once())
            ->method('findOneBy')
            ->willReturn($existingItem);

        $this->entityManager
            ->expects(self::once())
            ->method('remove')
            ->with($existingItem);

        $this->cartManager->updateQuantity($cart, $product, 0);
    }

    public function testAddProductThrowsWhenCartIsLocked(): void
    {
        $user = (new User())->setUserId(5);
        $cart = (new Cart())
            ->setUserId($user)
            ->setStatus('LOCKED')
            ->setCreatedAt(new \DateTime('-1 day'))
            ->setUpdatedAt(new \DateTime('-1 day'));
        $product = (new Product())->setPrice('2.50');

        $this->cartItemRepository
            ->expects(self::never())
            ->method('findOneBy');

        $this->expectException(\LogicException::class);

        $this->cartManager->addProduct($cart, $product, 1);
    }
}
