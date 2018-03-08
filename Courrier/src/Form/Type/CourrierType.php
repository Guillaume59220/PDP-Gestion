<?php

namespace Courrier\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CourrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $builder
            ->add('date_entre', DateType::class)
            ->add('scan', FileType::class)
            ->add('fax', TextType::class)
            ->add('annotation', TextareaType::class)
            ->add('date_sortie', DateType::class)
            ->add('id_client',ChoiceType::class)
            ->add('id_type_courrier', ChoiceType::class);
    }


    public function getName()
    {
        return 'courrier';
    }


}
