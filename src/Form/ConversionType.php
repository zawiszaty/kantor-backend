<?php

namespace App\Form;

use App\Command\ConversionCommand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ConversionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount')
            ->add(
                'currency',
                ChoiceType::class,
                [
                    'choices' => [
                        'EUR/PLN' => 'EUR',
                        'USD/PLN' => 'USD',
                        'GBP/PLN' => 'GBP'
                    ]
                ]
            )
            ->add(
                'date',
                ChoiceType::class,
                [
                    'choices' => [
                        '2018.03.26' => 1,
                        '2018.03.27' => 2
                    ]
                ]
            );

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ConversionCommand::class,
            'csrf_protection' => false,
        ]);
    }
}