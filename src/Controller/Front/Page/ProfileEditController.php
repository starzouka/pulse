<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Image;
use App\Entity\User;
use App\Form\ProfileEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileEditController extends AbstractController
{
    #[Route('/pages/profile-edit', name: 'front_profile_edit', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        KernelInterface $kernel,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $form = $this->createForm(ProfileEditType::class, $viewer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('profilePhoto')->getData();
            if ($uploadedFile instanceof UploadedFile) {
                try {
                    $imageEntity = $this->createImageFromUpload($uploadedFile, $viewer, $kernel);
                    $entityManager->persist($imageEntity);
                    $viewer->setProfileImageId($imageEntity);
                } catch (\Throwable) {
                    $this->addFlash('error', 'Impossible de traiter l\'image telechargee. Reessayez avec un autre fichier.');
                    return $this->redirectToRoute('front_profile_edit');
                }
            }

            $viewer->setUpdatedAt(new \DateTime());
            if ($viewer->getDisplayName() === null || trim($viewer->getDisplayName()) === '') {
                $viewer->setDisplayName((string) $viewer->getUsername());
            }

            $entityManager->flush();

            $this->addFlash('success', 'Profil mis a jour avec succes.');

            return $this->redirectToRoute('front_profile');
        }

        return $this->render('front/pages/profile-edit.html.twig', [
            'profileEditForm' => $form->createView(),
            'viewer_user' => $viewer,
        ]);
    }

    private function createImageFromUpload(UploadedFile $uploadedFile, User $viewer, KernelInterface $kernel): Image
    {
        $uploadDirectory = $kernel->getProjectDir() . '/public/uploads/profiles';
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0775, true);
        }

        // Resolve mime type before move(): UploadedFile still points to tmp path.
        $mimeType = null;
        try {
            $mimeType = $uploadedFile->getMimeType();
        } catch (\Throwable) {
            $mimeType = null;
        }
        if (!is_string($mimeType) || $mimeType === '') {
            $mimeType = $uploadedFile->getClientMimeType();
        }
        if (!is_string($mimeType) || $mimeType === '') {
            $mimeType = 'application/octet-stream';
        }

        $fileExtension = null;
        try {
            $fileExtension = $uploadedFile->guessExtension();
        } catch (\Throwable) {
            $fileExtension = null;
        }
        if (!is_string($fileExtension) || $fileExtension === '') {
            $fileExtension = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_EXTENSION);
        }
        if (!is_string($fileExtension) || $fileExtension === '') {
            $fileExtension = 'bin';
        }

        $filename = sprintf('profile_%s.%s', bin2hex(random_bytes(8)), $fileExtension);
        $uploadedFile->move($uploadDirectory, $filename);

        $storedPath = $uploadDirectory . '/' . $filename;
        $imageSize = @getimagesize($storedPath) ?: [null, null];

        $image = (new Image())
            ->setFileUrl('uploads/profiles/' . $filename)
            ->setMimeType($mimeType)
            ->setSizeBytes((string) max(0, (int) filesize($storedPath)))
            ->setWidth(is_int($imageSize[0]) ? $imageSize[0] : null)
            ->setHeight(is_int($imageSize[1]) ? $imageSize[1] : null)
            ->setAltText('Photo profil de ' . ($viewer->getDisplayName() ?? $viewer->getUsername()))
            ->setUploadedByUserId($viewer)
            ->setCreatedAt(new \DateTime())
        ;

        return $image;
    }
}
