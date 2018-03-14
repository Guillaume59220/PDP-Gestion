<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 07.02.2018
 * Time: 11:36
 */

use Silex\Provider\DoctrineServiceProvider;

$app->register(new DoctrineServiceProvider(), [
    'db.options' => [
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'domiciliation',
        'user'      => 'root',
        'password'  => '',
    ],
]);