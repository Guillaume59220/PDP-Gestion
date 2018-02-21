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
        'secured' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'logout' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
            'users' => function () use ($app) {
                return new UserDAO($app['db']);
            },
        ),
    ),
    'security.role_hierarchy' => array(
        'ROLE_ADMIN' => array('ROLE_USER', 'ROLE_EVENT_CREATE'),
        'ROLE_CREATE_EVENT'=> array('ROLE_USER')

    ),
    'security.access_rules' => array(
        array('^/', 'IS_AUTHENTICATED_ANONYMOUSLY'),
        array('^/admin', 'ROLE_ADMIN'),
        array('^/collaborateur', 'ROLE_EVENT_CREATE')
    ),
));
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

// Register services
$app['dao.client'] = function ($app) {
    return new Courrier\DAO\ClientDAO($app['db']);
};
$app['dao.user'] = function ($app) {
    return new Courrier\DAO\UserDAO($app['db']);
};
$app['dao.courrier'] = function ($app) {
    $courrierDAO = new Courrier\DAO\CourrierDAO($app['db']);
    $courrierDAO->setClientDAO($app['dao.client']);
    $courrierDAO->setUserDAO($app['dao.user']);
    return $courrierDAO;
};

// Register JSON data decoder for JSON requests
$app->before(function (Request $request) {
    if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
    }
});
