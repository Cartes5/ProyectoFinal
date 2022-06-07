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

/* menuheader.html.twig */
class __TwigTemplate_62d924b705640def5d5047e304428203 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuheader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuheader.html.twig"));

        // line 1
        echo "<div>
<nav role=\"navigation\">
  <div id=\"menuToggle\">
  
    <!--Se utiliza una casilla de verificación falsa/oculta como receptor de clics,
    para que pueda usar el selector.--> 

    <input type=\"checkbox\" />
    

    <span></span>
    <span></span>
    <span></span>
    
    <!--Menu tiene que estar dentro del boton-->

   
    
    <ul id=\"menu\">
      <a href=\"/home\"><li>INICIO</li></a>
      <a href=\"/empleados\"><li>EMPLEADOS</li></a>
      <a href=\"/coches\"><li>VEHICULOS</li></a>
      <a href=\"/control\"><li>MANTENIMIENTO</li></a>
      <a href=\"/incidencias\"><li>INCIDENCIAS</li></a>
    </ul>
    
    
  </div>
  
</nav>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menuheader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
<nav role=\"navigation\">
  <div id=\"menuToggle\">
  
    <!--Se utiliza una casilla de verificación falsa/oculta como receptor de clics,
    para que pueda usar el selector.--> 

    <input type=\"checkbox\" />
    

    <span></span>
    <span></span>
    <span></span>
    
    <!--Menu tiene que estar dentro del boton-->

   
    
    <ul id=\"menu\">
      <a href=\"/home\"><li>INICIO</li></a>
      <a href=\"/empleados\"><li>EMPLEADOS</li></a>
      <a href=\"/coches\"><li>VEHICULOS</li></a>
      <a href=\"/control\"><li>MANTENIMIENTO</li></a>
      <a href=\"/incidencias\"><li>INCIDENCIAS</li></a>
    </ul>
    
    
  </div>
  
</nav>
</div>", "menuheader.html.twig", "/var/www/html/ProyectoFinal/templates/menuheader.html.twig");
    }
}
