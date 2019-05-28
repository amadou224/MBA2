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

/* royalpalace/royalpalace.html.twig */
class __TwigTemplate_5f3da8061b64a0e5d4d82fe7e74e19b3e9b6cafa1c005f8d467dfc9d122838f0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "royalpalace/royalpalace.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"stylesheets/base.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        // line 17
        echo "
    <body>

    <p style=\"text-align: center; font-size: 160%;\">Royal Palace<br>
        <br>
        Lucie Adam a eu l'idée la première d'agrandir l'auberge familliale en y
        ajoutant une piste de danse. De 1948 à 1975, l'affaire a plutôt bien
        marchée mais la concurrence des discothèques a fini par avoir raison du
        dancing.
        <br> En 1980 son fils Pierre Meyer, prend la direction des lieux à 28
        ans et tente le tout pour le tout et de réaliser son rêve: faire du
        music-hall. Beaucoup, dans ce le village de 400 habitans, pense alors que
        Pierre Meyer a perdu la tête.
        <br>Il commence à organiser des soirées à thème
        inspirées des cabarets parisiens. </p>
    <p style=\"text-align: center; font-size: 160%;\">Le dancing voit defiler à Kirrwiller
        des danseuses tahitiennes ou brésiliennes et même une strip-teaseuse .
        L'endroit se nomme alors le Music-Hall Adam-Meyer.
        <br> En 1989, il investit dans une scène de 200 mètres carrés et sélectionne de mieux en mieux ses
        spectacles.
        <br> Le cabaret connaît un succès grandissant hors des frontières
        régionales.
        <br>
        <br>
        <br>
        <img src=\"images/Kirrwiller_Palace.JPG\"
             alt=\"Royal Palace\" title=\"Royal Palace\" longdesc=\"file:///home/mike/APPLICATIONS/alsace-navette/alsace-navette/ressources/\"
             style=\"width: 611px; height: 433px;\"><br>
        <br>
        <br>
        <br>
        En 1994, Pierre Meyer fait venir à Kirrwiller les deux magiciens Siegfried
        et Roy qui, enthousiastes, l'invitent à Las Vegas.
        <br>Suite à ce voyage,
        Pierre Meyer fait construire un théâtre de 1000 places et des cuisines
        dignes d'un grand restaurant. Le Royal Palace est né.
        <br>
        <br>
        Le Royal Palace est aujourd'hui un des 3 plus grands music-hall de France
        avec le Moulin Rouge et le Lido.
        <br>
        <br>Il accueille 230.000 spectateurs tous les ans.
    </p>
    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("royalpalacereservation");
        echo "\">Réservation Navette</a>

    </body>


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
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        // line 88
        echo "
<script src=\"javascript/reservationAeroport.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "royalpalace/royalpalace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 88,  146 => 87,  116 => 60,  71 => 17,  68 => 16,  62 => 12,  59 => 11,  50 => 4,  47 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "royalpalace/royalpalace.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/royalpalace/royalpalace.html.twig");
    }
}
