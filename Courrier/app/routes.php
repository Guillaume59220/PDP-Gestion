<?php

$app->get('/', "Courrier\Controller\HomeController::indexAction")
    ->bind('home');

$app->match('/login', "Courrier\Controller\HomeController::loginAction")
    ->bind('login');

$app->match('/courrier/{id_courrier}', "Courrier\Controller\HomeController::courrierAction")
    ->bind('courrier');

$app->get('/admin/', "Courrier\Controller\AdminController::indexAction")
    ->bind('admin');

$app->get('/collaborateur', "Courrier\Controller\CollabController::indexAction")
    ->bind('collaborateur');

$app->get('/user', "Courrier\Controller\CollabController::indexAction")
    ->bind('user');

$app->get('/download/{filename}',"Courrier\Controller\DownloadController::downloadAction")
    ->bind('download_scan');



$app->get('/admin/courrier/{id}/delete', "Courrier\Controller\AdminController::deleteCourrierAction")
    ->bind('admin_courrier_delete');


/// COURRIER

$app->match('/collaborateur/courrier/add', "Courrier\Controller\CollabController::addCourrierAction")
    ->bind('collaborateur_courrier_add');

$app->match('/collaborateur/courrier/{id}/edit', "Courrier\Controller\CollabController::editCourrierAction")
    ->bind('collaborateur_courrier_edit');


/// CLIENT


$app->match('/collaborateur/client/add', "Courrier\Controller\CollabController::addClientAction")
    ->bind('collaborateur_client_add');


$app->match('/collaborateur/client/{id}/edit', "Courrier\Controller\CollabController::editClientAction")
    ->bind('collaborateur_client_edit');

$app->get('/admin/client/{id}/delete', "Courrier\Controller\AdminController::deleteClientAction")
    ->bind('admin_client_delete');

/// USER

$app->match('/admin/user/add', "Courrier\Controller\AdminController::addUserAction")
    ->bind('admin_user_add');

$app->match('/admin/user/{id}/edit', "Courrier\Controller\AdminController::editUserAction")
    ->bind('admin_user_edit');

$app->get('/admin/user/{id}/delete', "Courrier\Controller\AdminController::deleteUserAction")
    ->bind('admin_user_delete');




