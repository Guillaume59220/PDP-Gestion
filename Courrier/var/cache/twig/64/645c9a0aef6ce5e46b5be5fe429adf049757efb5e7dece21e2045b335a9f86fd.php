<?php

/* layout.html.twig */
class __TwigTemplate_cbc79e638fb53e03ea4b59d701051eda660e0ed4fcfccccf59daade4044cb0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/font.awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>Courrier - ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "                        <li class=\"";
            if (array_key_exists("adminMenu", $context)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    ";
        }
        // line 21
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"fas fa-user\"></span> Welcome, ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                            </ul>
                        </li>
                    ";
        } else {
            // line 29
            echo "
                    ";
        }
        // line 31
        echo "                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <div id=\"content\">";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    <footer class=\"footer\">

    </footer>
</div>

<!-- jQuery -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  112 => 10,  104 => 44,  99 => 42,  89 => 35,  83 => 31,  79 => 29,  71 => 24,  67 => 22,  64 => 21,  54 => 19,  52 => 18,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/lib/font.awesome/css/font-awesome.min.css') }}\">
    <link href=\"{{ asset('/css/style.css') }}\" rel=\"stylesheet\">
    <title>Courrier - {% block title %}{% endblock %}</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"{% if adminMenu is defined %}active{% endif %}\"><a href=\"{{ path('admin') }}\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    {% endif %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"fas fa-user\"></span> Welcome, {{ app.user.username }} <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                            </ul>
                        </li>
                    {% else %}

                    {% endif %}
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <div id=\"content\">{% block content %}{% endblock %}</div>
    <footer class=\"footer\">

    </footer>
</div>

<!-- jQuery -->
<script src=\"{{ asset('/lib/jquery/jquery.min.js') }}\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"{{ asset('/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
</body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\layout.html.twig");
    }
}
