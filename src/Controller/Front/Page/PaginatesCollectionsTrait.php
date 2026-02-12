<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use Symfony\Component\HttpFoundation\Request;

trait PaginatesCollectionsTrait
{
    private function readPage(Request $request, string $parameter = 'page'): int
    {
        $raw = $request->query->get($parameter, 1);
        if (!is_scalar($raw)) {
            return 1;
        }

        $page = (int) $raw;

        return $page > 0 ? $page : 1;
    }

    /**
     * @template T
     *
     * @param list<T> $items
     * @return array{
     *   items:list<T>,
     *   current_page:int,
     *   per_page:int,
     *   total_items:int,
     *   total_pages:int,
     *   has_previous:bool,
     *   has_next:bool,
     *   previous_page:int,
     *   next_page:int
     * }
     */
    private function paginateItems(array $items, int $page, int $perPage): array
    {
        $safePerPage = max(1, $perPage);
        $totalItems = count($items);
        $totalPages = max(1, (int) ceil($totalItems / $safePerPage));
        $currentPage = min(max(1, $page), $totalPages);
        $offset = ($currentPage - 1) * $safePerPage;

        return [
            'items' => array_values(array_slice($items, $offset, $safePerPage)),
            'current_page' => $currentPage,
            'per_page' => $safePerPage,
            'total_items' => $totalItems,
            'total_pages' => $totalPages,
            'has_previous' => $currentPage > 1,
            'has_next' => $currentPage < $totalPages,
            'previous_page' => max(1, $currentPage - 1),
            'next_page' => min($totalPages, $currentPage + 1),
        ];
    }
}
