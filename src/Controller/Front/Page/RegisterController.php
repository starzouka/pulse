<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterController extends AbstractController
{
    #[Route('/pages/register', name: 'front_register', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        EmailVerifier $emailVerifier,
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('front_home');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTime();
            $displayName = trim((string) $user->getDisplayName());
            if ($displayName === '') {
                $displayName = (string) $user->getUsername();
            }

            $user
                ->setEmail((string) $user->getEmail())
                ->setDisplayName($displayName)
                ->setRole((string) $user->getRole())
                ->setEmailVerified(false)
                ->setIsActive(true)
                ->setCreatedAt($now)
                ->setUpdatedAt($now)
                ->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        (string) $form->get('plainPassword')->getData()
                    )
                );

            $entityManager->persist($user);
            $entityManager->flush();

            $mailerDsn = (string) ($_ENV['MAILER_DSN'] ?? $_SERVER['MAILER_DSN'] ?? getenv('MAILER_DSN') ?: '');
            if ($mailerDsn === '' || str_starts_with($mailerDsn, 'null://')) {
                $this->addFlash('error', "Compte cree, mais l'email de verification n'est pas envoye car MAILER_DSN est sur null://null.");
            } else {
                $mailerFrom = $_ENV['MAILER_FROM_ADDRESS'] ?? $_SERVER['MAILER_FROM_ADDRESS'] ?? 'no-reply@pulse.local';
                try {
                    $emailVerifier->sendEmailConfirmation(
                        'front_verify_email',
                        $user,
                        (new TemplatedEmail())
                            ->from(new Address((string) $mailerFrom, 'PULSE'))
                            ->to((string) $user->getEmail())
                            ->subject('Confirmez votre email')
                            ->htmlTemplate('emails/confirmation_email.html.twig')
                    );
                    $this->addFlash('success', 'Inscription reussie. Verifiez votre boite email pour activer le compte.');
                } catch (\Throwable) {
                    $this->addFlash('error', "Compte cree, mais l'email de verification n'a pas pu etre envoye. Verifiez MAILER_DSN.");
                }
            }

            return $this->redirectToRoute('front_login');
        }

        return $this->render('front/pages/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
