<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 31.01.2018
 * Time: 17:08
 */

namespace src\Controller;

use Silex\Application;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\NotBlank;
use src\Helper;

class AdminController
{

    use Helper;

    /**
     * Affichage de la Page Connexion
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addclientAction(Application $app, Request $request)
    {




    }
}