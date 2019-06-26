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

/* transport/contact.html.twig */
class __TwigTemplate_f20b7f6fe92442bb482ae24cf2567aa73c17da7fc9185509a43095ab1ce61c1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <title>Mémorial de struthof</title>
    
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
  
</head>
<body>
<div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>


</br>
<div align=\"center\">
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
            </td>
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong>ACCEUIL &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong>INFORMATIONS &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong>TARIF &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong>CONTACT&nbsp</strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong>GALERIE</strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
</br>

<h1 style=\"text-align:center\"><strong> <em> Contact </em></strong></h1>

<hr style=\"border:solid black 1px;width:75%;\" /></br>
<p style=\"text-align:center\"><em><strong> Pour nous contacter, il y a plussieurs possibilitées, mais vérifiez bien que vous n'etes pas dans un des cas suivant:</strong></em>
</p>
<ul>
        <li>
        Notre Service vous plait, et vous souhaitez nous remercier. Dans ce cas, il n'y a le livre d'or.
         </li>
         <li>
         Vous voulez réserver.Toutes les réservations se font en ligne, nous n'en effectuons pas par téléphone.</br>
         Néamoins, si vous avez des difficultés à réserver, si vous n'avez pas d'accès à internet, vous pouvez nous 
         contacter via les moins ci-dessous.</br></br>
        </li>
        <p style=\"text-align:center\" ><em><strong>Pour nous contacter, vous avez differents moyens à votre disposition:</strong></em></p>
        <li>
            Passer à nos bureaux: AFI Alsace 2,Rue du Coq 67000 Strasbourg FRANCE.
        </li>
        <li>
            Par téléphone, au <strong> 0388222271</strong>, de 9h00 à 12h00 et de 14h00 à 18h00
        </li>
        <li>
            En cas d'urgence, au <strong>06 27 18 12 52</strong>
        </li>
        <li>
            Par email, à l'adresse <a href=\"info@alsace-navette.com\">info@alsace-navette.com</a>
        </li>

    
    
</ul>
</br>

<hr style=\"border:solid black 1px;width:75%;\" />

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
        
                   <!-- https://fr-fr.facebook.com/pages/Artecal-Informatique/127716990647161-->

                   <!-- <li><a class=\"text-muted\" href=\"#\"> <i class=\"fab fa-facebook-f fa-lg\"></i> </a></li> -->
                    <!--   <li><a class=\"text-muted\" href=\"#\"><i class=\"fab fa-instagram fa-lg\"></i></a></li> -->
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
        return "transport/contact.html.twig";
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
    <title>Mémorial de struthof</title>
    
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
  
</head>
<body>
<div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>


</br>
<div align=\"center\">
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
            </td>
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong>ACCEUIL &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong>INFORMATIONS &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong>TARIF &nbsp</strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong>CONTACT&nbsp</strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong>GALERIE</strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
</br>

<h1 style=\"text-align:center\"><strong> <em> Contact </em></strong></h1>

<hr style=\"border:solid black 1px;width:75%;\" /></br>
<p style=\"text-align:center\"><em><strong> Pour nous contacter, il y a plussieurs possibilitées, mais vérifiez bien que vous n'etes pas dans un des cas suivant:</strong></em>
</p>
<ul>
        <li>
        Notre Service vous plait, et vous souhaitez nous remercier. Dans ce cas, il n'y a le livre d'or.
         </li>
         <li>
         Vous voulez réserver.Toutes les réservations se font en ligne, nous n'en effectuons pas par téléphone.</br>
         Néamoins, si vous avez des difficultés à réserver, si vous n'avez pas d'accès à internet, vous pouvez nous 
         contacter via les moins ci-dessous.</br></br>
        </li>
        <p style=\"text-align:center\" ><em><strong>Pour nous contacter, vous avez differents moyens à votre disposition:</strong></em></p>
        <li>
            Passer à nos bureaux: AFI Alsace 2,Rue du Coq 67000 Strasbourg FRANCE.
        </li>
        <li>
            Par téléphone, au <strong> 0388222271</strong>, de 9h00 à 12h00 et de 14h00 à 18h00
        </li>
        <li>
            En cas d'urgence, au <strong>06 27 18 12 52</strong>
        </li>
        <li>
            Par email, à l'adresse <a href=\"info@alsace-navette.com\">info@alsace-navette.com</a>
        </li>

    
    
</ul>
</br>

<hr style=\"border:solid black 1px;width:75%;\" />

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
        
                   <!-- https://fr-fr.facebook.com/pages/Artecal-Informatique/127716990647161-->

                   <!-- <li><a class=\"text-muted\" href=\"#\"> <i class=\"fab fa-facebook-f fa-lg\"></i> </a></li> -->
                    <!--   <li><a class=\"text-muted\" href=\"#\"><i class=\"fab fa-instagram fa-lg\"></i></a></li> -->
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
</html>", "transport/contact.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\contact.html.twig");
    }
}
