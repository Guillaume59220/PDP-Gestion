<?php
    require 'header.php';
    require_once '../src/function.php';
    session_start();

#if(!strstr($_SERVER['PHP_SELF'],'index.php')) die('Error !');


$id_client = $_POST['id_client'] ?? null;

if(isset($_POST['id_client'])) {
    afficheMesCourriers($id_client);
}




?>


