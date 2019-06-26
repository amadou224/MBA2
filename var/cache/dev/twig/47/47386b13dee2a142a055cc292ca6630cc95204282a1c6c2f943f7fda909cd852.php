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

/* aeroport/AdministrationAeroport.html.twig */
class __TwigTemplate_fd43bdb93975f1a5843a28ff5c873070a22ce6002831b2256fd58cd69e30732e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "aeroport/AdministrationAeroport.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/AdministrationAeroport.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/AdministrationAeroport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <meta content=\"Jekyll v3.8.5\" name=\"generator\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link href=\"stylesheets/base.css\" rel=\"stylesheet\">
    <link href=\"stylesheets/aeroport.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"container-fluid\" style=\"border-style:dotted;\">


        <h1>
            Les derniers Biens</h1>
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 23
            echo "
                <div class=\"col-4\" style=\"margin-bottom:30px\">
                    <div class=\"card\" style=\"weight:100px;\">

                        <a class=\"card-body\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admistration_reservation_aeroport", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [])]), "html", null, true);
            echo "\">


                            <h5 class=\"card-title\" style=\"color:blue\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "departDestination", []), "depart", []), "html", null, true);
            echo "--->";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "departDestination", []), "destination", []), "html", null, true);
            echo "</h5>
                            ";
            // line 32
            echo "
                            <p class=\"card-text\">
                                <b>Date:</b>
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "dateDepart", []), "d/m/y"), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">
                                <b>Heure:</b>
                                ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "horraire", []), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">
                                <b>Nombre de passager:</b>
                                ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "nbPassager", []), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">
                                <b>Client:</b>
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "user", []), "nom", []), "html", null, true);
            echo "
                                ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "user", []), "prenom", []), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">
                                <b>Contact:</b>
                                ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "user", []), "telportable", []), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">
                                <b>E-mail:</b>
                                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "user", []), "email", []), "html", null, true);
            echo "</p>

                            ";
            // line 53
            if ((null === twig_get_attribute($this->env, $this->source, $context["property"], "Statu", []))) {
                // line 54
                echo "                                <p>
                                    <div class=\"p-3 mb-2 bg-danger text-dark\">


                                        <b>Status:</b>
                                        Encour...</div>
                                </p>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 61
$context["property"], "Statu", []) == "Confirmer")) {
                // line 62
                echo "

                                <p>
                                    <div class=\"p-3 mb-2 bg-success text-dark\">


                                        <b>Status:</b>
                                        Confirmer.....</div>
                                </p>

                            ";
            } else {
                // line 73
                echo "                                <p>
                                    <div class=\"p-3 mb-2 bg-light text-dark\">


                                        <b>Status:</b>
                                        Annuler.....</div>
                                </p>


                            ";
            }
            // line 83
            echo "                        </a>

                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

    <script src=\"javascript/reservationAeroport.js\"></script>


    <script src=\"javascript/fonctionsjquery.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/AdministrationAeroport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 96,  250 => 95,  236 => 89,  225 => 83,  213 => 73,  200 => 62,  198 => 61,  189 => 54,  187 => 53,  182 => 51,  176 => 48,  170 => 45,  166 => 44,  160 => 41,  154 => 38,  148 => 35,  143 => 32,  137 => 30,  131 => 27,  125 => 23,  121 => 22,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}

    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <meta content=\"Jekyll v3.8.5\" name=\"generator\">

{% endblock %}

{% block stylesheets %}
    <link href=\"stylesheets/base.css\" rel=\"stylesheet\">
    <link href=\"stylesheets/aeroport.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid\" style=\"border-style:dotted;\">


        <h1>
            Les derniers Biens</h1>
        <div class=\"row\">
            {% for property in Reservation %}

                <div class=\"col-4\" style=\"margin-bottom:30px\">
                    <div class=\"card\" style=\"weight:100px;\">

                        <a class=\"card-body\" href=\"{{ path('admistration_reservation_aeroport',{'id':property.id})}}\">


                            <h5 class=\"card-title\" style=\"color:blue\">{{property.departDestination.depart}}--->{{property.departDestination.destination}}</h5>
                            {# <a href=\"#\">{{property.departDestination.depart}}/{{property.departDestination.depart}}</a> #}

                            <p class=\"card-text\">
                                <b>Date:</b>
                                {{property.dateDepart | date(\"d/m/y\")}}</p>
                            <p class=\"card-text\">
                                <b>Heure:</b>
                                {{property.horraire}}</p>
                            <p class=\"card-text\">
                                <b>Nombre de passager:</b>
                                {{property.nbPassager}}</p>
                            <p class=\"card-text\">
                                <b>Client:</b>
                                {{property.user.nom}}
                                {{property.user.prenom}}</p>
                            <p class=\"card-text\">
                                <b>Contact:</b>
                                {{property.user.telportable}}</p>
                            <p class=\"card-text\">
                                <b>E-mail:</b>
                                {{property.user.email}}</p>

                            {% if property.Statu is null %}
                                <p>
                                    <div class=\"p-3 mb-2 bg-danger text-dark\">


                                        <b>Status:</b>
                                        Encour...</div>
                                </p>
                            {% elseif property.Statu == \"Confirmer\" %}


                                <p>
                                    <div class=\"p-3 mb-2 bg-success text-dark\">


                                        <b>Status:</b>
                                        Confirmer.....</div>
                                </p>

                            {% else %}
                                <p>
                                    <div class=\"p-3 mb-2 bg-light text-dark\">


                                        <b>Status:</b>
                                        Annuler.....</div>
                                </p>


                            {% endif %}
                        </a>

                    </div>

                </div>
            {% endfor %}
        </div>
    </div>


{% endblock %}

{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

    <script src=\"javascript/reservationAeroport.js\"></script>


    <script src=\"javascript/fonctionsjquery.js\"></script>

{% endblock %}
", "aeroport/AdministrationAeroport.html.twig", "C:\\MBA\\ProjetDeSatge2019\\templates\\aeroport\\AdministrationAeroport.html.twig");
    }
}
