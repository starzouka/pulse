<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Service\Shop\CartManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CartController extends AbstractController
{
    #[Route('/pages/cart', name: 'front_cart', methods: ['GET'])]
    public function index(
        Request $request,
        CartRepository $cartRepository,
        OrderRepository $orderRepository,
        CartManager $cartManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $cart = $cartRepository->findOneByUser($viewer);
        $summary = $cart !== null
            ? $cartManager->buildSummary($cart)
            : ['items' => [], 'subtotal' => 0.0, 'total_quantity' => 0];

        $lockedReason = null;
        if ($cart !== null && $cart->getStatus() !== 'OPEN') {
            $existingOrder = $orderRepository->findOneBy(['cartId' => $cart]);
            if ($existingOrder !== null) {
                $lockedReason = 'Ce panier est deja converti en commande.';
            } else {
                $lockedReason = 'Ce panier est verrouille.';
            }
        }

        return $this->render('front/pages/cart.html.twig', [
            'cart' => $cart,
            'cart_items' => $summary['items'],
            'cart_subtotal' => $summary['subtotal'],
            'cart_total_quantity' => $summary['total_quantity'],
            'cart_is_editable' => $cart === null || $cart->getStatus() === 'OPEN',
            'locked_reason' => $lockedReason,
        ]);
    }

    #[Route('/pages/cart/add/{id}', name: 'front_cart_add', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function add(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        CartManager $cartManager,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->headers->get('referer') ?: $request->getUri(),
            ]);
        }

        if (!$this->isCsrfTokenValid('cart_add_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_cart');
        }

        $product = $productRepository->findOneBy([
            'productId' => $id,
            'isActive' => true,
        ]);
        if (!$product instanceof Product) {
            throw $this->createNotFoundException('Produit introuvable.');
        }

        if ((int) ($product->getStockQty() ?? 0) <= 0) {
            $this->addFlash('error', 'Produit en rupture de stock.');
            return $this->redirect($request->headers->get('referer') ?: $this->generateUrl('front_shop'));
        }

        $quantityRaw = $request->request->get('quantity', 1);
        $quantity = is_scalar($quantityRaw) ? max(1, (int) $quantityRaw) : 1;

        try {
            $cart = $cartManager->getOrCreateCart($viewer);
            $cartManager->addProduct($cart, $product, $quantity);
            $entityManager->flush();
            $this->addFlash('success', 'Produit ajoute au panier.');
        } catch (\Throwable $exception) {
            $this->addFlash('error', $exception->getMessage());
        }

        $referer = $request->headers->get('referer');
        if (is_string($referer) && $referer !== '') {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute('front_cart');
    }

    #[Route('/pages/cart/items/{id}/quantity', name: 'front_cart_item_update', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function updateQuantity(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        CartRepository $cartRepository,
        CartManager $cartManager,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->headers->get('referer') ?: $request->getUri(),
            ]);
        }

        if (!$this->isCsrfTokenValid('cart_item_update_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_cart');
        }

        $product = $productRepository->findOneBy(['productId' => $id]);
        if (!$product instanceof Product) {
            throw $this->createNotFoundException('Produit introuvable.');
        }

        $cart = $cartRepository->findOneByUser($viewer);
        if ($cart === null) {
            $this->addFlash('error', 'Panier introuvable.');
            return $this->redirectToRoute('front_cart');
        }

        $quantityRaw = $request->request->get('quantity', 1);
        $quantity = is_scalar($quantityRaw) ? (int) $quantityRaw : 1;
        $maxQuantity = max(0, (int) ($product->getStockQty() ?? 0));
        if ($quantity > $maxQuantity && $maxQuantity > 0) {
            $quantity = $maxQuantity;
        }

        try {
            $cartManager->updateQuantity($cart, $product, $quantity);
            $entityManager->flush();
            $this->addFlash('success', $quantity <= 0 ? 'Produit retire du panier.' : 'Quantite mise a jour.');
        } catch (\Throwable $exception) {
            $this->addFlash('error', $exception->getMessage());
        }

        return $this->redirectToRoute('front_cart');
    }

    #[Route('/pages/cart/items/{id}/remove', name: 'front_cart_item_remove', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function remove(
        int $id,
        Request $request,
        ProductRepository $productRepository,
        CartRepository $cartRepository,
        CartManager $cartManager,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->headers->get('referer') ?: $request->getUri(),
            ]);
        }

        if (!$this->isCsrfTokenValid('cart_item_remove_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_cart');
        }

        $product = $productRepository->findOneBy(['productId' => $id]);
        if (!$product instanceof Product) {
            throw $this->createNotFoundException('Produit introuvable.');
        }

        $cart = $cartRepository->findOneByUser($viewer);
        if ($cart === null) {
            $this->addFlash('error', 'Panier introuvable.');
            return $this->redirectToRoute('front_cart');
        }

        try {
            $cartManager->removeProduct($cart, $product);
            $entityManager->flush();
            $this->addFlash('success', 'Produit retire du panier.');
        } catch (\Throwable $exception) {
            $this->addFlash('error', $exception->getMessage());
        }

        return $this->redirectToRoute('front_cart');
    }
}
