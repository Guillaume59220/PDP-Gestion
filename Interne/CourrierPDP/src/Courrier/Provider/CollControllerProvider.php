<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 05.02.2018
 * Time: 17:31
 */

namespace CourrierPDP\Provider;


use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class CollControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {

        $controllers = $app['controllers_factory'];

        $controllers
            ->match('/collaborateur/ajouter',
                'CourrierPDP\Controller\CollController::addcourrierAction')
            ->method('GET|POST')
            ->bind('admin_addcourrier');

        return $controllers;

    }
}