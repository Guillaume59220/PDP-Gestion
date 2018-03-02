<?php

/* admin.html.twig */
class __TwigTemplate_366c3594c2d233e5237095eebe7135a153151f2dad18c1ecb7262485ecebd78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
                <li><a href=\"#users\" data-toggle=\"tab\">Users</a></li>
                <li><a href=\"#collaborateur\" data-toggle=\"tab\">Collaborateur</a> </li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"clients\">
            ";
        // line 25
        if ((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Code Client</th>
                            <th>Nom</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 35, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 36
                echo "                            <tr>
                                <td><a class=\"client\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 37, $this->getSourceContext()); })()), "id_client", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "nom_client", array()), "html", null, true);
                echo "</a></td>
                                <td>
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id_client", array()))), "html", null, true);
                echo "\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#clientDialog";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id_client", array()), "html", null, true);
                echo "\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"articleDialog";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id_client", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                     ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id_client", array()))), "html", null, true);
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
            // line 65
            echo "                    </table>
                </div>
            ";
        } else {
            // line 68
            echo "                <div class=\"alert alert-warning\">aucun client retrouve</div>
            ";
        }
        // line 70
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-plus\"></span> Add client</button></a>
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"courriers\">
            <!-- Insérer ici le code de gestion des commentaires -->
            ";
        // line 74
        if ((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 74, $this->getSourceContext()); })())) {
            // line 75
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
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
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 86, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
                // line 87
                echo "                            <tr>
                                <td><a class=\"articleTitle\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courrier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "id_courrier", array()))), "html", null, true);
                echo "\"></a></td>
                                <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "nom_client", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "date_entre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "annotation", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "type_courrier", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_courrier_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "id_courrier", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "id_courrier", array()), "html", null, true);
                echo "\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"courrierDialog";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "id_courrier", array()), "html", null, true);
                echo "\" tabindex=\"-1\"
                                         role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">

                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_courrier_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["courrier"], "id_courrier", array()))), "html", null, true);
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
            // line 121
            echo "                    </table>
                </div>
            ";
        } else {
            // line 124
            echo "                <div class=\"alert alert-warning\">Pas de courrier trouver.</div>
            ";
        }
        // line 126
        echo "        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            ";
        // line 128
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 128, $this->getSourceContext()); })())) {
            // line 129
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 138, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 139
                echo "                            <tr>
                                <td>";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                                <td>

                                    ";
                // line 143
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 144
                    echo "                                        Admin
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 145
$context["user"], "role", array()) == "ROLE_USER")) {
                    // line 146
                    echo "                                        User
                                    ";
                } else {
                    // line 148
                    echo "                                        Collaborateur
                                    ";
                }
                // line 150
                echo "
                                </td>
                                <td>
                                    <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id_user", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\">
                                        <span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#userDialog";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id_user", array()), "html", null, true);
                echo "\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id_user", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Suprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id_user", array()))), "html", null, true);
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
            // line 178
            echo "                    </table>
                </div>
            ";
        } else {
            // line 181
            echo "                <div class=\"alert alert-warning\">Pas de utilisateur trouver.</div>
            ";
        }
        // line 183
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-plus\"></span> Ajouter utilisateur</button></a>
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
        return array (  354 => 183,  350 => 181,  345 => 178,  331 => 170,  316 => 158,  311 => 156,  305 => 153,  300 => 150,  296 => 148,  292 => 146,  290 => 145,  287 => 144,  285 => 143,  279 => 140,  276 => 139,  272 => 138,  261 => 129,  259 => 128,  255 => 126,  251 => 124,  246 => 121,  231 => 112,  215 => 99,  210 => 97,  204 => 94,  199 => 92,  195 => 91,  191 => 90,  187 => 89,  183 => 88,  180 => 87,  176 => 86,  163 => 75,  161 => 74,  153 => 70,  149 => 68,  144 => 65,  130 => 57,  114 => 44,  109 => 42,  103 => 39,  96 => 37,  93 => 36,  89 => 35,  78 => 26,  76 => 25,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% set adminMenu = true %}

{% block title %}Administration{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
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
                <li><a href=\"#users\" data-toggle=\"tab\">Users</a></li>
                <li><a href=\"#collaborateur\" data-toggle=\"tab\">Collaborateur</a> </li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"clients\">
            {% if clients %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Code Client</th>
                            <th>Nom</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for client in clients %}
                            <tr>
                                <td><a class=\"client\" href=\"{{ path('client', { 'id': clients.id_client }) }}\">{{ client.nom_client }}</a></td>
                                <td>
                                    <a href=\"{{ path('admin_client_edit', { 'id': client.id_client }) }}\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#clientDialog{{ client.id_client }}\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"articleDialog{{ client.id_client }}\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                     ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_client_delete', { 'id': client.id_client }) }}\" class=\"btn btn-danger\">Confirmer</a>
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
                <div class=\"alert alert-warning\">aucun client retrouve</div>
            {% endif %}
            <a href=\"{{ path('admin_client_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-plus\"></span> Add client</button></a>
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"courriers\">
            <!-- Insérer ici le code de gestion des commentaires -->
            {% if courriers %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
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
                            <tr>
                                <td><a class=\"articleTitle\" href=\"{{ path('courrier', { 'id': courrier.id_courrier }) }}\"></a></td>
                                <td>{{ courrier.nom_client }}</td>
                                <td>{{ courrier.date_entre }}</td>
                                <td>{{ courrier.annotation }}</td>
                                <td>{{ courrier.type_courrier }}</td>
                                <td>
                                    <a href=\"{{ path('admin_courrier_edit', { 'id': courrier.id_courrier }) }}\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog{{ courrier.id_courrier }}\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"courrierDialog{{ courrier.id_courrier }}\" tabindex=\"-1\"
                                         role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">

                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_courrier_delete', { 'id': courrier.id_courrier }) }}\"
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
                <div class=\"alert alert-warning\">Pas de courrier trouver.</div>
            {% endif %}
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            {% if users %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
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

                                    {% if user.role == 'ROLE_ADMIN' %}
                                        Admin
                                    {% elseif  user.role == 'ROLE_USER'%}
                                        User
                                    {% else %}
                                        Collaborateur
                                    {% endif %}

                                </td>
                                <td>
                                    <a href=\"{{ path('admin_user_edit', { 'id': user.id_user }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\">
                                        <span class=\"fa fa-pencil-square\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#userDialog{{ user.id_user }}\"><span class=\"fa fa-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog{{ user.id_user }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exiger</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Suprimer ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_user_delete', { 'id': user.id_user }) }}\" class=\"btn btn-danger\">Confirmer</a>
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
                <div class=\"alert alert-warning\">Pas de utilisateur trouver.</div>
            {% endif %}
            <a href=\"{{ path('admin_user_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa fa-plus\"></span> Ajouter utilisateur</button></a>
        </div>
    </div>
{% endblock %}
", "admin.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\admin.html.twig");
    }
}
