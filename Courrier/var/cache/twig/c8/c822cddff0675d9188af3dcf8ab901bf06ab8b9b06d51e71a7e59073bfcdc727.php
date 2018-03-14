<?php

/* login.html.twig */
class __TwigTemplate_231b32248ecc4d0a39510809eb540dc3439a0f9acbb6329872a3b4557bd91329 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        echo "Connexion";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            <strong>Erreur de connexion !</strong> ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "    <div class=\"well\">
        <form class=\"form-signin form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\">
                    <div class=\"input-group\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>        
                    <input type=\"text\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"E-Mail\" required autofocus>
                   </div>
                   <div class=\"input-group\">
                   <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                   <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                   </div>
                    <button type=\"submit\" class=\"btn btn-default btn-login\">Login</button>
                
            
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  61 => 13,  58 => 12,  52 => 9,  49 => 8,  47 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% if error %}
        <div class=\"alert alert-danger\">
            <strong>Erreur de connexion !</strong> {{ error }}
        </div>
    {% endif %}
    <div class=\"well\">
        <form class=\"form-signin form-horizontal\" role=\"form\" action=\"{{ path('login_check') }}\" method=\"post\">
                    <div class=\"input-group\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>        
                    <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"E-Mail\" required autofocus>
                   </div>
                   <div class=\"input-group\">
                   <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                   <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                   </div>
                    <button type=\"submit\" class=\"btn btn-default btn-login\">Login</button>
                
            
        </form>
    </div>
{% endblock %}
", "login.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\login.html.twig");
    }
}
