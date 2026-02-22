<?php

declare(strict_types=1);

namespace App\Service\Admin;

use App\Entity\Order;
use App\Repository\CartItemRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\Response;

final class OrderPdfService
{
    public function __construct(
        private readonly TwigEnvironment $twig,
        private readonly CartItemRepository $cartItemRepository,
    ) {
    }

    public function renderOrderPdfResponse(Order $order, string $fileName = 'order.pdf'): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);

        $cart = $order->getCartId();
        $items = [];
        if ($cart !== null) {
            $items = $this->cartItemRepository->findByCart($cart);
        }

        $html = $this->twig->render('admin/pdf/order.html.twig', [
            'order' => $order,
            'items' => $items,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));

        return $response;
    }
}
