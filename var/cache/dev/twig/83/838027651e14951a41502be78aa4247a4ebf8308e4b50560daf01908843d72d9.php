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

/* aeroport/ConfirmationReservation.html.twig */
class __TwigTemplate_3efc6c11cd7bb0eb28fe2f0df472303be402a9566f9bb404a363c5778f26ec8f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/ConfirmationReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/ConfirmationReservation.html.twig"));

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

    <br>


    <p>La navette du
        <b>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 23, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "</b>
        à
        ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 25, $this->source); })()), "horraire", []), "html", null, true);
        echo "
        partant de
        <b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 27, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
        echo "</b>
        pour
        <b>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 29, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo "</b>
        que vous avez réservée sur Alsace-navette.com a été validée par nos services !
    </p>

    <p>

        <b>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 35, $this->source); })()), "trajet", []), "chauffeur", []), "nom", []), "html", null, true);
        echo "</b>
        vous accueillera à bord de la navettes
        <b>
            ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 38, $this->source); })()), "trajet", []), "vehicule", []), "typeVehicule", []), "html", null, true);
        echo "</b>

        à l'heure et au lieu prévu lors de votre réservation. Vous pourrez joindre votre conducteur par téléphone au
        <b>
            ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 42, $this->source); })()), "trajet", []), "chauffeur", []), "telfix", []), "html", null, true);
        echo "</b>


    </p>

    <p>Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l'aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.
    </p>


    <p>
        Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p>


    <p>Merci d'utiliser nos services et à bientôt sur Alsace-Navette.com !!</p>


</body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/ConfirmationReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  104 => 38,  98 => 35,  89 => 29,  84 => 27,  79 => 25,  74 => 23,  63 => 15,  59 => 14,  54 => 12,  41 => 1,);
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

    <br>


    <p>La navette du
        <b>{{Reservation.dateDepart | date(\"d/m/y\")}}</b>
        à
        {{Reservation.horraire}}
        partant de
        <b>{{Reservation.departDestination.depart}}</b>
        pour
        <b>{{Reservation.departDestination.destination}}</b>
        que vous avez réservée sur Alsace-navette.com a été validée par nos services !
    </p>

    <p>

        <b>{{Reservation.trajet.chauffeur.nom}}</b>
        vous accueillera à bord de la navettes
        <b>
            {{Reservation.trajet.vehicule.typeVehicule}}</b>

        à l'heure et au lieu prévu lors de votre réservation. Vous pourrez joindre votre conducteur par téléphone au
        <b>
            {{Reservation.trajet.chauffeur.telfix}}</b>


    </p>

    <p>Vous pouvez également à tout moment retrouver ces informations sur Alsace-navette.com en vous connectant à l'aide de votre adresse e-mail et du mot de passe que vous avez reçu par courriel lors de votre première réservation.
    </p>


    <p>
        Pour nous aider à améliorer nos services, nous avons mis en place un sondage, accessible ici.</p>


    <p>Merci d'utiliser nos services et à bientôt sur Alsace-Navette.com !!</p>


</body></html>{# ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ #}
", "aeroport/ConfirmationReservation.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\aeroport\\ConfirmationReservation.html.twig");
    }
}
