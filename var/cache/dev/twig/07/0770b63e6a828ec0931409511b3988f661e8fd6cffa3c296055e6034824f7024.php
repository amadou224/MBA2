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

/* home/home.html.twig */
class __TwigTemplate_0b1533c527d5fabbd278532eda3e35ec4d291de48b78d9d9f463bae29cedd03f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

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
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<!-- <script> alert(\" En poursuivant votre navigation, vous acceptez l‘utilisation de cookies pour activer  certaines fonctionnalités et améliorer nos offres. Pour en savoir plus, consultez notre politique de protection de données personnelles.\"); </script> -->

<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center\"
    style=\"background-image: url(images/airplane.jpg)\" id=\"imgHome\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <h1 class=\"display-4 font-weight-normal\"
            style=\"color: white; padding: 10px; border: 10px dotted; border-color: #fff;\">Alsace Navette</h1>
    </div>

    <div class=\"album py-5\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <a class=\"btn btn-lg \" href=\"/aeroport\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Aéroport</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Shopping
                        Shuttle</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Laissez-vous
                        conduire</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Europa
                        Park</strong>
                </a>
                <a class=\"btn  btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Tourisme
                        Alsace</strong> </a>
                <a class=\"btn  btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff; border-color: #fff;\"><strong>Royal
                        Palace</strong></a>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-between\">

    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/shopping-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/logo_royal_palace.png\" width=\"350\" height=\"270\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 15,  102 => 14,  91 => 11,  82 => 10,  67 => 3,  58 => 2,  27 => 1,);
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
{% endblock %}

{% block body %}

<!-- <script> alert(\" En poursuivant votre navigation, vous acceptez l‘utilisation de cookies pour activer  certaines fonctionnalités et améliorer nos offres. Pour en savoir plus, consultez notre politique de protection de données personnelles.\"); </script> -->

<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center\"
    style=\"background-image: url(images/airplane.jpg)\" id=\"imgHome\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <h1 class=\"display-4 font-weight-normal\"
            style=\"color: white; padding: 10px; border: 10px dotted; border-color: #fff;\">Alsace Navette</h1>
    </div>

    <div class=\"album py-5\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <a class=\"btn btn-lg \" href=\"/aeroport\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Aéroport</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Shopping
                        Shuttle</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Laissez-vous
                        conduire</strong></a>
                <a class=\"btn btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Europa
                        Park</strong>
                </a>
                <a class=\"btn  btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff;\"><strong>Tourisme
                        Alsace</strong> </a>
                <a class=\"btn  btn-lg \" href=\"#\"
                    onmouseover=\"this.style.borderColor= '#fbc02d'; this.style.color= '#fff';\"
                    onmouseout=\"this.style.borderColor='#fff'; this.style.color= '#fbc02d';\"
                    style=\"color: #fbc02d; padding: 5 px; border: 10px inset; border-color: #fff; border-color: #fff;\"><strong>Royal
                        Palace</strong></a>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-between\">

    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/shopping-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/logo_royal_palace.png\" width=\"350\" height=\"270\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\" width=\"350\">
            <p class=\"lead\" style=\"color:black;\"></p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>


{% endblock %}", "home/home.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/home/home.html.twig");
    }
}
