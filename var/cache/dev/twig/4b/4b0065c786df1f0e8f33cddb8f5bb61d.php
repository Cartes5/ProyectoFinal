<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coches/show.html.twig */
class __TwigTemplate_2ad0efbd736d47cd443341ad18f04fcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coches/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coches/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coches/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coches";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("style");
        echo "
    <style>

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<div class=\"style-container\">
  <div id=\"style-checkout1\">
    <h1>Coches</h1>

        <form class=\"style-form\" action=\"submit\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Marca</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 28, $this->source); })()), "Marca", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Modelo</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 32, $this->source); })()), "Modelo", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 36, $this->source); })()), "Color", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Numero_Bastidor</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 40, $this->source); })()), "NumeroBastidor", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fecha_ITV</th>
                            <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 44, $this->source); })()), "FechaITV", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 44, $this->source); })()), "FechaITV", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fecha_Matriculacion</th>
                            <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 48, $this->source); })()), "FechaMatriculacion", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 48, $this->source); })()), "FechaMatriculacion", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Matricula</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 52, $this->source); })()), "Matricula", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        </tr>
                        
                    </tbody>
                </table>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coches_index");
        echo "\">Volver Lista</a>
                </button>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coches_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coch"]) || array_key_exists("coch", $context) ? $context["coch"] : (function () { throw new RuntimeError('Variable "coch" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">Editar</a>
                </button>
                ";
        // line 65
        echo twig_include($this->env, $context, "coches/_delete_form.html.twig");
        echo "
        </form>
    </div> 
</div>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coches/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 65,  215 => 63,  208 => 59,  198 => 52,  191 => 48,  184 => 44,  177 => 40,  170 => 36,  163 => 32,  156 => 28,  149 => 24,  138 => 15,  128 => 14,  110 => 12,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Coches{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('style') }}
    <style>

    </style>
{% endblock %}

{% block javascripts %}{% endblock %}

{% block body %}
<div class=\"style-container\">
  <div id=\"style-checkout1\">
    <h1>Coches</h1>

        <form class=\"style-form\" action=\"submit\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ coch.id }}</td>
                        </tr>
                        <tr>
                            <th>Marca</th>
                            <td>{{ coch.Marca }}</td>
                        </tr>
                        <tr>
                            <th>Modelo</th>
                            <td>{{ coch.Modelo }}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{ coch.Color }}</td>
                        </tr>
                        <tr>
                            <th>Numero_Bastidor</th>
                            <td>{{ coch.NumeroBastidor }}</td>
                        </tr>
                        <tr>
                            <th>Fecha_ITV</th>
                            <td>{{ coch.FechaITV ? coch.FechaITV|date('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Fecha_Matriculacion</th>
                            <td>{{ coch.FechaMatriculacion ? coch.FechaMatriculacion|date('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Matricula</th>
                            <td>{{ coch.Matricula }}</td>
                        </tr>
                        
                    </tbody>
                </table>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"{{ path('app_coches_index') }}\">Volver Lista</a>
                </button>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"{{ path('app_coches_edit', {'id': coch.id}) }}\">Editar</a>
                </button>
                {{ include('coches/_delete_form.html.twig') }}
        </form>
    </div> 
</div>

    
{% endblock %}", "coches/show.html.twig", "/var/www/html/ProyectoFinal/templates/coches/show.html.twig");
    }
}
