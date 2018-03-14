<?php

/* client_form.html.twig */
class __TwigTemplate_e0000fa900e660c3b05bcdf19b82a7dfb2e392c958cffc210526105be24794d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "client_form.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
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
        echo "
    <div class=\"well\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 15, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 17, $this->source); })()), "code_client", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 19
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 21, $this->source); })()), "code_client", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 22, $this->source); })()), "code_client", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 24
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 28, $this->source); })()), "nom_client", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 30
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 32, $this->source); })()), "nom_client", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 33, $this->source); })()), "nom_client", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "8")));
        // line 36
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 40, $this->source); })()), "date_contract", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 42
        echo "
            <div class = \"col-sm-6\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 44, $this->source); })()), "date_contract", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 45, $this->source); })()), "date_contract", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 47
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 52, $this->source); })()), "siren", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 54
        echo "
            <div class = \"col-sm-6\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 56, $this->source); })()), "siren", array()), 'errors');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 57, $this->source); })()), "siren", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 59
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 64, $this->source); })()), "capital", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 66
        echo "
            <div class = \"col-sm-6\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 68, $this->source); })()), "capital", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 69, $this->source); })()), "capital", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 71
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new Twig_Error_Runtime('Variable "clientForm" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "client_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 80,  158 => 71,  156 => 69,  152 => 68,  148 => 66,  146 => 64,  139 => 59,  137 => 57,  133 => 56,  129 => 54,  127 => 52,  120 => 47,  118 => 45,  114 => 44,  110 => 42,  108 => 40,  102 => 36,  100 => 33,  96 => 32,  92 => 30,  90 => 28,  84 => 24,  82 => 22,  78 => 21,  74 => 19,  72 => 17,  67 => 15,  63 => 13,  54 => 10,  51 => 9,  47 => 8,  42 => 7,  39 => 6,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{#{% set adminMenu = true %}#}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"well\">
        {{ form_start(clientForm, { 'attr': {'class': 'form-horizontal'} }) }}
        <div class=\"form-group\">
            {{ form_label(clientForm.code_client, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(clientForm.code_client) }}
                {{ form_widget(clientForm.code_client, { 'attr':  {
                    'class': 'form-control'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(clientForm.nom_client, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(clientForm.nom_client) }}
                {{ form_widget(clientForm.nom_client, { 'attr':  {
                    'class': 'form-control',
                    'rows': '8'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(clientForm.date_contract, null , {'label_attr':   {
                'class': 'col-sm-4 control-label'
            }} ) }}
            <div class = \"col-sm-6\">
                {{ form_errors(clientForm.date_contract) }}
                {{ form_widget(clientForm.date_contract, { 'attr':  {
                    'class': 'col-sm-4 control-label'
                }}) }}
            </div>

        </div>
        <div class=\"form-group\">
            {{ form_label(clientForm.siren, null , {'label_attr':   {
                'class': 'col-sm-4 control-label'
            }} ) }}
            <div class = \"col-sm-6\">
                {{ form_errors(clientForm.siren) }}
                {{ form_widget(clientForm.siren, { 'attr':  {
                    'class': 'col-sm-4 control-label'
                }}) }}
            </div>

        </div>
        <div class=\"form-group\">
            {{ form_label(clientForm.capital, null , {'label_attr':   {
                'class': 'col-sm-4 control-label'
            }} ) }}
            <div class = \"col-sm-6\">
                {{ form_errors(clientForm.capital) }}
                {{ form_widget(clientForm.capital, { 'attr':  {
                    'class': 'col-sm-4 control-label'
                }}) }}
            </div>

        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        {{ form_end(clientForm) }}
    </div>
{% endblock %}
", "client_form.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\client_form.html.twig");
    }
}
