<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
#[ORM\Table(name: 'teams')]
class Team
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $teamId = null;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 100)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'region', type: Types::STRING, length: 80, nullable: true)]
    private ?string $region = null;
    
    #[ORM\Column(name: 'logo_image_id', type: Types::INTEGER, nullable: true, options: ['unsigned' => true])]
    private ?int $logoImageId = null;
    
    #[ORM\Column(name: 'captain_user_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private int $captainUserId;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;
    
    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $updatedAt;

    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    public function setTeamId(?int $teamId): static
    {
        $this->teamId = $teamId;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getLogoImageId(): ?int
    {
        return $this->logoImageId;
    }

    public function setLogoImageId(?int $logoImageId): static
    {
        $this->logoImageId = $logoImageId;

        return $this;
    }

    public function getCaptainUserId(): int
    {
        return $this->captainUserId;
    }

    public function setCaptainUserId(int $captainUserId): static
    {
        $this->captainUserId = $captainUserId;

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

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
