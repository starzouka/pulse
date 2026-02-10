<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Report;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reporterUserId')
            ->add('targetType')
            ->add('targetId')
            ->add('reason')
            ->add('status')
            ->add('createdAt')
            ->add('handledByAdminId')
            ->add('handledAt')
            ->add('adminNote')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Report::class,
        ]);
    }
}
