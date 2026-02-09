<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'images')]
class Image
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'image_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $imageId = null;
    
    #[ORM\Column(name: 'file_url', type: Types::STRING, length: 500)]
    private string $fileUrl;
    
    #[ORM\Column(name: 'mime_type', type: Types::STRING, length: 60)]
    private string $mimeType;
    
    #[ORM\Column(name: 'size_bytes', type: Types::BIGINT, options: ['unsigned' => true])]
    private string $sizeBytes;
    
    #[ORM\Column(name: 'width', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $width = null;
    
    #[ORM\Column(name: 'height', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $height = null;
    
    #[ORM\Column(name: 'alt_text', type: Types::STRING, length: 255, nullable: true)]
    private ?string $altText = null;
    
    #[ORM\Column(name: 'uploaded_by_user_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $uploadedByUserId = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getImageId(): ?int
    {
        return $this->imageId;
    }

    public function setImageId(?int $imageId): static
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getFileUrl(): string
    {
        return $this->fileUrl;
    }

    public function setFileUrl(string $fileUrl): static
    {
        $this->fileUrl = $fileUrl;

        return $this;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): static
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getSizeBytes(): string
    {
        return $this->sizeBytes;
    }

    public function setSizeBytes(string $sizeBytes): static
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getAltText(): ?string
    {
        return $this->altText;
    }

    public function setAltText(?string $altText): static
    {
        $this->altText = $altText;

        return $this;
    }

    public function getUploadedByUserId(): ?int
    {
        return $this->uploadedByUserId;
    }

    public function setUploadedByUserId(?int $uploadedByUserId): static
    {
        $this->uploadedByUserId = $uploadedByUserId;

        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
