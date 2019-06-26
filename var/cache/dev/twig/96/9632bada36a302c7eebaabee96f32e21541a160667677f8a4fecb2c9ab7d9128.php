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

/* transport/aeroport.html.twig */
class __TwigTemplate_5ae329740945de5b46ba956873c185fa10126058d206bc6c304111d361a88721 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/aeroport.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/aeroport.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/aeroport.html.twig"));

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
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<!--
<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>
    -->


<!--        RAJOUT NAV AMADOU          -->

    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <!-- <a class=\"navbar-brand\" href=\"#\">Navbar</a>  -->
  
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"aeroport\">Acceuil <span class=\"sr-only\">(current)</span></a>
                </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"informations\">Informations</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link \" href=\"tarif\">Tarif</a>        <!--   tarif -->
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"contact\">Contact</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"galerieDuSite\">Galerie</a>
            </li>
        </ul>
  </div>
</nav> </br>
</br>
<h5 style=\"text-align:center\"><strong> <em> Avant d'effectuer votre réservervation, merci de bien vouloir prendre connaissance des informations concernant: </em></strong></h5>
<div style=\"align:center\">
<ul>
    <li >
        <a href=\"visiteDuSite\"><strong>La visite du Site</strong> </a>

    </li>
      
    <li>
       <a href=\"horaireDuSite\"><strong> Les horaires</strong> </a>
    </li>

    <li>
        <a href=\"tarifDuSite\">  <strong>Les tarifs<strong></a>
    </li>
</ul>
</div>
  
<hr style=\"border:solid black 1px;width:75%;\" />
    <!--        RAJOUT NAV AMADOU          -->
    <!--/horairesTarifs
    <a style=\"text-align:center\" href=\"#\" class=\"mt-3\">Consultez les horaires et les tarifs <i class=\"far fa-clock fa-lg\"></i></a>
        -->
    <div class=\"col-md-8 mx-auto mt-3\">
        <h1 style=\"text-align:center\">Faites votre réservation</h1>
        <hr class=\"py-3\">

        <div class=\"d-flex justify-content-around\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerSimple\" value=\"\"
                    onclick=\"AllerSimple()\">
                <label class=\"form-check-label\" for=\"\">
                </label>
                <p><strong>Aller simple</strong><i class=\" ml-3 fas fa-arrow-right\"></i></p>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerRetour\" value=\"\"
                    onclick=\"AllerRetour()\">
                <label class=\"form-check-label\" for=\"\">                    
                </label>
                <p><strong>Aller / retour </strong><i class=\"ml-3 fas fa-arrows-alt-h\"></i></p>
            </div>
        </div>


        <div style=\"display: none;\" id=\"FormAllerSimple\">
            <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationAller");
        echo "\"
                novalidate>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Gare Centrale</option>
                                <option value=\"2\">Palais des Droits de l'homme</option>
                                <option value=\"3\">Hotel Hilton</option>
                                <option value=\"4\">Bruxelles</option>
                                <option value=\"5\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination_aller\" required>
                                <option value=\"1\">Mémorial Struthof </option>
                               
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\" name=\"nb_passager_aller\"  min=\"1\" max=\"8\" >
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Please choose a number.
                </div>



                  <div class=\"d-flex justify-content-center\">     <div class=\"col-md-6 mb-3\">    
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email adresse</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    
                  </div> 
                  </div>
                  </div>



    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"tel\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
                          </div>
                      </div>
                    </div>           


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart_aller\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"heure_aller\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart_aller\" onclick=\"HeureAller()\">
                                <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>



                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp_aller\" onclick=\"Domicile()\" id=\"pdp\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse ...\" name=\"adresse_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Code postal ...\" name=\"cp_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville ...\" name=\"ville_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays_aller\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>
              
                ";
        // line 265
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [])) {
            // line 266
            echo "              <!--    <button class=\"btn btn-yellow\"  type=\"submit\">Réserver</button>      disabled-->
               <a href=\"confirmation\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                ";
        } else {
            // line 269
            echo "               <!-- <button  class=\"btn btn-yellow\" type=\"submit\" >Réserver </button>      -->
                <a href=\"confirmation\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                ";
        }
        // line 272
        echo "            </form>
        </div>
