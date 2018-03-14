<?php

/* user_form.html.twig */
class __TwigTemplate_449baad8ef154335ee01851fe11ea877ce1846ed118d4a6bbb7a31ed9758ecb1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user_form.html.twig", 1);
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
        echo "    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 13, $this->source); })()), "password", array()), 'errors')) {
            // line 14
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 15, $this->source); })()), "password", array()), 'errors');
            echo "
        </div>
    ";
        }
        // line 18
        echo "
    <div class=\"well\">
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 20, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 22, $this->source); })()), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 24
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 26, $this->source); })()), "username", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 27, $this->source); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 29
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 33, $this->source); })()), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 35
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 37, $this->source); })()), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 39
        echo "
            </div>
        </div>
            <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 43, $this->source); })()), "roles", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")));
        // line 45
        echo "
            <div class=\"col-sm-2\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 47, $this->source); })()), "roles", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 48, $this->source); })()), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 50
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-5 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new Twig_Error_Runtime('Variable "userForm" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "user_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  131 => 50,  129 => 48,  125 => 47,  121 => 45,  119 => 43,  113 => 39,  111 => 37,  107 => 35,  105 => 33,  99 => 29,  97 => 27,  93 => 26,  89 => 24,  87 => 22,  82 => 20,  78 => 18,  72 => 15,  69 => 14,  66 => 13,  57 => 10,  54 => 9,  50 => 8,  45 => 7,  42 => 6,  36 => 4,  32 => 1,  30 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% set adminMenu = true %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% if form_errors(userForm.password) %}
        <div class=\"alert alert-danger\">
            {{ form_errors(userForm.password) }}
        </div>
    {% endif %}

    <div class=\"well\">
        {{ form_start(userForm, { 'attr': {'class': 'form-horizontal'} }) }}
        <div class=\"form-group\">
            {{ form_label(userForm.username, null, { 'label_attr':  {
                'class': 'col-sm-5 control-label'
            }}) }}
            <div class=\"col-sm-4\">
                {{ form_errors(userForm.username) }}
                {{ form_widget(userForm.username, { 'attr':  {
                    'class': 'form-control'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(userForm.password, null, { 'label_attr':  {
                'class': 'col-sm-5 control-label'
            }}) }}
            <div class=\"col-sm-4\">
                {{ form_widget(userForm.password, { 'attr':  {
                    'class': 'form-control'
                }}) }}
            </div>
        </div>
            <div class=\"form-group\">
            {{ form_label(userForm.roles, null, { 'label_attr':  {
                'class': 'col-sm-5 control-label'
            }}) }}
            <div class=\"col-sm-2\">
                {{ form_errors(userForm.roles) }}
                {{ form_widget(userForm.roles, { 'attr':  {
                    'class': 'form-control'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-5 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        {{ form_end(userForm) }}
    </div>
{% endblock %}
", "user_form.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\user_form.html.twig");
    }
}
