<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un courier</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>

    <?php
    require_once 'function.php';


    $_GET['idclient']=$_POST['idclient'];



    $errors = [];

    $form_errors = [];

    if (!$db = connexion($errors))
        die("Erreur(s) lors de la connexion : " . implode($errors));

    if (formIsSubmit('courrier')) {

        $nature = $_POST['nature'];
        $typecourrier = $_POST['typecourrier'];
        $date = $_POST['dateentre'];
        $expediteur = $_POST['expediteur'];
        $addnotation = $_POST['addnotation'];
        $numerocourrier=$_POST['numerocourrier'];


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
                if ($type == "image/gif" && $size <= 20500 && $width <= 100 && $height <= 100) {
                    // type mime gif, poids < à 20500 octets soit environ 20Ko, largeur = hauteur = 100px
                    //Pour supprimer les espaces dans les noms de fichiers car celà entraîne une erreur lorsque vous voulez l'afficher
                    $fichier = preg_replace("` `i", "", $fichier);//ligne facultative :)
                    //On vérifie s'il existe une image qui a le même nom dans le répertoire
                    if (file_exists('./images_up/' . $fichier)) {
                        //Le fichier existe on rajoute dans son nom le timestamp du moment pour le différencier de la première (comme cela on est sûr de ne pas avoir 2 images avec le même nom :) )
                        $nom_final = preg_replace("`.gif`is", date("U") . ".gif", $fichier);
                    } else {
                        $nom_final = $fichier; //l'image n'existe pas on garde le même nom
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
      INSERT INTO courrier(nature,  expediteur, addnotation)
        VALUES           (:nature, :expediteur, :addnotation)
    ");
    $query->bindParam(':nature', $nature, PDO::PARAM_STR);
    $query->bindParam(':expediteur', $expediteur, PDO::PARAM_STR);
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

    $courrier_options = "";

$str_query = "SELECT idtypecourrier, libellecourrier FROM typecourrier";

if (isset($idtypecourrier))
  $str_query .= " WHERE id = :idtypecourrier";

$query = $db->prepare($str_query);

if (isset($idtypecourrier))
  $query->bindValue(":idtypecourrier", $idtypecourrier, PDO::PARAM_INT);

$query->execute();
$types = $query->fetchAll();

foreach($types as $type) {
  $courrier_options .= '<option value="' . $type['idtypecourrier'] . '" ' . (isset($idtypecourrier) && $type['idtypecourrier'] == $idtypecourrier ? 'selected' : '') . '>' . $type['libellecourrier'] . '</option>';
}

     ?>


    <div style="margin-top:100px"></div>

<div class="container">
	<form enctype="multipart/form-data" method="post" id="courrier" action="listecourrier.php">
        <input type="hidden" name="courrier" value="1"/>
		<div class="form-group row">
            <label class="col-sm-3 col-form-label" for="nature">Categorie</label>
            <div class="col-sm-6">
                <select class="form-control" value="<?php echo isset($_POST['nature']) ? $_POST['nature'] : '' ?>" name="nature" id="nature">
                  <option value="Entrent">-Courrier Arrive-</option>
                   <option value="Sortent">-Courrier Depart-</option>
                </select>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="typecourrier">Type de courrier</label>
            <div class="col-sm-6">
                <select class="form-control" value="<?php echo isset($_POST['idtypecourrier']) ? $_POST['idtypecourrier'] : '' ?>" name="typecourrier" id="typecourrier">
                    <!--<option value="2">-Lettre-</option>
                    <option value="3">-Lettre recommandée-</option>
                    <option value="1">-Colis-</option>-->
                    <?php echo $courrier_options; ?>
                </select>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dateentre">Date</label>
            <div class="col-sm-6">
                <input type="Date" class="datepick" value="<?php echo isset($_POST['dateentre']) ? $_POST['dateentre'] : '' ?>" name="dateentre" id="dateentre">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Expediteur</label>
            <div class="col-sm-9">
                <input type="text" id="expediteur" name="expediteur" value="<?php echo isset($_POST['expediteur']) ? $_POST['expediteur'] : '' ?>">
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="addnotation">Information complémentaire</label>
            <div class="col-sm-9">
                <textarea name="textarea"  rows="5" cols="30" id="addnotation" name="addnotation" value="<?php echo isset($_POST['addnotation']) ? $_POST['addnotation'] : '' ?>" ></textarea>
                
            </div>
        </div>
        <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="scan">Scan</label>
              <div class="col-sm-9">
              <input type="file" id="scan" name="scan" accept="image/*"/>

            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="ok">Valider</button>
          </div>
        </div>

	</form>
	
</div>



<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</body>
</html>