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

/* main/index.html.twig */
class __TwigTemplate_648a3f7bdd5d50cc8eaa34ff954247a1901bef22f244a0ca3fb49f6fed1a242c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
        <h1> Simulador NUPTIC-43</h1>
        <a class=\"btn btn-info simulation\" >Start Simulation</a>
</div>


<div class=\"simulation-result\">
          result
 </div>

 <script>
 \$(document).ready(function () {

   \$( \".simulation\" ).on( \"click\", function(e) {

         e.preventDefault();

         var \$link = \$(e.currentTarget);

         \$.ajax({
          method:\"POST\",
          url: 'simulation_start',
          data: {
            nombre_simulador: \"nuptic-43\"
          },
          dataType: \"json\",

          success:function(data) {
            if(data) {  
              console.log(\"hi\")
              \$('.simulation-result').html(\" Suma del recorrido: \"+data);
            }
          }
        });
       });
     });
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
        <h1> Simulador NUPTIC-43</h1>
        <a class=\"btn btn-info simulation\" >Start Simulation</a>
</div>


<div class=\"simulation-result\">
          result
 </div>

 <script>
 \$(document).ready(function () {

   \$( \".simulation\" ).on( \"click\", function(e) {

         e.preventDefault();

         var \$link = \$(e.currentTarget);

         \$.ajax({
          method:\"POST\",
          url: 'simulation_start',
          data: {
            nombre_simulador: \"nuptic-43\"
          },
          dataType: \"json\",

          success:function(data) {
            if(data) {  
              console.log(\"hi\")
              \$('.simulation-result').html(\" Suma del recorrido: \"+data);
            }
          }
        });
       });
     });
</script>


{% endblock %}
", "main/index.html.twig", "/var/www/symfony_docker/templates/main/index.html.twig");
    }
}
