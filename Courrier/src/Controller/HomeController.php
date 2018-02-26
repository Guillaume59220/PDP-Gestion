<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Client;
use Courrier\Form\Type\ClientType;

class HomeController {

    public function indexAction(Application $app) {
        $courrier = $app['dao.courrier']->findAll();
        return $app['twig']->render('index.html.twig', array('courrier' => $courrier));
    }
    

    public function courrierAction($id, Request $request, Application $app) {
        $courrier = $app['dao.courrier']->find($id);
        $commentFormView = null;
        if ($app['security.authorization_checker']->isGranted('IS_AUTHENTICATED_FULLY')) {
            $client = new Client();
            $client->setcourrier($courrier);
            $user = $app['user'];
            $client->setClient($client);
            $clientForm = $app['form.factory']->create(ClientType::class, $client);
            $clientForm->handleRequest($request);
            if ($clientForm->isSubmitted() && $clientForm->isValid()) {
                $app['dao.client']->save($client);
                $app['session']->getFlashBag()->add('success');
            }
            $clientFormView = $clientForm->createView();
        }

        return $app['twig']->render('courrier.html.twig', array(
            'courrier' => $courrier,
            'client' => $client,
            'clientForm' => $clientFormView));
    }
    

    public function loginAction(Request $request, Application $app) {
        return $app['twig']->render('login.html.twig', array(
            'error'         => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username'),
        ));
    }
}
