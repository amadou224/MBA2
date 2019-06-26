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
class __TwigTemplate_2c342261a664f0cd2da1e028d350d6b439b25d958c43552bd071c29ce0a797c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>


        <link href=\"https://getbootstrap.com/docs/4.3/examples/product/\" rel=\"canonical\">
        <link href=\"https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css\" rel=\"stylesheet\">
        <link href=\"stylesheets/navbar.css\" rel=\"stylesheet\">
        <link href=\"stylesheets/button.css\" rel=\"stylesheet\">
        <link crossorigin=\"anonymous\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" rel=\"stylesheet\">
        <link crossorigin=\"\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\" integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\" rel=\"stylesheet\"/>
        <link href=\"images/logo-alsace-navette.png\" rel=\"icon\"/>
        <script crossorigin=\"\" integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\" src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"></script>


        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <button aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler\" data-target=\"#navbarSupportedContent\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse collapse justify-content-center order-2\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav abs-center-x\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\"><img alt=\"\" height=\"30\" src=\"images/logo-alsace-navette.png\"></a>
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
                        <a class=\"nav-link\" href=\"/Administration\">Administration</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ficheDeMission\">facture</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">
                            <i class=\"fas fa-user fa-lg\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
        <hr>


        <div class=\"mt-3\" id=\"mapid\"></div>

        <footer class=\"py-5\">
            <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                    <a class=\"nav-link\" href=\"/\"><img alt=\"\" height=\"30\" src=\"images/logo-alsace-navette.png\"></a>
                    <title>Product</title>
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    <path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/>
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2007-2019</small>
            </div>
            <div class=\"\">
                <h5>Principal</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"/aeroport\">Aeroport Shuttle</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Shopping Shuttle</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Services annexes</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"#\">Laissez-vous conduire</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Europa Park</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Tourisme Alsace</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Royal Palace</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" data-target=\"#qui\" data-toggle=\"modal\" href=\"#\">Qui sommes-nous ?</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Mention légal</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">CGV</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" data-target=\"#RGPD\" data-toggle=\"modal\" href=\"#\">RGPD</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Social</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"#\">
                            <i class=\"fab fa-facebook-f fa-lg\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">
                            <i class=\"fab fa-instagram fa-lg\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"d-flex justify-content-around mt-2 mt-3\">
            <a href=\"https://www.marque.alsace/\"><img alt=\"\" src=\"images/Alsace.png\"></a>
            <a href=\"\"><img alt=\"\" height=\"72\" src=\"images/RF.svg\"></a>
        </div>
    </body>
</html></footer><div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"connexionModal\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Connexion</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body\">
            <label class=\"text-center col-12\" for=\"email\">E-mail</label>
            <input autofocus class=\"form-control\" id=\"inputEmail\" placeholder=\"E-mail...\" required type=\"email\">
            <div class=\"invalid-feedback\">
                Veuillez renseigné un e-mail.
            </div>
            <label class=\"text-center col-12 mt-2\" for=\"\">Mot de Passe</label>
            <input autofocus class=\"form-control\" id=\"inputPassword\" placeholder=\"Mot de passe...\" required type=\"password\">
            <div class=\"invalid-feedback\">
                Veuillez renseigné un e-mail.
            </div>
            <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">
                <label class=\"text-center col-12 mt-2\" for=\"\" style=\"cursor: pointer;\">Inscription</label>
            </a>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Close</button>
            <button class=\"btn btn-primary\" type=\"button\">Connexion</button>
        </div>
    </div>
</div></div><!-- Modal --><div aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" class=\"modal fade\" id=\"RGPD\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Règlement général sur la protection des données</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
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
                                                                                                        sur
                <a href=\"#\">www.alsace-navette.com</a>.</p>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-yellow\" data-dismiss=\"modal\" type=\"button\">Close</button>
        </div>
    </div>
</div></div><!-- Modal --><div aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" class=\"modal fade\" id=\"qui\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Qui sommes-nous ?</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
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
            <button class=\"btn btn-yellow\" data-dismiss=\"modal\" type=\"button\">Close</button>
        </div>
    </div>
</div></div><div id=\"editmodal\"></div>";
        // line 256
        $this->displayBlock('javascripts', $context, $blocks);
        echo "<script>

