<?php

/* admin.html.twig */
class __TwigTemplate_e461da00a5d3678a602b2bbb8a33b5228b6a85059e2020496d25d05d6addb91f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h1 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#clients\" data-toggle=\"tab\">Clients</a></li>
                <li><a href=\"#courriers\" data-toggle=\"tab\">Courriers</a></li>
                <li><a href=\"#users\" data-toggle=\"tab\">Collaborateur</a></li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"clients\">
            ";
        // line 24
        if ((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
<<<<<<< HEAD
                    <a href=\"";
=======
                        <a href=\"";
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_client_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
                        <thead>
<<<<<<< HEAD
                        <tr>
                            <th>Nom</th>
                            <th>Code client</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
=======
                            <tr>
                                <th>Nom</th>
                                <th>Code client</th>
                                <th></th>  <!-- Actions column -->
                            </tr>
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                        </thead>
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 36
                echo "                            <tr>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nomclient", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "codeclient", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_client_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "idclient", array()))), "html", null, true);
                echo "\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#clientDialog";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "idclient", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"clientDialog";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "idclient", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Supprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_client_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "idclient", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </table>
                </div>
            ";
        } else {
            // line 69
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_client_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
                <div class=\"alert alert-warning\">Aucun client trouvé</div>
            ";
        }
        // line 72
        echo "
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"courriers\">
<<<<<<< HEAD
            <!-- Insérer ici le code de gestion des commentaires -->
            ";
        // line 76
        if ((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"";
            // line 79
=======
            <!-- Insérer ici le code de gestion des courrier-->
            ";
        // line 76
        if ( !twig_test_empty((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 76, $this->source); })()))) {
            // line 77
            echo "
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"";
            // line 80
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_courrier_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Annotation</th>
                            <th>Type courrier</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
<<<<<<< HEAD
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
                // line 90
                echo "                            <tr>
                                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "date_entre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "date_sortie", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "annotation", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "id_client", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "id_type_courrier", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 97
=======
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
                // line 91
                echo "
                            <tr>
                                <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "idclient", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "dateentre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "annotation", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "idtypecourrier", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 98
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_courrier_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog";
<<<<<<< HEAD
                // line 100
=======
                // line 101
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"courrierDialog";
<<<<<<< HEAD
                // line 102
=======
                // line 103
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()), "html", null, true);
                echo "\" tabindex=\"-1\"
                                         role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                 <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">

                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
<<<<<<< HEAD
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_courrier_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "id_courrier", array()))), "html", null, true);
=======
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_courrier_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()))), "html", null, true);
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo "\"
                                                       class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courrier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 124
=======
            // line 125
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo "                    </table>
                </div>
            ";
        } else {
<<<<<<< HEAD
            // line 127
=======
            // line 128
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_courrier_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
                <div class=\"alert alert-warning\">Pas de courrier trouvé.</div>
            ";
        }
<<<<<<< HEAD
        // line 130
        echo "            


        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            ";
        // line 135
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 135, $this->source); })())) {
            // line 136
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"";
            // line 138
=======
        // line 131
        echo "        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            ";
        // line 133
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 133, $this->source); })())) {
            // line 134
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"";
            // line 136
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter utilisateur</button></a>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
<<<<<<< HEAD
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 147
                echo "                            <tr>
                                <td>";
                // line 148
=======
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 145
                echo "                            <tr>
                                <td>";
                // line 146
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                                <td>

                                    ";
<<<<<<< HEAD
                // line 151
=======
                // line 149
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
                echo "

                                </td>
                                <td>
                                    <a href=\"";
<<<<<<< HEAD
                // line 155
=======
                // line 153
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\">
                                        <span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#userDialog";
<<<<<<< HEAD
                // line 158
=======
                // line 156
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog";
<<<<<<< HEAD
                // line 160
=======
                // line 158
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Supprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
<<<<<<< HEAD
                // line 172
=======
                // line 170
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 180
=======
            // line 178
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo "                    </table>
                </div>
            ";
        } else {
<<<<<<< HEAD
            // line 183
=======
            // line 181
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
            echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter utilisateur</button></a>
                <div class=\"alert alert-warning\">Aucun utilisateur trouvé.</div>
            ";
        }
<<<<<<< HEAD
        // line 186
