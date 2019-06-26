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

/* aeroport/RecapitulatifClient.html.twig */
class __TwigTemplate_7bb8cc3abf8dace7a8804509ffb3576c5da2fbc9b81e1b54f1eec05aab6ed1cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/RecapitulatifClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/RecapitulatifClient.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<head>


    <meta charset=\"UTF-8\">

</head>

<body>
    <p>Bonjour :
        <b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 12, $this->source); })()), "user", []), "civilite", []), "html", null, true);
        echo "

            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 14, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo "
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 15, $this->source); })()), "user", []), "prenom", []), "html", null, true);
        echo "
        </b>,
    </p>

    <br><p>Votre demande a bien été enregistrée pour le(s) trajet(s) suivant(s) :</p><br><br>

    ";
        // line 21
        if ((null === (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "
        <p>Type de trajet :
            <b>
                Allez simple</b>
        </p><br>

        <p>Départ:<b>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 28, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
            echo "</b>
        </p>
        <p></p>
        <p>Destination:<b>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 31, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
            echo "</b>
        </p>

        <p>Date:
            <b>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 35, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
            echo "</b>
        </p>
        <p>
            Heure:<b>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 38, $this->source); })()), "horraire", []), "html", null, true);
            echo "</b>
        </p>
    </p>
    <p>
        Nombre de passager:
        <b>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 43, $this->source); })()), "nbPassager", []), "html", null, true);
            echo "</b>
    </p>

    ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 46, $this->source); })()), "pointDePrise", []) == "Domicile")) {
                // line 47
                echo "        <p>
            Point de prise:
            <b>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 49, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
        </p>

        <p>
            Adresse:
            <b>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 54, $this->source); })()), "adresse", []), "html", null, true);
                echo "</b>
        </p>
        <p></p>
        <p>
            Code postal:
            <b>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 59, $this->source); })()), "codepostal", []), "html", null, true);
                echo "</b>

        </p>
        <p></p>
        <p>
            Ville:
            <b>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 65, $this->source); })()), "Ville", []), "html", null, true);
                echo "</b>
        </p>
        <p></p>
    ";
            } else {
                // line 69
                echo "        <p>
            Point de prise:
            <b>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 71, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
        </p>

    ";
            }
            // line 75
            echo "
    <br><p>
        <b>prix total:</b>
        ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["Prix"]) || array_key_exists("Prix", $context) ? $context["Prix"] : (function () { throw new RuntimeError('Variable "Prix" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "</p><br>


";
        } else {
            // line 82
            echo "    <p>Type de trajet :<b>
            Allez-Retour</b>
    </p>
    <br>
    <p>
        <b>Trajet Allez</b>
    </p>
    <p>Départ:<b>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 89, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
            echo "</b>
    </p>
    <p>Destination:<b>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 91, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
            echo "</b>
    </p>
    <p>Date:<b>";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 93, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
            echo "</b>
    </p>
    <p>Heure:<b>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 95, $this->source); })()), "horraire", []), "html", null, true);
            echo "</b>
    </p>
</p>
<p>Nombre de passager:<b>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 98, $this->source); })()), "nbPassager", []), "html", null, true);
            echo "</b>
</p>
";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 100, $this->source); })()), "pointDePrise", []) == "Domicile")) {
                // line 101
                echo "    <p>Point de prise:<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 101, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
    </p>
    <p>Adresse:<b>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 103, $this->source); })()), "adresse", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
    <p>Code postal:<b>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 106, $this->source); })()), "codepostal", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
    <p>Ville:<b>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 109, $this->source); })()), "Ville", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
";
            } else {
                // line 113
                echo "    <p>Point de prise:<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 113, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
    </p>
";
            }
            // line 116
            echo "<br><p>
    <b>prix total:</b>
    ";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["Prix"]) || array_key_exists("Prix", $context) ? $context["Prix"] : (function () { throw new RuntimeError('Variable "Prix" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "</p><br>";
            echo "<br><br><p>
    <b>Trajet Retour</b>
</p>
<p>Départ:<b>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 121, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
            echo "</b>
</p>
<p></p>
<p>Destination:<b>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 124, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
            echo "</b>
</p>
<p>Date:<b>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 126, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
            echo "</b>
</p>
<p>Heure:<b>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 128, $this->source); })()), "horraire", []), "html", null, true);
            echo "</b>
