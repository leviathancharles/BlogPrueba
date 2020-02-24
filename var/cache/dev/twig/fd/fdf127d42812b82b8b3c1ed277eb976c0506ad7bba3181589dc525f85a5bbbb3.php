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

/* entrada/detalle.html.twig */
class __TwigTemplate_2a860067b24cda44535741eec0378a7a36d2a14330b245f1f3f4d867b08fa922 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrada/detalle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrada/detalle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entrada/detalle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Blogs Actuales";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\" style=\"width:50%\">
   <div class=\"jumbotron\"> 
     <div class = \"row\">
        <div class = \"col-md-12 \"><h2 class=\"display-3\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 10, $this->source); })()), "titulo", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2></div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class = \"col-md-4 \">
        </div>
        <div class = \"col-md-4\">
            <img src = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagenes/" . twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 15, $this->source); })()), "imagen", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" class=\"img-fluid\" />
        </div>
        <div class = \"col-md-4\"> 
        </div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class=\"col-md-12\">
            <p class=\"text-left\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 22, $this->source); })()), "contenido", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
        </div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class=\"col-md-6\">
            <strong>Autor: </strong><label> ";
        // line 26
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 26, $this->source); })()), "usuario", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 26, $this->source); })()), "usuario", [], "any", false, false, false, 26), "apellido", [], "any", false, false, false, 26)), "html", null, true);
        echo " </label> 
        </div>
        <div class=\"col-md-6\">
            <strong>Creado el: </strong><label> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrada"]) || array_key_exists("entrada", $context) ? $context["entrada"] : (function () { throw new RuntimeError('Variable "entrada" does not exist.', 29, $this->source); })()), "creacion", [], "any", false, false, false, 29), "d/m/Y h:i:s"), "html", null, true);
        echo "</label> 
        </div>
    
      </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "entrada/detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  119 => 26,  112 => 22,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blogs Actuales{% endblock %}

{% block body %}

<div class=\"container\" style=\"width:50%\">
   <div class=\"jumbotron\"> 
     <div class = \"row\">
        <div class = \"col-md-12 \"><h2 class=\"display-3\">{{ entrada.titulo }}</h2></div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class = \"col-md-4 \">
        </div>
        <div class = \"col-md-4\">
            <img src = \"{{ asset('imagenes/'~ entrada.imagen) }}\" class=\"img-fluid\" />
        </div>
        <div class = \"col-md-4\"> 
        </div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class=\"col-md-12\">
            <p class=\"text-left\">{{ entrada.contenido }}</p>
        </div>
        <div class = \"col-md-12\">&nbsp;</div>
        <div class=\"col-md-6\">
            <strong>Autor: </strong><label> {{ entrada.usuario.nombre ~ ' ' ~ entrada.usuario.apellido }} </label> 
        </div>
        <div class=\"col-md-6\">
            <strong>Creado el: </strong><label> {{ entrada.creacion|date('d/m/Y h:i:s')}}</label> 
        </div>
    
      </div>
    </div>
</div>
{% endblock %}

", "entrada/detalle.html.twig", "C:\\xampp\\htdocs\\symfony\\blog-symfony\\templates\\entrada\\detalle.html.twig");
    }
}
