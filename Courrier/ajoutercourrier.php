<!DOCTYPE html>
<html>
<head>
    <title>Courrier</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>
    <div> Logo PDP</div>
</header>

<?php
    require_once 'database.php';
    require_once 'function.php';


$errors = [];

$form_errors = [];

if (!$db = connexion($errors))
    die("Erreur(s) lors de la connexion : " . implode($errors));

$query = $db->query('SELECT nomclient FROM clients');
$result = $query->fetch();

#echo "result : ";
#var_dump($result);

    ?>


<div class="row">
     <div class="col-xs-12 col-sm-8">

      <form method="post" action="formulaireinsertion.php">
        <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="nomclient">Societe</label>
              <div class="col-sm-9">
                  <select name="societe" class="form-control" required>
                      <option value=""> <?php echo $result; ?> </option>

                </select>
              </div>

            </div>

      </form>
    </div><!-- Col -->
  </div> <!-- Row -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js" integrity="sha256-BSsbXsDErniq/HpuhULFor8x1CpA2sPPwQLlEoEri+0=" crossorigin="anonymous"></script>
</body>
</html>