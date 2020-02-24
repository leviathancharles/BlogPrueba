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

/* entrada/lista/listaentradas.html.twig */
class __TwigTemplate_b1fe7451ab77baa3360fb3e309cf3cade4c189cdcf2bbfa90b0a830945833f8d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrada/lista/listaentradas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrada/lista/listaentradas.html.twig"));

        // line 1
        if (0 <= twig_compare(twig_length_filter($this->env, (isset($context["entradas"]) || array_key_exists("entradas", $context) ? $context["entradas"] : (function () { throw new RuntimeError('Variable "entradas" does not exist.', 1, $this->source); })())), 1)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entradas"]) || array_key_exists("entradas", $context) ? $context["entradas"] : (function () { throw new RuntimeError('Variable "entradas" does not exist.', 2, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
                // line 3
                echo "    <div class=\"col-md-4\">
    <a href=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalle", ["id" => twig_get_attribute($this->env, $this->source, $context["entrada"], "id", [], "any", false, false, false, 4)]), "html", null, true);
                echo "\" class=\"btn \">
      <div class=\"card\" style=\"width: 18rem;\">
        <img src = \"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagenes/" . twig_get_attribute($this->env, $this->source, $context["entrada"], "imagen", [], "any", false, false, false, 6))), "html", null, true);
                echo "\" class=\"card-img-top\" />
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entrada"], "titulo", [], "any", false, false, false, 8), "html", null, true);
                echo "</h5>
          <p class=\"card-text\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entrada"], "contenido", [], "any", false, false, false, 9), "html", null, true);
                echo "</p>
           
          ";
                // line 11
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), null) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entrada"], "usuario", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)))) {
                    // line 12
                    echo "            <a href =\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar", ["id" => twig_get_attribute($this->env, $this->source, $context["entrada"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\" >Editar </a>
            <a href =\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["entrada"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                    echo "\" class=\"btn btn-danger\">Eliminar </a>
          ";
                }
                // line 14
                echo " 
        </div>
      </div>
     </a>   
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo " 
";
        } else {
            // line 21
            echo "        <strong>No hay post por el momento </strong>
";
        }
        // line 23
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entrada/lista/listaentradas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  99 => 21,  95 => 19,  84 => 14,  79 => 13,  74 => 12,  72 => 11,  67 => 9,  63 => 8,  58 => 6,  53 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if entradas|length  >= 1 %}
    {% for  entrada in entradas  %}
    <div class=\"col-md-4\">
    <a href=\"{{ path('detalle', {'id':entrada.id }) }}\" class=\"btn \">
      <div class=\"card\" style=\"width: 18rem;\">
        <img src = \"{{ asset('imagenes/'~ entrada.imagen) }}\" class=\"card-img-top\" />
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{ entrada.titulo }}</h5>
          <p class=\"card-text\">{{ entrada.contenido }}</p>
           
          {% if  app.user != null  and app.user.id == entrada.usuario.id  %}
            <a href =\"{{ path('editar', {'id':entrada.id }) }}\" class=\"btn btn-primary\" >Editar </a>
            <a href =\"{{ path('eliminar', {'id':entrada.id }) }}\" class=\"btn btn-danger\">Eliminar </a>
          {% endif %} 
        </div>
      </div>
     </a>   
    </div>
    {% endfor %} 
{% else %}
        <strong>No hay post por el momento </strong>
{% endif %}

", "entrada/lista/listaentradas.html.twig", "C:\\xampp\\htdocs\\symfony\\blog-symfony\\templates\\entrada\\lista\\listaentradas.html.twig");
    }
}
