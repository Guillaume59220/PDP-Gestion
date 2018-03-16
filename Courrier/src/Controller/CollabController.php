<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Courrier;
use Courrier\Domain\Client;
use Courrier\Form\Type\CourrierType;
use Courrier\Form\Type\ClientType;



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
            if(!empty($courrierForm['scan2']->getData())){


            $file = $courrier->getScan2();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                '../uploads/Scans',
                $fileName
            );
            $courrier->setScan($fileName);
            }


            //return $app->redirect($app["url_generator"]->generate('app_scan_list'));


            $app['dao.courrier']->save($courrier);

            $app['session']->getFlashBag()->add('success', 'Le client a été ajouté.');
            return $app->redirect($app['url_generator']->generate('admin'));

        }
        return $app['twig']->render('courrier_form.html.twig', array(
            'title' => 'Ajouter courrier',
            'courrierForm' => $courrierForm->createView()));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }


    public function editCourrierAction($id, Request $request, Application $app) {
        $courrier = $app['dao.courrier']->find($id);
        dump($courrier);
        $courrierForm = $app['form.factory']->create(CourrierType::class, $courrier, ['app' => $app]);
        $courrierForm->handleRequest($request);
        if ($courrierForm->isSubmitted() && $courrierForm->isValid()) {
            $scn = $courrierForm['scan2']->getData();
            if($scn) {
            dump($courrierForm['scan']->getData());

            $file = $courrier->getScan2();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                '../uploads/Scans',
                $fileName);

                $courrier->setScan($fileName);
            }


            //$courrier->getScan();


            $app['dao.courrier']->save($courrier);
            $app['session']->getFlashBag()->add('success', 'Le courrier a été modifié.');
            return $app->redirect($app['url_generator']->generate('admin'));
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
            // generate a random salt value
            $salt = substr(md5(time()), 0, 23);
            $client->setSalt($salt);
            $plainPassword = $client->getPassword();
            // find the default encoder
            $encoder = $app['security.encoder.bcrypt'];
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $client->getSalt());
            $client->setPassword($password);
            $app['dao.client']->save($client);
            $app['session']->getFlashBag()->add('success', 'Le client a été ajouté.');
            return $app->redirect($app['url_generator']->generate('admin'));
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
            $app['session']->getFlashBag()->add('success', 'Le client a été modifié.');
            return $app->redirect($app['url_generator']->generate('admin'));
        }
        return $app['twig']->render('client_form.html.twig', array(
            'title' => 'Edit client',
            'clientForm' => $clientForm->createView()));

    }




}