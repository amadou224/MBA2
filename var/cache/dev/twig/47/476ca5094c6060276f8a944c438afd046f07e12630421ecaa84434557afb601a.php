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

/* transport/memorialPageAcceuil.html.twig */
class __TwigTemplate_73013d90facd777e1912d3f63f31045d8b56e9727d8783d9a6321a9d3bbf4b07 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/memorialPageAcceuil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/memorialPageAcceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/memorialPageAcceuil.html.twig"));

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
        echo "

    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
 
  
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"memorialPageAcceuil\">Acceuil <span class=\"sr-only\">(current)</span></a>
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
            <form class=\"needs-validation\" name=\"formReservation\" method=\"post\" action=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoieBddMemorialAller");
        echo "\"
               >                                                        
                <div class=\"d-flex justify-content-center\">                                                                       

                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Gare Centrale\">Gare Centrale</option>
                                <option value=\"Palais des Droits de l'homme\">Palais des Droits de l'homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Bruxelles\">Bruxelles</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                
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
                                <option value=\"Mémorial Struthof\">Mémorial Struthof </option>
                               
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
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=\"email\">
                    
                  </div> 
                  </div>
                  </div>    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"text\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
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
                            <select class=\"form-control\" onclick=\"HeureAller()\" name=\"heure_depart\">
                                <option value=\"08h30\">08h30</option> 
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                
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
                        <center>
                              <input type=\"submit\"   class=\"btn btn-yellow\"   value=\"Reserver\"  />  
                        </center>                                             

            </form>
        </div>
<!--                           ALLER RETOUR                                        -->


        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoieBddMemorialAllerRetour");
        echo "\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Gare Centrale\">Gare Centrale</option>
                                <option value=\"Palais des Droits de l'homme\">Palais des Droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Bruxelles\">Bruxelles</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\"  required>
                                <option value=\"Mémorial Struthof\">Mémorial Struthof</option>
                               
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
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=\"mail\">
                    
                </div> </div></div>

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"text\"class=\"form-control\" placeholder=\"Téléphone\" name=\"telephone\">
                          </div>
                      </div>
                    </div>

                  <hr>

                <div>

                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">  

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager Aller </label>
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
                            <label for=\"\">Nombre de Passager Rétour</label>
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
                                <option value=\"08h30\">08h30</option>
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                <option value=\"13h30\">13h30</option>
                                <option value=\"14h30\">14h30</option>
                                <option value=\"15h30\">15h30</option>
                                <option value=\"16h30\">16h30</option>
                                <option value=\"17h30\">17h30</option>
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
                               <option value=\"08h30\">08h30</option>
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                <option value=\"13h30\">13h30</option>
                                <option value=\"14h30\">14h30</option>
                                <option value=\"15h30\">15h30</option>
                                <option value=\"16h30\">16h30</option>
                                <option value=\"17h30\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
<!--                    reservation domicile        -->   

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
                    <center>
                      <input type=\"submit\"   class=\"btn btn-yellow\"   value=\"Reserver\" />
                    </center>
            


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

    // line 482
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 483
        echo "
<script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transport/memorialPageAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 483,  593 => 482,  362 => 260,  199 => 100,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
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


    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
 
  
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"memorialPageAcceuil\">Acceuil <span class=\"sr-only\">(current)</span></a>
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
            <form class=\"needs-validation\" name=\"formReservation\" method=\"post\" action=\"{{ path('envoieBddMemorialAller')}}\"
               >                                                        
                <div class=\"d-flex justify-content-center\">                                                                       

                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Gare Centrale\">Gare Centrale</option>
                                <option value=\"Palais des Droits de l'homme\">Palais des Droits de l'homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Bruxelles\">Bruxelles</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                
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
                                <option value=\"Mémorial Struthof\">Mémorial Struthof </option>
                               
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
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=\"email\">
                    
                  </div> 
                  </div>
                  </div>    

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"text\"class=\"form-control\" placeholder=\"Téléphone\" name=\"phone\">
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
                            <select class=\"form-control\" onclick=\"HeureAller()\" name=\"heure_depart\">
                                <option value=\"08h30\">08h30</option> 
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                
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
                        <center>
                              <input type=\"submit\"   class=\"btn btn-yellow\"   value=\"Reserver\"  />  
                        </center>                                             

            </form>
        </div>
<!--                           ALLER RETOUR                                        -->


        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"{{ path('envoieBddMemorialAllerRetour' )}}\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Gare Centrale\">Gare Centrale</option>
                                <option value=\"Palais des Droits de l'homme\">Palais des Droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Bruxelles\">Bruxelles</option>
                                <option value=\"Luxembourg\">Luxembourg</option>
                                
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\"  required>
                                <option value=\"Mémorial Struthof\">Mémorial Struthof</option>
                               
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
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" name=\"mail\">
                    
                </div> </div></div>

                    <div class=\"d-flex justify-content-center\">
                        <div class=\"col-md-6 mb-3\">
                           <div class=\"form-group\">
                               <label for=\"phone\">Téléphone:</label>
                               <input type=\"text\"class=\"form-control\" placeholder=\"Téléphone\" name=\"telephone\">
                          </div>
                      </div>
                    </div>

                  <hr>

                <div>

                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">  

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager Aller </label>
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
                            <label for=\"\">Nombre de Passager Rétour</label>
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
                                <option value=\"08h30\">08h30</option>
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                <option value=\"13h30\">13h30</option>
                                <option value=\"14h30\">14h30</option>
                                <option value=\"15h30\">15h30</option>
                                <option value=\"16h30\">16h30</option>
                                <option value=\"17h30\">17h30</option>
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
                               <option value=\"08h30\">08h30</option>
                                <option value=\"09h30\">09h30</option>
                                <option value=\"10h30\">10h30</option>
                                <option value=\"11h30\">11h30</option>
                                <option value=\"13h30\">13h30</option>
                                <option value=\"14h30\">14h30</option>
                                <option value=\"15h30\">15h30</option>
                                <option value=\"16h30\">16h30</option>
                                <option value=\"17h30\">17h30</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
<!--                    reservation domicile        -->   

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
                    <center>
                      <input type=\"submit\"   class=\"btn btn-yellow\"   value=\"Reserver\" />
                    </center>
            


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

{% endblock %}", "transport/memorialPageAcceuil.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\memorialPageAcceuil.html.twig");
    }
}
