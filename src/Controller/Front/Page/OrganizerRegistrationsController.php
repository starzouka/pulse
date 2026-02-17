<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Tournament;
use App\Entity\User;
use App\Repository\TeamRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRegistrationsController extends AbstractController
{
    #[Route('/pages/organizer-registrations', name: 'front_organizer_registrations', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournaments = $tournamentRepository->findBy(
            ['organizerUserId' => $user],
            ['startDate' => 'DESC'],
        );

        $selectedTournament = $this->resolveSelectedTournament($request, $tournaments, $tournamentRepository, $user);
        $registrations = [];

        if ($selectedTournament instanceof Tournament) {
            $registrations = $tournamentTeamRepository->findBy(
                ['tournamentId' => $selectedTournament],
                ['registeredAt' => 'DESC'],
            );
        }

        return $this->render('front/pages/organizer-registrations.html.twig', [
            'tournaments' => $tournaments,
            'selectedTournament' => $selectedTournament,
            'registrations' => $registrations,
        ]);
    }

    #[Route('/pages/organizer-registrations/{tournamentId}/{teamId}/status', name: 'front_organizer_registration_status', requirements: ['tournamentId' => '\d+', 'teamId' => '\d+'], methods: ['POST'])]
    public function updateStatus(
        int $tournamentId,
        int $teamId,
        Request $request,
        TournamentRepository $tournamentRepository,
        TeamRepository $teamRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $csrfTokenId = sprintf('organizer_registration_status_%d_%d', $tournamentId, $teamId);
        if (!$this->isCsrfTokenValid($csrfTokenId, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_organizer_registrations', [
                'tournament' => $tournamentId,
            ]);
        }

        $tournament = $tournamentRepository->findOneBy([
            'tournamentId' => $tournamentId,
            'organizerUserId' => $user,
        ]);
        if (!$tournament instanceof Tournament) {
            throw $this->createNotFoundException('Tournoi introuvable.');
        }

        $team = $teamRepository->find($teamId);
        if ($team === null) {
            throw $this->createNotFoundException('Equipe introuvable.');
        }

        $registration = $tournamentTeamRepository->findOneBy([
            'tournamentId' => $tournament,
            'teamId' => $team,
        ]);
        if ($registration === null) {
            throw $this->createNotFoundException('Inscription introuvable.');
        }

        $status = strtoupper((string) $request->request->get('status'));
        $allowedStatuses = ['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'];
        if (!in_array($status, $allowedStatuses, true)) {
            $this->addFlash('error', 'Statut invalide.');

            return $this->redirectToRoute('front_organizer_registrations', [
                'tournament' => $tournamentId,
            ]);
        }

        $registration
            ->setStatus($status)
            ->setDecidedAt(new \DateTime())
            ->setDecidedByUserId($user)
        ;

        $entityManager->flush();

        $this->addFlash('success', 'Statut d inscription mis a jour.');

        return $this->redirectToRoute('front_organizer_registrations', [
            'tournament' => $tournamentId,
        ]);
    }

    /**
     * @param list<Tournament> $tournaments
     */
    private function resolveSelectedTournament(
        Request $request,
        array $tournaments,
        TournamentRepository $tournamentRepository,
        User $user,
    ): ?Tournament
    {
        $queryTournamentId = $request->query->getInt('tournament', 0);
        if ($queryTournamentId > 0) {
            $selectedTournament = $tournamentRepository->findOneBy([
                'tournamentId' => $queryTournamentId,
                'organizerUserId' => $user,
            ]);
            if ($selectedTournament instanceof Tournament) {
                return $selectedTournament;
            }
        }

        return $tournaments[0] ?? null;
    }
}
