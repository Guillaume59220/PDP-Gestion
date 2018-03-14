<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 19.01.2018
 * Time: 09:30
 */

require 'header.php';
require_once '../src/function.php';

    session_start();

if (formIsSubmit('form_deconnexion')) {

    session_unset('id_user');
    session_destroy();
    // Détruit toutes les variables de la session
    //destruction de la session et redirection vers la page login.php

    header("Location:login.php");
}
//Source : www.exelib.net

?>


