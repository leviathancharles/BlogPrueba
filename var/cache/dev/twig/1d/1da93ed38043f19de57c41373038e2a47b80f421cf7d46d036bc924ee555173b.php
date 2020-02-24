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

/* usuario/login.html.twig */
class __TwigTemplate_76690ae52648f11d70a2c47b16b9f7af95c8b738db632b1adcec8b2eb3eec5ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/login.html.twig", 1);
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

        echo "Ingreso de Usuario";
        
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
        echo "<div class=\"container\">
    <div class=\"form-group\">
        <div class = \"row\">
            <div class = \"col-md-12 \"><h1 class=\"display-3\">Iniciar Sesion</h1></div>
            <div class = \"col-md-12\">&nbsp;</div>
        </div>
             ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    Los Datos ingresados no son correctos.
                </div> 
            ";
        }
        // line 17
        echo "
          
        <div class=\"row\">    
            <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
               <div class=\"col-md-12\">
                    <label for=\"username\">Email</label>
                    <input type=\"email\" id=\"username\" name=\"_username\"  value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["ultimo_usuario"]) || array_key_exists("ultimo_usuario", $context) ? $context["ultimo_usuario"] : (function () { throw new RuntimeError('Variable "ultimo_usuario" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" required/>
               </div> 
               <div class=\"col-md-12\">
                    <label for=\"password\">Contraseña</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required  />
                </div>
                <div class=\"col-md-12\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >

                    <input type=\"submit\" value=\"Ingresar\" class=\"btn btn-success\" style ='margin-top:20px' />
                </div>
            </form>
        </div>
    </div>     
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  115 => 23,  109 => 20,  104 => 17,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ingreso de Usuario{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"form-group\">
        <div class = \"row\">
            <div class = \"col-md-12 \"><h1 class=\"display-3\">Iniciar Sesion</h1></div>
            <div class = \"col-md-12\">&nbsp;</div>
        </div>
             {% if error %}
                <div class=\"alert alert-success\" role=\"alert\">
                    Los Datos ingresados no son correctos.
                </div> 
            {% endif %}

          
        <div class=\"row\">    
            <form action=\"{{ path('login') }}\" method=\"post\">
               <div class=\"col-md-12\">
                    <label for=\"username\">Email</label>
                    <input type=\"email\" id=\"username\" name=\"_username\"  value=\"{{ ultimo_usuario }}\" class=\"form-control\" required/>
               </div> 
               <div class=\"col-md-12\">
                    <label for=\"password\">Contraseña</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required  />
                </div>
                <div class=\"col-md-12\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >

                    <input type=\"submit\" value=\"Ingresar\" class=\"btn btn-success\" style ='margin-top:20px' />
                </div>
            </form>
        </div>
    </div>     
</div>
{% endblock %}", "usuario/login.html.twig", "C:\\xampp\\htdocs\\symfony\\blog-symfony\\templates\\usuario\\login.html.twig");
    }
}
