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
        $recaptchaSiteKey = $this->getEnvString('GOOGLE_RECAPTCHA_SITE_KEY');

        if ($form->isSubmitted() && $form->isValid()) {
            $recaptchaSecret = $this->getEnvString('GOOGLE_RECAPTCHA_SECRET_KEY');
            $recaptchaToken = trim((string) $request->request->get('g_recaptcha_token', ''));

            if ($recaptchaSecret === '') {
                $this->addFlash('error', 'reCAPTCHA non configuree. Ajoutez GOOGLE_RECAPTCHA_SECRET_KEY.');

                return $this->render('front/pages/organizer-request-create.html.twig', [
                    'tournamentRequestForm' => $form->createView(),
                    'recaptcha_site_key' => $recaptchaSiteKey,
                ]);
            }

            if ($recaptchaToken === '') {
                $this->addFlash('error', 'Veuillez confirmer la reCAPTCHA avant envoi.');

                return $this->render('front/pages/organizer-request-create.html.twig', [
                    'tournamentRequestForm' => $form->createView(),
                    'recaptcha_site_key' => $recaptchaSiteKey,
                ]);
            }

            $verification = $this->verifyRecaptchaToken(
                $httpClient,
                $recaptchaSecret,
                $recaptchaToken,
                $request->getClientIp(),
            );

            if (!$verification['success']) {
                $this->addFlash('error', 'Verification reCAPTCHA invalide. Reessayez.');

                return $this->render('front/pages/organizer-request-create.html.twig', [
                    'tournamentRequestForm' => $form->createView(),
                    'recaptcha_site_key' => $recaptchaSiteKey,
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
            'recaptcha_site_key' => $recaptchaSiteKey,
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

    private function getEnvString(string $key): string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key) ?: '';

        return is_string($value) ? trim($value) : '';
    }

    /**
     * @return array{success: bool}
     */
    private function verifyRecaptchaToken(
        HttpClientInterface $httpClient,
        string $secret,
        string $token,
        ?string $clientIp,
    ): array {
        $payload = [
            'secret' => $secret,
            'response' => $token,
        ];

        if (is_string($clientIp) && $clientIp !== '') {
            $payload['remoteip'] = $clientIp;
        }

        try {
            $response = $httpClient->request(
                'POST',
                'https://www.google.com/recaptcha/api/siteverify',
                ['body' => $payload],
            );
            $data = $response->toArray(false);
        } catch (\Throwable) {
            return ['success' => false];
        }

        return [
            'success' => isset($data['success']) && $data['success'] === true,
        ];
    }
}
