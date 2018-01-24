<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 22.01.2018
 * Time: 09:27
 */

require_once '../src/function.php';
require_once 'header.php';
require_once 'menu.php';


$errors = [];
$form_errors = [];



if (formIsSubmit('signup_form')) {
    // Traitement du formulaire d'inscription

    // Récupération des valeurs du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $hashMdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Vérification des saisies
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors['email'] = 'Adresse email invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }

    if (!$db = connexion($errors)) {
        die ("Erreur de connexion à la base : " . implode($errors) . "\n<br>Contactez un administrateur");
    };

    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Vérification de l'email en base de donnée
        $query = $db->prepare("SELECT id_user, email,mdp FROM users WHERE email = :email");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $users = $query->fetchAll();
        if (count($users) > 0) {
            $form_errors['email'] = "Email déjà pris, connectez vous au lieu de vous inscrire";
        } else {
            // Ici tout est valide, l'insertion peut être faite
            $query = $db->prepare("
        INSERT INTO users(email,    mdp)
          VALUES         (:email,  :mdp)
      ");
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':mdp', $hashMdp, PDO::PARAM_STR);
            if (!$query->execute())
                showMessage("Erreurs lors de l'inscription : " . implode($query->errorInfo()), 'alert-danger');
            else {
                $_SESSION["id"] = $user['id'];
                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
                header("location: liste.php");
                return;
            }
        }
    }
}



?>
<div class="container" id="signup"  aria-labelledby="signup-tab">
    <form method="post">
        <input type="hidden" name="signup_form" value="1"/>
        <label for="login" class="sr-only">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="mdp" class="sr-only">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required>
        <button class="btn " type="submit">Ajouter utilisateur</button>
    </form>
</div>
