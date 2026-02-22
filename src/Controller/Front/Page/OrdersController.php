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
    use PaginatesCollectionsTrait;

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
        $toDateRaw = trim((string) $request->query->get('to', ''));
        $query = trim((string) $request->query->get('q', ''));
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'amount_high', 'amount_low', 'status'], true)) {
            $sort = 'latest';
        }

        $fromDate = null;
        if ($fromDateRaw !== '') {
            try {
                $fromDate = new \DateTime($fromDateRaw);
            } catch (\Throwable) {
                $fromDate = null;
            }
        }

        $toDate = null;
        if ($toDateRaw !== '') {
            try {
                $toDate = new \DateTime($toDateRaw);
            } catch (\Throwable) {
                $toDate = null;
            }
        }

        $orders = $orderRepository->findByUserWithFilters(
            $viewer,
            $statusFilter,
            $fromDate,
            500,
            $query,
            $toDate,
            $sort
        );
        $pagination = $this->paginateItems($orders, $this->readPage($request), 12);
        $orders = $pagination['items'];

        return $this->render('front/pages/orders.html.twig', [
            'viewer_user' => $viewer,
            'orders' => $orders,
            'pagination' => $pagination,
            'summary' => $orderRepository->summarizeForUser($viewer),
            'filters' => [
                'status' => strtoupper($statusFilter),
                'from' => $fromDateRaw,
                'to' => $toDateRaw,
                'q' => $query,
                'sort' => $sort,
            ],
        ]);
    }
}