<!--                           ALLER RETOUR                                        -->


        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Gare Centrale</option>
                                <option value=\"Bruxelle\">Palais des Droits de l'Homme</option>
                                <option value=\"3\">Hotel Hilton</option>
                                <option value=\"4\">Bruxelles</option>
                                <option value=\"5\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\" required>
                                <option value=\"Strasbourg\">Mémorial Struthof</option>
                               
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                

               <div class=\"d-flex justify-content-center\">     <div class=\"col-md-6 mb-3\">    
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email adresse</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    
                </div> </div></div>



    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"tel\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
                          </div>
                      </div>
                    </div>



                  <hr>

                <div>

                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">   <!-- aller retour -->

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_1\" min=\"1\" max=\"8\">

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_2\" min=\"1\" max=\"8\">
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de retour</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_retour\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart\">
                                <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                <option value=\"5\">13h30</option>
                                <option value=\"6\">14h30</option>
                                <option value=\"7\">15h30</option>
                                <option value=\"8\">16h30</option>
                                <option value=\"8\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de retour fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_retour\">
                               <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                <option value=\"5\">13h30</option>
                                <option value=\"6\">14h30</option>
                                <option value=\"7\">15h30</option>
                                <option value=\"8\">16h30</option>
                                <option value=\"8\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise2\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp\" onclick=\"DomicileAllerRetour()\" id=\"pdp2\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile2\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse...\" name=\"adresse\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville...\" name=\"cp\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pays...\" name=\"ville\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>   


               ";
        // line 477
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [])) {
            // line 478
            echo "               <!--    <button class=\"btn btn-yellow\"  type=\"submit\">Réserver</button>      disabled-->
               <a href=\"confirmationAllerRetour\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                ";
        } else {
            // line 481
            echo "               <!-- <button  class=\"btn btn-yellow\" type=\"submit\" >Réserver </button>      -->
                <a href=\"confirmationAllerRetour\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                ";
        }
        // line 484
        echo "

            </form>
        </div>
    </div>                                          

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
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 515
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 516
        echo "
<script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transport/aeroport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 516,  640 => 515,  601 => 484,  596 => 481,  591 => 478,  589 => 477,  387 => 278,  379 => 272,  374 => 269,  369 => 266,  367 => 265,  210 => 111,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
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
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
{% endblock %}

{% block body %}
<!--
<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>
    -->


<!--        RAJOUT NAV AMADOU          -->

    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <!-- <a class=\"navbar-brand\" href=\"#\">Navbar</a>  -->
  
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"aeroport\">Acceuil <span class=\"sr-only\">(current)</span></a>
                </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"informations\">Informations</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link \" href=\"tarif\">Tarif</a>        <!--   tarif -->
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"contact\">Contact</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"galerieDuSite\">Galerie</a>
            </li>
        </ul>
  </div>
</nav> </br>
</br>
<h5 style=\"text-align:center\"><strong> <em> Avant d'effectuer votre réservervation, merci de bien vouloir prendre connaissance des informations concernant: </em></strong></h5>
<div style=\"align:center\">
<ul>
    <li >
        <a href=\"visiteDuSite\"><strong>La visite du Site</strong> </a>

    </li>
      
    <li>
       <a href=\"horaireDuSite\"><strong> Les horaires</strong> </a>
    </li>

    <li>
        <a href=\"tarifDuSite\">  <strong>Les tarifs<strong></a>
    </li>
</ul>
</div>
  
