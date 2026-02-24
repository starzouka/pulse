<?php

declare(strict_types=1);

namespace App\Service\Admin;

use App\Entity\Product;
use App\Repository\ProductImageRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

final class ProductPdfService
{
    public function __construct(
        private readonly TwigEnvironment $twig,
        private readonly ProductImageRepository $productImageRepository,
        private readonly RequestStack $requestStack,
    ) {
    }

    /**
     * @param list<Product> $products
     */
    public function renderProductsPdfResponse(array $products, string $fileName = 'products.pdf'): Response
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

        // build products with images
        $productsData = [];
        foreach ($products as $product) {
            $images = $this->productImageRepository->findImagesByProduct($product);
            $primaryImageUrl = null;
            if (!empty($images)) {
                $primaryImageUrl = $images[0]->getFileUrl();
            }

            $productsData[] = [
                'product' => $product,
                'primaryImageUrl' => $primaryImageUrl,
            ];
        }

        $html = $this->twig->render('admin/pdf/products_site_style.html.twig', [
            'productsData' => $productsData,
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
