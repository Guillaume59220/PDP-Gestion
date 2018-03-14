<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 05.02.2018
 * Time: 16:40
 */

namespace CourrierPDP\Provider;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;

class AppControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        # Récupérer l'instance de Silex\ControllerCollection
        # https://silex.symfony.com/doc/2.0/organizing_controllers.html
        # https://silex.symfony.com/api/master/Silex/ControllerCollection.html
        $controllers = $app['controllers_factory'];

        # Page d'Accueil
        $controllers
            # On associe une route à un Controller et une Action
            ->get('/', 'Courrier\Controller\AppController::indexAction')
            # En option, je peux donner un nom à la route, qui servira
            # plus tard pour la création de liens
            ->bind('news_index');


        # Page Connexion & Inscription

        $controllers
            ->get('/connexion.html',
                'Courrier\Controller\AppController::connexionAction')
            ->bind('news_connexion');

        $controllers
            ->get('/deconnexion.html',
                'Courrier\Controller\AppController::deconnexionAction')
            ->bind('news_deconnexion');

        # PHP Info
        # $controllers
        #    ->get('/infos',
        #        [ $this, 'infoAction' ]);

        return $controllers;
    }

}