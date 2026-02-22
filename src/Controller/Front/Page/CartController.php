<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartItemRepository;
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
    use PaginatesCollectionsTrait;

    #[Route('/pages/cart', name: 'front_cart', methods: ['GET'])]
    public function index(
        Request $request,
        CartRepository $cartRepository,
        CartItemRepository $cartItemRepository,
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
        $fullSummary = $cart !== null
            ? $cartManager->buildSummary($cart)
            : ['items' => [], 'subtotal' => 0.0, 'total_quantity' => 0];

        $query = trim((string) $request->query->get('q', ''));
        $teamId = $this->toPositiveInt($request->query->get('team'));
        $sort = strtolower(trim((string) $request->query->get('sort', 'added_asc')));
        if (!in_array($sort, ['added_asc', 'added_desc', 'name', 'price_high', 'price_low', 'qty_high'], true)) {
            $sort = 'added_asc';
        }

        $filteredRows = [];
        if ($cart !== null) {
            $cartItems = $cartItemRepository->findByCartWithFilters($cart, $query, $teamId, $sort, 500);
            foreach ($cartItems as $cartItem) {
                $product = $cartItem->getProductId();
                if (!$product instanceof Product) {
                    continue;
                }

                $quantity = max(0, (int) $cartItem->getQuantity());
                $unitPrice = (float) ($cartItem->getUnitPriceAtAdd() ?? 0);
                $lineTotal = $quantity * $unitPrice;

                $filteredRows[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'unit_price' => $unitPrice,
                    'line_total' => $lineTotal,
                ];
            }
        }

        $pagination = $this->paginateItems($filteredRows, $this->readPage($request), 10);
        $filteredRows = $pagination['items'];

        $visibleSubtotal = 0.0;
        $visibleQuantity = 0;
        foreach ($filteredRows as $row) {
            $visibleSubtotal += (float) ($row['line_total'] ?? 0.0);
            $visibleQuantity += (int) ($row['quantity'] ?? 0);
        }

        $teamOptions = [];
        foreach ($fullSummary['items'] as $item) {
            $team = $item['product']->getTeamId();
            $optionId = $team?->getTeamId();
            if ($optionId === null) {
                continue;
            }

            $teamOptions[$optionId] = [
                'id' => $optionId,
                'name' => $team?->getName() ?? ('Equipe #' . $optionId),
            ];
        }
        ksort($teamOptions);

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
            'cart_items' => $filteredRows,
            'cart_subtotal' => $fullSummary['subtotal'],
            'cart_total_quantity' => $fullSummary['total_quantity'],
            'cart_visible_subtotal' => $visibleSubtotal,
            'cart_visible_quantity' => $visibleQuantity,
            'cart_is_editable' => $cart === null || $cart->getStatus() === 'OPEN',
            'locked_reason' => $lockedReason,
            'filters' => [
                'q' => $query,
                'team' => $teamId,
                'sort' => $sort,
            ],
            'pagination' => $pagination,
            'team_filter_options' => array_values($teamOptions),
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

    private function toPositiveInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $asInt = (int) $value;

        return $asInt > 0 ? $asInt : null;
    }
}
