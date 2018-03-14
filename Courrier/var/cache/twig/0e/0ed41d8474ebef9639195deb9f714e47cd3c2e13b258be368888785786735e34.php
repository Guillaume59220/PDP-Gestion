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
        echo "    <td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->source); })()), "username", array()), "html", null, true);
        echo "</td>


        <div class=\"container\">
        <h1>Liste de courrier</h1>
        <hr />

        <table>
            <tr>
                <th>Numero courrier</th>
                <th>Date</th>
                <th>Libelle</th>
                <th>Nom client</th>
                <th>Annotation</th>
                <th>Scan</th>
            </tr>



           <tr>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                
            </tr>
        </table> 
    </div>

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
        return array (  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %} Liste courrier {% endblock %}

{% block content %}
    <td>{{ user.username }}</td>


        <div class=\"container\">
        <h1>Liste de courrier</h1>
        <hr />

        <table>
            <tr>
                <th>Numero courrier</th>
                <th>Date</th>
                <th>Libelle</th>
                <th>Nom client</th>
                <th>Annotation</th>
                <th>Scan</th>
            </tr>



           <tr>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                
            </tr>
        </table> 
    </div>

{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\index.html.twig");
    }
}
