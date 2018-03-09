<?php

$app->get('/', "Courrier\Controller\HomeController::indexAction")
    ->bind('home');

$app->get('/login', "Courrier\Controller\HomeController::loginAction")
    ->bind('login');

$app->match('/courrier/{id_courrier}', "Courrier\Controller\HomeController::CourrierAction")
    ->bind('courrier');

$app->get('/admin', "Courrier\Controller\AdminController::indexAction")
    ->bind('admin');

$app->get('/collaborateur', "Courrier\Controller\CollabController::indexAction")
    ->bind('collaborateur');

$app->get('/user', "Courrier\Controller\CollabController::indexAction")
    ->bind('user');



$app->match('/admin/courrier/add', "Courrier\Controller\AdminController::addCourrierAction")
    ->bind('admin_courrier_add');

$app->match('/admin/client/add', "Courrier\Controller\AdminController::addClientAction")
    ->bind('admin_client_add');


$app->match('/admin/courrier/{id}/edit', "Courrier\Controller\AdminController::editCourrierAction")
    ->bind('admin_courrier_edit');

$app->get('/admin/courrier/{id}/delete', "Courrier\Controller\AdminController::deleteCourrierAction")
    ->bind('admin_courrier_delete');

$app->match('/admin/client/{id}/edit', "Courrier\Controller\CollabController::editClientAction")
    ->bind('admin_client_edit');

$app->get('/admin/client/{id}/delete', "Courrier\Controller\AdminController::deleteClientAction")
    ->bind('admin_client_delete');

$app->match('/admin/user/add', "Courrier\Controller\AdminController::addUserAction")
    ->bind('admin_user_add');

$app->match('/admin/user/{id}/edit', "Courrier\Controller\AdminController::editUserAction")
    ->bind('admin_user_edit');

$app->get('/admin/user/{id}/delete', "Courrier\Controller\AdminController::deleteUserAction")
    ->bind('admin_user_delete');

$app->get('/api/courrier', "Courrier\Controller\ApiController::getCourrierAction")
    ->bind('api_courrier');

$app->get('/api/courrier/{id}', "Courrier\Controller\ApiController::getCourrierAction")
    ->bind('api_courrier');

$app->post('/api/courrier', "Courrier\Controller\ApiController::addCourrierAction")
    ->bind('api_courrier_add');

$app->delete('/api/courrier/{id}', "Courrier\Controller\ApiController::deleteCourrierAction")
    ->bind('api_courrier_delete');