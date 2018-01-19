<?php

// Gestion de la base de donnée
require_once('database.php');

/*
 * formIsSubmit : test si un fomulaire a été soumis
 */
function formIsSubmit($form_name) {
    return (isset($_POST[$form_name]) ? $_POST[$form_name] : '0') === '1';
}

function getVal($value, $default = '') {
    return isset($value) ? $value : $default;
}


function showMessage($message, $type = 'alert-success') {
    $html = "
  <div class=\"alert $type alert-dismissible fade show\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
    " . htmlspecialchars($message) . "
  </div>
  ";
    echo $html;
}


function genereTable($query) {
    $table = "";

    while ($result = $query->fetch()) {
        // Première ligne : affichage des titres de colonnes
        if ($table == "") {
            $table = "
  <table class=\"table table-hover table-responsive-sm\">
    <caption>Liste des courriers</caption>
    <thead>
      <tr>
        <th scope=\"col\">
        </th>
        <th scope=\"col\">
        " . implode('</th><th scope=\"col\">', array_keys($result)) . "
        </th>
      </tr>
    </thead>
    <tbody>
      ";
        }
        // Ajout d'une ligne dans la table
        $table .= "
      <tr>
        <td scope=\"row\">
          <a onclick=\"formSubmit('deleteCourier', 'id_delete', '" . $result['id'] . "');\"><i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i></a>
        </td>
        <td>
        " . implode('</td><td>', $result) . "
        </td>
      </tr>
    ";
    }

    function afficheMesCourriers($id_client) {
        // Connexion à la base
        if (!$db = connexion($msg))
            die("Erreur : " . implode($msg));

        // Récupération de mes courriers
        $query = $db->prepare('
    SELECT courrier.numero_courrier, courrier.date_entre, courrier.scan , courrier.addnotation,type_courrier.libelle_courrier,voie_reexpedition.libelle_reexpedition
      FROM courrier LEFT OUTER JOIN type_courrier tc ON courrier.id_type_fk = tc.id_type
                    LEFT OUTER JOIN voie_reexpedition v ON courrier.id_reexpedition_fk = v.id_reexpedition
      WHERE id_client = :id_client
  ');
        $query->bindValue(':id_client', $id_client, PDO::PARAM_INT);
        $query->execute();

        // Parcours du résultat de la requête
        $html_table = genereTable($query);

        if(!$html_table) {
            echo "Aucune donnée trouvée";
        }

        echo $html_table;
    }


    if($table == "") {
        null;//$errors[] = "Aucune ligne trouvée";
    } else {
        $table .= "
    </tbody>
  </table>
    ";
    }

    return $table;
}






