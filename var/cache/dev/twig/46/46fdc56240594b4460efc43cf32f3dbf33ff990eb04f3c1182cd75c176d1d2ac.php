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

/* admistration_reservation_aeroport/FicheDeMission.html.twig */
class __TwigTemplate_9e4b41ead576800e1d33cd09e985fb85ca96fd3a9d856cf57d21eeca9c95e125 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport/FicheDeMission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport/FicheDeMission.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">

        <title></title>

        <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">

        <link href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\" rel=\"stylesheet\">

    </head>
    <body style=\"padding-left:30px; padding-right:30px; \">

        <table style=\"margin-bottom:30px;\" width=\"100%\">
            <tr>
                <td align=\"left\">
                    <div>Alsace navette</div>
                    <div>2, Rue du Coq</div>
                    <div>67000 Strasbourg</div>
                    <div>Tel : 03.88.22.22.71</div>
                    <div>En cas d'urgence : 06.27.18.12.52</div>

                </td>
                <td align=\"right\">
                    <img src=\"images/Capture-logo.PNG\"/>
                    <div>MOBASHER Pacha</div>
                </td>
            </tr>
        </table>
        <div>
            Fiche de mission du
            <b>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 34, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "</b>
            <table class=\"table\" style=\"margin-top:30px;\" width=\"100%\">
                <tr>
                    <th>
                        <p>
                            Départ le:
                            ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 40, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "
                            à
                            <b>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 42, $this->source); })()), "horraire", []), "html", null, true);
        echo "</b>
                        </p>
                        <p>Trajat de:
                            ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 45, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
        echo "
                            à
                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 47, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo "
                        </p>
                        <p>
                            Nombre de passagers :
                            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 51, $this->source); })()), "nbPassager", []), "html", null, true);
        echo "
                        </p>

                        <p>Vehicule:
                            <b>
                                ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["Vehicule"]) || array_key_exists("Vehicule", $context) ? $context["Vehicule"] : (function () { throw new RuntimeError('Variable "Vehicule" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</b>

                        </p>
                    </th>

                </tr>
                <tr>
                    <th>Client</th>
                    <td>
                        ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 65, $this->source); })()), "user", []), "civilite", []), "html", null, true);
        echo "
                        ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 66, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo "
                        ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 67, $this->source); })()), "user", []), "prenom", []), "html", null, true);
        echo "
                    </td>

                </tr>
                <tr>
                    <th>Point de Rassemblement</th>
                    <td>
                        ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 74, $this->source); })()), "pointDePrise", []) == "Domicile")) {
            // line 75
            echo "                            <p>
                                <b>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 76, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo "</b>
                            </p>

                            <p>
                                Adresse:
                                <b>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 81, $this->source); })()), "adresse", []), "html", null, true);
            echo "</b>
                            </p>
                            <p></p>
                            <p>
                                Code postal:
                                <b>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 86, $this->source); })()), "codepostal", []), "html", null, true);
            echo "</b>

                            </p>
                            <p></p>
                            <p>
                                Ville:
                                <b>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 92, $this->source); })()), "Ville", []), "html", null, true);
            echo "</b>
                            </p>
                            <p></p>
                        ";
        } else {
            // line 96
            echo "                            <p>

                                <b>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 98, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo "</b>
                            </p>

                        ";
        }
        // line 102
        echo "                    </td>

                </tr>
                <tr>
                    <th>Commentaire</th>
                    <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 107, $this->source); })()), "Commentaire", []), "html", null, true);
        echo "</td>

                </tr>
                <tr>
                    <th>Vol</th>
                    <td>Oui</td>

                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["Total"]) || array_key_exists("Total", $context) ? $context["Total"] : (function () { throw new RuntimeError('Variable "Total" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "</td>

                </tr>

            </table>

        </body>
        <script crossorigin=\"anonymous\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admistration_reservation_aeroport/FicheDeMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 117,  201 => 107,  194 => 102,  187 => 98,  183 => 96,  176 => 92,  167 => 86,  159 => 81,  151 => 76,  148 => 75,  146 => 74,  136 => 67,  132 => 66,  128 => 65,  116 => 56,  108 => 51,  101 => 47,  96 => 45,  90 => 42,  85 => 40,  76 => 34,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">

        <title></title>

        <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">

        <link href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\" rel=\"stylesheet\">

    </head>
    <body style=\"padding-left:30px; padding-right:30px; \">

        <table style=\"margin-bottom:30px;\" width=\"100%\">
            <tr>
                <td align=\"left\">
                    <div>Alsace navette</div>
                    <div>2, Rue du Coq</div>
                    <div>67000 Strasbourg</div>
                    <div>Tel : 03.88.22.22.71</div>
                    <div>En cas d'urgence : 06.27.18.12.52</div>

                </td>
                <td align=\"right\">
                    <img src=\"images/Capture-logo.PNG\"/>
                    <div>MOBASHER Pacha</div>
                </td>
            </tr>
        </table>
        <div>
            Fiche de mission du
            <b>{{Reservation.dateDepart | date(\"d/m/y\")}}</b>
            <table class=\"table\" style=\"margin-top:30px;\" width=\"100%\">
                <tr>
                    <th>
                        <p>
                            Départ le:
                            {{Reservation.dateDepart | date(\"d/m/y\")}}
                            à
                            <b>{{Reservation.horraire}}</b>
                        </p>
                        <p>Trajat de:
                            {{Reservation.departDestination.depart}}
                            à
                            {{Reservation.departDestination.destination}}
                        </p>
                        <p>
                            Nombre de passagers :
                            {{Reservation.nbPassager}}
                        </p>

                        <p>Vehicule:
                            <b>
                                {{Vehicule}}</b>

                        </p>
                    </th>

                </tr>
                <tr>
                    <th>Client</th>
                    <td>
                        {{Reservation.user.civilite}}
                        {{Reservation.user.nom}}
                        {{Reservation.user.prenom}}
                    </td>

                </tr>
                <tr>
                    <th>Point de Rassemblement</th>
                    <td>
                        {% if Reservation.pointDePrise == \"Domicile\" %}
                            <p>
                                <b>{{Reservation.pointDePrise}}</b>
                            </p>

                            <p>
                                Adresse:
                                <b>{{Reservation.adresse}}</b>
                            </p>
                            <p></p>
                            <p>
                                Code postal:
                                <b>{{Reservation.codepostal}}</b>

                            </p>
                            <p></p>
                            <p>
                                Ville:
                                <b>{{Reservation.Ville}}</b>
                            </p>
                            <p></p>
                        {% else %}
                            <p>

                                <b>{{Reservation.pointDePrise}}</b>
                            </p>

                        {% endif %}
                    </td>

                </tr>
                <tr>
                    <th>Commentaire</th>
                    <td>{{Reservation.Commentaire}}</td>

                </tr>
                <tr>
                    <th>Vol</th>
                    <td>Oui</td>

                </tr>
                <tr>
                    <th>Prix</th>
                    <td>{{Total}}</td>

                </tr>

            </table>

        </body>
        <script crossorigin=\"anonymous\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    </body>
</html>
", "admistration_reservation_aeroport/FicheDeMission.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\admistration_reservation_aeroport\\FicheDeMission.html.twig");
    }
}
