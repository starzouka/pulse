<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\TournamentRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestsController extends AbstractController
{
    #[Route('/pages/organizer-requests', name: 'front_organizer_requests', methods: ['GET'])]
    public function index(TournamentRequestRepository $tournamentRequestRepository): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournamentRequests = $tournamentRequestRepository->findBy(
            ['organizerUserId' => $user],
            ['createdAt' => 'DESC'],
        );

        return $this->render('front/pages/organizer-requests.html.twig', [
            'tournamentRequests' => $tournamentRequests,
        ]);
    }
}
