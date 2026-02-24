<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\TournamentRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestDetailController extends AbstractController
{
    #[Route('/pages/organizer-request-detail/{id}', name: 'front_organizer_request_detail', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(int $id, TournamentRequestRepository $tournamentRequestRepository): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournamentRequest = $tournamentRequestRepository->findOneBy([
            'requestId' => $id,
            'organizerUserId' => $user,
        ]);

        if ($tournamentRequest === null) {
            throw $this->createNotFoundException('Demande introuvable.');
        }

        return $this->render('front/pages/organizer-request-detail.html.twig', [
            'tournamentRequest' => $tournamentRequest,
        ]);
    }
}
