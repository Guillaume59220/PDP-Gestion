<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 02.02.2018
 * Time: 14:36
 */

namespace CourrierPDP\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class AppController
{
    public function indexAction(Application $app) {

        return $app['twig']->render('connexion.html.twig');
    }

    /**
     * Affichage des Articles d'une Catégorie
     * @param $libellecategorie
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function clientAction($id_client, Application $app) {

        # Récupération des Articles de la Catégorie
        $articles = $app['idiorm.db']->for_table('clients')
            ->where('', ucfirst($id_client))
            ->find_result_set();

        # Transmission à la Vue
        return $app['twig']->render('client.html.twig', [
            'clients' => $clients
        ]);
    }

    /**
     * Affichage de la Page Article
     * @param $libellecategorie
     * @param $slugarticle
     * @param $idarticle
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function courrierAction($nom_client, $id_courrier,
                                  $addnotation, Application $app) {

        $article = $app['idiorm.db']->for_table('view_articles')
            ->find_one($id_courrier);


        $suggestions = $app['idiorm.db']->for_table('view_articles')
            ->where('id_type', $courrier->id_type)

            ->where_not_equal('id_courrier', $id_courrier)

            # 3 articles maximum
            ->limit(10)

            # Par ordre decroissant
            ->order_by_desc('date_entre')

            # Je récupère les résultats
            ->find_result_set();

        return $app['twig']->render('listecourrier.html.twig', [
            'courrier'       => $courrier
        ]);
    }

    public function inscriptionAction(Application $app) {
        return $app['twig']->render('inscription.html.twig');
    }

    public function inscriptionPost(Application $app, Request $request) {

        $user = $app['idiorm.db']->for_table('user')->create();

        # Affectation de Valeurs
        $user->username         = $request->get('username');
        $user->password         = $app['security.default_encoder']
            ->encodePassword($request->get('password'), '');
        $user->roles            = 'role_user';

        # On persiste en BDD
        $user->save();

        # On envoi un email de confirmation ou de bienvenue...
        # On envoi une notification à l'administrateur
        # ...

        # On redirige l'utilisateur sur la page de connexion
        return $app->redirect('connexion.html?inscription=success');

    }

    /**
     * Affichage de la Page Connexion
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function connexionAction(Application $app, Request $request) {
        return $app['twig']->render('connexion.html.twig', [
            'error'         => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username')
        ]);
    }

}