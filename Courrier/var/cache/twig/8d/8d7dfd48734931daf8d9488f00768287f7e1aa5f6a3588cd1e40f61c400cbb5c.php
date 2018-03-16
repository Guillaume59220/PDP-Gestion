<?php

/* layout.html.twig */
class __TwigTemplate_2528f329430790a5ca2d1d967578a222f96a4103e54a96b95082bde96fe7145e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font.awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <a href=\"http://www.pdpgestion.com/\" target=\"_blank\"><img class= \"img-responsive pull-left\" src= \"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-pdp-nord-59.png"), "html", null, true);
        echo "\" alt=\"logo PDP\"/></a>
                    </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                        <li class=\"";
            if (array_key_exists("adminMenu", $context)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    ";
        }
        // line 24
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EVENT_CREATE")) {
            // line 25
            echo "                    ";
        }
        // line 26
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 27
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"glyphicon glyphicon-user\"></span> Welcome, ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Déconnexion</a></li>
                    </ul>
                    </li>
                    ";
        }
        // line 35
        echo "                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <div id=\"content\">";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    <footer class=\"footer\">

    </footer>
</div>

<!-- jQuery -->
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 39
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
        return array (  133 => 39,  128 => 10,  120 => 48,  115 => 46,  105 => 39,  99 => 35,  92 => 31,  87 => 29,  83 => 27,  80 => 26,  77 => 25,  74 => 24,  64 => 22,  62 => 21,  56 => 18,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/font.awesome/css/font-awesome.min.css') }}\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <title>{% block title %}{% endblock %}</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <a href=\"http://www.pdpgestion.com/\" target=\"_blank\"><img class= \"img-responsive pull-left\" src= \"{{asset('images/logo-pdp-nord-59.png')}}\" alt=\"logo PDP\"/></a>
                    </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"{% if adminMenu is defined %}active{% endif %}\"><a href=\"{{ path('admin') }}\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_EVENT_CREATE') %}
                    {% endif %}
                    {% if is_granted('ROLE_USER') %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"glyphicon glyphicon-user\"></span> Welcome, {{ app.user.username }} <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('admin_logout') }}\"><span class=\"glyphicon glyphicon-off\"></span> Déconnexion</a></li>
                    </ul>
                    </li>
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
<script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
</body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\layout.html.twig");
    }
}
