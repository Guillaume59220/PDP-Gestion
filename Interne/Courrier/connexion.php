<?php
session_start(); // démarrer la gestion de session PHP

// Fonctions de bases
require_once('function.php');

$errors = [];
$form_errors = [];


// Déconnexion
if (formIsSubmit('form_deconnexion')) {
    // Détruit toutes les variables de la session
    session_unset();
    // Détruit toutes les données associées à la session courante
    session_destroy();
}

// Si utilisateur connecté redirection vers liste.php
if (isset($_SESSION['id'])) {
    header("location: ajoutercourrier.php");
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
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $remember = intVal($_POST['remember-me'] ?? 0);

    // Vérification des saisies
    if (!$login) {
        $form_errors['login'] = 'Login invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }

    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Récupération du compte utilisateur
        $query = $db->prepare("SELECT id, login, mdp FROM user WHERE login = :login");
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        if (!$user || !password_verify($mdp, $user['mdp'])) {
            // Ne soyons pas trop précis sur l'errreur pour éviter de donner des indices aux attaquants
            $form_errors['login'] = "Email non trouvé ou mot de passe invalide";
        } else {
            // Ici l'email et le mot de passe sont validés
            $_SESSION["id"] = $user['id'];
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            // Mise en place d'un cookie de session
            // Ce code est à faire avant l'affichage du HTML ou une redirection
            //$_SESSION['token'] = sha1(time() . rand() . $_SERVER['SERVER_NAME']);
            //setcookie('token', $_SESSION['token']);
            // In practice, you'd want to store this token in a database with the username so it's persistent.
            header("location: liste.php");
            return;
        }
    }

}


           /* else {
                $_SESSION["id"] = $user['id'];
                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
                header("location: liste.php");
                return;
            }*/


// Entête HTML ce require permet de charger toutes les balises d'en-tête de la page HTML
require_once('header.php');

?>

    <div class="container form-signin">
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Se connecter</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
            <form method="post">
                <input type="hidden" name="signin_form" value="1"/>
                <label for="email" class="sr-only">Login</label>
                <input type="text" id="login" name="login" class="form-control <?php echo isset($form_errors['login']) ? 'is-invalid' : '' ?>" placeholder="Adresse email" required autofocus>
                <?php echo isset($form_errors['login']) ? '<div class="invalid-feedback">' . $form_errors['login'] . '</div>' : '' ?>
                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required>
                <?php echo isset($form_errors['mdp']) ? '<div class="invalid-feedback">' . $form_errors['mdp'] . '</div>' : '' ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember-me" value="1">Se souvenir
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
            </form>
        </div>
    </div> <!-- /container -->
    </div>
    <br/>
</body>
</html>

