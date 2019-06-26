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

/* transport/tarif.html.twig */
class __TwigTemplate_af8cbcdff72592d9a2469b19569fb21e1b7b341ec1f8cd5556e5b482a801095d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/tarif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/tarif.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <title>MEMORIAL DE STRUTHOF Informations</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
  
</head>
<body>
    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>



</br>
<div    align=\"center\">
\t<table>
\t\t<tr >
             <td>
                <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
            </td><!--test commit -->
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong>ACCEUIL &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong>INFORMATIONS &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong>TARIF &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong>CONTACT &nbsp</strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong>GALERIE</strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
</br>



    <h1 style=\"text-align:center\"><strong> <em> Tarif </em></strong></h1>
    <h3 style=\"text-align:center;color:#780E47\">Nombre de personnes du forfait minimum 4</h3>




    <!-- TABLE PRIX     TARIF             -->


   <table class=\"table table-dark\">
  <thead>
    <tr>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\">Par personne</th>
      <th scope=\"col\">Tarif minimum</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td>Aller</td>
      <td>20€</td>
      <td>80€</td>
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td>Aller-retour</br>(Même jour)</td>
      <td>30€</td>
      <td>120€</td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td>Aller-Retour</br>(Jour différent)</td>
      <td>40€</td>
      <td>160€</td>
    </tr>
  </tbody>
</table>

    <!-- fin table prix  -->
<footer class=\"py-5\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2007-2019</small>
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
                    <li><a class=\"text-muted\" href=\"transport\">Transport Mémorial Struthof</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#qui\">Qui sommes-nous ?</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#MentionLegale\"> Mention légal</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#CGV\">CGV</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#RGPD\">RGPD</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Réseaux Sociaux</h5>
                <ul class=\"list-unstyled text-small\">

                <li>
                <a href=\"#\">
                <img class=\"alignnone  wp-image-284\" alt=\"facebook\"
                 src=\"http://www.artecal.fr/wp-content/uploads/2014/01/facebook.png\" width=\"30\" height=\"30\" />
                 </a>
                 </li>
        
                </ul>
            </div>
        </div>
        <div class=\"d-flex justify-content-around mt-2 mt-3\">
            <a href=\"https://www.marque.alsace/\"><img src=\"images/Alsace.png\" alt=\"\"></a>
            <a href=\"\"><img src=\"images/RF.svg\" alt=\"\" height=\"72\"></a>
        </div>
    </footer>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/tarif.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <title>MEMORIAL DE STRUTHOF Informations</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
  
</head>
<body>
    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>



</br>
<div    align=\"center\">
\t<table>
\t\t<tr >
             <td>
                <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
            </td><!--test commit -->
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong>ACCEUIL &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong>INFORMATIONS &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong>TARIF &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong>CONTACT &nbsp</strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong>GALERIE</strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
</br>



    <h1 style=\"text-align:center\"><strong> <em> Tarif </em></strong></h1>
    <h3 style=\"text-align:center;color:#780E47\">Nombre de personnes du forfait minimum 4</h3>




    <!-- TABLE PRIX     TARIF             -->


   <table class=\"table table-dark\">
  <thead>
    <tr>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\">Par personne</th>
      <th scope=\"col\">Tarif minimum</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td>Aller</td>
      <td>20€</td>
      <td>80€</td>
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td>Aller-retour</br>(Même jour)</td>
      <td>30€</td>
      <td>120€</td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td>Aller-Retour</br>(Jour différent)</td>
      <td>40€</td>
      <td>160€</td>
    </tr>
  </tbody>
</table>

    <!-- fin table prix  -->
<footer class=\"py-5\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
                <small class=\"d-block mb-3 text-muted\">&copy; 2007-2019</small>
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
                    <li><a class=\"text-muted\" href=\"transport\">Transport Mémorial Struthof</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#qui\">Qui sommes-nous ?</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#MentionLegale\"> Mention légal</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#CGV\">CGV</a></li>
                    <li><a class=\"text-muted\" href=\"#\" data-toggle=\"modal\" data-target=\"#RGPD\">RGPD</a></li>
                </ul>
            </div>
            <div class=\"\">
                <h5>Réseaux Sociaux</h5>
                <ul class=\"list-unstyled text-small\">

                <li>
                <a href=\"#\">
                <img class=\"alignnone  wp-image-284\" alt=\"facebook\"
                 src=\"http://www.artecal.fr/wp-content/uploads/2014/01/facebook.png\" width=\"30\" height=\"30\" />
                 </a>
                 </li>
        
                </ul>
            </div>
        </div>
        <div class=\"d-flex justify-content-around mt-2 mt-3\">
            <a href=\"https://www.marque.alsace/\"><img src=\"images/Alsace.png\" alt=\"\"></a>
            <a href=\"\"><img src=\"images/RF.svg\" alt=\"\" height=\"72\"></a>
        </div>
    </footer>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

</body>
</html>", "transport/tarif.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\tarif.html.twig");
    }
}
