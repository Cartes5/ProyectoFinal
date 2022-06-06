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

/* control/index.html.twig */
class __TwigTemplate_b33af97a9f488f4921fbf7e7191c3fd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "control/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "control/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "control/index.html.twig", 1);
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

        echo "Mantenimiento";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("control");
        echo "
    <style>

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<div class=\"mantenimiento-container\">
    <div id=\"mantenimiento-checkout\">
        <h1>Mantenimiento</h1>

        <form class=\"mantenimiento-form\" action=\"submit\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre_Taller</th>
                        <th>Numero_Factura</th>
                        <th>Precio_Factura</th>
                        <th>Multas</th>
                        <th>Numero_Facturas</th>
                        <th>Cantidad_Multas</th>
                        <th>Equipamiento</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["controls"]) || array_key_exists("controls", $context) ? $context["controls"] : (function () { throw new RuntimeError('Variable "controls" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["control"]) {
            // line 36
            echo "                    <tr>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NombreTaller", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NumeroFactura", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "PrecioFactura", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "Multas", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NumeroFacturas", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "CantidadMultas", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "Equipamiento", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>

                        <button id=\"mantenimiento-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_show", ["id" => twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Mostrar</a>
                        </button>
                        <button id=\"mantenimiento-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Editar</a>
                        </button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                    <tr>
                        <td colspan=\"9\">Resultados no encontrados</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
            </table>

            <button id=\"mantenimiento-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_new");
        echo "\">Crear Nuevo</a>
            </button>
        </form>
    </div>
    
</div

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "control/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 64,  210 => 60,  201 => 56,  191 => 51,  185 => 48,  178 => 44,  174 => 43,  170 => 42,  166 => 41,  162 => 40,  158 => 39,  154 => 38,  150 => 37,  147 => 36,  142 => 35,  119 => 14,  109 => 13,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mantenimiento{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('control') }}
    <style>

    </style>
{% endblock %}

{% block body %}
<div class=\"mantenimiento-container\">
    <div id=\"mantenimiento-checkout\">
        <h1>Mantenimiento</h1>

        <form class=\"mantenimiento-form\" action=\"submit\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre_Taller</th>
                        <th>Numero_Factura</th>
                        <th>Precio_Factura</th>
                        <th>Multas</th>
                        <th>Numero_Facturas</th>
                        <th>Cantidad_Multas</th>
                        <th>Equipamiento</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for control in controls %}
                    <tr>
                        <td>{{ control.id }}</td>
                        <td>{{ control.NombreTaller }}</td>
                        <td>{{ control.NumeroFactura }}</td>
                        <td>{{ control.PrecioFactura }}</td>
                        <td>{{ control.Multas }}</td>
                        <td>{{ control.NumeroFacturas }}</td>
                        <td>{{ control.CantidadMultas }}</td>
                        <td>{{ control.Equipamiento }}</td>
                        <td>

                        <button id=\"mantenimiento-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"{{ path('app_control_show', {'id': control.id}) }}\">Mostrar</a>
                        </button>
                        <button id=\"mantenimiento-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"{{ path('app_control_edit', {'id': control.id}) }}\">Editar</a>
                        </button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\">Resultados no encontrados</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <button id=\"mantenimiento-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_control_new') }}\">Crear Nuevo</a>
            </button>
        </form>
    </div>
    
</div

{% endblock %}", "control/index.html.twig", "/var/www/html/ProyectoFinal/templates/control/index.html.twig");
    }
}
