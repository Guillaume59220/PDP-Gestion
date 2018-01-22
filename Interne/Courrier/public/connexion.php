
<?php
require_once 'header.php';
require_once '../src/function.php';

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
if ( isset($_POST['log']) and !empty($_POST['log']) and isset($_POST['passe']) and !empty($_POST['passe'])){



    // Récupération des valeurs du formulaire
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $remember = intVal($_POST['remember-me'] ?? 0);

    // Vérification des saisies
    if (!filter_var($login, FILTER_DEFAULT)) {
        $form_errors['login'] = 'Login invalide !';
    }
    if (empty($mdp)) {
        $form_errors['mdp'] = 'Mot de passe non renseigné !';
    }

    // S'il n'y a pas eu d'erreur dans le formulaire
    if (count($form_errors) == 0) {
        // Récupération du compte utilisateur
        $query = $db->prepare("SELECT id_user,login,mdp  FROM users WHERE login = :login");
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        if (!$user || !password_verify($mdp, $user['mdp'])) {
            // Ne soyons pas trop précis sur l'errreur pour éviter de donner des indices aux attaquants
            $form_errors['login'] = "Login non trouvé ou mot de passe invalide";
        } else {
            // Ici l'email et le mot de passe sont validés
            $_SESSION["id"] = $user['id'];
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            // Mise en place d'un cookie de session
            // Ce code est à faire avant l'affichage du HTML ou une redirection
            //$_SESSION['token'] = sha1(time() . rand() . $_SERVER['SERVER_NAME']);
            //setcookie('token', $_SESSION['token']);
            // In practice, you'd want to store this token in a database with the username so it's persistent.
            header("location: ajoutercourrier.php");
            return;
        }
    }
}


?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Connexion</strong>
                </div>
                <div class="panel-body">
                    <form role="form"  method="POST" action="login.php" name="#singin">
                        <fieldset>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input class="form-control" placeholder="Login" name="login" type="text" required autofocus>
                                            <?php echo isset($form_errors['login']) ? '<div class="invalid-feedback">' . $form_errors['login'] . '</div>' : '' ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input class="form-control" placeholder="Mot de passe" name="mdp" type="mdp" required>
                                            <?php echo isset($form_errors['mdp']) ? '<div class="invalid-feedback">' . $form_errors['mdp'] . '</div>' : '' ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Connexion">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .panel-heading {
        padding: 5px 15px;
    }

    .panel-footer {
        padding: 1px 15px;
        color: #A0A0A0;
    }

    .profile-img {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
</style>
