<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Image;
use App\Entity\Product;
use App\Entity\ProductImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductImage::class);
    }

    /**
     * @param list<Product> $products
     *
     * @return array<int, Image>
     */
    public function findPrimaryImagesByProducts(array $products): array
    {
        if ($products === []) {
            return [];
        }

        $records = $this->createQueryBuilder('productImage')
            ->leftJoin('productImage.imageId', 'image')
            ->addSelect('image')
            ->andWhere('productImage.productId IN (:products)')
            ->setParameter('products', $products)
            ->orderBy('productImage.productId', 'ASC')
            ->addOrderBy('productImage.position', 'ASC')
            ->getQuery()
            ->getResult();

        $primaryByProduct = [];
        foreach ($records as $record) {
            if (!$record instanceof ProductImage) {
                continue;
            }

            $productId = $record->getProductId()?->getProductId();
            $image = $record->getImageId();
            if ($productId === null || !$image instanceof Image || isset($primaryByProduct[$productId])) {
                continue;
            }

            $primaryByProduct[$productId] = $image;
        }

        return $primaryByProduct;
    }

    /**
     * @return list<Image>
     */
    public function findImagesByProduct(Product $product): array
    {
        $records = $this->createQueryBuilder('productImage')
            ->leftJoin('productImage.imageId', 'image')
            ->addSelect('image')
            ->andWhere('productImage.productId = :product')
            ->setParameter('product', $product)
            ->orderBy('productImage.position', 'ASC')
            ->getQuery()
            ->getResult();

        $images = [];
        foreach ($records as $record) {
            if (!$record instanceof ProductImage) {
                continue;
            }

            $image = $record->getImageId();
            if ($image instanceof Image) {
                $images[] = $image;
            }
        }

        return $images;
    }
}
