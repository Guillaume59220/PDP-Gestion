<?php
    require_once 'header.php';
    require_once '../src/function.php'; #../src/function.php
    require 'menu.php';
session_start();

if (isset($_SESSION['id'])) {
    $errors = [];

    $form_errors = [];

    if (!$db = connexion($errors))
        die("Erreur(s) lors de la connexion : " . implode($errors));


    $query = $db->query('SELECT id_client,nom_client FROM clients');

#echo "result : ";
#var_dump($donnees);
#
}else
    header('connexion.php');



    ?>
    <div class="container">
      <div style="margin-top: 100px"></div>
      <div class="row">
        <div class="col-xs-12 col-sm-8">

          <form method="post" action="formulaireinsert.php" id="courrier">
              <input type="hidden" name="ajouter_courrier" value="1"/>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="nomclient">Societe</label>
              <div class="col-sm-6">
                <select name="societe" class="form-control" required id="societe" onchange="this.form.submit()">
                    <option>-Choix client-</option>
                   <?php
                  while($donnees = $query->fetch()){
                   echo '<option value="'.$donnees['id_client'] .'" >'.$donnees['nom_client'].'</option>';}?>
                </select>
              </div>
            </div>
          </form>
        </div><!-- Col -->
      </div> <!-- Row -->
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js" integrity="sha256-BSsbXsDErniq/HpuhULFor8x1CpA2sPPwQLlEoEri+0=" crossorigin="anonymous"></script>

</body>
</html>