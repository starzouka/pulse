<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
#[ORM\Table(name: 'teams')]
#[UniqueEntity(fields: ['name'], message: "Ce nom d'equipe est deja utilise.")]
class Team
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'team_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $teamId = null;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 100)]
    #[Assert\NotBlank(message: "Le nom de l'equipe est obligatoire.")]
    #[Assert\Length(min: 2, max: 100)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'region', type: Types::STRING, length: 80, nullable: true)]
    #[Assert\Length(max: 80)]
    private ?string $region = null;
    
    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'logo_image_id', referencedColumnName: 'image_id', nullable: true, onDelete: 'SET NULL')]
    private ?Image $logoImageId;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'captain_user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'RESTRICT')]
    #[Assert\NotNull(message: 'Le capitaine est obligatoire.')]
    private User $captainUserId;
    
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

    public function getName(): ?string
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

    public function getLogoImageId(): ?Image
    {
        return $this->logoImageId;
    }

    public function setLogoImageId(?Image $logoImageId): static
    {
        $this->logoImageId = $logoImageId;

        return $this;
    }

    public function getCaptainUserId(): ?User
    {
        return $this->captainUserId;
    }

    public function setCaptainUserId(?User $captainUserId): static
    {
        $this->captainUserId = $captainUserId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
