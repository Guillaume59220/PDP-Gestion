<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Courrier;
use Courrier\Domain\Client;

class CollabController{

    public function addCourrierAction(Request $request, Application $app) {
        $courrier = new Courrier();
        $courrierForm = $app['form.factory']->create(CourrierType::class, $courrier);
        $courrierForm->handleRequest($request);
        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
            $app['dao.courrier']->save($courrier);
            $app['session']->getFlashBag()->add('success', 'Le courrier a ete bien ajoute.');
        }
        return $app['twig']->render('courrier_form.html.twig', array(
            'title' => 'Ajouter courrier',
            'courrierForm' => $courrierForm->createView()));
    }

    public function editCourrierAction($id_courrier, Request $request, Application $app) {
        $courrier = $app['dao.courrier']->find($id_courrier);
        $courrierForm = $app['form.factory']->create(CourrierType::class, $courrier);
        $courrierForm->handleRequest($request);
        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
            $app['dao.courrier']->save($courrier);
            $app['session']->getFlashBag()->add('success', 'Liste des courriers a ete bien modifie.');
        }
        return $app['twig']->render('article_form.html.twig', array(
            'title' => 'Modification courrier',
            'courrierForm' => $courrierForm->createView()));
    }

    public function editClientAction($id_client, Request $request, Application $app) {
        $client = $app['dao.client']->find($id_client);
        $clientForm = $app['form.factory']->create(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $app['dao.client']->save($client);
            $app['session']->getFlashBag()->add('success', 'Les donnees client a bien ete modifie.');
        }
        return $app['twig']->render('comment_form.html.twig', array(
            'title' => 'Edit client',
            'clientForm' => $clientForm->createView()));
    }




}