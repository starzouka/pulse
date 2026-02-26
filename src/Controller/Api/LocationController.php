<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Service\Location\OpenStreetMapGeocoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/location', name: 'api_location_')]
final class LocationController extends AbstractController
{
    #[Route('/reverse-geocode', name: 'reverse_geocode', methods: ['GET'])]
    public function reverseGeocode(Request $request, OpenStreetMapGeocoder $geocoder): JsonResponse
    {
        $lat = (float) $request->query->get('lat', 0);
        $lon = (float) $request->query->get('lon', 0);

        $result = $geocoder->reverseGeocode($lat, $lon);
        if (!is_array($result)) {
            return $this->json([
                'ok' => false,
                'message' => 'Localisation introuvable.',
            ], 404);
        }

        return $this->json([
            'ok' => true,
            'data' => $result,
        ]);
    }
}

