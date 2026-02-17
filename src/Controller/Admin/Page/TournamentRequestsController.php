<?php

namespace App\Controller\Admin\Page;

use App\Entity\Tournament;
use App\Entity\TournamentRequest;
use App\Entity\User;
use App\Repository\GameRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentRequestRepository;
use App\Service\Admin\TableExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentRequestsController extends AbstractController
{
    private const STATUSES = ['PENDING', 'ACCEPTED', 'REFUSED'];
    private const SORTS = ['latest', 'oldest', 'title', 'prize', 'status'];

    #[Route('/admin/tournament-requests', name: 'admin_tournament_requests', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRequestRepository $tournamentRequestRepository,
        GameRepository $gameRepository,
    ): Response
    {
        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $requests = $tournamentRequestRepository->searchForAdmin($query, $status, $gameId, $sort, 500);

        return $this->render('admin/pages/tournament-requests.html.twig', [
            'requests' => $requests,
            'availableGames' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => [
                'q' => $query,
                'status' => $status,
                'game' => $gameId,
                'sort' => $sort,
            ],
            'statusOptions' => self::STATUSES,
            'sortOptions' => self::SORTS,
            'counter' => count($requests),
        ]);
    }

    #[Route('/admin/tournament-requests/export/{format}', name: 'admin_tournament_requests_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TournamentRequestRepository $tournamentRequestRepository,
        TableExportService $tableExportService,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $requests = $tournamentRequestRepository->searchForAdmin($query, $status, $gameId, $sort, 5000);

        $headers = ['ID', 'Titre', 'Organisateur', 'Jeu', 'Start date', 'End date', 'Status', 'Prize pool', 'Created at'];
        $rows = [];
        foreach ($requests as $requestItem) {
            $rows[] = [
                (int) ($requestItem->getRequestId() ?? 0),
                (string) ($requestItem->getTitle() ?? '-'),
                (string) ($requestItem->getOrganizerUserId()?->getUsername() ?? '-'),
                (string) ($requestItem->getGameId()?->getName() ?? '-'),
                $requestItem->getStartDate()?->format('Y-m-d') ?? '-',
                $requestItem->getEndDate()?->format('Y-m-d') ?? '-',
                (string) ($requestItem->getStatus() ?? '-'),
                (string) ($requestItem->getPrizePool() ?? '0'),
                $requestItem->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $timestamp = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Demandes Tournois', $headers, $rows, sprintf('admin_tournament_requests_%s.xlsx', $timestamp));
        }

        return $tableExportService->exportPdf('Demandes Tournois', $headers, $rows, sprintf('admin_tournament_requests_%s.pdf', $timestamp));
    }

    #[Route('/admin/tournament-requests/{id}/review', name: 'admin_tournament_request_review', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function review(
        int $id,
        Request $request,
        TournamentRequestRepository $tournamentRequestRepository,
        TournamentRepository $tournamentRepository,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
    ): Response {
        $token = (string) $request->request->get('_token');
        if (!$this->isCsrfTokenValid('review_tournament_request_' . $id, $token)) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectBack($request);
        }

        $tournamentRequest = $tournamentRequestRepository->find($id);
        if (!$tournamentRequest instanceof TournamentRequest) {
            $this->addFlash('error', 'Demande de tournoi introuvable.');
            return $this->redirectBack($request);
        }

        $decision = strtoupper(trim((string) $request->request->get('decision', '')));
        if (!in_array($decision, ['ACCEPTED', 'REFUSED'], true)) {
            $this->addFlash('error', 'Decision invalide.');
            return $this->redirectBack($request);
        }

        $note = trim((string) $request->request->get('admin_note', ''));
        $admin = $this->getUser();
        $adminUser = $admin instanceof User ? $admin : null;
        $previousStatus = strtoupper((string) $tournamentRequest->getStatus());

        $tournamentRequest
            ->setStatus($decision)
            ->setAdminResponseNote($note !== '' ? $note : null)
            ->setReviewedAt(new \DateTime())
            ->setReviewedByAdminId($adminUser);

        if ($decision === 'ACCEPTED' && $previousStatus !== 'ACCEPTED') {
            $startDate = $tournamentRequest->getStartDate();
            $endDate = $tournamentRequest->getEndDate();
            if (!$startDate instanceof \DateTimeInterface || !$endDate instanceof \DateTimeInterface) {
                $this->addFlash('error', 'Dates invalides sur la demande de tournoi.');
                return $this->redirectBack($request);
            }

            $existingTournament = $tournamentRepository->findOneBy([
                'organizerUserId' => $tournamentRequest->getOrganizerUserId(),
                'title' => $tournamentRequest->getTitle(),
                'startDate' => $startDate,
            ]);

            if (!$existingTournament instanceof Tournament) {
                $now = new \DateTime();
                $createdTournament = (new Tournament())
                    ->setOrganizerUserId($tournamentRequest->getOrganizerUserId())
                    ->setGameId($tournamentRequest->getGameId())
                    ->setTitle((string) $tournamentRequest->getTitle())
                    ->setDescription($tournamentRequest->getDescription())
                    ->setRules($tournamentRequest->getRules())
                    ->setStartDate(\DateTime::createFromInterface($startDate))
                    ->setEndDate(\DateTime::createFromInterface($endDate))
                    ->setRegistrationDeadline(
                        $tournamentRequest->getRegistrationDeadline() instanceof \DateTimeInterface
                            ? \DateTime::createFromInterface($tournamentRequest->getRegistrationDeadline())
                            : null
                    )
                    ->setMaxTeams((int) $tournamentRequest->getMaxTeams())
                    ->setFormat((string) $tournamentRequest->getFormat())
                    ->setRegistrationMode((string) $tournamentRequest->getRegistrationMode())
                    ->setPrizePool((string) $tournamentRequest->getPrizePool())
                    ->setPrizeDescription($tournamentRequest->getPrizeDescription())
                    ->setPhotoPath($tournamentRequest->getPhotoPath())
                    ->setStatus('OPEN')
                    ->setCreatedAt($now)
                    ->setUpdatedAt($now);

                $entityManager->persist($createdTournament);
            }
        }

        $entityManager->flush();

        $this->sendDecisionEmail($mailer, $tournamentRequest, $decision);
        $this->addFlash('success', $decision === 'ACCEPTED'
            ? 'Demande acceptee. Le tournoi est visible dans le Back Office et Front Office.'
            : 'Demande refusee.'
        );

        return $this->redirectBack($request);
    }

    private function redirectBack(Request $request): RedirectResponse
    {
        $referer = (string) $request->headers->get('referer', '');
        if ($referer !== '') {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute('admin_tournament_requests');
    }

    private function sendDecisionEmail(MailerInterface $mailer, TournamentRequest $tournamentRequest, string $decision): void
    {
        $recipient = $tournamentRequest->getOrganizerUserId()?->getEmail();
        if (!is_string($recipient) || trim($recipient) === '') {
            return;
        }

        $mailerDsn = (string) ($_ENV['MAILER_DSN'] ?? $_SERVER['MAILER_DSN'] ?? getenv('MAILER_DSN') ?: '');
        if ($mailerDsn === '' || str_starts_with($mailerDsn, 'null://')) {
            $this->addFlash('warning', "MAILER_DSN n'est pas configure: email non envoye.");
            return;
        }

        $message = $decision === 'ACCEPTED'
            ? 'tournois accepted'
            : "tournois n'est pas accepte par l'admin";

        $from = (string) ($_ENV['MAILER_FROM_ADDRESS'] ?? $_SERVER['MAILER_FROM_ADDRESS'] ?? 'no-reply@pulse.local');

        try {
            $mailer->send(
                (new TemplatedEmail())
                    ->from(new Address($from, 'PULSE Admin'))
                    ->to($recipient)
                    ->subject('Decision demande tournoi')
                    ->htmlTemplate('emails/tournament_request_review_email.html.twig')
                    ->context([
                        'request' => $tournamentRequest,
                        'message' => $message,
                        'decision' => $decision,
                    ])
            );
        } catch (\Throwable) {
            $this->addFlash('warning', "La demande a ete traitee, mais l'email n'a pas pu etre envoye.");
        }
    }
}
