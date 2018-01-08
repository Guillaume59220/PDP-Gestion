<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- InstanceBeginEditable name="doctitle" -->
            <title>Service clients</title>
            <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
            <!-- InstanceEndEditable -->
            <!-- Menu tab -->
            <script src="Spry-master/includes_packed/SpryTabbedPanels.js" type="text/javascript"></script>
            <!-- Bootstrap -->
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="CSS/style.css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
            <script src="../../js/ie10-viewport-bug-workaround.min.js"></script>
            <!-- Datepicker -->
            <script language="JavaScript" src="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"></script>
            <script>
                $(function() {
                var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                var date = $('#datepicker4').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                var date = $('#datepicker5').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                });
                // Popup
                function MM_jumpMenu(targ,selObj,restore){ // v3.0
                  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
                  if (restore) selObj.selectedIndex=0;
                }
            </script>
            
            <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            
        </head>





<div class="php">
    <?php
        require_once "index.php";
    ?>
</div>

<div class="image_courrier">
    <img src="img/icone applications/bureaupdp.png" alt="">
</div>




<div class="TabbedPanelsContent">
    
    <div class="form1">
        <h4>Récupération de votre courrier</h4>
        <div class="choix">
            <p>Comment voulez-vous récuperer votre/vos courrier(s)</p>
        
        <label><input type="radio" name="genre"> A venir chercher sur place</label><br>
		<label><input type="radio" name="genre"> A réexpedier</label><br>
		<label><input type="radio" name="genre"> Scan du courrier</label><br>
		<label><input type="radio" name="genre"> Un recommandés</label>   <br>
        </div>
        
        <br>

        

        <div class="choix1">
                <h4>Vous venez le chercher sur place ?</h4>

                <p>Trés bien. <p>Vous avez un mois pour venir le retirer.</p>
                    N'oubliez pas de nous donner votre numéro de client.
                </p>            
        </div>
        
        <div class="choix2">
            <h4>Vous souhaitez la réexpedition de votre/vos courrier(s)</h4>

            <select name="choice">
                    <option>Quotidienne</option>
                    <option>Hebdomadaire</option>
                    <option>Mensuel</option>
            </select>
        </div>

        <br>

        <div class="choix3">

            <h4>Vous préférez un scan de votre courrier.</h4>
            <p>De quel type le voulez-vous</p>

            <a href="http://">Scan simple</a><br>
            <a href="http://">Scan détaillé</a>
        </div>

        <br>

        <div class="choix4">

            <h4>C'est un courrier recommandé.</h4>

                <input id="Numero_recommandé" placeholder="Numéro de l'envoie"><br/>
                <br>
                <input id="expediteur" placeholder="L'expéditeur"><br/>
                <br>
        		<input id="date" type="date"><br/>

        </div>

    </div>

</div>