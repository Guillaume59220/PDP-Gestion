<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Courrier;
use Courrier\Domain\Client;
use Courrier\Form\Type\CourrierType;
use Courrier\Form\Type\ClientType;
use App\Service\FileUploader;



class CollabController{

    public function indexAction(Application $app) {
        $courriers = $app['dao.courrier']->findAll();
        $clients = $app['dao.client']->findAll();
        return $app['twig']->render('collaborateur.html.twig', array(
            'courriers' => $courriers,
            'clients' => $clients,
            ));
    }

    public function addCourrierAction(Request $request, Application $app) {
        $courrier = new Courrier();
        $courrierForm = $app['form.factory']->create(CourrierType::class, $courrier, ['app' => $app]);
        $courrierForm->handleRequest($request);
        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
        dump($courrierForm['scan']->getData());
            $file = $courrier->getScan();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                '../uploads/Scans',
                $fileName
            );
            $courrier->setScan($fileName);
            //return $app->redirect($app["url_generator"]->generate('app_scan_list'));


            $app['dao.courrier']->save($courrier);
            $app['session']->getFlashBag()->add('success', 'Le courrier a ete bien ajoute.');
        }
        return $app['twig']->render('courrier_form.html.twig', array(
            'title' => 'Ajouter courrier',
            'courrierForm' => $courrierForm->createView()));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    public function new(Request $request, FileUploader $fileUploader)
    {
        // ...

        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
            $file = $courrier->getScan();
            $fileName = $fileUploader->upload($file);

            $courrier->setScan($fileName);

            // ...
        }

        // ...
    }







    public function editCourrierAction($id_courrier, Request $request, Application $app) {
        $courrier = $app['dao.courrier']->find($id_courrier);
        $courrierForm = $app['form.factory']->create(CourrierType::class, $courrier, ['app' => $app]);
        $courrierForm->handleRequest($request);
        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
            $app['dao.courrier']->save($courrier);
            $app['session']->getFlashBag()->add('success', 'Liste des courriers a ete bien modifie.');
        }
        return $app['twig']->render('courrier_form.html.twig', array(
            'title' => 'Modification courrier',
            'courrierForm' => $courrierForm->createView()));
    }




    public function addClientAction( Request $request,Application $app){
        $client= new Client;
        $clientForm= $app['form.factory']->create(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $app['dao.client']->save($client);
            $app['session']->getFlashBag()->add('success', 'Le client a ete bien ajoute.');
        }
        return $app['twig']->render('client_form.html.twig', array(
            'title' => 'Ajouter client',
            'clientForm' => $clientForm->createView()));

    }

    public function editClientAction($id,Request $request, Application $app){

        $client=$app['dao.client']->find($id);
        $clientForm=$app['form.factory']->create(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $app['dao.client']->save($client);
            $app['session']->getFlashBag()->add('success', '.');
        }
        return $app['twig']->render('client_form.html.twig', array(
            'title' => 'Edit client',
            'clientForm' => $clientForm->createView()));

    }




}