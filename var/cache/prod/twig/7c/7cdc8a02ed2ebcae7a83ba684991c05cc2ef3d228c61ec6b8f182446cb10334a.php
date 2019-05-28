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
class __TwigTemplate_f0fc8fcb10b924e7d76c9971809f8271daf6706c7f2a8c7728de835f3bc6d339 extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        // line 16
        echo "
<!-- <script> alert(\" En poursuivant votre navigation, vous acceptez l‘utilisation de cookies pour activer  certaines fonctionnalités et améliorer nos offres. Pour en savoir plus, consultez notre politique de protection de données personnelles.\"); </script> -->


<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center\" style=\"background-image: url(images/home02.jpg)\" id=\"imgHome\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <h1 class=\"display-4 font-weight-normal\" style=\"color: white\">Alsace navette</h1>
        <p class=\"lead font-weight-normal\" style=\"color: white\" >LA ON A LA SECURITE</p>
        <a class=\"btn btn-outline-white\" href=\"#\" style=\"color: white\" >Coming soon</a>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/shopping-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/logo_royal_palace.png\" width=\"391\" height=\"270\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>


";
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
        return array (  69 => 16,  66 => 15,  61 => 12,  58 => 11,  49 => 4,  46 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/home.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/home/home.html.twig");
    }
}
