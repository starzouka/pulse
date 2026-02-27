<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\TournamentRequest;
use App\Entity\User;
use App\Form\TournamentRequestType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class OrganizerRequestCreateController extends AbstractController
{
    #[Route('/pages/organizer-request-create', name: 'front_organizer_request_create', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        KernelInterface $kernel,
        HttpClientInterface $httpClient,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $tournamentRequest = new TournamentRequest();
        $tournamentRequest
            ->setOrganizerUserId($user)
            ->setStatus('PENDING')
            ->setCreatedAt(new \DateTime())
        ;

        $form = $this->createForm(TournamentRequestType::class, $tournamentRequest, [
            'organizer_locked' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$this->verifyRecaptcha($request, $httpClient)) {
                return $this->render('front/pages/organizer-request-create.html.twig', [
                    'tournamentRequestForm' => $form->createView(),
                    'recaptcha_site_key' => $this->getRecaptchaSiteKey(),
                ]);
            }

            $uploadedFile = $form->get('photoFile')->getData();
            if ($uploadedFile instanceof UploadedFile) {
                $tournamentRequest->setPhotoPath($this->storeTournamentPhoto($uploadedFile, $kernel));
            }

            $tournamentRequest
                ->setOrganizerUserId($user)
                ->setStatus('PENDING')
                ->setReviewedAt(null)
                ->setReviewedByAdminId(null)
                ->setAdminResponseNote(null)
            ;

            $entityManager->persist($tournamentRequest);
            $entityManager->flush();

            $this->addFlash('success', 'Demande de tournoi enregistree avec succes.');

            return $this->redirectToRoute('front_organizer_requests');
        }

        return $this->render('front/pages/organizer-request-create.html.twig', [
            'tournamentRequestForm' => $form->createView(),
            'recaptcha_site_key' => $this->getRecaptchaSiteKey(),
        ]);
    }

    private function verifyRecaptcha(Request $request, HttpClientInterface $httpClient): bool
    {
        $secretKey = $this->getRecaptchaSecretKey();
        if ($secretKey === '') {
            $this->addFlash('error', 'Configuration reCAPTCHA manquante.');

            return false;
        }

        $token = trim((string) $request->request->get('g-recaptcha-response', ''));
        if ($token === '') {
            $this->addFlash('error', 'Veuillez valider le reCAPTCHA.');

            return false;
        }

        try {
            $response = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => $secretKey,
                    'response' => $token,
                    'remoteip' => (string) ($request->getClientIp() ?? ''),
                ],
                'timeout' => 8,
            ]);

            $payload = $response->toArray(false);
        } catch (\Throwable) {
            $this->addFlash('error', 'Verification reCAPTCHA impossible. Reessayez.');

            return false;
        }

        $isSuccess = isset($payload['success']) && $payload['success'] === true;
        if ($isSuccess) {
            return true;
        }

        $errorCodes = $payload['error-codes'] ?? [];
        $errorSuffix = is_array($errorCodes) && $errorCodes !== []
            ? ' (' . implode(', ', array_map('strval', $errorCodes)) . ')'
            : '';

        $this->addFlash('error', 'reCAPTCHA invalide' . $errorSuffix . '.');

        return false;
    }

    private function getRecaptchaSiteKey(): string
    {
        return (string) ($_ENV['GOOGLE_RECAPTCHA_SITE_KEY']
            ?? $_SERVER['GOOGLE_RECAPTCHA_SITE_KEY']
            ?? getenv('GOOGLE_RECAPTCHA_SITE_KEY')
            ?: '');
    }

    private function getRecaptchaSecretKey(): string
    {
        return (string) ($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']
            ?? $_SERVER['GOOGLE_RECAPTCHA_SECRET_KEY']
            ?? getenv('GOOGLE_RECAPTCHA_SECRET_KEY')
            ?: '');
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
