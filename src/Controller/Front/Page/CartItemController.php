<?php

namespace App\Controller\Front\Page;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use App\Form\CartItemType;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use App\Repository\CartItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
final class CartItemController extends AbstractController
{
    #[Route('/cart/add/{productId}', name: 'front_cart_add', methods: ['POST'])]
    public function add(int $productId, Request $request, ProductRepository $productRepository, CartRepository $cartRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $product = $productRepository->find($productId);
        if (!$product) {
            $this->addFlash('danger', 'Produit introuvable.');
            return $this->redirectToRoute('front_cart');
        }
        $cart = $cartRepository->findOneBy(['user' => $user, 'status' => 'OPEN']);
        if (!$cart) {
            $cart = new Cart();
            $cart->setUser($user);
            $cart->setStatus('OPEN');
            $em->persist($cart);
        }
        $cartItem = null;
        foreach ($cart->getCartItems() as $item) {
            if ($item->getProduct() === $product) {
                $cartItem = $item;
                break;
            }
        }
        if (!$cartItem) {
            $cartItem = new CartItem();
            $cartItem->setCart($cart);
            $cartItem->setProduct($product);
            $cartItem->setQuantity(1);
            $em->persist($cartItem);
        } else {
            $cartItem->setQuantity($cartItem->getQuantity() + 1);
        }
        $em->flush();
        $this->addFlash('success', 'Produit ajouté au panier.');
        return $this->redirectToRoute('front_cart');
    }

    #[Route('/cart/update/{itemId}', name: 'front_cart_update', methods: ['POST'])]
    public function update(int $itemId, Request $request, CartItemRepository $cartItemRepository, EntityManagerInterface $em): Response
    {
        $cartItem = $cartItemRepository->find($itemId);
        if (!$cartItem) {
            $this->addFlash('danger', 'Article introuvable.');
            return $this->redirectToRoute('front_cart');
        }
        $quantity = (int)$request->request->get('quantity', 1);
        $cartItem->setQuantity(max(1, $quantity));
        $em->flush();
        $this->addFlash('success', 'Quantité mise à jour.');
        return $this->redirectToRoute('front_cart');
    }

    #[Route('/cart/remove/{itemId}', name: 'front_cart_remove', methods: ['POST'])]
    public function remove(int $itemId, CartItemRepository $cartItemRepository, EntityManagerInterface $em): Response
    {
        $cartItem = $cartItemRepository->find($itemId);
        if ($cartItem) {
            $em->remove($cartItem);
            $em->flush();
            $this->addFlash('success', 'Article retiré du panier.');
        }
        return $this->redirectToRoute('front_cart');
    }
}