<hr style=\"border:solid black 1px;width:75%;\" />
    <!--        RAJOUT NAV AMADOU          -->
    <!--/horairesTarifs
    <a style=\"text-align:center\" href=\"#\" class=\"mt-3\">Consultez les horaires et les tarifs <i class=\"far fa-clock fa-lg\"></i></a>
        -->
    <div class=\"col-md-8 mx-auto mt-3\">
        <h1 style=\"text-align:center\">Faites votre réservation</h1>
        <hr class=\"py-3\">

        <div class=\"d-flex justify-content-around\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerSimple\" value=\"\"
                    onclick=\"AllerSimple()\">
                <label class=\"form-check-label\" for=\"\">
                </label>
                <p><strong>Aller simple</strong><i class=\" ml-3 fas fa-arrow-right\"></i></p>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerRetour\" value=\"\"
                    onclick=\"AllerRetour()\">
                <label class=\"form-check-label\" for=\"\">                    
                </label>
                <p><strong>Aller / retour </strong><i class=\"ml-3 fas fa-arrows-alt-h\"></i></p>
            </div>
        </div>


        <div style=\"display: none;\" id=\"FormAllerSimple\">
            <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"{{ path('reservationAller')}}\"
                novalidate>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Gare Centrale</option>
                                <option value=\"2\">Palais des Droits de l'homme</option>
                                <option value=\"3\">Hotel Hilton</option>
                                <option value=\"4\">Bruxelles</option>
                                <option value=\"5\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination_aller\" required>
                                <option value=\"1\">Mémorial Struthof </option>
                               
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\" name=\"nb_passager_aller\"  min=\"1\" max=\"8\" >
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Please choose a number.
                </div>



                  <div class=\"d-flex justify-content-center\">     <div class=\"col-md-6 mb-3\">    
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email adresse</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    
                  </div> 
                  </div>
                  </div>



    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"tel\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
                          </div>
                      </div>
                    </div>           


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart_aller\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"heure_aller\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart_aller\" onclick=\"HeureAller()\">
                                <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>



                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp_aller\" onclick=\"Domicile()\" id=\"pdp\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse ...\" name=\"adresse_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Code postal ...\" name=\"cp_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville ...\" name=\"ville_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays_aller\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>
              
                {% if app.user %}
              <!--    <button class=\"btn btn-yellow\"  type=\"submit\">Réserver</button>      disabled-->
               <a href=\"confirmation\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                {% else %}
               <!-- <button  class=\"btn btn-yellow\" type=\"submit\" >Réserver </button>      -->
                <a href=\"confirmation\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                {% endif %}
            </form>
        </div>
<!--                           ALLER RETOUR                                        -->


        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"{{ path('reservation')}}\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Gare Centrale</option>
                                <option value=\"Bruxelle\">Palais des Droits de l'Homme</option>
                                <option value=\"3\">Hotel Hilton</option>
                                <option value=\"4\">Bruxelles</option>
                                <option value=\"5\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\" required>
                                <option value=\"Strasbourg\">Mémorial Struthof</option>
                               
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                

               <div class=\"d-flex justify-content-center\">     <div class=\"col-md-6 mb-3\">    
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email adresse</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    
                </div> </div></div>



    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"tel\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
                          </div>
                      </div>
                    </div>



                  <hr>

                <div>

                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">   <!-- aller retour -->

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_1\" min=\"1\" max=\"8\">

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_2\" min=\"1\" max=\"8\">
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de retour</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_retour\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart\">
                                <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                <option value=\"5\">13h30</option>
                                <option value=\"6\">14h30</option>
                                <option value=\"7\">15h30</option>
                                <option value=\"8\">16h30</option>
                                <option value=\"8\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de retour fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_retour\">
                               <option value=\"1\">08h30</option>
                                <option value=\"2\">09h30</option>
                                <option value=\"3\">10h30</option>
                                <option value=\"4\">11h30</option>
                                <option value=\"5\">13h30</option>
                                <option value=\"6\">14h30</option>
                                <option value=\"7\">15h30</option>
                                <option value=\"8\">16h30</option>
                                <option value=\"8\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise2\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp\" onclick=\"DomicileAllerRetour()\" id=\"pdp2\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile2\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse...\" name=\"adresse\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville...\" name=\"cp\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pays...\" name=\"ville\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>   


               {% if app.user %}
               <!--    <button class=\"btn btn-yellow\"  type=\"submit\">Réserver</button>      disabled-->
               <a href=\"confirmationAllerRetour\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                {% else %}
               <!-- <button  class=\"btn btn-yellow\" type=\"submit\" >Réserver </button>      -->
                <a href=\"confirmationAllerRetour\" class=\"btn btn-yellow\"  type=\"submit\">Réserver</a> 
                {% endif %}


            </form>
        </div>
    </div>                                          

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
</div>


{% endblock %}

{% block javascripts %}

<script src=\"javascript/reservationAeroport.js\"></script>

{% endblock %}", "transport/aeroport.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\aeroport.html.twig");
    }
}
