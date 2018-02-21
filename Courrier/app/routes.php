<?php

// Home page
$app->get('/index', "Courrier\Controller\HomeController::loginAction")
    ->bind('login');
// Detailed info about an article
$app->match('/courrier/{id}', "Courrier\Controller\HomeController::CourrierAction")
    ->bind('courrier');

// Admin zone
$app->get('/admin', "Courrier\Controller\AdminController::indexAction")
    ->bind('admin');

// Add a new article
$app->match('/admin/courrier/add', "Courrier\Controller\AdminController::addCourrierAction")
    ->bind('admin_courrier_add');

// Edit an existing article
$app->match('/admin/courrier/{id}/edit', "Courrier\Controller\AdminController::editCourrierAction")
    ->bind('admin_courrier_edit');

// Remove an article
$app->get('/admin/courrier/{id}/delete', "Courrier\Controller\AdminController::deleteCourrierAction")
    ->bind('admin_courrier_delete');

// Edit an existing comment
$app->match('/admin/client/{id}/edit', "Courrier\Controller\AdminController::editClientAction")
    ->bind('admin_client_edit');

// Remove a comment
$app->get('/admin/client/{id}/delete', "Courrier\Controller\AdminController::deleteClientAction")
    ->bind('admin_client_delete');

// Add a user
$app->match('/admin/user/add', "Courrier\Controller\AdminController::addUserAction")
    ->bind('admin_user_add');

// Edit an existing user
$app->match('/admin/user/{id}/edit', "Courrier\Controller\AdminController::editUserAction")
    ->bind('admin_user_edit');

// Remove a user
$app->get('/admin/user/{id}/delete', "Courrier\Controller\AdminController::deleteUserAction")
    ->bind('admin_user_delete');

// API : get all articles
$app->get('/api/courrier', "Courrier\Controller\ApiController::getCourrierAction")
    ->bind('api_courrier');

// API : get an article
$app->get('/api/courrier/{id}', "Courrier\Controller\ApiController::getCourrierAction")
    ->bind('api_courrier');

// API : create an article
$app->post('/api/courrier', "Courrier\Controller\ApiController::addCourrierAction")
    ->bind('api_courrier_add');

// API : remove an article
$app->delete('/api/courrier/{id}', "Courrier\Controller\ApiController::deleteCourrierAction")
    ->bind('api_courrier_delete');
