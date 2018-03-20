<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 08.02.2018
 * Time: 15:22
 */

namespace Courrier\Form\Type;


use Courrier\Domain\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'label'=>'Nom d\'utilisateur'
            ))
            ->add('password', PasswordType::class, array(
                'label'=>'Mot de passe'
            ))
            ->add('roles', ChoiceType::class, array(
                'choices' => array('Admin' => 'ROLE_ADMIN', 'Collaborateur' => 'ROLE_EVENT_CREATE'),
                'multiple' => true,
                'label'=>'Droit d\'accés'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }

    public function getName()
    {
        return 'user';
    }
}