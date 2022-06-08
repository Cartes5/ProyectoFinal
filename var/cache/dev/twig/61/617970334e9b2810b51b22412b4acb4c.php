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

/* empleados/index.html.twig */
class __TwigTemplate_019dbcd6ec5b2741687a82bd51f9b2bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleados/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleados/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "empleados/index.html.twig", 1);
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
        <h1>Empleados</h1>

        <form class=\"style-form\" action=\"submit\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Codigo Postal</th>
                        <th>Fecha Nacimiento</th>
                        <th>NIF</th>
                        <th>Localidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) || array_key_exists("empleados", $context) ? $context["empleados"] : (function () { throw new RuntimeError('Variable "empleados" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 39
            echo "                    <tr>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Apellidos", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Email", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Telefono", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Direccion", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "CodigoPostal", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["empleado"], "FechaNacimiento", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "FechaNacimiento", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "NIF", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "Localidad", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empleados_show", ["id" => twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Mostrar</a>
                        </button>

                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empleados_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Editar</a>
                        </button>
                    
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"11\">No se encontraron resultados</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empleados_new");
        echo "\">Crear Nuevo</a>
            </button>
        </form>


    </div>
    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "empleados/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 67,  237 => 64,  228 => 60,  218 => 55,  211 => 51,  206 => 49,  202 => 48,  198 => 47,  194 => 46,  190 => 45,  186 => 44,  182 => 43,  178 => 42,  174 => 41,  170 => 40,  167 => 39,  162 => 38,  138 => 16,  128 => 15,  110 => 13,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Codigo Postal</th>
                        <th>Fecha Nacimiento</th>
                        <th>NIF</th>
                        <th>Localidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {% for empleado in empleados %}
                    <tr>
                        <td>{{ empleado.id }}</td>
                        <td>{{ empleado.Nombre }}</td>
                        <td>{{ empleado.Apellidos }}</td>
                        <td>{{ empleado.Email }}</td>
                        <td>{{ empleado.Telefono }}</td>
                        <td>{{ empleado.Direccion }}</td>
                        <td>{{ empleado.CodigoPostal }}</td>
                        <td>{{ empleado.FechaNacimiento ? empleado.FechaNacimiento|date('Y-m-d') : '' }}</td>
                        <td>{{ empleado.NIF }}</td>
                        <td>{{ empleado.Localidad }}</td>
                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"{{ path('app_empleados_show', {'id': empleado.id}) }}\">Mostrar</a>
                        </button>

                        <button id=\"style-buttonindex\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                            <a href=\"{{ path('app_empleados_edit', {'id': empleado.id}) }}\">Editar</a>
                        </button>
                    
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"11\">No se encontraron resultados</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <button id=\"style-button\" class=\"btn btn-block btn-success submit-button\" type=\"submit\">
                <a href=\"{{ path('app_empleados_new') }}\">Crear Nuevo</a>
            </button>
        </form>


    </div>
    
</div>
{% endblock %}", "empleados/index.html.twig", "/var/www/html/ProyectoFinal/templates/empleados/index.html.twig");
    }
}
