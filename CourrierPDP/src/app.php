<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 31.01.2018
 * Time: 10:14
 */

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\LocaleServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\CsrfServiceProvider;
use Silex\Provider\AssetServiceProvider;



$app['debug']=true;

require PATH_SRC . '/routes.php';

$app->register(new TwigServiceProvider(), [
    'twig.path' => [
        __DIR__ . '/../ressources/views',
        __DIR__ . '/../ressources/layout'
    ]
]);

$app->register(new AssetServiceProvider());

#6 : Permet le rendu d'un controller dans la vue
$app->register(new Silex\Provider\HttpFragmentServiceProvider());

#7 : Configuration de la BDD
require PATH_RESSOURCES . '/config/database.config.php';

#8 : Sécurisation de l'Application
#require PATH_RESSOURCES . '/config/security.php';

#9 : Importation pour les Formulaires
$app->register(new FormServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new CsrfServiceProvider());
$app->register(new LocaleServiceProvider());
$app->register(new TranslationServiceProvider(), [
    'translator.domains' => []
]);

# Unable to load the "Symfony\Component\Form\FormRenderer" runtime.
# https://github.com/symfony/symfony/issues/24533#issuecomment-352839791
$app->extend('twig.runtimes', function ($array) {
    $array[FormRenderer::class] = 'twig.form.renderer';
    return $array;
});

return $app;