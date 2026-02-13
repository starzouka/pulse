<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\Table(name: 'categories')]
#[UniqueEntity(fields: ['name'], message: 'Cette categorie existe deja.')]
class Category
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'category_id', type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $categoryId = null;
    
    #[ORM\Column(name: 'name', type: Types::STRING, length: 80)]
    #[Assert\NotBlank(message: 'Le nom de categorie est obligatoire.')]
    #[Assert\Length(min: 2, max: 80)]
    private string $name;
    
    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $description = null;
    
    #[ORM\Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): static
    {
        $this->categoryId = $categoryId;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
