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

/* base.html.twig */
class __TwigTemplate_b2b696e08d4abc2a6391f17591c93b780f05d879ffecbce57387f1616494c7d8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/product/\">
    <link rel=\"stylesheet\" href=\"https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"stylesheets/navbar.css\">
    <link rel=\"stylesheet\" href=\"stylesheets/button.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
        integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
        integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
        crossorigin=\"\" />
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
        integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
        crossorigin=\"\"></script>



    ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse justify-content-center order-2\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav abs-center-x\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/aeroport\">Aéroport</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Shopping Shuttle</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Laissez-vous conduire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Europa Park</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Tourisme Alsace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/royalpalace\">Royal Palace</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\"><i class=\"fas fa-user fa-lg\"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
    
    <div id=\"mapid\" class=\"mt-3\"></div>

    <footer class=\"py-5\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
            </div>
            <div class=\"\">
                <h5>Principal</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"/aeroport\">Aeroport Shuttle</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Shopping Shuttle</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Services annexes</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Laissez-vous conduire</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Europa Park</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Tourisme Alsace</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Royal Palace</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#qui\">Qui sommes-nous ?</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Mention légal</a></li>
                    <li><a class=\"text-muted\" href=\"#\">CGV</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#RGPD\">RGPD</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Social</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\"> <i class=\"fab fa-facebook-f fa-lg\"></i> </a></li>
                    <li><a class=\"text-muted\" href=\"#\"><i class=\"fab fa-instagram fa-lg\"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class=\"modal fade\" id=\"connexionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Connexion</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <label for=\"email\" class=\"text-center col-12\">E-mail</label>
                    <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail...\" required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <label for=\"\" class=\"text-center col-12 mt-2\">Mot de Passe</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe...\"
                        required autofocus>
                    <div class=\"invalid-feedback\">
                        Veuillez renseigné un e-mail.
                    </div>
                    <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\"><label style=\"cursor: pointer;\" for=\"\"
                            class=\"text-center col-12 mt-2\">Inscription</label></a>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Connexion</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"RGPD\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Règlement général sur la protection des données</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p>Les informations recueillies par Alsace Navette font l‘objet d‘un traitement informatique dédié à
                        la gestion de vos réservations et à vous informer d‘éventuelles offres commerciales ou services
                        .</p>
                    <p>Ces informations sont enregistrées dans des fichiers clients destinés au service administratif.
                    </p>

                    <p>Notre politique de confidentialité est mise en œuvre afin de vous donner le maximum de contrôle
                        sur vos données personnelles c‘est pourquoi Alsace navette s‘engage à ne transmettre aucune
                        information personnelle à des tiers.</p>

                    <p>Vous pouvez demander à tout moment la modification ou suppression de vos données de notre base
                        de données. Conformément à la loi « Informatique et Libertés » du 6 janvier 1976 modifiée en
                        2018 , le client jouit d‘un droit d‘accès, de modification, de rectification et de suppression
                        des données personnelles le concernant. Pour ce faire, vous pouvez vous adresser à notre service
                        marketing Alsace Navette, 10 BD du Président Poincaré, 67000 Strasbourg ou par formulaire web
                        sur <a href=\"#\">www.alsace-navette.com</a>.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"qui\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Qui sommes-nous ?</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p>Depuis 2004, notre association Franco-Iranienne s’engage à faciliter l’intégration sociale,
                        économique, et citoyenne afin de privilégier les échanges entre les communautés.
                        Acteur majeur dans l‘échange culturel en Alsace et plus particulièrement à Strasbourg, nous
                        décidons de faciliter ces connexions en mettant en place un service de transport en navettes.
                    </p>
                    <p>Alsace Navette née en 2007 et est le 1er service de navette en France à intégrer la réservation
                        et le paiement en ligne. Cette force d‘innovation a fait l‘objet de copie mais n‘a jamais été
                        égalé.</p>

                    <p>Gare, Aéroport ou autre lieu , Alsace Navette a pour mission d’assurer votre trajet entre votre
                        domicile et la destination, dans les conditions de confort les plus optimales.
                    </p>

                    <p>Notre équipe travaille au quotidien pour vous offrir un service de mobilité adapté à vos besoins
                        tant privés que professionnels tout en vous garantissant une sécurité.
                    </p>

                    <p>Nous sommes soucieux de vous fournir un service dont une qualité irréprochable car nous accordons
                        une importance à votre bien-être.</p>

                    <p>Les valeurs d’Alsace navette s’articulent sur l‘exigence d‘une économie sociale et solidaire et
                        prône la rigueur, la qualité et surtout une attention particulière envers les requêtes de nos
                        clients. Alors, confiez-nous votre trajet et Laissez-vous conduire !
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id=\"editmodal\"></div>
    ";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 240
        echo "
    <script>

        var mymap = L.map('mapid').setView([48.5838, 7.744300000000067], 10);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiYWxzYWNlLW5hdmV0dGUiLCJhIjoiY2p1MHZyNzZoMDJlcjRlbW9vOXY1ZzVjciJ9.STsGt92dt276heal7vkg7A'
        }).addTo(mymap);

    </script>


    <script src=\"javascript/inscription.js\"></script>
    <script src=\"javascript/modal.js\"></script>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script>
    <script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
        integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
        crossorigin=\"\"></script>
</body>

</html>";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Alsace Navette";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 27
        echo "
    ";
    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        // line 70
        echo "
    ";
    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        // line 236
        echo "


    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 236,  350 => 235,  345 => 70,  342 => 69,  337 => 27,  334 => 26,  328 => 7,  323 => 5,  289 => 240,  287 => 235,  193 => 144,  119 => 72,  117 => 69,  75 => 29,  73 => 26,  51 => 7,  48 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/base.html.twig");
    }
}
