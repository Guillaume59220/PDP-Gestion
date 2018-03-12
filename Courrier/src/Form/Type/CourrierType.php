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

       /*$array=[];
        foreach ($clients as $client):
            $array[$client->nom_client]= $client->id_client;
        endforeach;*/
        return $clients;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $options['app'];
        $builder
            ->add('date_entre', DateType::class)
            ->add('scan', FileType::class, array(
                'label'=> ' '
            ))
            ->add('fax', TextType::class)
            ->add('annotation', TextareaType::class)
            ->add('date_sortie', DateType::class)
            ->add('id_client',ChoiceType::class, array(
                'choices' =>$this->choiceClient($app),
                'multiple' => true,
                'label'=> 'Client'
                ))
            ->add('id_type_courrier', ChoiceType::class, array(
                'choices' =>  $this->choiceCourrier($app),
                'multiple' => true,
                'label'=> 'Type Courrier'
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
