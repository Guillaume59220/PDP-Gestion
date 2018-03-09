<?php

namespace Courrier\Form\Type;

use Courrier\Domain\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_client', TextType::class)
            ->add('code_client', TextType::class)
            ->add('siren', TextType::class)
            ->add('date_contract', TextType::class)
            ->add('capital',NumberType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Client::class,
        ));
    }


    public function getName()
    {
        return 'client';
    }
}
