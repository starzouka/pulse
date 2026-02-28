<?php

declare(strict_types=1);

namespace App\Service\Admin;

use App\Entity\Cart;
use App\Repository\CartItemRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

final class CartPdfService
{
    public function __construct(
        private readonly TwigEnvironment $twig,
        private readonly CartItemRepository $cartItemRepository,
        private readonly RequestStack $requestStack,
    ) {
    }

    /**
     * Render multiple carts into a single PDF (one page per cart)
     *
     * @param list<Cart> $carts
     * @param array<int, int> $itemsByCartId
     */
    public function renderCartsPdfResponse(array $carts, array $itemsByCartId, string $fileName = 'carts.pdf'): Response
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

        // build items per cart
        $cartsData = [];
        foreach ($carts as $cart) {
            $cartId = $cart->getCartId();
            if (is_int($cartId) && $cartId > 0) {
                $items = $this->cartItemRepository->findByCart($cart);
                $cartsData[] = [
                    'cart' => $cart,
                    'items' => $items,
                    'itemsCount' => count($items)
                ];
            }
        }

        $html = $this->twig->render('admin/pdf/carts_site_style.html.twig', [
            'cartsData' => $cartsData,
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
