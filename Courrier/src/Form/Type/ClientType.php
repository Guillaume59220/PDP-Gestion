<?php

namespace Courrier\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_client', TextType::class)
            ->add('code_client', TextType::class)
            ->add('siren', TextType::class)
            ->add('date_contract', DateType::class)
            ->add('capital',TextType::class);

    }

    public function getName()
    {
        return 'client';
    }
}
