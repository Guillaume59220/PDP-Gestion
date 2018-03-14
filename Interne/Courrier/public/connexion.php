<?php

// Fonctions de bases
require_once('../src/function.php');
require_once ('../src/database.php');


$errors = [];
$form_errors = [];


// Déconnexion
if (formIsSubmit('form_deconnexion')) {
    // Détruit toutes les variables de la session
    unset($_SESSION);
    // Détruit toutes les données associées à la session courante
    session_destroy();
}

// Si utilisateur connecté redirection vers liste.php
if (isset($_SESSION['id_user'])) {
    header("location: listecourrier.php");
    return;
}

/*
// Envoi d'un mail :
// Dans php.ini configurer sendmail_path = "C:\xampp\mailtodisk\mailtodisk.exe"
// et sendmail_from="notification@xampp.com"
if (!mail($email, "test de mail", "Bienvenue sur XAMPP"))
  showMessage("Mail en erreur");
*/

// Connexion à la base de donnée
if (!$db = connexion($errors)) {
    die ("Erreur de connexion à la base : " . implode($errors) . "\n<br>Contactez un administrateur");
}

// Gestion des formulaires
if (formIsSubmit('signin_form')) {
    // Traitement du formulaire de connexion

    // Récupération des valeurs du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $remember = intVal($_POST['remember-me'] ?? 0);

    // Vérification des saisies
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors['email'] = 'Adresse email invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }

    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Récupération du compte utilisateur
        $query = $db->prepare("SELECT id_user, email, mdp FROM users WHERE email = :email");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        var_dump($user);
        if (!$user || !password_verify($mdp, $user['mdp'])) {
            // Ne soyons pas trop précis sur l'errreur pour éviter de donner des indices aux attaquants
            $form_errors['email'] = "Email non trouvé ou mot de passe invalide";
        } else {
            // Ici l'email et le mot de passe sont validés
            $_SESSION["id_user"] = $user['id_user'];
           # $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            // Mise en place d'un cookie de session
            // Ce code est à faire avant l'affichage du HTML ou une redirection
            //$_SESSION['token'] = sha1(time() . rand() . $_SERVER['SERVER_NAME']);
            //setcookie('token', $_SESSION['token']);
            // In practice, you'd want to store this token in a database with the username so it's persistent.
            header("location: listecourrier.php");
            return;
        }
    }



}
    require_once 'header.php';
?>


    <div class="container">
        <div class="content_panel" style="margin-top: 50px">
            <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="form-horizontal" method="post">
                    <input type="hidden" name="signin_form" value="1"/>
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
                            <label>
                                <input id="remember" type="checkbox" name="remember" value="1"> Se souvenir
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Connexion</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'footer.php';


