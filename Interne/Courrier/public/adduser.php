<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 22.01.2018
 * Time: 09:27
 */

require_once '../src/function.php';
require_once 'menu.php';


$errors = [];
$form_errors = [];



if (formIsSubmit('signup_form')) {
    // Traitement du formulaire d'inscription

    // Récupération des valeurs du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $hashPassword = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Vérification des saisies
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors['email'] = 'Adresse email invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }

    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Vérification de l'email en base de donnée
        $query = $db->prepare("SELECT id_user, email, mdp FROM users WHERE email = :email");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $users = $query->fetchAll();
        if (count($users) > 0) {
            $form_errors['email'] = "Email déjà pris, connectez vous au lieu de vous inscrire";
        } else {
            // Ici tout est valide, l'insertion peut être faite
            $query = $db->prepare("
        INSERT INTO users(email, mdp)
          VALUES         (:email,:mdp)");
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':mdp', $hashPassword, PDO::PARAM_STR);
            if (!$query->execute())
                showMessage("Erreurs lors de l'inscription : " . implode($query->errorInfo()), 'alert-danger');
            else {
               showMessage('Ajout reussi','alert-success');
               header("location: listecourrier.php");
                return;
            }
        }
    }
}

?>
<div class="container">
    <div class="content_panel" style="margin-top: 50px">
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="signup_form" value="1"/>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control  <?php echo isset($form_errors['email']) ? 'is-invalid' : '' ?>" id="email" type="text" name="email" placeholder="Email">
                    <?php echo isset($form_errors['email']) ? '<div class="invalid-feedback">' . $form_errors['email'] . '</div>' : '' ?>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe">
                    <?php echo isset($form_errors['mdp']) ? '<div class="invalid-feedback">' . $form_errors['mdp'] . '</div>' : '' ?>
                </div>
                <div class="input-group">
                    <div class="checkbox">

                    </div>
                </div>
                <button class="btn " type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
