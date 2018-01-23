<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 22.01.2018
 * Time: 09:27
 */
session_start();
require_once 'header.php';
require_once '../src/function.php';
require_once '../src/database.php';


    $errors = [];
    $form_errors = [];

if (!$db = connexion($errors)) {
    die ("Erreur de connexion à la base : " . implode($errors) . "\n<br>Contactez un administrateur");
}

if (formIsSubmit('signup_form')) {
    // Traitement du formulaire d'inscription

    // Récupération des valeurs du formulaire
    $login = htmlentities($_POST['login']);
    $mdp = htmlentities($_POST['mdp']);
    $hashMdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    var_dump($db);
    // Vérification des saisies
    if (!filter_var($login)) {
        $form_errors['login'] = 'Login invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }
    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Vérification de l'email en base de donnée
        $query = $db->prepare("SELECT login,mdp FROM users WHERE login = :login");
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $users = $query->fetchAll();
        if (count($users) > 0) {
            $form_errors['login'] = "Login déjà pris, connectez vous au lieu de vous inscrire";
        } else {
            // Ici tout est valide, l'insertion peut être faite
            $query = $db->prepare("
        INSERT INTO users(login,  mdp)
          VALUES         (:login, :mdp)
      ");
            $query->bindValue(':login', $login, PDO::PARAM_STR);
            $query->bindValue(':mdp', $hashMdp, PDO::PARAM_STR);
            if (!$query->execute())
                showMessage("Erreurs lors de l'inscription : " . implode($query->errorInfo()), 'alert-danger');
            else {
                $_SESSION["id"] = $user['id'];
                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

                return;
            }
        }
    }
}



?>
<div class="container" id="signup"  aria-labelledby="signup-tab">
    <form method="post">
        <input type="hidden" name="signup_form" value="1"/>
        <label for="login" class="sr-only">Login</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus>
        <label for="mdp" class="sr-only">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg" type="submit">Ajouter utilisateur</button>
    </form>
</div>
