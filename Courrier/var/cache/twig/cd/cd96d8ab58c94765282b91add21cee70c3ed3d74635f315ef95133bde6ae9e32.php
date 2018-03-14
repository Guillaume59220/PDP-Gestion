<?php

/* collaborateur.html.twig */
class __TwigTemplate_3459db9881f4c2252d96541470b9a8252e7b42cbbf0b81d7b194c42f246c7c18 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "collaborateur.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Collaborateur";
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
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Code client</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 35
                echo "                            <tr>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nomclient", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "codeclient", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_client_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "idclient", array()))), "html", null, true);
                echo "\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>

                                    <div class=\"modal fade\" id=\"articleDialog";
                // line 42
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
                                                    ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_client_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["client"], "id_client", array()))), "html", null, true);
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
            // line 63
            echo "                    </table>
                </div>
            ";
        } else {
            // line 66
            echo "                <div class=\"alert alert-warning\">Aucun client trouvé</div>
            ";
        }
        // line 68
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborateur_client_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"courriers\">
            <!-- Insérer ici le code de gestion des commentaires -->
            ";
        // line 72
        if ((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 72, $this->source); })())) {
            // line 73
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
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
                // line 85
                echo "                            <tr>
                                <td><a class=\"articleTitle\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("courrier", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()))), "html", null, true);
                echo "\"></a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_courrier_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "id_courrier", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"courrierDialog";
                // line 97
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
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_courrier_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["courrier"], "idcourrier", array()))), "html", null, true);
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
            // line 119
            echo "                    </table>
                </div>
            ";
        } else {
            // line 122
            echo "                <div class=\"alert alert-warning\">Pas de courrier trouvé.</div>
            ";
        }
        // line 124
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_courrier_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "collaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 124,  236 => 122,  231 => 119,  216 => 110,  200 => 97,  195 => 95,  189 => 92,  180 => 86,  177 => 85,  173 => 84,  160 => 73,  158 => 72,  150 => 68,  146 => 66,  141 => 63,  127 => 55,  111 => 42,  105 => 39,  100 => 37,  96 => 36,  93 => 35,  89 => 34,  78 => 25,  76 => 24,  63 => 13,  54 => 10,  51 => 9,  47 => 8,  42 => 7,  39 => 6,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}


{% block title %}Collaborateur{% endblock %}

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
                <li><a href=\"#users\" data-toggle=\"tab\">Collaborateur</a></li>
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
                            <th>Nom</th>
                            <th>Code client</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for client in clients %}
                            <tr>
                                <td>{{ client.nomclient }}</td>
                                <td>{{ client.codeclient }}</td>
                                <td>
                                    <a href=\"{{ path('collaborateur_client_edit', { 'id': client.idclient }) }}\"
                                       class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>

                                    <div class=\"modal fade\" id=\"articleDialog{{ client.idclient }}\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation exigée</h4>
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
                <div class=\"alert alert-warning\">Aucun client trouvé</div>
            {% endif %}
            <a href=\"{{ path('collaborateur_client_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Add client</button></a>
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
                                <td><a class=\"articleTitle\" href=\"{{ path('courrier', { 'id': courrier.idcourrier }) }}\"></a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href=\"{{ path('admin_courrier_edit', { 'id': courrier.idcourrier }) }}\" class=\"btn btn-info btn-xs\"
                                       title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\"
                                            data-target=\"#courrierDialog{{ courrier.id_courrier }}\"><span class=\"glyphicon glyphicon-trash\"></span>
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
                                                    <a href=\"{{ path('admin_courrier_delete', { 'id': courrier.idcourrier }) }}\"
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
                <div class=\"alert alert-warning\">Pas de courrier trouvé.</div>
            {% endif %}
            <a href=\"{{ path('admin_courrier_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter courrier</button></a>
        </div>
    </div>

{% endblock %}
", "collaborateur.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\collaborateur.html.twig");
    }
}
