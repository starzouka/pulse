<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Order;
use App\Entity\User;
use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use App\Service\Shop\CartManager;
use App\Service\Payment\StripeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class CheckoutController extends AbstractController
{
    #[Route('/pages/checkout', name: 'front_checkout', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        CartRepository $cartRepository,
        OrderRepository $orderRepository,
        CartManager $cartManager,
        EntityManagerInterface $entityManager,
        StripeService $stripeService,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $cart = $cartRepository->findOneByUser($viewer);
        if ($cart === null) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('front_cart');
        }

        $summary = $cartManager->buildSummary($cart);
        if (($summary['items'] ?? []) === []) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('front_cart');
        }

        $existingOrder = $orderRepository->findOneBy(['cartId' => $cart]);
        if ($existingOrder instanceof Order) {
            $this->addFlash('info', 'Cette commande existe deja.');
            return $this->redirectToRoute('front_order_detail', [
                'id' => $existingOrder->getOrderId(),
            ]);
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('checkout_confirm', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('front_checkout');
            }

            if ($cart->getStatus() !== 'OPEN') {
                $this->addFlash('error', 'Ce panier est verrouille.');
                return $this->redirectToRoute('front_cart');
            }

            $shippingAddress = trim((string) $request->request->get('shipping_address', ''));
            $phoneForDelivery = trim((string) $request->request->get('phone_for_delivery', ''));
            $paymentMethod = strtoupper(trim((string) $request->request->get('payment_method', 'CARD')));
            if (!in_array($paymentMethod, ['CARD', 'CASH', 'OTHER'], true)) {
                $paymentMethod = 'CARD';
            }

            $now = new \DateTime();

            // If using card, create an Order in PENDING state and redirect to Stripe Checkout
            if ($paymentMethod === 'CARD') {
                $order = (new Order())
                    ->setOrderNumber($this->generateOrderNumber())
                    ->setCartId($cart)
                    ->setUserId($viewer)
                    ->setStatus('PENDING')
                    ->setPaymentMethod('CARD')
                    ->setPaymentStatus('UNPAID')
                    ->setTotalAmount((string) number_format((float) $summary['subtotal'], 2, '.', ''))
                    ->setShippingAddress($shippingAddress !== '' ? $shippingAddress : null)
                    ->setPhoneForDelivery($phoneForDelivery !== '' ? $phoneForDelivery : null)
                    ->setCreatedAt($now)
                    ->setPaidAt(null)
                    ->setShippedAt(null)
                    ->setDeliveredAt(null);

                $cart
                    ->setStatus('ORDERED')
                    ->setLockedAt($now)
                    ->setUpdatedAt($now);

                $entityManager->persist($order);
                $entityManager->flush();

                // build Stripe line items from cart summary (amounts in cents)
                $lineItems = [];
                foreach ($summary['items'] as $item) {
                    $product = $item['product'] ?? null;
                    if ($product === null) {
                        continue;
                    }
                    $unitAmountCents = (int) round(((float) ($item['unit_price'] ?? 0)) * 100);
                    $lineItems[] = [
                        'price_data' => [
                            'currency' => ($_ENV['STRIPE_CURRENCY'] ?? 'eur'),
                            'product_data' => ['name' => (string) $product->getName()],
                            'unit_amount' => $unitAmountCents,
                        ],
                        'quantity' => (int) ($item['quantity'] ?? 1),
                    ];
                }

                $successUrl = $this->generateUrl('front_order_detail', ['id' => $order->getOrderId()], UrlGeneratorInterface::ABSOLUTE_URL);
                $cancelUrl = $this->generateUrl('front_checkout', [], UrlGeneratorInterface::ABSOLUTE_URL);

                try {
                    $session = $stripeService->createCheckoutSession(
                        $lineItems,
                        $successUrl,
                        $cancelUrl,
                        ['order_id' => (string) ($order->getOrderId() ?? 0)],
                        $viewer->getEmail() ?? null,
                    );

                    if (isset($session->url) && is_string($session->url) && $session->url !== '') {
                        return $this->redirect($session->url);
                    }

                    $this->addFlash('error', 'Impossible de lancer le paiement Stripe.');
                    return $this->redirectToRoute('front_checkout');
                } catch (\Throwable $e) {
                    $this->addFlash('error', 'Erreur paiement: ' . $e->getMessage());
                    return $this->redirectToRoute('front_checkout');
                }
            }

            // Fallback / non-card payment handling (CASH or OTHER)
            $order = (new Order())
                ->setOrderNumber($this->generateOrderNumber())
                ->setCartId($cart)
                ->setUserId($viewer)
                ->setStatus($paymentMethod === 'CASH' ? 'PENDING' : 'PAID')
                ->setPaymentMethod($paymentMethod)
                ->setPaymentStatus($paymentMethod === 'CASH' ? 'UNPAID' : 'PAID')
                ->setTotalAmount((string) number_format((float) $summary['subtotal'], 2, '.', ''))
                ->setShippingAddress($shippingAddress !== '' ? $shippingAddress : null)
                ->setPhoneForDelivery($phoneForDelivery !== '' ? $phoneForDelivery : null)
                ->setCreatedAt($now)
                ->setPaidAt($paymentMethod === 'CASH' ? null : $now)
                ->setShippedAt(null)
                ->setDeliveredAt(null);

            $cart
                ->setStatus('ORDERED')
                ->setLockedAt($now)
                ->setUpdatedAt($now);

            $entityManager->persist($order);
            $entityManager->flush();

            $this->addFlash('success', 'Commande confirmee.');

            return $this->redirectToRoute('front_order_detail', [
                'id' => $order->getOrderId(),
            ]);
        }

        return $this->render('front/pages/checkout.html.twig', [
            'cart' => $cart,
            'cart_items' => $summary['items'],
            'cart_subtotal' => $summary['subtotal'],
            'viewer_user' => $viewer,
        ]);
    }

    private function generateOrderNumber(): string
    {
        return sprintf(
            'ORD-%s-%s',
            (new \DateTime())->format('YmdHis'),
            strtoupper(bin2hex(random_bytes(2))),
        );
    }
}
