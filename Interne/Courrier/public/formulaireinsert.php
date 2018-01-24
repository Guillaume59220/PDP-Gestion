<?php

session_start();


/*$login = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
if (!$login) {
    header ('connexion.php');
    exit();
}
*/
#if(!strstr($_SERVER['PHP_SELF'],'index.php')) die('Error !');
    require 'header.php';
    require_once '../src/function.php';
    require_once 'menu.php';



    $errors = [];

    $form_errors = [];

    if (!$db = connexion($errors))
        die("Erreur(s) lors de la connexion : " . implode($errors));

    if (formIsSubmit('ajouter_courrier')) {

        $date_entre = $_POST['date_entre'];
        $type=$_POST['id_type'];
        $scan = $_POST['scan'];
        $addnotation = $_POST['addnotation'];



        // Fichier scan
        if (isset($_FILES['scan'])) {
            //$_FILES existe on récupère les infos qui nous intéressent
            $scan = $_FILES['scan']['name'];//nom réel de l'image
            $size = $_FILES['scan']['size']; //poids de l'image en octets
            $tmp = $_FILES['scan']['tmp_name'];//nom temporaire de l'image (sur le serveur)
            $type = $_FILES['scan']['type'];//type de l'image
            //On récupère la taille de l'image
            list($width, $height) = getimagesize($tmp);
            if (is_uploaded_file($tmp)) //permet de vérifier si le fichier a été uplodé via http
            {
                //vérification du type de l'img, son poids et sa taille
                if ($type == "image" && $size <= 20500 && $width <= 100 && $height <= 100) {
                    // type mime gif, poids < à 20500 octets soit environ 20Ko, largeur = hauteur = 100px
                    //Pour supprimer les espaces dans les noms de fichiers car celà entraîne une erreur lorsque vous voulez l'afficher
                    $fichier = preg_replace("` `i", "", $scan);//ligne facultative :)
                    //On vérifie s'il existe une image qui a le même nom dans le répertoire
                    if (file_exists('./images_up/' . $scan)) {
                        //Le fichier existe on rajoute dans son nom le timestamp du moment pour le différencier de la première (comme cela on est sûr de ne pas avoir 2 images avec le même nom :) )
                        $nom_final = preg_replace("`.gif`is", date("U") . ".gif", $scan);
                    } else {
                        $nom_final = $scan; //l'image n'existe pas on garde le même nom
                    }
                    //on déplace l'image dans le répertoire final
                    move_uploaded_file($tmp, './images_up/' . $nom_final);
                    //Message indiquant que tout s'est bien passé
                    echo "L'image a été uploadée avec succès<br/>";
                } else {
                    //Le type mime, ou la taille ou le poids est incorrect
                    echo 'Votre image a été rejetée (poids, taille ou type incorrect)';
                }
            }
        }
    
}
 if (count($form_errors) == 0 && isset($db)) {
    $query = $db->prepare("
      INSERT INTO courrier( date_entre, addnotation)
        VALUES           ( :date_entre, :addnotation)
    ");
    $query->bindParam(':date_entre', $date_entre);
    $query->bindParam(':addnotation', $addnotation, PDO::PARAM_STR);

    // exécution de la requête préparée
    try {
      null;
      //$query->execute();

      // Commande exécutée avec succès : redirection vers l'acceuil
      //header('Location: ./');
    } catch(PDOException $e) {
      // Il y a eu une erreur
      var_dump($e);
    }
  }

$query = $db->query('SELECT id_client,nom_client FROM clients');

    $courrier_options = "";

$str_query = "SELECT id_type, libelle_courrier FROM type_courrier";

if (isset($id_type))
  $str_query .= " WHERE id = :id_type";

$query = $db->prepare($str_query);

if (isset($id_type))
  $query->bindValue(":id_type", $id_type, PDO::PARAM_INT);

$query->execute();
$types = $query->fetchAll();

foreach($types as $type) {
  $courrier_options .= '<option value="' . $type['id_type'] . '" ' .
      (isset($id_type) && $type['id_type'] == $id_type ? 'selected' : '')
      . '>' . $type['libelle_courrier'] . '</option>';
}

     ?>


    <div style="margin-top:100px"></div>

<div class="container">
	<form enctype="multipart/form-data" method="post" id="insertCourrier" action="listecourrier.php">
        <input type="hidden" name="ajouter_courrier" value="1"/>
        <div class="form-group row">
            <div class="form-group row">
                <label class="col-12 col-form-label" for="nomclient">Societe</label>
                    <div class="col-6">
                        <select name="societe" class="form-control" required id="societe" onchange="this.form.submit()">
                            <option>-Choix client-</option>
                            <?php
                            while($donnees = $query->fetch()){
                                echo '<option value="'.$donnees['id_client'] .'" >'.$donnees['nom_client'].'</option>';}?>
                        </select>
                    </div>
            <label class="col-12 col-form-label" for="type_courrier">Type de courrier</label>
            <div class="col-6">
                <select class="form-control" value="<?php echo isset($_POST['id_type']) ? $_POST['id_type'] : '' ?>"
                        name="type_courrier" id="type_courrier">
                    <!--<option value="2">-Lettre-</option>
                    <option value="3">-Lettre recommandée-</option>
                    <option value="1">-Colis-</option>-->
                    <?php echo $courrier_options; ?>
                </select>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Expediteur</label>
            <div class="col-9">
                <input type="text" id="expediteur" name="expediteur" value="<?php echo isset($_POST['expediteur']) ? $_POST['expediteur'] : '' ?>">

            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label" for="date_entre">Date</label>
            <div class="col-6">
                <input type="Date" class="datepick" value="<?php echo isset($_POST['date_entre']) ? $_POST['date_entre'] : '' ?>" name="date_entre" id="date_entre">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3 col-form-label" for="addnotation">Information complémentaire</label>
            <div class="col-9">
                <textarea name="textarea"  rows="5" cols="30" id="addnotation" name="addnotation" value="<?php echo isset($_POST['addnotation']) ? $_POST['addnotation'] : '' ?>" ></textarea>
                
            </div>
        </div>
        <div class="form-group row">
              <label class="col-3 col-form-label" for="scan">Scan</label>
              <div class="col-9">
              <input type="file" id="scan" name="scan" accept="image/*"/>

            </div>
          </div>
          <div class="col-12">
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="ok">Valider</button>
            </div>
          </div>
        </div>

	</form>
	
</div>

