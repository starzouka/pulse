<?php

declare(strict_types=1);

namespace App\Service\Geo;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OpenStreetMapGeocoder
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
    ) {
    }

    public function normalizeRegion(?string $rawRegion): ?string
    {
        $region = trim((string) $rawRegion);
        if ($region === '') {
            return null;
        }

        try {
            $response = $this->httpClient->request('GET', 'https://nominatim.openstreetmap.org/search', [
                'query' => [
                    'q' => $region,
                    'format' => 'jsonv2',
                    'addressdetails' => 1,
                    'limit' => 1,
                ],
                'headers' => [
                    'User-Agent' => 'PULSE/1.0 (captain-team-manage)',
                ],
                'timeout' => 6,
            ]);

            $payload = $response->toArray(false);
        } catch (\Throwable) {
            return $region;
        }

        $first = is_array($payload[0] ?? null) ? $payload[0] : null;
        if ($first === null) {
            return $region;
        }

        $normalizedFromAddress = $this->normalizeFromAddress($first['address'] ?? null);
        if ($normalizedFromAddress !== null) {
            return $normalizedFromAddress;
        }

        $displayName = trim((string) ($first['display_name'] ?? ''));
        if ($displayName === '') {
            return $region;
        }

        $parts = array_values(array_filter(array_map('trim', explode(',', $displayName))));
        if ($parts === []) {
            return $region;
        }

        return implode(', ', array_slice($parts, 0, 2));
    }

    public function normalizeCoordinates(float $latitude, float $longitude): ?string
    {
        if (!is_finite($latitude) || !is_finite($longitude)) {
            return null;
        }

        try {
            $response = $this->httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
                'query' => [
                    'format' => 'jsonv2',
                    'lat' => $latitude,
                    'lon' => $longitude,
                    'addressdetails' => 1,
                ],
                'headers' => [
                    'User-Agent' => 'PULSE/1.0 (captain-team-manage)',
                ],
                'timeout' => 6,
            ]);

            $payload = $response->toArray(false);
        } catch (\Throwable) {
            return null;
        }

        $normalizedFromAddress = $this->normalizeFromAddress($payload['address'] ?? null);
        if ($normalizedFromAddress !== null) {
            return $normalizedFromAddress;
        }

        $displayName = trim((string) ($payload['display_name'] ?? ''));
        if ($displayName === '') {
            return null;
        }

        $parts = array_values(array_filter(array_map('trim', explode(',', $displayName))));
        if ($parts === []) {
            return null;
        }

        return implode(', ', array_slice($parts, 0, 2));
    }

    private function normalizeFromAddress(mixed $rawAddress): ?string
    {
        if (!is_array($rawAddress)) {
            return null;
        }

        $address = $rawAddress;
        $primary = $this->firstNonEmpty([
            $address['city'] ?? null,
            $address['town'] ?? null,
            $address['village'] ?? null,
            $address['municipality'] ?? null,
            $address['county'] ?? null,
            $address['state'] ?? null,
        ]);
        $country = $this->firstNonEmpty([
            $address['country'] ?? null,
        ]);

        if ($primary === null && $country === null) {
            return null;
        }

        if ($primary !== null && $country !== null && mb_strtolower($primary) !== mb_strtolower($country)) {
            return $primary . ', ' . $country;
        }

        return $primary ?? $country;
    }

    /**
     * @param list<mixed> $candidates
     */
    private function firstNonEmpty(array $candidates): ?string
    {
        foreach ($candidates as $candidate) {
            $value = trim((string) $candidate);
            if ($value !== '') {
                return $value;
            }
        }

        return null;
    }
}
