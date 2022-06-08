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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("style");
        echo "
    <style>

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
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

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<div class=\"style-container\">
    <div id=\"style-checkout1\">
        <h1>Mantenimiento</h1>

        <form class=\"style-form\" action=\"submit\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre_Taller</th>
                        <th>Numero_Factura</th>
                        <th>Precio_Factura</th>
                        <th>Multas</th>
                        <th>Numero_Multas</th>
                        <th>Cantidad_Multas</th>
                        <th>Equipamiento</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["controls"]) || array_key_exists("controls", $context) ? $context["controls"] : (function () { throw new RuntimeError('Variable "controls" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["control"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NombreTaller", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NumeroFactura", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "PrecioFactura", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "Multas", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "NumeroMultas", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "CantidadMultas", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["control"], "Equipamiento", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>

                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_show", ["id" => twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Mostrar</a>
                        </button>
                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_control_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["control"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Editar</a>
                        </button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                    <tr>
                        <td colspan=\"9\">Resultados no encontrados</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 65
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
        return array (  234 => 65,  228 => 61,  219 => 57,  209 => 52,  203 => 49,  196 => 45,  192 => 44,  188 => 43,  184 => 42,  180 => 41,  176 => 40,  172 => 39,  168 => 38,  165 => 37,  160 => 36,  138 => 16,  128 => 15,  110 => 13,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mantenimiento{% endblock %}

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
        <h1>Mantenimiento</h1>

        <form class=\"style-form\" action=\"submit\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre_Taller</th>
                        <th>Numero_Factura</th>
                        <th>Precio_Factura</th>
                        <th>Multas</th>
                        <th>Numero_Multas</th>
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
                        <td>{{ control.NumeroMultas }}</td>
                        <td>{{ control.CantidadMultas }}</td>
                        <td>{{ control.Equipamiento }}</td>
                        <td>

                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"{{ path('app_control_show', {'id': control.id}) }}\">Mostrar</a>
                        </button>
                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
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

            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_control_new') }}\">Crear Nuevo</a>
            </button>
        </form>
    </div>
    
</div

{% endblock %}", "control/index.html.twig", "/var/www/html/ProyectoFinal/templates/control/index.html.twig");
    }
}
