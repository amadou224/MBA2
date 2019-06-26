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

/* royalpalace/reservationAllerRetourRoyalPalace.html.twig */
class __TwigTemplate_849dc18f2faa0d5e68e711dcd2a285c16356a081be200d6ffd496754e0af075c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "royalpalace/reservationAllerRetourRoyalPalace.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "royalpalace/reservationAllerRetourRoyalPalace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "royalpalace/reservationAllerRetourRoyalPalace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"stylesheets/base.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/logo_royal_palace.jpg\">
    </div>
        <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Vos informations sont elles excates ?</h1>
        <hr class=\"py-3\">
<div style=\"text-align:center\">
                <h5><strong>Lieu de départ:</strong>&nbsp";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 26, $this->source); })()), "depart", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Destination:</strong>&nbsp";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 27, $this->source); })()), "destination", []), "html", null, true);
        echo "</h5></br>       
                <h5><strong>E-mail:</strong>&nbsp";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 28, $this->source); })()), "email", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Téléphone:</strong>&nbsp";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 29, $this->source); })()), "telephone", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Nombre de passagers Aller:</strong>&nbsp";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 30, $this->source); })()), "nbrePassagerAller", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Nombre de passagers Rétour:</strong>&nbsp";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 31, $this->source); })()), "nbrePassagerRetour", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Date de départ:</strong>&nbsp";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 32, $this->source); })()), "dateDepart", []), "d/m/Y"), "html", null, true);
        echo "</h5></br>
                <h5><strong>Date de rétour:</strong>&nbsp";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 33, $this->source); })()), "dateRetour", []), "d/m/Y"), "html", null, true);
        echo "</h5></br>
                <h5><strong>Heure de départ:</strong>&nbsp";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 34, $this->source); })()), "horaireDepart", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Heure de rétour:</strong>&nbsp";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 35, $this->source); })()), "horaireRetour", []), "html", null, true);
        echo "</h5></br>  

                ";
        // line 37
        if (((twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 37, $this->source); })()), "nbrePassagerAller", []) <= 4) && (twig_get_attribute($this->env, $this->source, (isset($context["royalpalace"]) || array_key_exists("royalpalace", $context) ? $context["royalpalace"] : (function () { throw new RuntimeError('Variable "royalpalace" does not exist.', 37, $this->source); })()), "nbrePassagerRetour", []) <= 4))) {
            // line 38
            echo "                <h5><strong>Prix:</strong>&nbsp 160€</h5></br>
                ";
        } else {
            // line 39
            echo " 
                <h5><strong>Prix:</strong>&nbsp 300€</h5></br>
                ";
        }
        // line 42
        echo "          </div>
            <center>
                <a href=\"reservationEffectuee?name=confir\" class=\"btn btn-yellow\"  type=\"submit\">Confirmer la réservation</a>                              
                <a href=\"royalpalacereservation?name=retour\" class=\"btn btn-yellow\"  >Réfaire votre réservation</a>
            </center>    

                   <!--
                 <a href=\"terminusAllerSimple?name=confir\" class=\"btn btn-yellow\">confirmer réservation</a>
                <a href=\"memorialPageAcceuil?name=retour\" class=\"btn btn-yellow\">Réfaire votre réservation</a>
                  -->




        

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "
    <script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "royalpalace/reservationAllerRetourRoyalPalace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 81,  222 => 80,  176 => 42,  171 => 39,  167 => 38,  165 => 37,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  113 => 17,  104 => 16,  92 => 12,  83 => 11,  68 => 4,  59 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"generator\" content=\"Jekyll v3.8.5\">

{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"stylesheets/base.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
{% endblock %}

{% block body %}

<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/logo_royal_palace.jpg\">
    </div>
        <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Vos informations sont elles excates ?</h1>
        <hr class=\"py-3\">
<div style=\"text-align:center\">
                <h5><strong>Lieu de départ:</strong>&nbsp{{royalpalace.depart}}</h5></br>
                <h5><strong>Destination:</strong>&nbsp{{royalpalace.destination}}</h5></br>       
                <h5><strong>E-mail:</strong>&nbsp{{royalpalace.email}}</h5></br>
                <h5><strong>Téléphone:</strong>&nbsp{{royalpalace.telephone}}</h5></br>
                <h5><strong>Nombre de passagers Aller:</strong>&nbsp{{royalpalace.nbrePassagerAller}}</h5></br>
                <h5><strong>Nombre de passagers Rétour:</strong>&nbsp{{royalpalace.nbrePassagerRetour}}</h5></br>
                <h5><strong>Date de départ:</strong>&nbsp{{royalpalace.dateDepart| date('d/m/Y')}}</h5></br>
                <h5><strong>Date de rétour:</strong>&nbsp{{royalpalace.dateRetour| date('d/m/Y')}}</h5></br>
                <h5><strong>Heure de départ:</strong>&nbsp{{royalpalace.horaireDepart}}</h5></br>
                <h5><strong>Heure de rétour:</strong>&nbsp{{royalpalace.horaireRetour}}</h5></br>  

                {% if (royalpalace.nbrePassagerAller <=4) and (royalpalace.nbrePassagerRetour <= 4)  %}
                <h5><strong>Prix:</strong>&nbsp 160€</h5></br>
                {% else %} 
                <h5><strong>Prix:</strong>&nbsp 300€</h5></br>
                {% endif %}
          </div>
            <center>
                <a href=\"reservationEffectuee?name=confir\" class=\"btn btn-yellow\"  type=\"submit\">Confirmer la réservation</a>                              
                <a href=\"royalpalacereservation?name=retour\" class=\"btn btn-yellow\"  >Réfaire votre réservation</a>
            </center>    

                   <!--
                 <a href=\"terminusAllerSimple?name=confir\" class=\"btn btn-yellow\">confirmer réservation</a>
                <a href=\"memorialPageAcceuil?name=retour\" class=\"btn btn-yellow\">Réfaire votre réservation</a>
                  -->




        

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
{% endblock %}

{% block javascripts %}

    <script src=\"javascript/reservationAeroport.js\"></script>

{% endblock %}
", "royalpalace/reservationAllerRetourRoyalPalace.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\royalpalace\\reservationAllerRetourRoyalPalace.html.twig");
    }
}
