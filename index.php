<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        
    <!--Petite ligne qui aide la fonctionnalité de responsive de la page-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--code de compatibilité vers les naviguateur "Internet Explorer et Edge"-->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!--Liens vers les différents fichiers-->
        
        <!--Fichier de script au format Javascript-->
    <script src="JS/script.js"></script>

        <!--Liens vers la librairie Bootstrap (CSS et Javascript)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

    <!--Fichier de style au format CSS-->
    <link rel="stylesheet" href="CSS/style.css">



    <!--Titre qui ce trouve dans l'onglet du naviguateur-->

    <title>Connection Dossier Client</title>
</head>
<body>

    <?php
    require_once "Connection/index.php";
    ?>

</body>
</html>