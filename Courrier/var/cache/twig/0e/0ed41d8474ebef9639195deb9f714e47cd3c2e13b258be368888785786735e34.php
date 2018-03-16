<?php

/* index.html.twig */
class __TwigTemplate_78d78e1bbee667688d66e99cc321129e193ba7ad056235f61f84a146ff17b6d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Liste courrier ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\">
            <h1>Liste de courrier</h1>
            <hr />
                   ";
        // line 10
        if ( !twig_test_empty((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Annotation</th>
                            <th>Type courrier</th>
                            <th>Fichier</th>
                            <th>Scan</th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) || array_key_exists("courriers", $context) ? $context["courriers"] : (function () { throw new Twig_Error_Runtime('Variable "courriers" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
                // line 25
                echo "                           ";
                // line 26
                echo "                            <tr>
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "nom_client", array(), "array"), "html", null, true);
                echo "</td>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "date_entre", array(), "array"), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "annotation", array(), "array"), "html", null, true);
                echo "</td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "libelle_courrier", array(), "array"), "html", null, true);
                echo "</td>
                                <td> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courrier"], "scan", array(), "array"), "html", null, true);
                echo " </td>
                                <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_scan", array("filename" => twig_get_attribute($this->env, $this->source, $context["courrier"], "scan", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\" title=\"Download\" download>
                                    <span class=\"glyphicon glyphicon-cloud-download\"></span></a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courrier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </table>
                </div>
            ";
        }
        // line 40
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  105 => 37,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  71 => 26,  69 => 25,  65 => 24,  50 => 11,  48 => 10,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %} Liste courrier {% endblock %}

{% block content %}

    <div class=\"container\">
            <h1>Liste de courrier</h1>
            <hr />
                   {% if courriers is not empty %}

                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Annotation</th>
                            <th>Type courrier</th>
                            <th>Fichier</th>
                            <th>Scan</th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for courrier in courriers %}
                           {#{{ dump(courriers) }}#}
                            <tr>
                                <td>{{ courrier['nom_client'] }}</td>
                                <td>{{ courrier['date_entre'] }}</td>
                                <td>{{ courrier['annotation'] }}</td>
                                <td>{{ courrier['libelle_courrier'] }}</td>
                                <td> {{ courrier['scan'] }} </td>
                                <td><a href=\"{{path ('download_scan',{'filename':courrier.scan}) }}\" class=\"btn btn-success btn-xs\" title=\"Download\" download>
                                    <span class=\"glyphicon glyphicon-cloud-download\"></span></a>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% endif %}
    </div>

{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\index.html.twig");
    }
}
