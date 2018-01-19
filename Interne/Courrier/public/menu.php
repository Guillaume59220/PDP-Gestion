<?php
require 'header.php';
require_once 'function.php';


if (formIsSubmit('form_deconnexion')) {
    // Détruit toutes les variables de la session
    session_unset();
    // Détruit toutes les données associées à la session courante
    session_destroy();
}
?>
<menu class="nav nav-bar">
    <ul>
        <li><a href="ajoutercourrier.php" </li>
        <li><a href="deconnexion.php" </li>
    </ul>
</menu>
