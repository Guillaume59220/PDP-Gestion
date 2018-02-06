<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 05.02.2018
 * Time: 16:51
 */

namespace CourrierPDP\Controller;


class CollController
{
    public function addcourrierAction(Application $app, Request $request) {

        # Récupérer la liste des catégories
        $clients = function() use($app) {

            # Récupération des Catégories dans la BDD
            $clients = $app['idiorm.db']->for_table('clients')
                ->find_result_set();

            # On formate l'affichage pour le champ select (ChoiceType)
            $array = [];
            foreach ($clients as $client):
                $array[$client->nom_client] = $client->id_client;
            endforeach;

            # On retourne le tableau formaté.
            return $array;
        };
        $types=function () use ($app){
            $types=$app['idiorm.db']->for_table('type_courrier')->find_result_set();

            $arraytype=[];
            foreach ($types as $type):
                $arraytype[$type->libelle_courrier]=$type->id_type;
            endforeach;

        };

        # Créer un Formulaire permettant l'ajout d'un courrier
        $form = $app['form.factory']->createBuilder(FormType::class)

            # Champ ID Client
            ->add('id_client', ChoiceType::class, [
                'choices'   => $clients(),
                'expanded'  => false,
                'multiple'  => false,
                'label'     => false,
                'attr'          => [
                    'class'         =>  'form-control'
                ]
            ])

            # Champ Addnotation
            ->add('addnotation', TextareaType::class, [
                'required'      => false,
                'label'         => false,
                'constraints'   => array(new NotBlank()),
                'attr'          => [
                    'class'         =>  'form-control'
                ]
            ])

          /*  # FEATUREDIMAGEcourrier
            ->add('scan', FileType::class, [
                'required'  => false,
                'label'     => false,
                'attr'      => [
                    'class' => 'dropify'
                ]
            ])*/

          ->add('id_type', ChoiceType::class, [
              'choices'   => $types(),
              'expanded'  => false,
              'multiple'  => false,
              'label'     => false,
              'attr'          => [
                  'class'         =>  'form-control'
              ]
          ])
          ->add('date_entre', DateType::class, array(
              'widget' => 'choice',
              'format' => 'dd-MM-yyyy'
          ))

            ->add('submit', SubmitType::class, ['label' => 'Publier'])

            /**
             * Maintenant que tous les champs ont été créés, nous allons
             * pouvoir récupérer le formulaire
             */

            ->getForm();

        # Traitement des données POST
        $form->handleRequest($request);

        # Vérification des données du Formulaire
        if($form->isValid()) :

            # Récupération des données
            $courrier = $form->getData();

            # Récupération de l'image
            $image  = $courrier['scan'];
            $chemin = PATH_PUBLIC . '/img/scan/';
            $image->move($chemin, $this->slugify($courrier['date_entre']).'.jpg');

            # Récupération de l'Auteur
            $token = $app['security.token_storage']->getToken();
            if (null !== $token) {
                $auteur = $token->getUser();
            } else {
                return $app->redirect('deconnexion.html');
            }

            # Insertion en BDD
            $courrierDb = $app['idiorm.db']->for_table('courrier')->create();
            $type = $app['idiorm.db']->for_table('type_courrier')
                ->find_one($courrier['id_client']);

            # On associe les colonnes de notre BDD avec les valeurs du formulaire.
            # Colonne mySQL                     # Valeurs du Formulaires
            $courrierDb->id_client                =   $clients->getIdClient();
            $courrierDb->addnotation              =   $courrier['addnotation'];
            $courrierDb->id_type                  =   $courrier['id_type'];
            $courrierDb->date_entre               =   $courrier['date_entre'];
            $courrierDb->scan                     =   $this->slugify($courrier['date_entre']).'.jpg';

            # Insertion en BDD
            $courrierDb->save();


        endif;

        # Affichage du Formulaire dans la Vue
        return $app['twig']->render('collaborateur/addcourrier.html.twig', [
            'form' => $form->createView()
        ]);
    }


}