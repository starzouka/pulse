<?php

declare(strict_types=1);

namespace App\Controller\Front;

use App\Repository\OrderRepository;
use App\Service\Payment\StripeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StripeWebhookController extends AbstractController
{
    #[Route('/stripe/webhook', name: 'stripe_webhook', methods: ['POST'])]
    public function index(
        Request $request,
        StripeService $stripeService,
        OrderRepository $orderRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $payload = (string) $request->getContent();
        $sigHeader = $request->headers->get('stripe-signature');

        try {
            $event = $stripeService->constructEvent($payload, $sigHeader);
        } catch (\Throwable $e) {
            return new Response('Invalid signature', 400);
        }

        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $orderId = isset($session->metadata->order_id) ? (int) $session->metadata->order_id : 0;
                if ($orderId > 0) {
                    $order = $orderRepository->find($orderId);
                    if ($order) {
                        $now = new \DateTime();
                        $order->setPaymentStatus('PAID')
                            ->setPaymentMethod('CARD')
                            ->setPaidAt($now)
                            ->setStatus('PAID');
                        $entityManager->flush();
                    }
                }
                break;
        }

        return new Response('OK', 200);
    }
}
