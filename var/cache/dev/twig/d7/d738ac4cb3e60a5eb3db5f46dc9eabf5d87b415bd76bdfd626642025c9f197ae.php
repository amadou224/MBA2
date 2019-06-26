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

/* home/DetailReservation.html.twig */
class __TwigTemplate_b416d57716860a2c4aa1b2c07398d871e16ee89efcb5cf16d3b8c9dd58f69211 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/DetailReservation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/DetailReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/DetailReservation.html.twig"));

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
        echo "
    <div style=\"border:3px blue dashed; padding:30px 80px 10px 80px; height:900px;\">

        <div class=\"row\" style=\"text-align:center;background-color:#2cb1f3;\">Votre trajet</div>
        <div class=\"row\" style=\"background-color:#d9e1e5; margin-bottom:20px;\">
            <div class=\"col-4\">
                <div style=\"font-weight: bold;\">Type de réservation:</div>
                ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["Type"]) || array_key_exists("Type", $context) ? $context["Type"] : (function () { throw new RuntimeError('Variable "Type" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "
            </div>
            <div class=\"col-4\" style=\"text-align:center;\">
                <div style=\"font-weight: bold;\">Dépar:</div>
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Lieux_trajet"]) || array_key_exists("Lieux_trajet", $context) ? $context["Lieux_trajet"] : (function () { throw new RuntimeError('Variable "Lieux_trajet" does not exist.', 27, $this->source); })()), "lieux", []), "html", null, true);
        echo "
            </div>
            <div class=\"col-4\" style=\"text-align:right;\">
                <div style=\"font-weight: bold;\">Déstination:
                </div>
                ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 32, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo "</div>
        </div>

        <div class=\"row\">

            <div class=\"col-6\" style=\"border:0px blue dashed margin:0px 10px 10px 0px; padding:0px 10px 10px 0px;\">

                <div class=\"\" style=\"background-color:#2cb1f3; height:30px;\">Allez
                </div>
                <table style=\"background-color:#d9e1e5\" width=\"100%\">

                    <tr>


                        <td align=\"left\" style=\"font-weight: bold;\">Date :
                        </td>


                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 50, $this->source); })()), "dateDepart", []), "date", []), "d/m/y"), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Heure :</td>


                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 58, $this->source); })()), "horraire", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Point de prise / dépose sur Strasbourg :</td>


                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 66, $this->source); })()), "pointDePrise", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Adresse :</td>


                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 74, $this->source); })()), "adresse", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Ville :</td>


                        <td>
                            ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 83, $this->source); })()), "codepostal", []), "html", null, true);
        echo "
                            ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 84, $this->source); })()), "ville", []), "html", null, true);
        echo ",
                            ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 85, $this->source); })()), "pays", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">
                            Nombre d'Adulte :</td>


                        <td lign=\"left\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 94, $this->source); })()), "nbPassager", []), "html", null, true);
        echo "</td>


                    </tr>

                </table>

            </div>

            <div class=\"col-6\" id=\"allez-retour\" style=\"border:0px blue dashed margin:0px 0px 10px 10px; padding:0px 0px 10px 10px; display:block\">

                <div class=\"\" style=\"background-color:#2cb1f3; height:30px;\">Retour</div>
                <table style=\"background-color:#d9e1e5\" width=\"100%\">

                    <tr>


                        <td align=\"left\" style=\"font-weight: bold;\">Date :
                        </td>


                        <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 115, $this->source); })()), "dateDepart", []), "date", []), "d/m/y"), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Heure :</td>


                        <td>";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 123, $this->source); })()), "horraire", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Point de prise / dépose sur Strasbourg :</td>


                        <td>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 131, $this->source); })()), "pointDePrise", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Adresse :</td>


                        <td>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 139, $this->source); })()), "adresse", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Ville :</td>


                        <td>
                            ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 148, $this->source); })()), "codepostal", []), "html", null, true);
        echo "
                            ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 149, $this->source); })()), "ville", []), "html", null, true);
        echo ",
                            ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 150, $this->source); })()), "pays", []), "html", null, true);
        echo "</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">
                            Nombre d'Adulte :</td>


                        <td lign=\"left\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationRetour"]) || array_key_exists("ReservationRetour", $context) ? $context["ReservationRetour"] : (function () { throw new RuntimeError('Variable "ReservationRetour" does not exist.', 159, $this->source); })()), "nbPassager", []), "html", null, true);
        echo "</td>


                    </tr>

                </table>

            </div>


        </div>
        <div class=\"d-flex justify-content-center\">

            <button href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payement");
        echo "\" class=\"btn btn-success\" type=\"submit\">Payement!</button>


        </div>

    </div>


    ";
        // line 200
        echo "    ";
        // line 209
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
        echo "
    <script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/DetailReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 214,  353 => 213,  341 => 209,  339 => 200,  328 => 172,  312 => 159,  300 => 150,  296 => 149,  292 => 148,  280 => 139,  269 => 131,  258 => 123,  247 => 115,  223 => 94,  211 => 85,  207 => 84,  203 => 83,  191 => 74,  180 => 66,  169 => 58,  158 => 50,  137 => 32,  129 => 27,  122 => 23,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
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

    <div style=\"border:3px blue dashed; padding:30px 80px 10px 80px; height:900px;\">

        <div class=\"row\" style=\"text-align:center;background-color:#2cb1f3;\">Votre trajet</div>
        <div class=\"row\" style=\"background-color:#d9e1e5; margin-bottom:20px;\">
            <div class=\"col-4\">
                <div style=\"font-weight: bold;\">Type de réservation:</div>
                {{Type}}
            </div>
            <div class=\"col-4\" style=\"text-align:center;\">
                <div style=\"font-weight: bold;\">Dépar:</div>
                {{Lieux_trajet.lieux}}
            </div>
            <div class=\"col-4\" style=\"text-align:right;\">
                <div style=\"font-weight: bold;\">Déstination:
                </div>
                {{Reservation.departDestination.destination}}</div>
        </div>

        <div class=\"row\">

            <div class=\"col-6\" style=\"border:0px blue dashed margin:0px 10px 10px 0px; padding:0px 10px 10px 0px;\">

                <div class=\"\" style=\"background-color:#2cb1f3; height:30px;\">Allez
                </div>
                <table style=\"background-color:#d9e1e5\" width=\"100%\">

                    <tr>


                        <td align=\"left\" style=\"font-weight: bold;\">Date :
                        </td>


                        <td>{{Reservation.dateDepart.date | date(\"d/m/y\")}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Heure :</td>


                        <td>{{Reservation.horraire}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Point de prise / dépose sur Strasbourg :</td>


                        <td>{{Reservation.pointDePrise}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Adresse :</td>


                        <td>{{Reservation.adresse}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Ville :</td>


                        <td>
                            {{Reservation.codepostal}}
                            {{Reservation.ville}},
                            {{Reservation.pays}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">
                            Nombre d'Adulte :</td>


                        <td lign=\"left\">{{Reservation.nbPassager}}</td>


                    </tr>

                </table>

            </div>

            <div class=\"col-6\" id=\"allez-retour\" style=\"border:0px blue dashed margin:0px 0px 10px 10px; padding:0px 0px 10px 10px; display:block\">

                <div class=\"\" style=\"background-color:#2cb1f3; height:30px;\">Retour</div>
                <table style=\"background-color:#d9e1e5\" width=\"100%\">

                    <tr>


                        <td align=\"left\" style=\"font-weight: bold;\">Date :
                        </td>


                        <td>{{ReservationRetour.dateDepart.date | date(\"d/m/y\")}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Heure :</td>


                        <td>{{ReservationRetour.horraire}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Point de prise / dépose sur Strasbourg :</td>


                        <td>{{ReservationRetour.pointDePrise}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Adresse :</td>


                        <td>{{ReservationRetour.adresse}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">Ville :</td>


                        <td>
                            {{ReservationRetour.codepostal}}
                            {{ReservationRetour.ville}},
                            {{ReservationRetour.pays}}</td>


                    </tr>
                    <tr>
                        <td align=\"left\" style=\"font-weight: bold;\">
                            Nombre d'Adulte :</td>


                        <td lign=\"left\">{{ReservationRetour.nbPassager}}</td>


                    </tr>

                </table>

            </div>


        </div>
        <div class=\"d-flex justify-content-center\">

            <button href=\"{{path('payement')}}\" class=\"btn btn-success\" type=\"submit\">Payement!</button>


        </div>

    </div>


    {# {<div class=\"col-6\">
                                        
                                                <div style=\"text-align:center;background-color:#2cb1f3;\">Allez</div>
                                        
                                                <div class=\"\">
                                                    <div style=\"font-weight: bold; background-color:#d9e1e5;\">Type de réservation:</div>
                                                    {{Type}}
                                                </div>
                                            </div>
                                            <div class=\"col-6\" style;\">
                                        
                                        
                                                <div style=\"text-align:center;background-color:#2cb1f3;\">Retour</div>
                                        
                                                <div class=\"\">
                                                    <div style=\"font-weight: bold; background-color:#d9e1e5;\">Type de réservation:</div>
                                                    {{Type}}
                                                </div>
                                            </div>
                                            #}
    {# <h1>{{Reservation.pointDePrise}}</h1>
                                        
                                            <h1>{{Reservation.horraire}}</h1>
                                            <h1>{{Reservation.nbPassager}}</h1>
                                        
                                            <h1>{{Reservation.nbPassager}}</h1>
                                            <h1>{{Reservation.user.nom}}</h1>
                                            <h1>{{Reservation.departDestination.depart}}</h1>
                                            <h1>{{Reservation.departDestination.destination}}</h1> #}


{% endblock %}

{% block javascripts %}

    <script src=\"javascript/reservationAeroport.js\"></script>

{% endblock %}
", "home/DetailReservation.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\home\\DetailReservation.html.twig");
    }
}
