<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Tournament;
use App\Entity\User;
use App\Form\TournamentType;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentDetailController extends AbstractController
{
    #[Route('/pages/organizer-tournament-detail/{id}', name: 'front_organizer_tournament_detail', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function index(
        int $id,
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        EntityManagerInterface $entityManager,
        KernelInterface $kernel,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournament = $tournamentRepository->findOneBy([
            'tournamentId' => $id,
            'organizerUserId' => $user,
        ]);

        if (!$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        $form = $this->createForm(TournamentType::class, $tournament, [
            'organizer_locked' => true,
            'include_status' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photoFile')->getData();
            if ($uploadedFile instanceof UploadedFile) {
                $tournament->setPhotoPath($this->storeTournamentPhoto($uploadedFile, $kernel));
            }

            $tournament
                ->setOrganizerUserId($user)
                ->setUpdatedAt(new \DateTime())
            ;

            $entityManager->flush();

            $this->addFlash('success', 'Tournoi mis a jour avec succes.');

            return $this->redirectToRoute('front_organizer_tournament_detail', [
                'id' => $id,
            ]);
        }

        $registrationsCount = $tournamentTeamRepository->count(['tournamentId' => $tournament]);
        $acceptedRegistrationsCount = $tournamentTeamRepository->count([
            'tournamentId' => $tournament,
            'status' => 'ACCEPTED',
        ]);
        $matchesCount = $tournamentMatchRepository->count(['tournamentId' => $tournament]);

        return $this->render('front/pages/organizer-tournament-detail.html.twig', [
            'tournament' => $tournament,
            'tournamentForm' => $form->createView(),
            'registrationsCount' => $registrationsCount,
            'acceptedRegistrationsCount' => $acceptedRegistrationsCount,
            'matchesCount' => $matchesCount,
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
