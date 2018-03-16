<?php

namespace Courrier\Controller;

use Courrier\Domain\Client;
use Courrier\Domain\Courrier;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\User;
use Courrier\DAO\UserDAO;
use Courrier\Form\Type\ClientType;
use Courrier\Form\Type\CourrierType;
use Courrier\Form\Type\UserType;

class AdminController {

    public function indexAction(Application $app) {
        $courriers = $app['dao.courrier']->findAll();
        $clients = $app['dao.clients']->findAll();
        $users = $app['dao.user']->findAll();
        return $app['twig']->render('admin.html.twig', array(
            'courriers' => $courriers,
            'clients' => $clients,
            'users' => $users));
    }

<<<<<<< HEAD
    public function loginAction(Request $request, Application $app) {
       


       
        return $app['twig']->render('admin_login.html.twig', array(
            'error'            => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username'),
        ));
=======
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
>>>>>>> 035db69e4fc27a1464ad5009d8f8893da9bac4b6
    }



    public function deleteCourrierAction($id, Application $app) {
        $app['dao.courrier']->delete($id);
        $app['session']->getFlashBag()->add('success', 'Le courrier a ete supprime.');
        return $app->redirect($app['url_generator']->generate('admin'));
    }

    public function deleteClientAction($id, Application $app) {
        $app['dao.client']->delete($id);
        $app['session']->getFlashBag()->add('success', 'Le client a ete supprime.');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }

    public function addUserAction(Request $request, Application $app) {
        $user = new User();
        $userForm = $app['form.factory']->create(UserType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            // generate a random salt value
            $salt = substr(md5(time()), 0, 23);
            $user->setSalt($salt);
            $plainPassword = $user->getPassword();
            // find the default encoder
            $encoder = $app['security.encoder.bcrypt'];
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password);
            if (is_array($user->getRoles()[0])) {
                $user->setRoles($user->getRoles()[0][0], true);
            }
            dump($user);
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'utilisateur a ete cree.');
            return $app->redirect($app['url_generator']->generate('admin'));
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'New user',
            'userForm' => $userForm->createView()));

    }

    public function addClientAction( Request $request,Application $app){
        $client= new Client;
        $clientForm= $app['form.factory']->create(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $app['dao.clients']->save($client);
            $app['session']->getFlashBag()->add('success', 'Le client a ete bien ajoute.');
        }
        return $app['twig']->render('client_form.html.twig', array(
            'title' => 'Ajouter client',
            'clientForm' => $clientForm->createView()));

    }
    public function editClientAction($id,Request $request, Application $app){

        $client=$app['dao.clients']->find($id);
        $clientForm=$app['form.factory']->create(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $app['dao.clients']->save($client);
            $app['session']->getFlashBag()->add('success', 'Le client a ete bien change.');
        }
        return $app['twig']->render('client_form.html.twig', array(
            'title' => 'Edit client',
            'clientForm' => $clientForm->createView()));

    }


    public function editUserAction($id, Request $request, Application $app) {
        $user = $app['dao.user']->find($id);
        $userForm = $app['form.factory']->create(UserType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $plainPassword = $user->getPassword();
            // find the encoder for the user
            $encoder = $app['security.encoder_factory']->getEncoder($user);
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password); 
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'The user was successfully updated.');
            return $app->redirect($app['url_generator']->generate('admin'));
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'Edit user',
            'userForm' => $userForm->createView()));
    }


    public function deleteUserAction($id, Application $app) {

        // Delete the user
        $app['dao.user']->delete($id);
        $app['session']->getFlashBag()->add('success', 'The user was successfully removed.');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }
}