=======
        // line 184
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
        echo "            
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  368 => 186,  361 => 183,  356 => 180,  342 => 172,  327 => 160,  322 => 158,  316 => 155,  309 => 151,  303 => 148,  300 => 147,  296 => 146,  285 => 138,  281 => 136,  279 => 135,  272 => 130,  265 => 127,  260 => 124,  245 => 115,  229 => 102,  224 => 100,  218 => 97,  213 => 95,  209 => 94,  205 => 93,  201 => 92,  197 => 91,  194 => 90,  190 => 89,  177 => 79,  173 => 77,  171 => 76,  165 => 72,  158 => 69,  153 => 66,  139 => 58,  123 => 45,  118 => 43,  112 => 40,  107 => 38,  103 => 37,  100 => 36,  96 => 35,  85 => 27,  81 => 25,  79 => 24,  66 => 13,  57 => 10,  54 => 9,  50 => 8,  45 => 7,  42 => 6,  36 => 4,  32 => 1,  30 => 2,  15 => 1,);
=======
        return array (  363 => 184,  356 => 181,  351 => 178,  337 => 170,  322 => 158,  317 => 156,  311 => 153,  304 => 149,  298 => 146,  295 => 145,  291 => 144,  280 => 136,  276 => 134,  274 => 133,  270 => 131,  263 => 128,  258 => 125,  243 => 116,  227 => 103,  222 => 101,  216 => 98,  211 => 96,  207 => 95,  203 => 94,  199 => 93,  195 => 91,  191 => 90,  178 => 80,  173 => 77,  171 => 76,  165 => 72,  158 => 69,  153 => 66,  139 => 58,  123 => 45,  118 => 43,  112 => 40,  107 => 38,  103 => 37,  100 => 36,  96 => 35,  85 => 27,  81 => 25,  79 => 24,  66 => 13,  57 => 10,  54 => 9,  50 => 8,  45 => 7,  42 => 6,  36 => 4,  32 => 1,  30 => 2,  15 => 1,);
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% set adminMenu = true %}

{% block title %}Administration{% endblock %}

{% block content %}
    <h1 class=\"text-center\">{{ block('title') }}</h1>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#clients\" data-toggle=\"tab\">Clients</a></li>
                <li><a href=\"#courriers\" data-toggle=\"tab\">Courriers</a></li>
                <li><a href=\"#users\" data-toggle=\"tab\">Collaborateur</a></li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"clients\">
            {% if clients %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
<<<<<<< HEAD
                    <a href=\"{{ path('collaborateur_client_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Code client</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
=======
                        <a href=\"{{ path('collaborateur_client_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Code client</th>
                                <th></th>  <!-- Actions column -->
                            </tr>
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                        </thead>
                        {% for client in clients %}
                            <tr>
                                <td>{{ client.nomclient }}</td>
                                <td>{{ client.codeclient }}</td>
                                <td>
                                    <a href=\"{{ path('collaborateur_client_edit', { 'id': client.idclient }) }}\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#clientDialog{{ client.idclient }}\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"clientDialog{{ client.idclient }}\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Supprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_client_delete', { 'id': client.idclient }) }}\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
            <a href=\"{{ path('collaborateur_client_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
                <div class=\"alert alert-warning\">Aucun client trouvé</div>
            {% endif %}

        </div>
        <div class=\"tab-pane fade adminTable\" id=\"courriers\">
<<<<<<< HEAD
            <!-- Insérer ici le code de gestion des commentaires -->
            {% if courriers %}
=======
            <!-- Insérer ici le code de gestion des courrier-->
            {% if courriers is not empty %}

>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"{{ path('collaborateur_courrier_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Annotation</th>
                            <th>Type courrier</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for courrier in courriers %}
<<<<<<< HEAD
                            <tr>
                                <td>{{ courrier.date_entre }}</td>
                                <td>{{ courrier.date_sortie }}</td>
                                <td>{{ courrier.annotation }}</td>
                                <td>{{ courrier.id_client }}</td>
                                <td>{{ courrier.id_type_courrier }}</td>
=======

                            <tr>
                                <td>{{ courrier.idclient }}</td>
                                <td>{{ courrier.dateentre }}</td>
                                <td>{{ courrier.annotation }}</td>
                                <td>{{ courrier.idtypecourrier }}</td>
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                                <td>
                                    <a href=\"{{ path('collaborateur_courrier_edit', { 'id': courrier.idcourrier }) }}\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog{{ courrier.idcourrier }}\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"courrierDialog{{ courrier.idcourrier }}\" tabindex=\"-1\"
                                         role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                 <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">

                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
<<<<<<< HEAD
                                                    <a href=\"{{ path('admin_courrier_delete', { 'id': courrier.id_courrier }) }}\"
=======
                                                    <a href=\"{{ path('admin_courrier_delete', { 'id': courrier.idcourrier }) }}\"
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
                                                       class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
            <a href=\"{{ path('collaborateur_courrier_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
                <div class=\"alert alert-warning\">Pas de courrier trouvé.</div>
            {% endif %}
<<<<<<< HEAD
            


=======
>>>>>>> f6f47ddf7a7e5b459ac8ea33cd26c3b742de6759
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            {% if users %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                    <a href=\"{{ path('admin_user_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter utilisateur</button></a>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.username }}</a></td>
                                <td>

                                    {{ user.roles[0] }}

                                </td>
                                <td>
                                    <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\">
                                        <span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#userDialog{{ user.id }}\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog{{ user.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Supprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_user_delete', { 'id': user.id }) }}\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
            <a href=\"{{ path('admin_user_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter utilisateur</button></a>
                <div class=\"alert alert-warning\">Aucun utilisateur trouvé.</div>
            {% endif %}
            
        </div>
    </div>
{% endblock %}
", "admin.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\admin.html.twig");
    }
}
