<?php

/* courrier_form.html.twig */
class __TwigTemplate_42095493dbfd4340f939dccf1a48afcc69bf300b11a08f8843e8f2a39ef7cf3b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courrier_form.html.twig", 1);
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
        echo "
    <div class=\"well\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 15, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 17, $this->source); })()), "date_entre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 19
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 21, $this->source); })()), "date_entre", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 22, $this->source); })()), "date_entre", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 24
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 28, $this->source); })()), "annotation", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 30
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 32, $this->source); })()), "annotation", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 33, $this->source); })()), "annotation", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "8")));
        // line 36
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 40, $this->source); })()), "id_type_courrier", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 42
        echo "
            <div class = \"col-sm-6\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 44, $this->source); })()), "id_type_courrier", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 45, $this->source); })()), "id_type_courrier", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 47
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 52, $this->source); })()), "id_client", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 54
        echo "
            <div class = \"col-sm-6\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 56, $this->source); })()), "id_client", array()), 'errors');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 57, $this->source); })()), "id_client", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 59
        echo "
            </div>

        </div>

        <div class=\"form-group\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 65, $this->source); })()), "scan", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 67
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 69, $this->source); })()), "scan", array()), 'errors');
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 70, $this->source); })()), "scan", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 73
        echo "
            </div>
        </div>


        <div class=\"form-group\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 79, $this->source); })()), "fax", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 81
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 83, $this->source); })()), "fax", array()), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 84, $this->source); })()), "fax", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 87
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 92, $this->source); })()), "date_sortie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")));
        // line 94
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 96, $this->source); })()), "date_sortie", array()), 'errors');
        echo "
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 97, $this->source); })()), "date_sortie", array()), 'widget', array("attr" => array("class" => "col-sm-4 control-label")));
        // line 100
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["courrierForm"]) || array_key_exists("courrierForm", $context) ? $context["courrierForm"] : (function () { throw new Twig_Error_Runtime('Variable "courrierForm" does not exist.', 109, $this->source); })()), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "courrier_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 109,  201 => 100,  199 => 97,  195 => 96,  191 => 94,  189 => 92,  182 => 87,  180 => 84,  176 => 83,  172 => 81,  170 => 79,  162 => 73,  160 => 70,  156 => 69,  152 => 67,  150 => 65,  142 => 59,  140 => 57,  136 => 56,  132 => 54,  130 => 52,  123 => 47,  121 => 45,  117 => 44,  113 => 42,  111 => 40,  105 => 36,  103 => 33,  99 => 32,  95 => 30,  93 => 28,  87 => 24,  85 => 22,  81 => 21,  77 => 19,  75 => 17,  70 => 15,  66 => 13,  57 => 10,  54 => 9,  50 => 8,  45 => 7,  42 => 6,  36 => 4,  32 => 1,  30 => 2,  15 => 1,);
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

    <div class=\"well\">
        {{ form_start(courrierForm, { 'attr': {'class': 'form-horizontal'} }) }}
        <div class=\"form-group\">
            {{ form_label(courrierForm.date_entre, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(courrierForm.date_entre) }}
                {{ form_widget(courrierForm.date_entre, { 'attr':  {
                    'class': 'form-control'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(courrierForm.annotation, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(courrierForm.annotation) }}
                {{ form_widget(courrierForm.annotation, { 'attr':  {
                    'class': 'form-control',
                    'rows': '8'
                }}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(courrierForm.id_type_courrier, null , {'label_attr':   {
                'class': 'col-sm-4 control-label'
            }} ) }}
            <div class = \"col-sm-6\">
                {{ form_errors(courrierForm.id_type_courrier) }}
                {{ form_widget(courrierForm.id_type_courrier, { 'attr':  {
                    'class': 'col-sm-4 control-label'
                }}) }}
            </div>

        </div>
        <div class=\"form-group\">
            {{ form_label(courrierForm.id_client, null , {'label_attr':   {
                'class': 'col-sm-4 control-label'
            }} ) }}
            <div class = \"col-sm-6\">
                {{ form_errors(courrierForm.id_client) }}
                {{ form_widget(courrierForm.id_client, { 'attr':  {
                    'class': 'col-sm-4 control-label'
                }}) }}
            </div>

        </div>

        <div class=\"form-group\">
            {{ form_label(courrierForm.scan, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(courrierForm.scan) }}
                {{ form_widget(courrierForm.scan, { 'attr':  {
                    'class': 'col-sm-4 control-label'

                }}) }}
            </div>
        </div>


        <div class=\"form-group\">
            {{ form_label(courrierForm.fax, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(courrierForm.fax) }}
                {{ form_widget(courrierForm.fax, { 'attr':  {
                    'class': 'col-sm-4 control-label'

                }}) }}
            </div>
        </div>

        <div class=\"form-group\">
            {{ form_label(courrierForm.date_sortie, null, { 'label_attr':  {
                'class': 'col-sm-4 control-label'
            }}) }}
            <div class=\"col-sm-6\">
                {{ form_errors(courrierForm.date_sortie) }}
                {{ form_widget(courrierForm.date_sortie, { 'attr':  {
                    'class': 'col-sm-4 control-label'

                }}) }}
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        {{ form_end(courrierForm) }}
    </div>
{% endblock %}
", "courrier_form.html.twig", "C:\\xampp\\htdocs\\PDP-Gestion\\Courrier\\views\\courrier_form.html.twig");
    }
}
