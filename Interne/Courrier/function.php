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






