<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Client;
use Courrier\Form\Type\ClientType;
use Courrier\DAO\CourrierDAO;

class HomeController {

    // Affichage courrier par client conecte
    public function indexAction(Application $app) {

        $token = $app['security.token_storage']->getToken();
        $user = $token->getUser();
        $courriers = $app['dao.courrier']->findByUser($user->getId());
        return $app['twig']->render('index.html.twig', array(
            'courriers'=>$courriers,
            'user' => $user));
    }

    //Connexion client
    public function loginAction(Request $request, Application $app) {

        return $app['twig']->render('login.html.twig', array(
            'error'         => $app['security.last_error']($request),
            'last_code_client' => $app['session']->get('_security.last_code_client'),
        ));
    }
}


