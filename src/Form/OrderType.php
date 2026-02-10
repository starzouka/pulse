<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderNumber')
            ->add('cartId')
            ->add('userId')
            ->add('status')
            ->add('paymentMethod')
            ->add('paymentStatus')
            ->add('totalAmount')
            ->add('shippingAddress')
            ->add('phoneForDelivery')
            ->add('createdAt')
            ->add('paidAt')
            ->add('shippedAt')
            ->add('deliveredAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
