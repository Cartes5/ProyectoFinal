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

/* control/show.html.twig */
class __TwigTemplate_e8c10d0f3a704b2d4a6103e30df86c50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "control/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "control/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "control/show.html.twig", 1);
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

        echo "Control";
        
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"style-container\">
    <div id=\"style-checkout1\">
        <h1>Mantenimiento</h1>

        <form class=\"style-form\" action=\"submit\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nombre_Taller</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 26, $this->source); })()), "NombreTaller", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numero_Factura</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 30, $this->source); })()), "NumeroFactura", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Precio_Factura</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 34, $this->source); })()), "PrecioFactura", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Multas</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 38, $this->source); })()), "Multas", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numero_Facturas</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 42, $this->source); })()), "NumeroFacturas", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cantidad_Multas</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 46, $this->source); })()), "CantidadMultas", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Equipamiento</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 50, $this->source); })()), "Equipamiento", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_index");
        echo "\">Volver Lista</a>
            </button>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["control"]) || array_key_exists("control", $context) ? $context["control"] : (function () { throw new RuntimeError('Variable "control" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">Editar</a>
            </button>
            ";
        // line 61
        echo twig_include($this->env, $context, "control/_delete_form.html.twig");
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
        return "control/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 61,  194 => 59,  187 => 55,  179 => 50,  172 => 46,  165 => 42,  158 => 38,  151 => 34,  144 => 30,  137 => 26,  130 => 22,  119 => 13,  109 => 12,  94 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Control{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('style') }}
    <style>
    
    </style>
{% endblock %}

{% block body %}
<div class=\"style-container\">
    <div id=\"style-checkout1\">
        <h1>Mantenimiento</h1>

        <form class=\"style-form\" action=\"submit\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ control.id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre_Taller</th>
                        <td>{{ control.NombreTaller }}</td>
                    </tr>
                    <tr>
                        <th>Numero_Factura</th>
                        <td>{{ control.NumeroFactura }}</td>
                    </tr>
                    <tr>
                        <th>Precio_Factura</th>
                        <td>{{ control.PrecioFactura }}</td>
                    </tr>
                    <tr>
                        <th>Multas</th>
                        <td>{{ control.Multas }}</td>
                    </tr>
                    <tr>
                        <th>Numero_Facturas</th>
                        <td>{{ control.NumeroFacturas }}</td>
                    </tr>
                    <tr>
                        <th>Cantidad_Multas</th>
                        <td>{{ control.CantidadMultas }}</td>
                    </tr>
                    <tr>
                        <th>Equipamiento</th>
                        <td>{{ control.Equipamiento }}</td>
                    </tr>
                </tbody>
            </table>
            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_control_index') }}\">Volver Lista</a>
            </button>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_control_edit', {'id': control.id}) }}\">Editar</a>
            </button>
            {{ include('control/_delete_form.html.twig') }}
        </form>
    </div>
</div>

        
{% endblock %}", "control/show.html.twig", "/var/www/html/ProyectoFinal/templates/control/show.html.twig");
    }
}
