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

/* aeroport/confirmationtrajet.html.twig */
class __TwigTemplate_38792d9235328ca611251613160241d970f13f55452be6316aa0c534308575d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/confirmationtrajet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/confirmationtrajet.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<head>


    <meta charset=\"UTF-8\">

</head>

<body>
    <p>Bonjour :
        <b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 12, $this->source); })()), "trajet", []), "chauffeur", []), "nom", []), "html", null, true);
        echo "

        </b><br>
    </p>
    <p>Trouvez votre fiche de mission
    </p><br><br>

    <p>Téléchargez votre facture ici :
        <a href=\"http://127.0.0.1:8000/ficheDeMission/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 20, $this->source); })()), "id", []), "html", null, true);
        echo "\">Télécharger votre facture</a>

    </p>

</body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/confirmationtrajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  54 => 12,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<head>


    <meta charset=\"UTF-8\">

</head>

<body>
    <p>Bonjour :
        <b>{{Reservation.trajet.chauffeur.nom}}

        </b><br>
    </p>
    <p>Trouvez votre fiche de mission
    </p><br><br>

    <p>Téléchargez votre facture ici :
        <a href=\"http://127.0.0.1:8000/ficheDeMission/{{Reservation.id}}\">Télécharger votre facture</a>

    </p>

</body></html>{# ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ #}
", "aeroport/confirmationtrajet.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\aeroport\\confirmationtrajet.html.twig");
    }
}
