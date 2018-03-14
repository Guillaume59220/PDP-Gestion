<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 31.01.2018
 * Time: 10:16
 */

#$app->mount('/admin', new AdminControllerProvider());
#$app->mount('/collabolateur', new CollabControllerProvider());
$app->get('/login', "CourrierPDP\Controller\AppController::loginAction")
    ->bind('login');