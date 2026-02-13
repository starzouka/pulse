<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Form\TournamentType;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentFormController extends AbstractController
{
    #[Route('/admin/tournament-form', name: 'admin_tournament_form', methods: ['GET', 'POST'])]
    #[Route('/admin/tournaments/new', name: 'admin_tournament_create', methods: ['GET', 'POST'])]
    #[Route('/admin/tournaments/{id}/edit', name: 'admin_tournament_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        EntityManagerInterface $entityManager,
        KernelInterface $kernel,
        ?int $id = null,
    ): Response
    {
        $isEdit = $id !== null;
        $tournament = $isEdit ? $tournamentRepository->find($id) : new Tournament();

        if ($isEdit && !$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        if (!$tournament instanceof Tournament) {
            $tournament = new Tournament();
        }

        $form = $this->createForm(TournamentType::class, $tournament, [
            'include_status' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photoFile')->getData();
            if ($uploadedFile instanceof UploadedFile) {
                $tournament->setPhotoPath($this->storeTournamentPhoto($uploadedFile, $kernel));
            }

            $now = new \DateTime();
            if (!$isEdit) {
                $tournament->setCreatedAt($now);
                $entityManager->persist($tournament);
            }

            $tournament->setUpdatedAt($now);

            $entityManager->flush();

            $this->addFlash('success', $isEdit ? 'Tournoi mis a jour avec succes.' : 'Tournoi enregistre avec succes.');

            return $this->redirectToRoute('admin_tournaments');
        }

        return $this->render('admin/pages/tournament-form.html.twig', [
            'tournamentForm' => $form->createView(),
            'isEdit' => $isEdit,
            'tournament' => $tournament,
        ]);
    }

    private function storeTournamentPhoto(UploadedFile $uploadedFile, KernelInterface $kernel): string
    {
        $uploadDir = $kernel->getProjectDir() . '/public/uploads/tournaments';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0775, true);
        }

        $extension = $uploadedFile->guessExtension();
        if (!is_string($extension) || $extension === '') {
            $extension = 'bin';
        }

        $fileName = sprintf('tournament_%s.%s', bin2hex(random_bytes(8)), $extension);
        $uploadedFile->move($uploadDir, $fileName);

        return 'uploads/tournaments/' . $fileName;
    }
}
