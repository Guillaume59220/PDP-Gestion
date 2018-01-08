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
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

            <script src="../../js/ie10-viewport-bug-workaround.min.js"></script>
            
            <!--jQuery et jQuery UI-->
            <!-- Datepicker -->
            <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

            <link rel="stylesheet" type="text/css" href="jquery-ui.min.css ">


            <!--FICHIERS LOCAUX-->
            <link rel="stylesheet" type="text/css" href="CSS/style.css">
            <script src="JS/script.js"></script>


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

<h1>Récupération de votre courrier</h1>

<h2>Comment voulez-vous récuperer votre courrier</h2>

<div id="accordion" role="tablist">
        
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                A venir chercher sur place
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                    <div class="choix1" id="test1">
                            <h4>Vous venez le chercher sur place ?</h4>
            
                            <p>Trés bien. <p>Vous avez un mois pour venir le retirer.</p>
                                N'oubliez pas de nous donner votre numéro de client.
                            </p>            
                    </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    A réexpedier
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                    <div class="choix2">
                            <h4>Vous souhaitez la réexpedition <br> de votre/vos courrier(s)</h4>
                
                            <div class="choix2bis">
                                <select name="choice">
                                    <option>Quotidienne</option>
                                    <option>Hebdomadaire</option>
                                    <option>Mensuel</option>
                            </select>
                            </div>
            </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                    Scan du courrier
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                    <div class="choix3">

                            <h4>Vous préférez un scan de votre courrier.</h4>
                            <p>De quel type le voulez-vous</p>
                
                            <a href="http://">Scan simple</a><br>
                            <a href="http://">Scan détaillé</a>
                        </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
            <div class="card-header" role="tab" id="headingFour">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
                        Un recommandés
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
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
          </div>
        </div>  
    </div>
</div>
</div>