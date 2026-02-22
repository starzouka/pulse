<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Order;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrderDetailController extends AbstractController
{
    #[Route('/pages/order-detail/{id}', name: 'front_order_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        OrderRepository $orderRepository,
        CartItemRepository $cartItemRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $order = null;
        if ($id !== null) {
            $order = $orderRepository->findOneBy([
                'orderId' => $id,
                'userId' => $viewer,
            ]);
        }

        if (!$order instanceof Order) {
            $order = $orderRepository->findOneBy(
                ['userId' => $viewer],
                ['createdAt' => 'DESC'],
            );
        }

        if (!$order instanceof Order) {
            throw $this->createNotFoundException('Aucune commande trouvee.');
        }

        $cart = $order->getCartId();
        $cartItems = $cart !== null ? $cartItemRepository->findByCart($cart) : [];

        $lineItems = [];
        $itemsSubtotal = 0.0;
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->getProductId();
            $quantity = (int) ($cartItem->getQuantity() ?? 0);
            $unitPrice = (float) ($cartItem->getUnitPriceAtAdd() ?? 0);
            $lineTotal = $quantity * $unitPrice;
            $itemsSubtotal += $lineTotal;

            $lineItems[] = [
                'product_name' => $product?->getName() ?? 'Produit',
                'quantity' => $quantity,
                'unit_price' => $unitPrice,
                'line_total' => $lineTotal,
            ];
        }

        $orderTotal = (float) ($order->getTotalAmount() ?? 0);
        $shippingAmount = max(0.0, $orderTotal - $itemsSubtotal);

        return $this->render('front/pages/order-detail.html.twig', [
            'viewer_user' => $viewer,
            'order' => $order,
            'line_items' => $lineItems,
            'items_subtotal' => $itemsSubtotal,
            'shipping_amount' => $shippingAmount,
            'order_total' => $orderTotal,
        ]);
    }
}
