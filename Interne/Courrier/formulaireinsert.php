<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un courier</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>

    <?php 
    require_once 'database.php';
    require_once 'function.php';

    $errors = [];

    $form_errors = [];

    if (!$db = connexion($errors))
        die("Erreur(s) lors de la connexion : " . implode($errors));

    if (formIsSubmit('courrier')) {

    $nature        =$POST['nature'];
    $typecourrier  =$POST['typecourrier'];
    $dateentre     =$POST['dateentre'];
    $expediteur    =$POST['expediteur'];
    $addnotation   =$POST['addnotation'];



    // Fichier scan
  if (isset($_FILES['scan'])) { // Si un scan a été fournie par l'utilisateur
    var_dump($_FILES);
    //rename($_FILES['scan']['tmp_name'], $_FILES['scan']['tmp_name'].'.save');
    // nom temporaire de l'image
    $tmp_name = $_FILES['scan']['tmp_name'];

    // Récupération de l'extension du fichier en fonction de son type : http://php.net/manual/en/function.pathinfo.php
    $extension = pathinfo($_FILES['scan']['name'], PATHINFO_EXTENSION);
    $img_name = $_POST['nom'] . "." . $extension;

    var_dump($extension);
  }



    }
     ?>


    <div style="margin-top:100px"></div>

<div class="container">
	<form enctype="multipart/form-data" method="post" id="courrier">
		<div class="form-group row">
            <label class="col-sm-3 col-form-label" for="nature">Categorie</label>
            <div class="col-sm-6">
                <select class="form-control">
                  <option value="1">-Courrier Arrive-</option>
                   <option value="2">-Courrier Depart-</option>
                </select>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="typecourrier" >Type de courrier</label>
            <div class="col-sm-6">
                <select class="form-control" >
                    <option value="2">-Lettre-</option>
                    <option value="3">-Lettre recommandée-</option>
                    <option value="1">-Colis-</option>
                </select>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dateentre">Date d'arrive</label>
            <div class="col-sm-6">
                <input type="Date" class="datepick" value="<?php echo isset($_POST['dateentre']) ? $_POST['dateentre'] : '' ?>">
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
            <button type="submit" class="btn btn-primary">Valider</button>
          </div>
        </div>

	</form>
	
</div>




<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="formulaireinsert.js"></script>

</body>
</html>