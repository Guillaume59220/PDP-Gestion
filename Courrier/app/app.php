<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 07.02.2018
 * Time: 11:26
 */


use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;
use Courrier\DAO\UserDAO;
use Courrier\DAO\ClientDAO;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();
$app['debug'] = true;

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
    'twig.options'    => array(
        'cache' => __DIR__ . '/../var/cache/twig',
    )
));
$app['twig'] = $app->extend('twig', function(Twig_Environment $twig, $app) {
    $twig->addExtension(new Twig_Extensions_Extension_Text());
    return $twig;
});
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\SecurityServiceProvider(), array(



    'security.firewalls' => array(

        'login' => array(
            'pattern' => '^/login$',
        ),

        'secured' => array(
            'pattern' => '^.*$',
            'form' => array(
                'login_path' => '/login',
                'check_path' => '/login_check',
            ),
            'logout' => array(
                'logout_path' => '/admin/logout',
        ),
            'users' => function () use ($app) {
                return new UserDAO($app['db']);
            },
            'anonymous' => true,
        ),

    ),
    'security.role_hierarchy' => array(
        'ROLE_ADMIN' => array('ROLE_EVENT_CREATE', 'ROLE_CUSTOMER'),
        'ROLE_CREATE_EVENT' => array('ROLE_USER'),
        'ROLE_CUSTOMER' => array('ROLE_USER')
    ),
    'security.access_rules' => array(
        array('^/admin', 'ROLE_ADMIN'),
        array('^/login', 'IS_AUTHENTICATED_ANONYMOUSLY'),
        array('^/', 'ROLE_USER'),
        array('^/collaborateur', 'ROLE_EVENT_CREATE'),
    ),
));
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

$app['dao.client'] = function ($app) {
    return new Courrier\DAO\ClientDAO($app['db']);
};
$app['dao.user'] = function ($app) {
    return new Courrier\DAO\UserDAO($app['db']);
};
$app['dao.courrier'] = function ($app) {
    $courrierDAO = new Courrier\DAO\CourrierDAO($app['db']);
    return $courrierDAO;
};


$app->before(function (Request $request) {
    if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
    }
});



    /*'security.user_providers' => array(
        'db_client' => array(
            'entity' => array(
                'class' => Client::class,
                'property' => 'code_client',
            ),
        ),
        'db_user' => array(
            'entity' => array(
                'class' => User::class,
                'property' => 'username',
            ),
        ),
    ),*/