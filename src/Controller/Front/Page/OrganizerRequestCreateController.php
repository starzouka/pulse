<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\TournamentRequest;
use App\Entity\User;
use App\Form\TournamentRequestType;
use App\Service\Organizer\OrganizerAiAssistantService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
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
        OrganizerAiAssistantService $organizerAiAssistantService,
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

        $recaptchaSiteKey = $this->getRecaptchaSiteKey();
        $recaptchaSecretKey = $this->getRecaptchaSecretKey();
        $recaptchaEnabled = $recaptchaSiteKey !== null && $recaptchaSecretKey !== null;
        $recaptchaMode = $this->getRecaptchaMode();
        $aiRequestAssessment = null;

        if ($form->isSubmitted() && $recaptchaEnabled) {
            $recaptchaToken = trim((string) $request->request->get('g-recaptcha-response', ''));
            if ($recaptchaToken === '') {
                $form->addError(new FormError('Veuillez valider le reCAPTCHA.'));
            } elseif (!$this->verifyRecaptchaToken($recaptchaToken, $request, $httpClient, $recaptchaSecretKey)) {
                $form->addError(new FormError('Validation reCAPTCHA invalide. Veuillez reessayer.'));
            }
        }

        if ($form->isSubmitted()) {
            $submittedPayload = $request->request->all('tournament_request');
            if (!is_array($submittedPayload)) {
                $submittedPayload = [];
            }

            $aiRequestAssessment = $organizerAiAssistantService->evaluateTournamentRequestDraft($submittedPayload, $user);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $aiRequestAssessment = $organizerAiAssistantService->evaluateTournamentRequestEntity($tournamentRequest);

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

            $this->addFlash(
                'success',
                sprintf(
                    'Demande de tournoi enregistree avec succes. Score IA: %d/100 (%s).',
                    (int) ($aiRequestAssessment['score'] ?? 0),
                    (string) ($aiRequestAssessment['riskLevel'] ?? 'LOW')
                )
            );

            $aiReasons = $aiRequestAssessment['reasons'] ?? [];
            if (is_array($aiReasons) && $aiReasons !== []) {
                $topReasons = array_slice(array_values(array_filter(array_map('strval', $aiReasons))), 0, 2);
                if ($topReasons !== []) {
                    $this->addFlash('success', 'IA - Points de controle: ' . implode(' | ', $topReasons));
                }
            }

            return $this->redirectToRoute('front_organizer_requests');
        }

        return $this->render('front/pages/organizer-request-create.html.twig', [
            'tournamentRequestForm' => $form->createView(),
            'recaptchaEnabled' => $recaptchaEnabled,
            'recaptchaSiteKey' => $recaptchaSiteKey,
            'recaptchaMode' => $recaptchaMode,
            'aiRequestAssessment' => $aiRequestAssessment,
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

    private function verifyRecaptchaToken(
        string $token,
        Request $request,
        HttpClientInterface $httpClient,
        string $secretKey,
    ): bool {
        $payload = [
            'secret' => $secretKey,
            'response' => $token,
        ];

        $clientIp = $request->getClientIp();
        if (is_string($clientIp) && trim($clientIp) !== '') {
            $payload['remoteip'] = $clientIp;
        }

        try {
            $httpResponse = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => $payload,
                'timeout' => 10,
            ]);

            $data = $httpResponse->toArray(false);

            return ($data['success'] ?? false) === true;
        } catch (\Throwable) {
            return false;
        }
    }

    private function getRecaptchaSiteKey(): ?string
    {
        return $this->firstNonEmptyEnv([
            'GOOGLE_RECAPTCHA_SITE_KEY',
            'RECAPTCHA_SITE_KEY',
            'RECAPTCHA_PUBLIC_KEY',
            'GOOGLE_CAPTCHA_SITE_KEY',
        ]);
    }

    private function getRecaptchaSecretKey(): ?string
    {
        return $this->firstNonEmptyEnv([
            'GOOGLE_RECAPTCHA_SECRET_KEY',
            'RECAPTCHA_SECRET_KEY',
            'RECAPTCHA_PRIVATE_KEY',
            'GOOGLE_CAPTCHA_SECRET_KEY',
        ]);
    }

    private function getRecaptchaMode(): string
    {
        $mode = $this->firstNonEmptyEnv([
            'GOOGLE_RECAPTCHA_MODE',
            'RECAPTCHA_MODE',
        ]);

        $normalized = strtolower((string) $mode);

        return $normalized === 'invisible' ? 'invisible' : 'checkbox';
    }

    /**
     * @param list<string> $keys
     */
    private function firstNonEmptyEnv(array $keys): ?string
    {
        foreach ($keys as $key) {
            $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
            if (!is_string($value)) {
                continue;
            }

            $normalized = trim($value);
            if ($normalized !== '') {
                return $normalized;
            }
        }

        return null;
    }
}
