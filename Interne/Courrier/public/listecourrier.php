<?php
    require_once '../src/function.php';
    require_once 'menu.php';
#if(!strstr($_SERVER['PHP_SELF'],'index.php')) die('Error !');



$id_client = $_SESSION['id_user'] ?? null;

var_dump($id_client);

if(isset($_POST['id_client'])) {
    afficheMesCourriers($id_client);
}





