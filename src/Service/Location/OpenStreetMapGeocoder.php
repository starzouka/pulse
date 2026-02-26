<?php

declare(strict_types=1);

namespace App\Service\Location;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OpenStreetMapGeocoder
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $baseUrl = '',
        private readonly string $contactEmail = '',
    ) {
    }

    /**
     * @return array{normalized_region: string, display_name: string, country: ?string, source: string}|null
     */
    public function geocodeRegion(?string $region): ?array
    {
        $query = trim((string) $region);
        if ($query === '') {
            return null;
        }

        $baseUrl = rtrim($this->baseUrl !== '' ? $this->baseUrl : 'https://nominatim.openstreetmap.org', '/');
        $headers = [
            'Accept' => 'application/json',
            'User-Agent' => 'PulseTeamGeocoder/1.0',
        ];

        if ($this->contactEmail !== '') {
            $headers['From'] = $this->contactEmail;
        }

        try {
            $response = $this->httpClient->request('GET', $baseUrl . '/search', [
                'headers' => $headers,
                'query' => [
                    'q' => $query,
                    'format' => 'jsonv2',
                    'limit' => 1,
                    'addressdetails' => 1,
                ],
            ]);

            $rows = $response->toArray(false);
            if (!is_array($rows) || $rows === [] || !is_array($rows[0])) {
                return null;
            }

            $row = $rows[0];
            $displayName = trim((string) ($row['display_name'] ?? $query));
            $address = is_array($row['address'] ?? null) ? $row['address'] : [];
            $city = $this->firstNonEmpty([
                $address['city'] ?? null,
                $address['town'] ?? null,
                $address['village'] ?? null,
                $address['state'] ?? null,
                $address['county'] ?? null,
            ]);
            $country = $this->firstNonEmpty([$address['country'] ?? null]);

            $normalized = $this->joinNonEmpty([$city, $country]) ?: $displayName;

            return [
                'normalized_region' => $normalized,
                'display_name' => $displayName,
                'country' => $country,
                'source' => 'OpenStreetMap Nominatim',
            ];
        } catch (\Throwable) {
            return null;
        }
    }

    /**
     * @return array{normalized_region:string,display_name:string,country:?string,lat:float,lon:float,source:string}|null
     */
    public function reverseGeocode(float $latitude, float $longitude): ?array
    {
        if ($latitude < -90 || $latitude > 90 || $longitude < -180 || $longitude > 180) {
            return null;
        }

        $baseUrl = rtrim($this->baseUrl !== '' ? $this->baseUrl : 'https://nominatim.openstreetmap.org', '/');
        $headers = [
            'Accept' => 'application/json',
            'User-Agent' => 'PulseTeamGeocoder/1.0',
        ];
        if ($this->contactEmail !== '') {
            $headers['From'] = $this->contactEmail;
        }

        try {
            $response = $this->httpClient->request('GET', $baseUrl . '/reverse', [
                'headers' => $headers,
                'query' => [
                    'lat' => (string) $latitude,
                    'lon' => (string) $longitude,
                    'format' => 'jsonv2',
                    'addressdetails' => 1,
                ],
            ]);
            $row = $response->toArray(false);
            if (!is_array($row) || $row === []) {
                return null;
            }

            $displayName = trim((string) ($row['display_name'] ?? ''));
            $address = is_array($row['address'] ?? null) ? $row['address'] : [];
            $city = $this->firstNonEmpty([
                $address['city'] ?? null,
                $address['town'] ?? null,
                $address['village'] ?? null,
                $address['municipality'] ?? null,
                $address['state'] ?? null,
            ]);
            $country = $this->firstNonEmpty([$address['country'] ?? null]);
            $normalized = $this->joinNonEmpty([$city, $country]);

            return [
                'normalized_region' => $normalized !== '' ? $normalized : ($displayName !== '' ? $displayName : sprintf('%.5f, %.5f', $latitude, $longitude)),
                'display_name' => $displayName,
                'country' => $country,
                'lat' => $latitude,
                'lon' => $longitude,
                'source' => 'OpenStreetMap Nominatim Reverse',
            ];
        } catch (\Throwable) {
            return null;
        }
    }

    private function firstNonEmpty(array $values): ?string
    {
        foreach ($values as $value) {
            $normalized = trim((string) $value);
            if ($normalized !== '') {
                return $normalized;
            }
        }

        return null;
    }

    private function joinNonEmpty(array $values): string
    {
        $parts = [];
        foreach ($values as $value) {
            $normalized = trim((string) $value);
            if ($normalized !== '') {
                $parts[] = $normalized;
            }
        }

        return implode(', ', array_values(array_unique($parts)));
    }
}
