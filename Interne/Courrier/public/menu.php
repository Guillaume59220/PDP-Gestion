<?php
require 'header.php';
require_once '../src/function.php';
//<?php if (isset($_SESSION['id'])) :
//<?php endif;
?>
<menu>
    <?php if(isset($_SESSION['auth'])==1): ?>
        <div class="row align-items-center">
            <div class="col-md-2 align-items-center">
                <form action="adduser.php.php" method="post">
                    <input type="hidden"  value="1"/>
                    <button class="btn btn-lg fa fa-plus" >Ajouter un client</button>
                </form>
            </div>
      <?php else: ;
     endif; ?>
            <div class="col-md-2 align-items-center">
                <form action="ajoutercourrier.php" method="post">
                    <input type="hidden"  value="1"/>
                    <button class="btn btn-lg fa fa-envelope-o" >Ajouter un courrier</button>
                </form>
            </div>
            <div class="col-md-2 align-items-center">
                <form action="listecourrier.php" method="post">
                    <input type="hidden"  value="1"/>
                    <button class="btn btn-lg fa fa-envelope-o" > Courrier traite</button>
                </form>
            </div>
            <div class="col-md-2 align-items-center">
                <form action="connexion.php" method="post">
                    <input type="hidden" name="form_deconnexion" value="1"/>
                    <button class="btn btn-lg fa fa-power-off" type="submit"> Deconnexion</button>
                </form>
            </div>
        </div>
</menu>