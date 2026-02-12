<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\TeamJoinRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyRequestsController extends AbstractController
{
    #[Route('/pages/my-requests', name: 'front_my_requests', methods: ['GET'])]
    public function index(
        Request $request,
        TeamJoinRequestRepository $teamJoinRequestRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        return $this->render('front/pages/my-requests.html.twig', [
            'viewer_user' => $viewer,
            'join_requests' => $teamJoinRequestRepository->findLatestByUser($viewer, 100),
            'join_requests_summary' => $teamJoinRequestRepository->summarizeStatusesForUser($viewer),
        ]);
    }

    #[Route('/pages/my-requests/{id}/cancel', name: 'front_my_requests_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function cancel(
        int $id,
        Request $request,
        TeamJoinRequestRepository $teamJoinRequestRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('my_request_cancel_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_my_requests');
        }

        $joinRequest = $teamJoinRequestRepository->findOnePendingByIdForUser($id, $viewer);
        if ($joinRequest === null) {
            $this->addFlash('error', 'Demande introuvable ou deja traitee.');
            return $this->redirectToRoute('front_my_requests');
        }

        $joinRequest
            ->setStatus('CANCELLED')
            ->setRespondedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', 'Demande annulee.');

        return $this->redirectToRoute('front_my_requests');
    }
}
