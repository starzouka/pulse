<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Order;
use App\Entity\Team;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\OrderRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainOrdersController extends AbstractController
{
    #[Route('/pages/captain-orders', name: 'front_captain_orders', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        OrderRepository $orderRepository,
        CartItemRepository $cartItemRepository,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $requestedTeamId = $this->toPositiveInt($request->query->get('team'));
        $context = $captainTeamContextProvider->resolve($viewer, $requestedTeamId);
        $captainTeams = $context['teams'];
        $activeTeam = $context['active_team'];

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $statusFilter = strtoupper(trim((string) $request->query->get('status', '')));
        $allowedStatuses = ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'];
        if (!in_array($statusFilter, $allowedStatuses, true)) {
            $statusFilter = '';
        }

        $orders = $orderRepository->findByTeamWithFilters(
            $activeTeam,
            $statusFilter !== '' ? $statusFilter : null,
            250,
        );

        $ordersData = [];
        $teamRevenue = 0.0;
        foreach ($orders as $order) {
            if (!$order instanceof Order) {
                continue;
            }

            $cart = $order->getCartId();
            if ($cart === null) {
                continue;
            }

            $teamItems = $cartItemRepository->findByCartAndTeam($cart, $activeTeam);
            if ($teamItems === []) {
                continue;
            }

            $teamAmount = 0.0;
            $teamQuantity = 0;
            foreach ($teamItems as $teamItem) {
                $quantity = max(0, (int) ($teamItem->getQuantity() ?? 0));
                $unitPrice = (float) ($teamItem->getUnitPriceAtAdd() ?? 0);
                $teamQuantity += $quantity;
                $teamAmount += $quantity * $unitPrice;
            }

            $teamRevenue += $teamAmount;
            $ordersData[] = [
                'order' => $order,
                'team_amount' => $teamAmount,
                'team_quantity' => $teamQuantity,
            ];
        }

        return $this->render('front/pages/captain-orders.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'orders_data' => $ordersData,
            'team_revenue' => $teamRevenue,
            'status_filter' => $statusFilter,
            'status_options' => $allowedStatuses,
        ]);
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }
}

