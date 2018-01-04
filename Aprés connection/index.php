<html lang="fr">
    <!-- InstanceBegin template="/Templates/pdp-gestion.dwt.php" codeOutsideHTMLIsLocked="false" -->
        <head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><!-- InstanceBeginEditable name="doctitle" -->
            <title>Les types d'appels</title>
            <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
            <!-- InstanceEndEditable -->
            <!-- Menu tab -->
            <script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
            <!-- Bootstrap -->
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
            <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        </head>

    <body>
        <nav>
        <div class="container-fluid-white">
                <!-- <script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
        <link href="../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
        <link href="../../css/bootstrap-portail.css" rel="stylesheet" type="text/css"> -->

        <div id="TabbedPanels1" class="TabbedPanels">

          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab"><img src="../../images/couple-forum-utilisateurs-icone-6640-48.png" alt="Collaborateurs" class="img-responsive center-block" style="width:50px;height:50px"><br>Collaborateurs</li>

            <li class="TabbedPanelsTab"><img src="../../images/femme-groupe-male-utilisateurs-icone-7201-64.png" alt="Clients" class="img-responsive center-block" style="width:50px;height:50px"><br>Clients</li>

            <li class="TabbedPanelsTab"><img src="../../images/dalerte-des-infos-des-hommes-utilisateur-icone-7789-48.png" height="48" alt="Appelants" class="img-responsive center-block" style="width:50px;height:50px"><br>Appelants</li>

            <li class="TabbedPanelsTab"><img src="../../images/telephone-icone-9367-64.png" alt="Appels" class="img-responsive center-block" style="width:50px;height:50px"><br>Appels</li>

            <li class="TabbedPanelsTab"><img src="../../images/portable-mobile-telephone-icone-4943-48.png" alt="SMS" class="img-responsive center-block" style="width:50px;height:50px"><br>SMS et emails</li>

            <li class="TabbedPanelsTab"><img src="../../images/facture-icone-7188-48.png" alt="Rapports" class="img-responsive center-block" style="width:50px;height:50px"><br>Rapports</li>

            <li class="TabbedPanelsTab"><img src="../../images/knotes-icone-5773-48.png" alt="Commentaires" class="img-responsive center-block" style="width:50px;height:50px"><br>Commentaires</li>

            <li class="TabbedPanelsTab"><img src="../../images/processus-arretez-vous-icone-7560-48.png" alt="D�connexion" class="img-responsive center-block" style="width:50px;height:50px"><br>D�connexion</li>
          </ul>

          <div class="TabbedPanelsContentGroup">

            <!-- Collaborateurs -->
            <div class="TabbedPanelsContent">

                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <p><a href="personnel.php" title="G�rer les collaborateurs" class="btn btn-sm btn-default center-block" role="button"><i class="fa fa-male"></i> <i class="fa fa-female"></i> Les collaborateurs</a></p>
                        <p><a href="personnel-ajouter.php" title="Ajouter un collaborateur" class="btn btn-sm btn-default center-block" role="button"><I class="fa fa-plus"></I> Ajouter un collaborateur</a></p>
                    </div>
                    <div class="col-lg-10 col-md-10"></div>
                </div>

            </div>
            <!-- Fin des collaborateurs -->

            <!-- Clients -->
            <div class="TabbedPanelsContent">
              <div class="row">
                <div class="col-lg-2 col-md-2">
                    <p><a href="client.php" title="G�rer les clients" class="btn btn-sm btn-default  center-block" role="button"><i class="fa fa-user"></i> G�rer les clients</a></p>
                    <p><a href="client-ajouter-client1.php" title="Ajouter un client" class="btn btn-sm btn-default center-block" role="button"><!--<i class="fa fa-user-plus"></i>--><i class="fa fa-plus"></i> Ajouter un client</a></p>
                    <p><a href="client-ajouter-contact1.php" title="Ajouter un contact" class="btn btn-sm btn-default center-block" role="button"><i class="fa fa-plus"></i> Ajouter un contact</a></p>
                    <p><a href="client-ajouter-consigne.php" title="Ajouter une consigne" class="btn btn-sm btn-default center-block" role="button"><i class="fa fa-comment-o"></i> Ajouter une consigne</a></p>
                </div>
                <div class="col-lg-2 col-md-2">
                    <form action="client-rechercher-societe.php" method="get" name="form">
                    <div class="input-group margin-bottom-md form-inline">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input name="societe" type="text" class="form-control" placeholder="Raison sociale, puis Entr�e" value="" required>
                    </div>
                    </form>

                    <form action="client-rechercher-nom.php" method="get" name="form">
                    <div class="input-group margin-bottom-md form-inline">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input name="nom" type="text" class="form-control" placeholder="Nom du contact, puis Entr�e" value="" required>
                    </div>
                    </form>
                </div>
                <div class="col-lg-8 col-md-8"></div>
             </div>

            </div>
            <!-- Fin des clients -->

            <div class="TabbedPanelsContent">
              <!-- Appelants -->
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <p><a href="appelant.php" title="Gérer les appelants" class="btn btn-sm  btn-default center-block" role="button"><i class="fa fa-phone"></i> Les appelants</a></p>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <form action="appelant-rechercher-societe.php" method="get" name="form">
                            <div class="input-group margin-bottom-md form-inline">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input name="societe" type="text" placeholder="Raison sociale, puis Entr�e" value="" class="form-control">
                            </div>
                        </form>
                        <form action="appelant-rechercher-nom.php" method="get" name="form">
                            <div class="input-group margin-bottom-md form-inline">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input name="nom" type="text" placeholder="Par nom du contact, puis Entr�e" value="" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-8">

                    </div>
                </div>

            </div>
            <!-- Fin des appelants -->

            <!-- Menu Appels -->
            <div class="TabbedPanelsContent">

            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <p><a href="appel-ajouter1.php" class="btn btn-sm btn-default center-block" title="Ajouter un appel"><i class="fa fa-plus"></i> Ajouter un appel</a></p>
                    <p><a href="appel.php" class="btn btn-sm btn-default center-block" role="button" title="G�rer les appels"><i class="fa fa-phone"></i> G�rer les appels</a></p>
                </div>

                <div class="col-lg-2 col-md-2">
                    <p><a href="appel-traites.php" class="btn btn-sm btn-default center-block" role="button" title="Appels trait�s"><i class="fa fa-phone"></i> Appels trait�s</a></p>
                    <p><a href="appel-non-traites.php" class="btn btn-sm btn-default center-block" role="button" title="Appels non trait�s"><i class="fa fa-phone"></i> Appels non trait�s</a></p>
                    <p><a href="appel-historique.php" class="btn btn-sm btn-default center-block" role="button" title="Historique des appels"><i class="fa fa-phone"></i> Historique des appels</a></p>
                </div>

                <div class="col-lg-2 col-md-2">
                    <p><a href="types-appel.php" title="Types d'appel" class="btn btn-sm btn-default center-block" role="button">Types d'appel</a></p>
                    <p><a href="types-appel-ajouter.php" class="btn btn-sm btn-default center-block" role="button" title="Ajouter un type d'appel"><i class="fa fa-plus"></i> Ajouter un type d'appel</a></p>
                </div>

                <div class="col-lg-2 col-md-2">
                    <!-- RECHERCHE APPEL PAR DATE -->
                    <form action="appel-rechercher-date.php" method="get" name="form">
                        <div class="input-group margin-bottom-md form-inline">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input name="date" type="text" id="datepicker" value="" placeholder="Par date, puis Entr�e" class="form-control" required>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <a href="appel-recherche-combine-confirmation.php" class="btn btn-sm btn-default center-block" role="button" title="Recherche combin�e"><i class="fa fa-search"></i> Recherche multi-crit�res</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2">
                <!-- RECHERCHE APPEL PAR SOCIETE -->

                <form action="appel-rechercher-societe.php" method="get" name="formrechercheappelclient">
                <!-- <form action="appel-rechercher-societe.php" method="post" name="formrechercheappelclient"> -->
                  <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <select name="societe" class="form-control" required>
                            <option value="">Par soci�t� cliente</option>
                                <option value='A.A POUR TRACABILITE'>A.A POUR TRACABILITE</option><option value='ALTER AVENIR'>ALTER AVENIR</option><option value='Artisan Cassagrandre'>Artisan Cassagrandre</option><option value='ATAVIK'>ATAVIK</option><option value='Cabinet de psycho sexologie'>Cabinet de psycho sexologie</option><option value='Coclet'>Coclet</option><option value='DE-BUSSCHERE JEAN'>DE-BUSSCHERE JEAN</option><option value='DERCO'>DERCO</option><option value='Entreprise Fran�ois'>Entreprise Fran&Atilde;&sect;ois</option><option value='LC Formateur'>LC Formateur</option><option value='NOIRET MAC ADAM'>NOIRET MAC ADAM</option><option value='PDP'>PDP</option><option value='Pharminventaire'>Pharminventaire</option><option value='placedesenergies.com'>placedesenergies.com</option><option value='Reliant'>Reliant</option><option value='SLM R�novation'>SLM R&Atilde;&copy;novation</option><option value='TEST CLIENTS'>TEST CLIENTS</option><option value='Test LC'>Test LC</option><option value='ZZZ-ADC Couverture'>ZZZ-ADC Couverture</option><option value='ZZZ-ARTHUR BONNET'>ZZZ-ARTHUR BONNET</option><option value='ZZZ-AT HOME'>ZZZ-AT HOME</option><option value='ZZZ-BASUYAU'>ZZZ-BASUYAU</option><option value='zzz-BOISMONT'>zzz-BOISMONT</option><option value='ZZZ-Cinquante/50'>ZZZ-Cinquante/50</option><option value='ZZZ-DUEDAL COUVERTURE'>ZZZ-DUEDAL COUVERTURE</option><option value='ZZZ-LMA HABITAT'>ZZZ-LMA HABITAT</option><option value='ZZZ-Nette Services'>ZZZ-Nette Services</option><option value='ZZZ-SMET'>ZZZ-SMET</option>                    </select>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <input type="submit" name="btn" value="OK" class="btn btn-sm btn-primary">
                        </div>
                  </div>
                </form>
                </div>
            </div>
            </div>
          </div>
        </div>
        </nav>
    </body>
    </html>