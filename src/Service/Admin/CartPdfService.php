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

        $html = $this->twig->render('admin/pdf/carts_site_style.html.twig', [
            'carts' => $carts,
            'itemsByCartId' => $itemsByCartId,
            'base_url' => $baseUrl,
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