<?php

/* error.html.twig */
class __TwigTemplate_369feba2667f5c77a4fe7e5fa8d5dee7307f7970d54007ece05f5f609c8ac678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "error.html.twig", 1);
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
        echo "Error!";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\" id=\"errorPanel\">
        <div class=\"col-xs-5\">
            <img class=\"img-responsive pull-right\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/404-ghost.png"), "html", null, true);
        echo "\" alt=\"Error ghost\"/>
        </div>
        <div class=\"col-xs-6\">
            <h1>Whoops...<br><small>";
        // line 11
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</small></h1>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\error.html.twig");
    }
}
