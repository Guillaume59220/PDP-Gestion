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
class CourrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $types = function() use( $app) {

            $types = $app['dao.type_courrier']->for_table('type_courrier')
                ->find_result_set();

            $array = [];
            foreach ($types as $type):
                $array[$type->libelle_courrier] = $type->id_type_courrier;
            endforeach;

            return $array;

        };

        $clients=function ()use($app){

            $clients=$app['dao.clients']->for_table('clients')->find_result_set();

            $array=[];
            foreach ($clients as $client):
                $array[$client->nom_client]= $client->id_client;
            endforeach;
            return $array;
        };


        $builder
            ->add('date_entre', DateType::class)
            ->add('scan', FileType::class)
            ->add('fax', TextType::class)
            ->add('annotation', TextareaType::class)
            ->add('date_sortie', DateType::class)
            ->add('id_client',ChoiceType::class, [
                'choices'   => $clients(),
            ] )
            ->add('id_type_courrier', ChoiceType::class, [
                'choices'   => $types(),
    ]);
    }


    public function getName()
    {
        return 'courrier';
    }


}
