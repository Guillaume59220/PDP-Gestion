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
<body>

<div class="row">
        <div class="col-md-6">
                <div class="container">
                        <div class="mail-box">
                                            <aside class="sm-side">
                                                <div class="user-head">
                                                    <a class="inbox-avatar" href="javascript:;">
                                                        <img  width="64" hieght="60" src="Photo du profil client" alt="Photo du profil client">
                                                    </a>
                                                    <div class="user-name">
                                                        <h5><a href="#">Nom/Prenom Clients</a></h5>
                                                        <span><a href="#">adresse@email.client</a></span>
                                                    </div>
                                                    <a class="mail-dropdown pull-right" href="javascript:;">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                </div>
                                                <div class="inbox-body">
                                                    <!-- Modal -->
                                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">                                                                    
                                                                <div class="modal-body">
                                                                    <form role="form" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">To</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="cc" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Subject</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Message</label>
                                                                            <div class="col-lg-10">
                                                                                <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                                            </div>
                                                                        </div>
                        
                                                                        <div class="form-group">
                                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                                <span class="btn green fileinput-button">
                                                                                <i class="fa fa-plus fa fa-white"></i>
                                                                                <span>Attachment</span>
                                                                                <input type="file" name="files[]" multiple="">
                                                                                </span>
                                                                                <button class="btn btn-send" type="submit">Send</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>
                                                
                                                <div class="container">

                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                                                            <div class="right-arrow pull-right"></div>
                                                        <a href="#">Chat d'entreprise</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse">
                                                        <div class="panel-body"></div>
                                                    </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                                                            <div class="right-arrow pull-right"></div>
                                                        <a href="#">Courrier</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                        <ul class="inbox-nav inbox-divider">
                                                            <li>
                                                                <a href="#"><i class="fa fa-envelope-o"></i> Courrier entrant</a>
                                                                <a href="#"><i class="fa fa-envelope-o"></i> Courrier sortant</a>
                                                            </li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </aside>
        </div>


        <div class="col-md-6">
                <div class="container">
                        <div class="chat_window">
                                <div class="top_menu">
                                    <div class="buttons">
                                        <div class="button close"></div>
                                        <div class="button minimize"></div>
                                        <div class="button maximize"></div>
                                    </div>
                                    <div class="title">Chat</div>
                                </div>
                                <ul class="messages"></ul>
                                <div class="bottom_wrapper clearfix">
                                    <div class="message_input_wrapper">
                                        <input class="message_input" placeholder="Tapez votre message ici ..." />
                                    </div>
                                    <div class="send_message">
                                        <div class="icon">
                                    </div>
                                    <div class="text">
                                        Send
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message_template">
                            <li class="message">
                                <div class="avatar">
                                
                                </div>
                                <div class="text_wrapper">
                                    <div class="text">
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
        </div>
</div>



















            <!--CHATBOX-->


            


                    </table>
                </div>
            </aside>
        </div>
</div>
</body>