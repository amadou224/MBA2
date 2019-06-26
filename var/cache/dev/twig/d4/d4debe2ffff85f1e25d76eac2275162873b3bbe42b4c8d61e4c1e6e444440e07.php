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

/* aeroport/horairesTarifs.html.twig */
class __TwigTemplate_cc5a7a24f8612929355c8fea1295519994e7d92d8df84dec14ad94bd2bbc8142 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "aeroport/horairesTarifs.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/horairesTarifs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/horairesTarifs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "


<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>

    <a href=\"/aeroport\" class=\"mt-3\">Faites une réservation</a>

    <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Horaires et Tarifs</h1>
    </div>

    <div class=\"album py-5 \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/balemulhouse.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Bâle-mulhouse</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#BaleMulhouseModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"BaleMulhouseModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Bâle - Mulhouse</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('BaleMulhouseModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('BaleMulhouseModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 15</li>
                                                <li class=\"list-group-item\">10 : 30</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                                <li class=\"list-group-item\">19 : 15</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">7 : 00</li>
                                                <li class=\"list-group-item\">12 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 15</li>
                                                <li class=\"list-group-item\">10 : 30</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                                <li class=\"list-group-item\">19 : 15</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">7 : 00</li>
                                                <li class=\"list-group-item\">12 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">01H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 39 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.euroairport.com/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/BruxelleLogo.Png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Bruxelle</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#BruxelleModal\">Horaires et
                                tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"BruxelleModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Bruxelle</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('BruxelleModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('BruxelleModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">6 : 00</li>
                                                <li class=\"list-group-item\">14 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">6 : 00</li>
                                                <li class=\"list-group-item\">14 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">05H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 115 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.brusselsairport.be/fr/passengers\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Strasbourg.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Entzheim (Strasbourg)</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#StrasbourgModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"StrasbourgModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Entzheim (Strasbourg)</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('StrasbourgModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('StrasbourgModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour l'aéroport de Entzheim (Strasbourg), il n'y a pas d'horaires fixes,
                                            uniquement des horaires à la demande. Ces horaires à la demande ne sont PAS
                                            facturés.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour l'aéroport de Entzheim (Strasbourg), il n'y a pas d'horaires fixes,
                                            uniquement des horaires à la demande. Ces horaires à la demande ne sont PAS
                                            facturés.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">00H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 8 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.strasbourg.aeroport.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/FrancfortH.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Francfort Hahn</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#FrancfortHModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"FrancfortHModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Francfort Hahn</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('FrancfortH')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('FrancfortH')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">03H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 68 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.hahn-airport.de/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/FrancfortMain.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Francfort Main</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#FrancfortMModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"FrancfortMModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Francfort Main</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('FrancfortMModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('FrancfortMModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">08 : 30</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">15 : 00</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">13 : 00</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">08 : 30</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 47 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.airport-fra.com/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/BadenBaden.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Karlsruhe / Baden-Baden</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#KarlsruheModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"KarlsruheModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Karlsruhe / Baden-Baden</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('KarlsruheModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('KarlsruheModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">08 : 45</li>
                                                <li class=\"list-group-item\">11 : 15</li>
                                                <li class=\"list-group-item\">14 : 45</li>
                                                <li class=\"list-group-item\">17 : 15</li>
                                                <li class=\"list-group-item\">20 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">15 : 45</li>
                                                <li class=\"list-group-item\">18 : 15</li>
                                                <li class=\"list-group-item\">22 : 15</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">08 : 45</li>
                                                <li class=\"list-group-item\">11 : 15</li>
                                                <li class=\"list-group-item\">14 : 45</li>
                                                <li class=\"list-group-item\">17 : 15</li>
                                                <li class=\"list-group-item\">20 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">15 : 45</li>
                                                <li class=\"list-group-item\">18 : 15</li>
                                                <li class=\"list-group-item\">22 : 15</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">1H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 24 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.baden-airpark.de/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Luxembourg.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Luxembourg</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#LuxModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"LuxModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Luxembourg</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('LuxModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('LuxModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">03H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 65 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.lux-airport.lu/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Paris.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Paris Orly / Charles de Gaulle</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ParisModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ParisModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Paris Orly / Charles de Gaulle</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('LuxModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('LuxModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">05H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 120 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.parisaeroport.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/SarreBrucken.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Sarrebruck</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#SarrebruckModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"SarrebruckModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Sarrebruck</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('SarrebruckModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('SarrebruckModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">17 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">17 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 32 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.flughafen-saarbruecken.de/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Stuttgart.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Stuttgart</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#StuttgartModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"StuttgartModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Stuttgart</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('StuttgartModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('StuttgartModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 00</li>
                                                <li class=\"list-group-item\">13 : 00</li>
                                                <li class=\"list-group-item\">16 : 30</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 00</li>
                                                <li class=\"list-group-item\">16 : 30</li>
                                                <li class=\"list-group-item\">22 : 00</li>

                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 49 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.flughafen-stuttgart.de/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Zurich.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Zurich</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ZurichModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ZurichModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Zurich</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('ZurichModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('ZurichModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 30</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 30</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 66 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.zurich-airport.com/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Zweibrucken.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Zweibrucken</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ZweibruckenModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ZweibruckenModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Zweibrucken</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('ZweibruckenModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('ZweibruckenModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à la demande.</p>

                                    </div>



                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">00H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 30 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.skyscanner.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 1208
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1211
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1212
        echo "
<script src=\"javascript/HorairesTarifsModal.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/horairesTarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1314 => 1212,  1305 => 1211,  1294 => 1208,  109 => 13,  100 => 12,  88 => 8,  79 => 7,  68 => 4,  59 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}

{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
{% endblock %}

{% block body %}



<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>

    <a href=\"/aeroport\" class=\"mt-3\">Faites une réservation</a>

    <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Horaires et Tarifs</h1>
    </div>

    <div class=\"album py-5 \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/balemulhouse.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Bâle-mulhouse</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#BaleMulhouseModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"BaleMulhouseModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Bâle - Mulhouse</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('BaleMulhouseModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('BaleMulhouseModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 15</li>
                                                <li class=\"list-group-item\">10 : 30</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                                <li class=\"list-group-item\">19 : 15</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">7 : 00</li>
                                                <li class=\"list-group-item\">12 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 15</li>
                                                <li class=\"list-group-item\">10 : 30</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                                <li class=\"list-group-item\">19 : 15</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">7 : 00</li>
                                                <li class=\"list-group-item\">12 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">01H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 39 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.euroairport.com/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/BruxelleLogo.Png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Bruxelle</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#BruxelleModal\">Horaires et
                                tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"BruxelleModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Bruxelle</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('BruxelleModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('BruxelleModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">6 : 00</li>
                                                <li class=\"list-group-item\">14 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">6 : 00</li>
                                                <li class=\"list-group-item\">14 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">05H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 115 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.brusselsairport.be/fr/passengers\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Strasbourg.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Entzheim (Strasbourg)</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#StrasbourgModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"StrasbourgModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Entzheim (Strasbourg)</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('StrasbourgModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('StrasbourgModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour l'aéroport de Entzheim (Strasbourg), il n'y a pas d'horaires fixes,
                                            uniquement des horaires à la demande. Ces horaires à la demande ne sont PAS
                                            facturés.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour l'aéroport de Entzheim (Strasbourg), il n'y a pas d'horaires fixes,
                                            uniquement des horaires à la demande. Ces horaires à la demande ne sont PAS
                                            facturés.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">00H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 8 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.strasbourg.aeroport.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/FrancfortH.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Francfort Hahn</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#FrancfortHModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"FrancfortHModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Francfort Hahn</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('FrancfortH')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('FrancfortH')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">03H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 68 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.hahn-airport.de/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/FrancfortMain.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Francfort Main</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#FrancfortMModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"FrancfortMModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Francfort Main</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('FrancfortMModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('FrancfortMModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">08 : 30</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">15 : 00</li>

                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">13 : 00</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">08 : 30</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">18 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 47 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.airport-fra.com/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/BadenBaden.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Karlsruhe / Baden-Baden</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#KarlsruheModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"KarlsruheModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Karlsruhe / Baden-Baden</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('KarlsruheModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('KarlsruheModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">08 : 45</li>
                                                <li class=\"list-group-item\">11 : 15</li>
                                                <li class=\"list-group-item\">14 : 45</li>
                                                <li class=\"list-group-item\">17 : 15</li>
                                                <li class=\"list-group-item\">20 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">15 : 45</li>
                                                <li class=\"list-group-item\">18 : 15</li>
                                                <li class=\"list-group-item\">22 : 15</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 00</li>
                                                <li class=\"list-group-item\">08 : 45</li>
                                                <li class=\"list-group-item\">11 : 15</li>
                                                <li class=\"list-group-item\">14 : 45</li>
                                                <li class=\"list-group-item\">17 : 15</li>
                                                <li class=\"list-group-item\">20 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">05 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 15</li>
                                                <li class=\"list-group-item\">15 : 45</li>
                                                <li class=\"list-group-item\">18 : 15</li>
                                                <li class=\"list-group-item\">22 : 15</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">1H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 24 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.baden-airpark.de/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Luxembourg.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Luxembourg</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#LuxModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"LuxModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Luxembourg</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('LuxModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('LuxModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">03H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 65 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.lux-airport.lu/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Paris.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Paris Orly / Charles de Gaulle</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ParisModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ParisModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Paris Orly / Charles de Gaulle</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('LuxModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\" onclick=showHorairesHiver('LuxModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à
                                            la demande.</p>
                                    </div>


                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">05H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 120 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.parisaeroport.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/SarreBrucken.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Sarrebruck</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#SarrebruckModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"SarrebruckModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Sarrebruck</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('SarrebruckModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('SarrebruckModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">17 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">15 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 00</li>
                                                <li class=\"list-group-item\">17 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 32 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.flughafen-saarbruecken.de/fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Stuttgart.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Stuttgart</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#StuttgartModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"StuttgartModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Stuttgart</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('StuttgartModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('StuttgartModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">10 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 00</li>
                                                <li class=\"list-group-item\">13 : 00</li>
                                                <li class=\"list-group-item\">16 : 30</li>
                                                <li class=\"list-group-item\">22 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">07 : 45</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">10 : 00</li>
                                                <li class=\"list-group-item\">16 : 30</li>
                                                <li class=\"list-group-item\">22 : 00</li>

                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H00</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 49 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.flughafen-stuttgart.de/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Zurich.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Zurich</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ZurichModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ZurichModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Zurich</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\" onclick=showHorairesEte('ZurichModal')>Horaires
                                            d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('ZurichModal')>Horaires
                                            d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 30</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"display: none;\">
                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">09 : 00</li>
                                                <li class=\"list-group-item\">13 : 30</li>
                                                <li class=\"list-group-item\">16 : 15</li>
                                            </ul>
                                        </div>

                                        <div class=\"col-lg-6 mt-2\">
                                            <ul class=\"text-center list-group\">
                                                <li class=\"list-group-item\">11 : 30</li>
                                                <li class=\"list-group-item\">16 : 00</li>
                                                <li class=\"list-group-item\">19 : 00</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">2H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 66 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.zurich-airport.com/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-lg\" style=\"width: 18rem;\">
                        <img src=\"images/Zweibrucken.png\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Zweibrucken</h5>
                            <button class=\"btn btn-yellow\" data-toggle=\"modal\" data-target=\"#ZweibruckenModal\">Horaires
                                et tarifs</button>
                        </div>
                    </div>
                </div>

                <div class=\"modal fade\" id=\"ZweibruckenModal\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Zweibrucken</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                <div class=\"container\">

                                    <div class=\"d-flex justify-content-around\">
                                        <button class=\"btn btn-yellow\"
                                            onclick=showHorairesEte('ZweibruckenModal')>Horaires d'été</button>
                                        <button class=\"btn btn-primary\"
                                            onclick=showHorairesHiver('ZweibruckenModal')>Horaires d'hiver</button>
                                    </div>

                                    <hr style=\"border-top: 1px solid rgba(251, 192, 45);\">

                                    <div class=\"d-flex justify-content-around\">
                                        <h3>Départ Strasbourg Gare</h3>
                                        <h3>Départ Aéroport</h3>
                                    </div>

                                    <div class=\"row\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à la demande.</p>
                                    </div>


                                    <div class=\"row\" style=\"display: none;\">
                                        <p>Pour cet aéroport, il n'y a pas d'horaires fixes, uniquement des horaires à la demande.</p>

                                    </div>



                                    <p class=\"text-center mt-4\">DURÉE ESTIMÉE DU TRAJET</p>
                                    <strong class=\"text-center mt-2\">00H30</strong>
                                    <hr>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <h3>A partir de 30 €</h3>
                                    </div>

                                    <div class=\"d-flex justify-content-center\">
                                        <a href=\"#\">Plus d'informations sur les tarifs</a>
                                    </div>


                                </div>
                            </div>
                            <div class=\"modal-footer d-flex justify-content-between\">
                                <a href=\"https://www.skyscanner.fr/\">site de l'aéroport</a>
                                <a href=\"#\"><i class=\"fas fa-map-marker-alt fa-lg\"></i></a>
                                <button type=\"button\" class=\"btn btn-yellow\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{# <script>

var mymap = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

</script> #}

{% endblock %}

{% block javascripts %}

<script src=\"javascript/HorairesTarifsModal.js\"></script>

{% endblock %}", "aeroport/horairesTarifs.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\aeroport\\horairesTarifs.html.twig");
    }
}