var mymap = L.map('mapid').setView([
    48.5838, 7.744300000000067
], 10);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYWxzYWNlLW5hdmV0dGUiLCJhIjoiY2p1MHZyNzZoMDJlcjRlbW9vOXY1ZzVjciJ9.STsGt92dt276heal7vkg7A'
}).addTo(mymap);</script><script src=\"javascript/inscription.js\"></script><script src=\"javascript/modal.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script><script>
window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script><script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script><script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script><script src=\"public\\javascript\\jquery-3.4.1.js\"></script><script src=\"public\\javascript\\fonctionsjquery.js\"></script><!-- Just to make our placeholder images work. Don't actually copy the next line! --><script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js\"></script><script crossorigin=\"\" integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\" src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"></script></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Alsace Navette
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  411 => 256,  394 => 73,  377 => 24,  358 => 8,  341 => 5,  317 => 256,  234 => 176,  130 => 74,  128 => 73,  78 => 25,  76 => 24,  60 => 10,  58 => 8,  54 => 6,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

    <head>
        {% block head %}{% endblock %}
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}Alsace Navette
            {% endblock %}
        </title>


        <link href=\"https://getbootstrap.com/docs/4.3/examples/product/\" rel=\"canonical\">
        <link href=\"https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css\" rel=\"stylesheet\">
        <link href=\"stylesheets/navbar.css\" rel=\"stylesheet\">
        <link href=\"stylesheets/button.css\" rel=\"stylesheet\">
        <link crossorigin=\"anonymous\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" rel=\"stylesheet\">
        <link crossorigin=\"\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\" integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\" rel=\"stylesheet\"/>
        <link href=\"images/logo-alsace-navette.png\" rel=\"icon\"/>
        <script crossorigin=\"\" integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\" src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"></script>


        {% block stylesheets %}{% endblock %}

    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <button aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler\" data-target=\"#navbarSupportedContent\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse collapse justify-content-center order-2\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav abs-center-x\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\"><img alt=\"\" height=\"30\" src=\"images/logo-alsace-navette.png\"></a>
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
                        <a class=\"nav-link\" href=\"/Administration\">Administration</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ficheDeMission\">facture</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">
                            <i class=\"fas fa-user fa-lg\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {% block body %}{% endblock %}

        <hr>


        <div class=\"mt-3\" id=\"mapid\"></div>

        <footer class=\"py-5\">
            <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                    <a class=\"nav-link\" href=\"/\"><img alt=\"\" height=\"30\" src=\"images/logo-alsace-navette.png\"></a>
                    <title>Product</title>
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    <path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/>
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2007-2019</small>
            </div>
            <div class=\"\">
                <h5>Principal</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"/aeroport\">Aeroport Shuttle</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Shopping Shuttle</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Services annexes</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"#\">Laissez-vous conduire</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Europa Park</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Tourisme Alsace</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Royal Palace</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" data-target=\"#qui\" data-toggle=\"modal\" href=\"#\">Qui sommes-nous ?</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">Mention légal</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">CGV</a>
                    </li>
                    <li>
                        <a class=\"text-muted\" data-target=\"#RGPD\" data-toggle=\"modal\" href=\"#\">RGPD</a>
                    </li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Social</h5>
                <ul class=\"list-unstyled text-small\">
                    <li>
                        <a class=\"text-muted\" href=\"#\">
                            <i class=\"fab fa-facebook-f fa-lg\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"text-muted\" href=\"#\">
                            <i class=\"fab fa-instagram fa-lg\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"d-flex justify-content-around mt-2 mt-3\">
            <a href=\"https://www.marque.alsace/\"><img alt=\"\" src=\"images/Alsace.png\"></a>
            <a href=\"\"><img alt=\"\" height=\"72\" src=\"images/RF.svg\"></a>
        </div>
    </body>
</html></footer><div aria-hidden=\"true\" aria-labelledby=\"exampleModalCenterTitle\" class=\"modal fade\" id=\"connexionModal\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Connexion</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body\">
            <label class=\"text-center col-12\" for=\"email\">E-mail</label>
            <input autofocus class=\"form-control\" id=\"inputEmail\" placeholder=\"E-mail...\" required type=\"email\">
            <div class=\"invalid-feedback\">
                Veuillez renseigné un e-mail.
            </div>
            <label class=\"text-center col-12 mt-2\" for=\"\">Mot de Passe</label>
            <input autofocus class=\"form-control\" id=\"inputPassword\" placeholder=\"Mot de passe...\" required type=\"password\">
            <div class=\"invalid-feedback\">
                Veuillez renseigné un e-mail.
            </div>
            <a href=\"{{ path('security_registration')}}\">
                <label class=\"text-center col-12 mt-2\" for=\"\" style=\"cursor: pointer;\">Inscription</label>
            </a>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" data-dismiss=\"modal\" type=\"button\">Close</button>
            <button class=\"btn btn-primary\" type=\"button\">Connexion</button>
        </div>
    </div>
</div></div><!-- Modal --><div aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" class=\"modal fade\" id=\"RGPD\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Règlement général sur la protection des données</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
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
                                                                                                        sur
                <a href=\"#\">www.alsace-navette.com</a>.</p>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-yellow\" data-dismiss=\"modal\" type=\"button\">Close</button>
        </div>
    </div>
</div></div><!-- Modal --><div aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" class=\"modal fade\" id=\"qui\" role=\"dialog\" tabindex=\"-1\">
<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Qui sommes-nous ?</h5>
            <button aria-label=\"Close\" class=\"close\" data-dismiss=\"modal\" type=\"button\">
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
            <button class=\"btn btn-yellow\" data-dismiss=\"modal\" type=\"button\">Close</button>
        </div>
    </div>
</div></div><div id=\"editmodal\"></div>{% block javascripts %}{% endblock %}<script>

var mymap = L.map('mapid').setView([
    48.5838, 7.744300000000067
], 10);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYWxzYWNlLW5hdmV0dGUiLCJhIjoiY2p1MHZyNzZoMDJlcjRlbW9vOXY1ZzVjciJ9.STsGt92dt276heal7vkg7A'
}).addTo(mymap);</script><script src=\"javascript/inscription.js\"></script><script src=\"javascript/modal.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script><script>
window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script><script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script><script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script><script src=\"public\\javascript\\jquery-3.4.1.js\"></script><script src=\"public\\javascript\\fonctionsjquery.js\"></script><!-- Just to make our placeholder images work. Don't actually copy the next line! --><script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js\"></script><script crossorigin=\"\" integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\" src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"></script></body></html>
", "base.html.twig", "C:\\MBA\\ProjetDeSatge2019\\templates\\base.html.twig");
    }
}
