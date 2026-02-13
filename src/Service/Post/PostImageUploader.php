<?php

declare(strict_types=1);

namespace App\Service\Post;

use App\Entity\Image;
use App\Entity\Post;
use App\Entity\PostImage;
use App\Entity\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\KernelInterface;

final class PostImageUploader
{
    /**
     * @var array<string, string>
     */
    private const ALLOWED_MIME_TYPES = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
        'image/gif' => 'gif',
    ];

    public function __construct(
        private readonly KernelInterface $kernel,
    ) {
    }

    /**
     * @param array<int, mixed> $rawFiles
     */
    public function hasAnyUpload(array $rawFiles): bool
    {
        foreach ($this->normalizeUploads($rawFiles) as $uploadedFile) {
            if ($uploadedFile instanceof UploadedFile && $uploadedFile->isValid()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array<int, mixed> $rawFiles
     *
     * @return array{post_images:list<PostImage>, skipped:int}
     */
    public function createPostImages(array $rawFiles, User $viewer, Post $post): array
    {
        $uploadDirectory = $this->kernel->getProjectDir() . '/public/uploads/posts';
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0775, true);
        }

        $now = new \DateTime();
        $postImages = [];
        $skipped = 0;
        $position = 1;

        foreach ($this->normalizeUploads($rawFiles) as $uploadedFile) {
            if (!$uploadedFile instanceof UploadedFile || !$uploadedFile->isValid()) {
                ++$skipped;
                continue;
            }

            $mimeType = $this->resolveMimeType($uploadedFile);
            if (!array_key_exists($mimeType, self::ALLOWED_MIME_TYPES)) {
                ++$skipped;
                continue;
            }

            $fileExtension = $this->resolveExtension($uploadedFile, $mimeType);
            $fileName = sprintf('post_%s.%s', bin2hex(random_bytes(10)), $fileExtension);

            $uploadedFile->move($uploadDirectory, $fileName);
            $storedPath = $uploadDirectory . '/' . $fileName;
            $imageSize = @getimagesize($storedPath) ?: [null, null];

            $image = (new Image())
                ->setFileUrl('uploads/posts/' . $fileName)
                ->setMimeType($mimeType)
                ->setSizeBytes((string) max(0, (int) filesize($storedPath)))
                ->setWidth(is_int($imageSize[0]) ? $imageSize[0] : null)
                ->setHeight(is_int($imageSize[1]) ? $imageSize[1] : null)
                ->setAltText('Image du post de ' . ($viewer->getDisplayName() ?? $viewer->getUsername()))
                ->setUploadedByUserId($viewer)
                ->setCreatedAt($now)
            ;

            $postImages[] = (new PostImage())
                ->setPostId($post)
                ->setImageId($image)
                ->setPosition($position)
            ;

            ++$position;

            // On limite volontairement a 8 images pour garder un post lisible.
            if ($position > 8) {
                break;
            }
        }

        return [
            'post_images' => $postImages,
            'skipped' => $skipped,
        ];
    }

    /**
     * @param array<int, mixed> $rawFiles
     *
     * @return list<UploadedFile>
     */
    private function normalizeUploads(array $rawFiles): array
    {
        $normalized = [];
        foreach ($rawFiles as $file) {
            if ($file instanceof UploadedFile) {
                $normalized[] = $file;
                continue;
            }

            if (!is_array($file)) {
                continue;
            }

            foreach ($file as $nestedFile) {
                if ($nestedFile instanceof UploadedFile) {
                    $normalized[] = $nestedFile;
                }
            }
        }

        return $normalized;
    }

    private function resolveMimeType(UploadedFile $uploadedFile): string
    {
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

        return strtolower($mimeType);
    }

    private function resolveExtension(UploadedFile $uploadedFile, string $mimeType): string
    {
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
            $fileExtension = self::ALLOWED_MIME_TYPES[$mimeType] ?? 'bin';
        }

        return strtolower($fileExtension);
    }
}
