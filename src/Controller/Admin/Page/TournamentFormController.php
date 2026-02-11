<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Form\TournamentType;
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
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        KernelInterface $kernel,
    ): Response
    {
        $tournament = new Tournament();
        $form = $this->createForm(TournamentType::class, $tournament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photoFile')->getData();
            if ($uploadedFile instanceof UploadedFile) {
                $tournament->setPhotoPath($this->storeTournamentPhoto($uploadedFile, $kernel));
            }

            $now = new \DateTime();
            $tournament
                ->setCreatedAt($now)
                ->setUpdatedAt($now)
            ;

            $entityManager->persist($tournament);
            $entityManager->flush();

            $this->addFlash('success', 'Tournoi enregistre avec succes.');

            return $this->redirectToRoute('admin_tournaments');
        }

        return $this->render('admin/pages/tournament-form.html.twig', [
            'tournamentForm' => $form->createView(),
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
