<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 31.01.2018
 * Time: 10:05
 */

use Silex\Provider\DoctrineServiceProvider;
use Idiorm\Silex\Provider\IdiormServiceProvider;

$app->register(new DoctrineServiceProvider(), [
    'db.options' => [
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'test',
        'user'      => 'root',
        'password'  => '',
    ],
]);
$app->register(new \Idiorm\Silex\Provider\IdiormServiceProvider(), array(
    'idiorm.db.options' => array(
        'connection_string' => 'mysql:host=localhost;dbname=test',
        'username' => 'root',
        'password' => '',
        'id_column_overrides' => array(
            'view_articles'   =>  'id_courrier',
            'clients'         =>  'id_client',
            'courrier'        =>  'id_courrier',
            'type_courrier'   =>   'id_type'
        )
    )
));

$app['t_clients'] = function() use($app) {
    return $app['db']->fetchAll('SELECT * FROM clients');
};

$app['t_courrier'] = function() use($app) {
    return $app['db']->fetchAll('SELECT * FROM courrier');
};

$app['idiorm_clients'] = function() use($app) {
    return $app['idiorm.db']->for_table('clients')
        ->find_result_set();
};

$app['idiorm_courrier'] = function() use($app) {
    return $app['idiorm.db']->for_table('courrier')
        ->find_result_set();
};
$app['idiorm_type_courrier']=function ()use ($app){
    return $app['idiorm.db']->for_table('type_courrier')->find_result_set();
};