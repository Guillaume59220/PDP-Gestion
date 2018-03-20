<?php

namespace Courrier\Form\Type;

use Courrier\Domain\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
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
            #nom client
            ->add('nom_client', TextType::class)

            #code client
            ->add('code_client', TextType::class)

            #siren
            ->add('siren', TextType::class)

            #mot de passe
            ->add('password', PasswordType::class, array (
                'label'=>'Mot de passe'
            ))

            #dtae de contract
            ->add('date_contract', DateType::class, array(
                'format' => 'dd/MM/yyyy',
                'input'=> 'string',
                'data' => (new \DateTime())->format('Y-m-d'),
                'label'=>'Date de contrat'
            ))

            #capital
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
