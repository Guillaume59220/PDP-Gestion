<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 31.01.2018
 * Time: 14:34
 */

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class AdminControllerProvider implements ControllerProviderInterface
{


public function connect(Application $app)
{
    # Récupérer l'instance de Silex\ControllerCollection
    # https://silex.symfony.com/api/master/Silex/ControllerCollection.html
    $controllers = $app['controllers_factory'];

    # Ajouter un Article en BDD
    $controllers
        ->match('/client/ajouter',
            'Controller\AdminController::addclientAction')
        ->method('GET|POST')
        ->bind('admin_addclient');

    return $controllers;
}
}