<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrdersController extends AbstractController
{
    #[Route('/pages/orders', name: 'front_orders', methods: ['GET'])]
    public function index(
        Request $request,
        OrderRepository $orderRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $statusFilter = trim((string) $request->query->get('status', ''));
        $fromDateRaw = trim((string) $request->query->get('from', ''));
        $fromDate = null;
        if ($fromDateRaw !== '') {
            try {
                $fromDate = new \DateTime($fromDateRaw);
            } catch (\Throwable) {
                $fromDate = null;
            }
        }

        $orders = $orderRepository->findByUserWithFilters($viewer, $statusFilter, $fromDate, 150);

        return $this->render('front/pages/orders.html.twig', [
            'viewer_user' => $viewer,
            'orders' => $orders,
            'summary' => $orderRepository->summarizeForUser($viewer),
            'filters' => [
                'status' => strtoupper($statusFilter),
                'from' => $fromDateRaw,
            ],
        ]);
    }
}
