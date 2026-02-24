<?php

declare(strict_types=1);

namespace App\Service\Admin;

use App\Repository\ProductRepository;
use App\Repository\TeamRepository;

final class ProductStatisticsService
{
    public function __construct(
        private readonly ProductRepository $productRepository,
        private readonly TeamRepository $teamRepository
    ) {
    }

    /**
     * Retourne les statistiques des produits pour les graphiques Google Charts
     *
     * @return array{productsByTeam: array{labels: string[], data: int[]}, priceDistribution: array{labels: string[], data: int[]}, stockStatus: array{labels: string[], data: int[]}, priceAverage: float, stockValue: float}
     */
    public function getProductStatistics(): array
    {
        return [
            'productsByTeam' => $this->getProductsByTeam(),
            'priceDistribution' => $this->getPriceDistribution(),
            'stockStatus' => $this->getStockStatus(),
            'priceAverage' => $this->getPriceAverage(),
            'stockValue' => $this->getStockValue(),
        ];
    }

    /**
     * Récupère le nombre de produits par équipe
     *
     * @return array{labels: string[], data: int[]}
     */
    private function getProductsByTeam(): array
    {
        $teams = $this->teamRepository->findBy([], ['name' => 'ASC']);
        $labels = [];
        $data = [];

        foreach ($teams as $team) {
            $labels[] = $team->getName();
            $data[] = $this->productRepository->countByTeam($team);
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Récupère la distribution des prix des produits
     *
     * @return array{labels: string[], data: int[]}
     */
    private function getPriceDistribution(): array
    {
        $products = $this->productRepository->findAll();

        // Définir les tranches de prix
        $ranges = [
            '0-10 DT' => [0, 10],
            '10-50 DT' => [10, 50],
            '50-100 DT' => [50, 100],
            '100-200 DT' => [100, 200],
            '200+ DT' => [200, PHP_INT_MAX],
        ];

        $labels = array_values(array_keys($ranges));
        $data = array_fill(0, count($ranges), 0);

        foreach ($products as $product) {
            $price = (float) $product->getPrice();
            $index = 0;
            foreach ($ranges as $range) {
                if ($price >= $range[0] && $price < $range[1]) {
                    $data[$index]++;
                    break;
                }
                $index++;
            }
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Récupère le statut du stock des produits
     *
     * @return array{labels: string[], data: int[]}
     */
    private function getStockStatus(): array
    {
        $products = $this->productRepository->findAll();

        $labels = ['En stock (>10)', 'Stock faible (1-10)', 'Rupture de stock (0)'];
        $data = [0, 0, 0];

        foreach ($products as $product) {
            $stock = (int) $product->getStockQty();
            if ($stock > 10) {
                $data[0]++;
            } elseif ($stock > 0) {
                $data[1]++;
            } else {
                $data[2]++;
            }
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Calcule le prix moyen des produits
     *
     * @return float
     */
    private function getPriceAverage(): float
    {
        $products = $this->productRepository->findAll();
        $totalPrice = 0.0;
        $count = 0;

        foreach ($products as $product) {
            $price = (float) $product->getPrice();
            $totalPrice += $price;
            $count++;
        }

        return $count > 0 ? $totalPrice / $count : 0.0;
    }

    /**
     * Calcule la valeur totale du stock
     *
     * @return float
     */
    private function getStockValue(): float
    {
        $products = $this->productRepository->findAll();
        $totalValue = 0.0;

        foreach ($products as $product) {
            $price = (float) $product->getPrice();
            $stock = (int) $product->getStockQty();
            $totalValue += $price * $stock;
        }

        return $totalValue;
    }
}
