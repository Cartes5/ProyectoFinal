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

/* empleados/show.html.twig */
class __TwigTemplate_9e838888ba12d786d21adf7353bb1b2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleados/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleados/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "empleados/show.html.twig", 1);
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

        echo "Empleados";
        
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
    <h1>Empleados</h1>

    <form class=\"style-form\" action=\"submit\">

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 29, $this->source); })()), "Nombre", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Apellidos</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 33, $this->source); })()), "Apellidos", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 37, $this->source); })()), "Email", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 41, $this->source); })()), "Telefono", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Direccion</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 45, $this->source); })()), "Direccion", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Codigo_Postal</th>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 49, $this->source); })()), "CodigoPostal", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha_Nacimiento</th>
                        <td>";
        // line 53
        ((twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 53, $this->source); })()), "FechaNacimiento", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 53, $this->source); })()), "FechaNacimiento", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>NIF</th>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 57, $this->source); })()), "NIF", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Localidad</th>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 61, $this->source); })()), "Localidad", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empleados_index");
        echo "\">Volver Lista</a>
            </button>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empleados_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["empleado"]) || array_key_exists("empleado", $context) ? $context["empleado"] : (function () { throw new RuntimeError('Variable "empleado" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\">Editar</a>
            </button>
            ";
        // line 73
        echo twig_include($this->env, $context, "empleados/_delete_form.html.twig");
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
        return "empleados/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 73,  229 => 71,  222 => 67,  213 => 61,  206 => 57,  199 => 53,  192 => 49,  185 => 45,  178 => 41,  171 => 37,  164 => 33,  157 => 29,  150 => 25,  138 => 15,  128 => 14,  110 => 12,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Empleados{% endblock %}
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
    <h1>Empleados</h1>

    <form class=\"style-form\" action=\"submit\">

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ empleado.id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ empleado.Nombre }}</td>
                    </tr>
                    <tr>
                        <th>Apellidos</th>
                        <td>{{ empleado.Apellidos }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ empleado.Email }}</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td>{{ empleado.Telefono }}</td>
                    </tr>
                    <tr>
                        <th>Direccion</th>
                        <td>{{ empleado.Direccion }}</td>
                    </tr>
                    <tr>
                        <th>Codigo_Postal</th>
                        <td>{{ empleado.CodigoPostal }}</td>
                    </tr>
                    <tr>
                        <th>Fecha_Nacimiento</th>
                        <td>{{ empleado.FechaNacimiento ? empleado.FechaNacimiento|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>NIF</th>
                        <td>{{ empleado.NIF }}</td>
                    </tr>
                    <tr>
                        <th>Localidad</th>
                        <td>{{ empleado.Localidad }}</td>
                    </tr>
                </tbody>
            </table>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_empleados_index') }}\">Volver Lista</a>
            </button>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_empleados_edit', {'id': empleado.id}) }}\">Editar</a>
            </button>
            {{ include('empleados/_delete_form.html.twig') }}
        </form>
    </div>
    
</div>
    
{% endblock %}", "empleados/show.html.twig", "/var/www/html/ProyectoFinal/templates/empleados/show.html.twig");
    }
}
