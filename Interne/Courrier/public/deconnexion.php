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

    // Détruit toutes les variables de la session
    session_unset();
    // Détruit toutes les données associées à la session courante
    session_destroy();
    header("location:connexion.php");

?>