</p>
<p>Nombre de passager:<b>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 130, $this->source); })()), "nbPassager", []), "html", null, true);
            echo "</b>
</p>
";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 132, $this->source); })()), "pointDePrise", []) == "Domicile")) {
                // line 133
                echo "    <p>Point de prise:<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 133, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
    </p>
    <p>Adresse:<b>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 135, $this->source); })()), "adresse", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
    <p>Code postal:<b>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 138, $this->source); })()), "codepostal", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
    <p>Ville:<b>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 141, $this->source); })()), "Ville", []), "html", null, true);
                echo "</b>
    </p>
    <p></p>
";
            } else {
                // line 145
                echo "    <p>Point de prise:<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation1"]) || array_key_exists("Reservation1", $context) ? $context["Reservation1"] : (function () { throw new RuntimeError('Variable "Reservation1" does not exist.', 145, $this->source); })()), "pointDePrise", []), "html", null, true);
                echo "</b>
    </p>
";
            }
        }
        // line 147
        echo "<br><b>prix total:</b>";
        echo twig_escape_filter($this->env, (isset($context["Prix1"]) || array_key_exists("Prix1", $context) ? $context["Prix1"] : (function () { throw new RuntimeError('Variable "Prix1" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "</p><br><p>Vous recevrez prochainement un mail avec les dernières informations concernant votre trajet (nom du conducteur, son numéro de portable). Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l’aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.</p><p>Merci de votre confiance et à bientôt sur Alsace-Navette.com</p><p>Téléchargez votre facture ici :</p><b>prix total:</b>";
        echo twig_escape_filter($this->env, (isset($context["Prix"]) || array_key_exists("Prix", $context) ? $context["Prix"] : (function () { throw new RuntimeError('Variable "Prix" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "</p><br><p>Vous recevrez prochainement un mail avec les dernières informations concernant votre trajet (nom du conducteur, son numéro de portable). Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l’aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.</p><p>Merci de votre confiance et à bientôt sur Alsace-Navette.com</p><p>Téléchargez votre facture ici :<a href=\"http://127.0.0.1:8000/Facture/Edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 147, $this->source); })()), "id", []), "html", null, true);
        echo "\">Télécharger votre facture</a></p><p>Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p><br><br><p>Alsace navette</p><p>2, Rue du Coq</p><p>67000 Strasbourg</p><p>Tel : 03.88.22.22.71</p><p>En cas d'urgence : 06.27.18.12.52</p><p>Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p><br><br><p>Alsace navette</p><p>2, Rue du Coq</p><p>67000 Strasbourg</p><p>Tel : 03.88.22.22.71</p><p>En cas d'urgence : 06.27.18.12.52</p></body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/RecapitulatifClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 147,  309 => 145,  302 => 141,  296 => 138,  290 => 135,  284 => 133,  282 => 132,  277 => 130,  272 => 128,  267 => 126,  262 => 124,  256 => 121,  249 => 118,  245 => 116,  238 => 113,  231 => 109,  225 => 106,  219 => 103,  213 => 101,  211 => 100,  206 => 98,  200 => 95,  195 => 93,  190 => 91,  185 => 89,  176 => 82,  169 => 78,  164 => 75,  157 => 71,  153 => 69,  146 => 65,  137 => 59,  129 => 54,  121 => 49,  117 => 47,  115 => 46,  109 => 43,  101 => 38,  95 => 35,  88 => 31,  82 => 28,  74 => 22,  72 => 21,  63 => 15,  59 => 14,  54 => 12,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<head>


    <meta charset=\"UTF-8\">

</head>

<body>
    <p>Bonjour :
        <b>{{Reservation.user.civilite}}

            {{Reservation.user.nom}}
            {{Reservation.user.prenom}}
        </b>,
    </p>

    <br><p>Votre demande a bien été enregistrée pour le(s) trajet(s) suivant(s) :</p><br><br>

    {% if Reservation1 is null %}

        <p>Type de trajet :
            <b>
                Allez simple</b>
        </p><br>

        <p>Départ:<b>{{Reservation.departDestination.depart}}</b>
        </p>
        <p></p>
        <p>Destination:<b>{{Reservation.departDestination.destination}}</b>
        </p>

        <p>Date:
            <b>{{Reservation.dateDepart | date(\"d/m/y\")}}</b>
        </p>
        <p>
            Heure:<b>{{Reservation.horraire}}</b>
        </p>
    </p>
    <p>
        Nombre de passager:
        <b>{{Reservation.nbPassager}}</b>
    </p>

    {% if Reservation.pointDePrise == \"Domicile\" %}
        <p>
            Point de prise:
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
            Point de prise:
            <b>{{Reservation.pointDePrise}}</b>
        </p>

    {% endif %}

    <br><p>
        <b>prix total:</b>
        {{Prix}}</p><br>


{% else %}
    <p>Type de trajet :<b>
            Allez-Retour</b>
    </p>
    <br>
    <p>
        <b>Trajet Allez</b>
    </p>
    <p>Départ:<b>{{Reservation.departDestination.depart}}</b>
    </p>
    <p>Destination:<b>{{Reservation.departDestination.destination}}</b>
    </p>
    <p>Date:<b>{{Reservation.dateDepart | date(\"d/m/y\")}}</b>
    </p>
    <p>Heure:<b>{{Reservation.horraire}}</b>
    </p>
</p>
<p>Nombre de passager:<b>{{Reservation.nbPassager}}</b>
</p>
{% if Reservation.pointDePrise == \"Domicile\" %}
    <p>Point de prise:<b>{{Reservation.pointDePrise}}</b>
    </p>
    <p>Adresse:<b>{{Reservation.adresse}}</b>
    </p>
    <p></p>
    <p>Code postal:<b>{{Reservation.codepostal}}</b>
    </p>
    <p></p>
    <p>Ville:<b>{{Reservation.Ville}}</b>
    </p>
    <p></p>
{% else %}
    <p>Point de prise:<b>{{Reservation.pointDePrise}}</b>
    </p>
{% endif %}
<br><p>
    <b>prix total:</b>
    {{Prix}}</p><br>{# -------------------------------------------------------------------------Retour..................................................................... #}<br><br><p>
    <b>Trajet Retour</b>
</p>
<p>Départ:<b>{{Reservation1.departDestination.depart}}</b>
</p>
<p></p>
<p>Destination:<b>{{Reservation1.departDestination.destination}}</b>
</p>
<p>Date:<b>{{Reservation1.dateDepart | date(\"d/m/y\")}}</b>
</p>
<p>Heure:<b>{{Reservation1.horraire}}</b>
</p>
<p>Nombre de passager:<b>{{Reservation1.nbPassager}}</b>
</p>
{% if Reservation1.pointDePrise == \"Domicile\" %}
    <p>Point de prise:<b>{{Reservation1.pointDePrise}}</b>
    </p>
    <p>Adresse:<b>{{Reservation1.adresse}}</b>
    </p>
    <p></p>
    <p>Code postal:<b>{{Reservation1.codepostal}}</b>
    </p>
    <p></p>
    <p>Ville:<b>{{Reservation1.Ville}}</b>
    </p>
    <p></p>
{% else %}
    <p>Point de prise:<b>{{Reservation1.pointDePrise}}</b>
    </p>
{% endif %}{% endif %}<br><b>prix total:</b>{{Prix1}}</p><br><p>Vous recevrez prochainement un mail avec les dernières informations concernant votre trajet (nom du conducteur, son numéro de portable). Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l’aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.</p><p>Merci de votre confiance et à bientôt sur Alsace-Navette.com</p><p>Téléchargez votre facture ici :</p><b>prix total:</b>{{Prix}}</p><br><p>Vous recevrez prochainement un mail avec les dernières informations concernant votre trajet (nom du conducteur, son numéro de portable). Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l’aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.</p><p>Merci de votre confiance et à bientôt sur Alsace-Navette.com</p><p>Téléchargez votre facture ici :<a href=\"http://127.0.0.1:8000/Facture/Edit/{{Reservation.id}}\">Télécharger votre facture</a></p><p>Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p><br><br><p>Alsace navette</p><p>2, Rue du Coq</p><p>67000 Strasbourg</p><p>Tel : 03.88.22.22.71</p><p>En cas d'urgence : 06.27.18.12.52</p><p>Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p><br><br><p>Alsace navette</p><p>2, Rue du Coq</p><p>67000 Strasbourg</p><p>Tel : 03.88.22.22.71</p><p>En cas d'urgence : 06.27.18.12.52</p></body></html>{# ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ #}
", "aeroport/RecapitulatifClient.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\aeroport\\RecapitulatifClient.html.twig");
    }
}
