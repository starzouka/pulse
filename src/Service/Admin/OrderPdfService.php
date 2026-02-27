<?php

declare(strict_types=1);

namespace App\Service\Admin;

use App\Entity\Order;
use App\Repository\CartItemRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

final class OrderPdfService
{
    public function __construct(
        private readonly TwigEnvironment $twig,
        private readonly CartItemRepository $cartItemRepository,
        private readonly RequestStack $requestStack,
    ) {
    }

    public function renderOrderPdfResponse(Order $order, string $fileName = 'order.pdf'): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        // allow loading remote assets (CSS/images) via absolute URLs
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $cart = $order->getCartId();
        $items = [];
        if ($cart !== null) {
            $items = $this->cartItemRepository->findByCart($cart);
        }

        // compute base URL from current request (used by template to build absolute asset URLs)
        $request = $this->requestStack->getCurrentRequest();
        $baseUrl = $request ? $request->getSchemeAndHttpHost() : 'http://127.0.0.1:8000';

        // attempt to inline the admin stylesheet so Dompdf gets full styling
        $projectDir = dirname(__DIR__, 3);
        $cssPath = $projectDir . '/public/assets/template_bo/css/styles.css';
        $inlineCss = is_readable($cssPath) ? file_get_contents($cssPath) : '';

        $html = $this->twig->render('admin/pdf/order_site_style.html.twig', [
            'order' => $order,
            'items' => $items,
            'base_url' => $baseUrl,
            'inline_css' => $inlineCss,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));

        return $response;
    }

    /**
     * Render multiple orders into a single PDF (one page per order)
     *
     * @param list<Order> $orders
     */
    public function renderOrdersPdfResponse(array $orders, string $fileName = 'orders.pdf'): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $request = $this->requestStack->getCurrentRequest();
        $baseUrl = $request ? $request->getSchemeAndHttpHost() : 'http://127.0.0.1:8000';

        // inline admin stylesheet when available
        $projectDir = dirname(__DIR__, 3);
        $cssPath = $projectDir . '/public/assets/template_bo/css/styles.css';
        $inlineCss = is_readable($cssPath) ? file_get_contents($cssPath) : '';

        // build items per order
        $ordersData = [];
        foreach ($orders as $order) {
            $cart = $order->getCartId();
            $items = [];
            if ($cart !== null) {
                $items = $this->cartItemRepository->findByCart($cart);
            }

            $ordersData[] = ['order' => $order, 'items' => $items];
        }

        $html = $this->twig->render('admin/pdf/orders_site_style.html.twig', [
            'ordersData' => $ordersData,
            'base_url' => $baseUrl,
            'inline_css' => $inlineCss,
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
