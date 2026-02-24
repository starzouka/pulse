<?php

namespace App\Controller\Admin\Page;

use App\Repository\TournamentRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentRequestDetailController extends AbstractController
{
    #[Route('/admin/tournament-request-detail', name: 'admin_tournament_request_detail_legacy', methods: ['GET'])]
    #[Route('/admin/tournament-requests/{id}/detail', name: 'admin_tournament_request_detail', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(TournamentRequestRepository $tournamentRequestRepository, ?int $id = null): Response
    {
        if ($id === null) {
            $this->addFlash('error', 'Aucune demande selectionnee.');
            return $this->redirectToRoute('admin_tournament_requests');
        }

        $tournamentRequest = $tournamentRequestRepository->findOneWithRelationsById($id);
        if ($tournamentRequest === null) {
            throw $this->createNotFoundException('Demande de tournoi introuvable.');
        }

        return $this->render('admin/pages/tournament-request-detail.html.twig', [
            'request' => $tournamentRequest,
        ]);
    }
}
