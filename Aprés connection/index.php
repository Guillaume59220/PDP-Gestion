<html lang="fr">
    <!-- InstanceBegin template="/Templates/pdp-gestion.dwt.php" codeOutsideHTMLIsLocked="false" -->
        <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- InstanceBeginEditable name="doctitle" -->
            <title>Les types d'appels</title>
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

    <body>
        <nav>
        <div class="container-fluid-white">
                <script src="Spry-master/widgets/tabbedpanels/SpryTabbedPanels.js" type="text/javascript"></script>
        <link href="Spry-master/widgets/tabbedpanels/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
        <link href="../../css/bootstrap-portail.css" rel="stylesheet" type="text/css">

        <div id="TabbedPanels1" class="TabbedPanels">

          <ul class="TabbedPanelsTabGroup">
            <a href="http://localhost/PDP-Gestion/Aprés%20connection/courrier.php">
                <li class="TabbedPanelsTab"><img src="img/icone applications/courrier/courrier.png" alt="Courrier" class="img-responsive center-block" style="width:50px;height:50px"><br>Courrier</li>
            </a>

            <a href="http://localhost/PDP-Gestion/Aprés%20connection/mail.php">
            <li class="TabbedPanelsTab"><img src="img/icone applications/courrier/mail.ico" alt="Clients" class="img-responsive center-block" style="width:50px;height:50px"><br>Email</li>
            </a>

            <a href="http://localhost/PDP-Gestion/Aprés%20connection/deconnection.php"><li class="TabbedPanelsTab"><img src="img/icone applications/courrier/deconnection.png" alt="D�connexion" class="img-responsive center-block" style="width:50px;height:50px"><br>Deconnexion</li></a>
          
          </ul>

                
        
                </div>
            </div>
        </nav>
    </body>
</html>
