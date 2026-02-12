<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\ProductImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductImageRepository::class)]
#[ORM\Table(name: 'product_images')]
class ProductImage
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'productImages')]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'product_id', nullable: false, onDelete: 'CASCADE')]
    private Product $product;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(name: 'image_id', referencedColumnName: 'image_id', nullable: false, onDelete: 'RESTRICT')]
    private Image $image;
    
    #[ORM\Column(name: 'position', type: Types::INTEGER, options: ['unsigned' => true, 'default' => 1])]
    private int $position = 1;

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;
        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }
}
