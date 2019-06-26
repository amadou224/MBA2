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

/* admistration_reservation_aeroport\Facture.html.twig */
class __TwigTemplate_3a9b8aad579d25782499b64836d76c037203b828eb690f2b8d9551eab759b33f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport\\Facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport\\Facture.html.twig"));

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
                </td>
            </tr>
        </table>";
        // line 32
        echo "        <table style=\"margin-bottom:30px;\" width=\"100%\">
            <tr>
                <td align=\"left\">
                    <h3>Facture n°
                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 36, $this->source); })()), "id", []), "html", null, true);
        echo "
                    </h3>
                    <div>
                        Fait à Strasbourg</div>
                    <div>Le 25/30/2019</div>

                </td>
                <td align=\"right\">
                    <div>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 44, $this->source); })()), "user", []), "civilite", []), "html", null, true);
        echo "

                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 46, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo "
                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 47, $this->source); })()), "user", []), "prenom", []), "html", null, true);
        echo "</div>
                    <div>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 48, $this->source); })()), "user", []), "adresse", []), "html", null, true);
        echo "</div>

                    <div>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 50, $this->source); })()), "user", []), "codepostal", []), "html", null, true);
        echo "
                        ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 51, $this->source); })()), "user", []), "ville", []), "html", null, true);
        echo "</div>
                </td>
            </tr>
        </table>

        ";
        // line 58
        echo "        <div class=\" \" style=\" padding-left:0px;\">

            <table style=\"margin-bottom:30px;\" width=\"100%\">
                <tr>
                    <td align=\"center\">
                        <table align=\"center\" border-top=\"0\" border=\"2\" class=\"table table-striped\" width=\"\">


                            <thead>
                                <tr align=\"center\">

                                    <th colspan=\"4\">
                                        <h3>Trajet Allez</h3>
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr align=\"center\">
                                    <th align=\"center\" width=\"20%\">Date</th>
                                    <th>Service</th>
                                    <th align=\"center\" width=\"10%\">Quantité</th>
                                    <th align=\"center\" width=\"10%\">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align=\"center\">
                                    <th align=\"center\" rowspan=\"5\">
                                        <b>";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 85, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "</b>
                                    </th>
                                    <td>Trajet:
                                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 88, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
        echo "-->";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 88, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo "</td>
                                    <td align=\"center\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 89, $this->source); })()), "nbPassager", []), "html", null, true);
        echo "}</td>
                                    <td align=\"center\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["Trajet"]) || array_key_exists("Trajet", $context) ? $context["Trajet"] : (function () { throw new RuntimeError('Variable "Trajet" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Horaires à la demande:</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["HorairesALaDemande"]) || array_key_exists("HorairesALaDemande", $context) ? $context["HorairesALaDemande"] : (function () { throw new RuntimeError('Variable "HorairesALaDemande" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Prise en charge domicile:</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["PriseenchargeDomicile"]) || array_key_exists("PriseenchargeDomicile", $context) ? $context["PriseenchargeDomicile"] : (function () { throw new RuntimeError('Variable "PriseenchargeDomicile" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Trajet de nuit</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["TrajetDeNuit"]) || array_key_exists("TrajetDeNuit", $context) ? $context["TrajetDeNuit"] : (function () { throw new RuntimeError('Variable "TrajetDeNuit" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Reservation dèrnière minute</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["DerniereMinute"]) || array_key_exists("DerniereMinute", $context) ? $context["DerniereMinute"] : (function () { throw new RuntimeError('Variable "DerniereMinute" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL HT</b>

                                    </td>


                                    <td align=\"center\">";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["Total"]) || array_key_exists("Total", $context) ? $context["Total"] : (function () { throw new RuntimeError('Variable "Total" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL TVA (10%)</b>
                                    </td>


                                    <td align=\"center\">1</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL TTC</b>
                                    </td>


                                    <td align=\"center\">1</td>
                                </tr>

                            </tbody>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td
                        align=\"center\">";
        // line 227
        echo "
                    </td>
                </tr>
            </table>";
        // line 232
        echo "            <div class=\"col-md-12\" style=\"padding-left:400px; text-align:right; \">
                <h4>Montant total payer:
                </h4>
            </div>
        </div>
    </body>
    <script crossorigin=\"anonymous\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admistration_reservation_aeroport\\Facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 232,  241 => 227,  212 => 123,  200 => 114,  191 => 108,  182 => 102,  173 => 96,  164 => 90,  160 => 89,  154 => 88,  148 => 85,  119 => 58,  111 => 51,  107 => 50,  102 => 48,  98 => 47,  94 => 46,  89 => 44,  78 => 36,  72 => 32,  41 => 1,);
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
                </td>
            </tr>
        </table>
        {#------------------------------------------------------------------------------------------------------------------------------------------------  #}
        <table style=\"margin-bottom:30px;\" width=\"100%\">
            <tr>
                <td align=\"left\">
                    <h3>Facture n°
                        {{Reservation.id}}
                    </h3>
                    <div>
                        Fait à Strasbourg</div>
                    <div>Le 25/30/2019</div>

                </td>
                <td align=\"right\">
                    <div>{{Reservation.user.civilite}}

                        {{Reservation.user.nom}}
                        {{Reservation.user.prenom}}</div>
                    <div>{{Reservation.user.adresse}}</div>

                    <div>{{Reservation.user.codepostal}}
                        {{Reservation.user.ville}}</div>
                </td>
            </tr>
        </table>

        {# {% if Reservation1 is null %} #}
        {#------------------------------------------------------------------------------------------------------------------------------------------------  #}
        <div class=\" \" style=\" padding-left:0px;\">

            <table style=\"margin-bottom:30px;\" width=\"100%\">
                <tr>
                    <td align=\"center\">
                        <table align=\"center\" border-top=\"0\" border=\"2\" class=\"table table-striped\" width=\"\">


                            <thead>
                                <tr align=\"center\">

                                    <th colspan=\"4\">
                                        <h3>Trajet Allez</h3>
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr align=\"center\">
                                    <th align=\"center\" width=\"20%\">Date</th>
                                    <th>Service</th>
                                    <th align=\"center\" width=\"10%\">Quantité</th>
                                    <th align=\"center\" width=\"10%\">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align=\"center\">
                                    <th align=\"center\" rowspan=\"5\">
                                        <b>{{Reservation.dateDepart | date(\"d/m/y\")}}</b>
                                    </th>
                                    <td>Trajet:
                                        {{Reservation.departDestination.depart}}-->{{Reservation.departDestination.destination}}</td>
                                    <td align=\"center\">{{Reservation.nbPassager }}}</td>
                                    <td align=\"center\">{{Trajet}}</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Horaires à la demande:</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">{{ HorairesALaDemande}}</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Prise en charge domicile:</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">{{PriseenchargeDomicile}}</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Trajet de nuit</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">{{TrajetDeNuit}}</td>
                                </tr>
                                <tr align=\"center\">

                                    <td>Reservation dèrnière minute</td>
                                    <td align=\"center\">1</td>
                                    <td align=\"center\">{{DerniereMinute}}</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL HT</b>

                                    </td>


                                    <td align=\"center\">{{Total}}</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL TVA (10%)</b>
                                    </td>


                                    <td align=\"center\">1</td>
                                </tr>
                                <tr>
                                    <td align=\"right\" colspan=\"3\">
                                        <b>TOTAL TTC</b>
                                    </td>


                                    <td align=\"center\">1</td>
                                </tr>

                            </tbody>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td
                        align=\"center\">{# <table align=\"center\" border-top=\"0\" border=\"2\" class=\"table table-striped\" width=\"100%\">
                                                                                    
                                                                                    
                                                                                                                <thead>
                                                                                                                    <tr align=\"center\">
                                                                                    
                                                                                                                        <th colspan=\"4\">
                                                                                                                            <h3>Trajet retour</h3>
                                                                                                                        </th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <thead>
                                                                                                                    <tr align=\"center\">
                                                                                                                        <th align=\"center\" width=\"20%\">Date</th>
                                                                                                                        <th>Service</th>
                                                                                                                        <th align=\"center\" width=\"10%\">Quantité</th>
                                                                                                                        <th align=\"center\" width=\"10%\">Prix</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr align=\"center\">
                                                                                                                        <th align=\"center\" rowspan=\"5\">1</th>
                                                                                                                        <td>Trajet:</td>
                                                                                                                        <td align=\"center\">{{Reservation.nbPassager }}}</td>
                                                                                                                        <td align=\"center\">{{Trajet}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr align=\"center\">
                                                                                    
                                                                                                                        <td>Horaires à la demande:</td>
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                        <td align=\"center\">{{ HorairesALaDemande}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr align=\"center\">
                                                                                    
                                                                                                                        <td>Prise en charge domicile:</td>
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                        <td align=\"center\">{{PriseenchargeDomicile}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr align=\"center\">
                                                                                    
                                                                                                                        <td>Trajet de nuit</td>
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                        <td align=\"center\">{{TrajetDeNuit}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr align=\"center\">
                                                                                    
                                                                                                                        <td>Reservation dèrnière minute</td>
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                        <td align=\"center\">{{DerniereMinute}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td align=\"right\" colspan=\"3\">
                                                                                                                            <b>TOTAL HT</b>
                                                                                    
                                                                                                                        </td>
                                                                                    
                                                                                    
                                                                                                                        <td align=\"center\">{{Total}}</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td align=\"right\" colspan=\"3\">
                                                                                                                            <b>TOTAL TVA (10%)</b>
                                                                                                                        </td>
                                                                                    
                                                                                    
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td align=\"right\" colspan=\"3\">
                                                                                                                            <b>TOTAL TTC</b>
                                                                                                                        </td>
                                                                                    
                                                                                    
                                                                                                                        <td align=\"center\">1</td>
                                                                                                                    </tr>
                                                                                    
                                                                                                                </tbody>
                                                                                                            </table> #}

                    </td>
                </tr>
            </table>
            {#------------------------------------------------------------------------------------------------------------------------------------------------  #}
            <div class=\"col-md-12\" style=\"padding-left:400px; text-align:right; \">
                <h4>Montant total payer:
                </h4>
            </div>
        </div>
    </body>
    <script crossorigin=\"anonymous\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</html>
", "admistration_reservation_aeroport\\Facture.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\admistration_reservation_aeroport\\Facture.html.twig");
    }
}
