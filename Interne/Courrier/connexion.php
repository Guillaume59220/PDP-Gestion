
<?php
require_once 'header.php';
require_once 'function.php';
	if (isset($_POST['submit']))
	{
		if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['login']))
		{

			$login = htmlspecialchars($_POST['login']);
			$mdp= htmlentities($_POST['mdp']);
			#$mdp_hash = sha256($_POST['mdp']);

			$req = $bdd->prepare('SELECT id_user FROM users WHERE login = :login AND mdp = :mdp');
			$req->execute(array(
			    'login' => $login,
			    'mdp' => $mdp));

			$resultat = $req->fetch();

			if (!$resultat)
			{
				$login = htmlspecialchars('');
			    echo 'Les identifiants que vous avez saisis ne sont pas valides !';
			}

			else
			{
			    session_start();
			    $_SESSION['id'] = $resultat['id'];
			    $_SESSION['login'] = $login;
			    $_SESSION['mdp'] = $mdp;

			}
		}

		elseif (empty($_POST['login']) AND empty($_POST['mdp']))
		{
			echo 'Vous n\'avez pas saisis d\'identifiants';
		}

		elseif (empty($_POST['login']))
		{
			echo 'Vous n\'avez pas renseigné votre login';
		}

		else
		{
			echo 'Login saisit n\'est pas valide !';
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
                    <form role="form" action="ajoutercourrier.php" method="POST">
                        <fieldset>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user" aria-hidden="true"></i>
												</span>
                                            <input class="form-control" placeholder="Login" name="login" type="text" required autofocus>
                                            <?php echo isset($form_errors['login']) ? '<div class="invalid-feedback">' . $form_errors['login'] . '</div>' : '' ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-lock" aria-hidden="true"></i>
												</span>
                                            <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="" required>
                                            <?php echo isset($form_errors['password']) ? '<div class="invalid-feedback">' . $form_errors['password'] . '</div>' : '' ?>
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
