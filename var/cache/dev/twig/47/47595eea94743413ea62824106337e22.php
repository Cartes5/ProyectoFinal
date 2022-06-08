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

/* incidencias/show.html.twig */
class __TwigTemplate_28d41cdfab0c074b302e35aeba3acd70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incidencias/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incidencias/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "incidencias/show.html.twig", 1);
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

        echo "Incidencia";
        
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
        <h1>Incidencia</h1>

        <form class=\"style-form\" action=\"submit\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 28, $this->source); })()), "Nombre", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 32, $this->source); })()), "Apellidos", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Departamento</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 36, $this->source); })()), "Departamento", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Descripcion</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 40, $this->source); })()), "Descripcion", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_incidencias_index");
        echo "\">Volver Lista</a>
                </button>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_incidencias_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["incidencium"]) || array_key_exists("incidencium", $context) ? $context["incidencium"] : (function () { throw new RuntimeError('Variable "incidencium" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">Editar</a>
                </button>

                ";
        // line 53
        echo twig_include($this->env, $context, "incidencias/_delete_form.html.twig");
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
        return "incidencias/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 53,  193 => 50,  186 => 46,  177 => 40,  170 => 36,  163 => 32,  156 => 28,  149 => 24,  138 => 15,  128 => 14,  110 => 12,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Incidencia{% endblock %}
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
        <h1>Incidencia</h1>

        <form class=\"style-form\" action=\"submit\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ incidencium.id }}</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>{{ incidencium.Nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td>{{ incidencium.Apellidos }}</td>
                        </tr>
                        <tr>
                            <th>Departamento</th>
                            <td>{{ incidencium.Departamento }}</td>
                        </tr>
                        <tr>
                            <th>Descripcion</th>
                            <td>{{ incidencium.Descripcion }}</td>
                        </tr>
                    </tbody>
                </table>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"{{ path('app_incidencias_index') }}\">Volver Lista</a>
                </button>

                <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                    <a href=\"{{ path('app_incidencias_edit', {'id': incidencium.id}) }}\">Editar</a>
                </button>

                {{ include('incidencias/_delete_form.html.twig') }}
        </form>
    </div> 
</div>
{% endblock %}
", "incidencias/show.html.twig", "/var/www/html/ProyectoFinal/templates/incidencias/show.html.twig");
    }
}
