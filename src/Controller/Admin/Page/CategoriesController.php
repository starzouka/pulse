<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoriesController extends AbstractController
{
    /** @var list<string> */
    private const SORTS = ['id', 'name', 'created_at', 'games'];

    #[Route('/admin/categories', name: 'admin_categories', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        CategoryRepository $categoryRepository,
        GameRepository $gameRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $editId = $request->query->getInt('edit', 0);
        $editingCategory = $editId > 0 ? $categoryRepository->find($editId) : null;
        if ($editId > 0 && !$editingCategory instanceof Category) {
            $this->addFlash('error', 'Categorie introuvable pour edition.');

            return $this->redirectToRoute('admin_categories');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('admin_category_form', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');

                return $this->redirectToRoute('admin_categories');
            }

            $categoryId = $request->request->getInt('category_id', 0);
            $category = $categoryId > 0 ? $categoryRepository->find($categoryId) : new Category();
            if (!$category instanceof Category) {
                $this->addFlash('error', 'Categorie introuvable.');

                return $this->redirectToRoute('admin_categories');
            }

            $name = trim((string) $request->request->get('name', ''));
            $description = trim((string) $request->request->get('description', ''));
            if ($name === '') {
                $this->addFlash('error', 'Le nom de la categorie est obligatoire.');

                return $this->redirectToRoute('admin_categories', $categoryId > 0 ? ['edit' => $categoryId] : []);
            }

            $category
                ->setName($name)
                ->setDescription($description !== '' ? $description : null);

            if ($categoryId <= 0) {
                $category->setCreatedAt(new \DateTime());
                $entityManager->persist($category);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', $categoryId > 0 ? 'Categorie mise a jour.' : 'Categorie creee.');

                return $this->redirectToRoute('admin_categories');
            } catch (\Throwable) {
                $this->addFlash('error', 'Enregistrement impossible (nom deja utilise).');

                return $this->redirectToRoute('admin_categories', $categoryId > 0 ? ['edit' => $categoryId] : []);
            }
        }

        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'name')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'asc')),
        ];

        $categories = $categoryRepository->searchForAdmin(
            $filters['q'],
            $filters['sort'],
            $filters['direction'],
            500
        );

        $categoryIds = [];
        foreach ($categories as $category) {
            $categoryEntityId = $category->getCategoryId();
            if (is_int($categoryEntityId) && $categoryEntityId > 0) {
                $categoryIds[] = $categoryEntityId;
            }
        }
        $gamesByCategoryId = $gameRepository->countByCategoryIds($categoryIds);

        return $this->render('admin/pages/categories.html.twig', [
            'categories' => $categories,
            'editingCategory' => $editingCategory,
            'gamesByCategoryId' => $gamesByCategoryId,
            'filters' => $filters,
        ]);
    }

    #[Route('/admin/categories/{id}/delete', name: 'admin_category_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        CategoryRepository $categoryRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_category_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('admin_categories');
        }

        $category = $categoryRepository->find($id);
        if (!$category instanceof Category) {
            $this->addFlash('error', 'Categorie introuvable.');

            return $this->redirectToRoute('admin_categories');
        }

        try {
            $entityManager->remove($category);
            $entityManager->flush();
            $this->addFlash('success', 'Categorie supprimee.');
        } catch (\Throwable) {
            $this->addFlash('error', 'Suppression impossible (categorie liee a des jeux).');
        }

        return $this->redirectToRoute('admin_categories');
    }

    #[Route('/admin/categories/export/{format}', name: 'admin_categories_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        CategoryRepository $categoryRepository,
        GameRepository $gameRepository,
        TableExportService $tableExportService
    ): Response {
        $filters = [
            'q' => trim((string) $request->query->get('q', '')),
            'sort' => $this->sanitizeSort((string) $request->query->get('sort', 'name')),
            'direction' => $this->sanitizeDirection((string) $request->query->get('direction', 'asc')),
        ];

        $categories = $categoryRepository->searchForAdmin(
            $filters['q'],
            $filters['sort'],
            $filters['direction'],
            5000
        );

        $categoryIds = [];
        foreach ($categories as $category) {
            $categoryId = $category->getCategoryId();
            if (is_int($categoryId) && $categoryId > 0) {
                $categoryIds[] = $categoryId;
            }
        }
        $gamesByCategoryId = $gameRepository->countByCategoryIds($categoryIds);

        $headers = ['ID', 'Nom', 'Description', 'Nb jeux', 'Cree le'];
        $rows = [];
        foreach ($categories as $category) {
            $categoryId = (int) ($category->getCategoryId() ?? 0);
            $rows[] = [
                $categoryId,
                (string) ($category->getName() ?? '-'),
                (string) ($category->getDescription() ?? '-'),
                (int) ($gamesByCategoryId[$categoryId] ?? 0),
                $category->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $fileSuffix = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Categories', $headers, $rows, sprintf('admin_categories_%s.xlsx', $fileSuffix));
        }

        return $tableExportService->exportPdf('Categories', $headers, $rows, sprintf('admin_categories_%s.pdf', $fileSuffix));
    }

    private function sanitizeSort(string $value): string
    {
        $normalized = strtolower(trim($value));

        return in_array($normalized, self::SORTS, true) ? $normalized : 'name';
    }

    private function sanitizeDirection(string $value): string
    {
        return strtolower(trim($value)) === 'desc' ? 'desc' : 'asc';
    }
}
