<body>

<div class="container">

 <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="#" alt="Photo contact">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">NOM DU CONTACT</a></h5>
                              <span><a href="#">ADRESSE EMAIL DU CONTACT</a></span>
                          </div>
                      </div>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose">
                             <button class="btn btn-standart">Nouveau Message</button> 
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">Nouveau Message</button>
                                          <h4 class="modal-title">X</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">à</label>
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
                                                  <label class="col-lg-2 control-label">Sujet</label>
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
                                                        <span>Piece Jointe</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                      <button class="btn btn-send" type="submit">Envoyer</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      
    <div id="accordion" role="tablist">
        
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne" class="fa fa-at">
                Nos échanges 
              </a><span class="label label-info pull-right">3<!--Nombre de mail à rendre dynamique--></span>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                    <div class="choix1" id="test1">
                    <ul class="inbox-nav inbox-divider">
                    <li>
                        
                    </li>
                    <li onclick="active" >
                        <a href="#"><i class="fa fa-envelope-o"></i> Message reçu</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                    </li>
                    <li>
                        <a href="#"><i class=" fa fa-external-link"></i> Brouillon <span class="label label-info pull-right">50<!--Nombre de brouillons à rendre dynamique--></span></a>
                    </li>
                    <li>
                        <a href="#"><i class=" fa fa-trash-o"></i> Corbeille</a>
                    </li>
                </ul>            
                </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="fa fa-envelope-o" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    Courriers/Colis
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                    <div class="choix2">
                    <ul class="inbox-nav inbox-divider">
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i> Courrier envoyé</a>
                                <a href="#"><i class="fa fa-envelope-o"></i> Courrier reçu</a>
                                <a href="#"><i class="fa fa-envelope-o"></i> Colis envoyé</a>
                                <a href="#"><i class="fa fa-envelope-o"></i> Colis reçu</a>
                            </li>
                      </ul>
                            </select>
                            </div>

</div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Boite de reception</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Search Mail">
                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                             <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group">
                                     <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                         Tous
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"> Rien</a></li>
                                         <li><a href="#"> Lu</a></li>
                                         <li><a href="#"> Non lu</a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>                            
                             <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Deplacer vers
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>

                             <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                            <?php
                                require_once "courrier/tbody_courrier.php";
                            ?>
                        
                      </div>
                  </aside>
              </div>
</div>
</body>