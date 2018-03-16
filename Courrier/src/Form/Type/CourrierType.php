<?php

namespace Courrier\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Silex\Application;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class CourrierType extends AbstractType
{

    private function choiceCourrier(Application $app){
        $types = $app['dao.courrier']->findAllTypeCourrier();

        /*$array = [];
        foreach ($types as $type):
            $array[$type->libelle_courrier] = $type->id_type_courrier;
        endforeach;

        return $array;*/
        return $types;

    }

    private function choiceClient(Application $app){

        $clients=$app['dao.courrier']->findClient();
        return $clients;

    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $options['app'];
        $builder
            #  la date d'ajout de courrier
            ->add('date_entre', DateType::class, array(
                #'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'input'=> 'string',


            ))
            #ajouter le scan

            ->add('scan', FileType::class, array(
                'label'=> 'Fichier ',
                'data_class' => null,
                'required' => false
            ))
            # ajouter fax

            ->add('fax', TextType::class, array(
                'required' => false
            ))
            # ajouter commentaire

            ->add('annotation', TextareaType::class)

            # ajouter date de sortie de courrier

            ->add('date_sortie', DateType::class , array(
                'required' => false,
                'format' => 'dd/MM/yyyy',
                'input'=> 'string'
            ))
            # choix client
            ->add('id_client',ChoiceType::class, array(
                'choices' =>$this->choiceClient($app),
                'multiple' => false,
                'label'=> 'Client'
                ))
            #choix du type de courrier
            ->add('id_type_courrier', ChoiceType::class, array(
                'choices' =>  $this->choiceCourrier($app),
                'multiple' => false,
                'label'=> 'Type courrier'
                ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('app');
    }

    public function getName()
    {
        return 'courrier';
    }


}
