<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!--Bootstrap-->
        <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!--JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <!--Fichiers locaux-->
        <!--CSS-->
    <link rel="stylesheet" href="../CSS/style.css">
        <!--JS-->
    <script src="../JS/script.js"></script>

</head>
<body>
<?php

resource mysql_connect ([ string $server = ini_get("mysql.default_host") [, string $username = ini_get("mysql.default_user") [, string $password = ini_get("mysql.default_password") [, bool $new_link = false [, int $client_flags = 0 ]]]]] )

$link = mysql_connect("localhost", "mysql_user", "mysql_password")
    or die("Impossible de se connecter : " . mysql_error());
    echo 'Connexion réussie';
    mysql_close($link);

    $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
    $db_list = mysql_list_dbs($link);
    while ($row = mysql_fetch_object($db_list)) {
    echo $row->Database . "\n";
    }









?>
</body>
</html>