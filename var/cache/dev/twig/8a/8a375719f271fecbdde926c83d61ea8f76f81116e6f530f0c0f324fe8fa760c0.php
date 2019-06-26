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

/* aeroport/aeroportNouveaux.html.twig */
class __TwigTemplate_b9aa187ec2ca893896364897146a30dfe990e44e8436624d24084eb5665db4c9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "aeroport/aeroportNouveaux.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/aeroportNouveaux.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/aeroportNouveaux.html.twig"));

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
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <meta content=\"Jekyll v3.8.5\" name=\"generator\">

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
        echo "    <link href=\"stylesheets/base.css\" rel=\"stylesheet\">
    <link href=\"stylesheets/aeroport.css\" rel=\"stylesheet\">
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
    <div class=\"text-center\">
        <div class=\"p-lg-5\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
        </div>

        <a class=\"mt-3\" href=\"/horairesTarifs\">Consultez les horaires et les tarifs
            <i class=\"far fa-clock fa-lg\"></i>
        </a>

        <div class=\"col-md-8 mx-auto mt-3\">
            <h1>Faites votre réservation</h1>
            <hr class=\"py-3\">

            <div class=\"d-flex justify-content-around\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"CheckAllerSimple\" name=\"exampleRadios\" onclick=\"AllerRetour()\" type=\"radio\" value=\"\">

                    <label class=\"form-check-label\" for=\"\"></label>
                    <p>
                        <strong>Aller simple</strong>
                        <i class=\" ml-3 fas fa-arrow-right\"></i>
                    </p>
                </div>
                <div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"CheckAllerRetour\" name=\"exampleRadios\" onclick=\"AllerRetour()\" type=\"radio\" value=\"\">
                    <label class=\"form-check-label\" for=\"\"></label>
                    <p>
                        <strong>Aller / retour
                        </strong>
                        <i class=\"ml-3 fas fa-arrows-alt-h\"></i>
                    </p>
                </div>
            </div>

            ";
        // line 52
        echo "            <div id=\"FormAllerSimple\" style=\"display: none;\">
                <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationAller");
        echo "\" novalidate>
                    <div
                        class=\"d-flex justify-content-center\">
                        ";
        // line 57
        echo "                        <div class=\"col-md-6 mb-3\">
                            <div>
                                <label for=\"\">Départ</label>
                                <select class=\"form-control\" id=\"depart\" name=\"depart_aller\" onchange=\"AfficherLesBoutonsHoraires()\" style=\"text-align:center;\">

                                    <option value=\"li\">Lieux de départ</option>
                                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 64
            echo "                                        <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                                </select>
                                <div id=\"contentJS\"></div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        ";
        // line 75
        echo "                        ";
        // line 76
        echo "                        <div class=\"col-md-6 mb-3\">
                            <div>
                                <label for=\"\">Destination</label>
                                <select class=\"form-control\" name=\"destination_aller\" required>
                                    <option value=\"\">Lieux de destination</option>
                                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 82
            echo "                                        <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 92
        echo "

                    <hr>

                        <div></div>

                        <div class=\"d-flex justify-content-center\">

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Point de prise</label>
                                    <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                        <option value=\"\">Choisissez un endroit</option>
                                        <option value=\"Gare central\">Gare central</option>
                                        <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                        <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                        <option value=\"Domicile\">Domicile</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>


                        </div>
                        <div class=\"d-flex justify-content-center\">


                            <div class=\"col-md-6 mb-3\" id=\"domicile\" style=\"display: none;\">

                                <label for=\"firstName\">Adresse</label>
                                <input class=\"form-control\" name=\"adresse_aller\" placeholder=\"Adresse ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                <input class=\"form-control\" name=\"cp_aller\" placeholder=\"Code postal ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                <input class=\"form-control\" name=\"ville_aller\" placeholder=\"Ville ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Pays</label>
                                <select class=\"form-control\" name=\"pays_aller_simple\">
                                    <option value=\"\">Pays.......</option>
                                    <option value=\"France\">France</option>
                                    <option value=\"Allemagne\">Allemagne</option>
                                    <option value=\"Suisse\">Suisse</option>
                                </select>

                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center\">

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_aller\" placeholder=\"Nombre de passagger ...\" type=\"number\">
                                </div>
                            </div>

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>

                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de départ</label>
                                    <input class=\"form-control\" name=\"date_depart_aller\" required type=\"date\">
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-around\">
                            <div class=\"row\">
                                <div class=\"form-check col-md-6 mb-3 \">


                                    <input class=\"form-check-input\" disabled id=\"CheckHeurFixe\" name=\"exampleRadios\" onchange=\"HeuresFixesPerso()\" type=\"radio\" value=\"CheckHeurFixe\">


                                    <label class=\"form-check-label\" for=\"\"></label>
                                    <p>
                                        <strong>Horaires fixées par la société</strong>


                                    </p>
                                </div>

                                <div class=\"form-check col-md-6 mb-3\">

                                    <input class=\"form-check-input\" disabled id=\"CheckHeurPerso\" name=\"exampleRadios\" onchange=\"HeuresFixesPerso()\" type=\"radio\" value=\"CheckHeurPerso\">

                                    <label class=\"form-check-label\" for=\"\"></label>
                                    <p>
                                        <strong>Horaires personnalisées</strong>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">


                                <div class=\"form-group\" id=\"FormHeurFixes\" style=\"display:none;\">
                                    <label for=\"\">Horaires fixées par la société</label>
                                    <select class=\"form-control\" id=\"horaire_fixe_val\" name=\"horaire_depart_aller_fixe\" type=\"string\">

                                        <option id=\"horaireDinamique\" value=\"\">HEURE</option>

                                        ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableheure"]) || array_key_exists("tableheure", $context) ? $context["tableheure"] : (function () { throw new RuntimeError('Variable "tableheure" does not exist.', 206, $this->source); })()), 38, [], "array"), "hiver", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 207
            echo "                                            <option value=";
            echo twig_escape_filter($this->env, $context["ville"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["ville"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "

                                    </select>

                                </div>
                                <div class=\"form-group\" id=\"FormHeurPerso\" style=\"display:none;\">


                                    <label for=\"\">Horaires personnalisées</label>

                                    <input class=\"form-control\" id=\"horaire_Perso_val\" name=\"horaire_depart_aller\" placeholder=\"Nombre de passagger ...\">

                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>

                                </div>


                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>


                        ";
        // line 251
        echo "

                        ";
        // line 278
        echo "
                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"firstName\">Commentaire</label>
                                    <input class=\"form-control\" name=\"commentaire_aller\" placeholder=\"Commentaire ...\" type=\"text\">
                                </div>
                            </div>
                        </div>
                        ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "user", [])) {
            // line 288
            echo "                            <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                        ";
        } else {
            // line 290
            echo "                            <button class=\"btn btn-yellow\" disabled type=\"submit\">Réserver !</button>
                        ";
        }
        // line 292
        echo "                    </form>
                </div>
                ";
        // line 295
        echo "                <div id=\"FormAllerRetour\" style=\"display: none;\">
                    <form class=\"needs-validation\" method=\"get\" action=\"";
        // line 296
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\" novalidate>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-6 mb-3\">
                                <div>
                                    <label for=\"\">Départ</label>
                                    <select class=\"form-control\" name=\"depart\" onclick=\"PointdePrise2()\" style=\"text-align:center;\">

                                        <option value=\"li\">Lieux de départ</option>
                                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 305, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 306
            echo "                                            <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "
                                    </select>
                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 mb-3\">
                            <div>
                                <label for=\"\">Destination</label>
                                <select class=\"form-control\" name=\"destination\" required>
                                    ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 320, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 321
            echo "                                        <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "
                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 333
        echo "                    <hr>
                        <div></div>
                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-4 mb-3\">

                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_1\" placeholder=\"Nombre de passagger ...\" type=\"number\">

                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>
                                </div>
                            </div>
                            <hr class=\"hr-vertical\">
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_2\" placeholder=\"Nombre de passagger ...\" type=\"number\">
                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 360
        echo "
                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-4 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de départ</label>
                                    <input class=\"form-control\" name=\"date_depart\" required type=\"date\">
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                            <hr class=\"hr-vertical\" style=\"height: 260px;\">
                            <div class=\"col-md-4 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de retour</label>
                                    <input class=\"form-control\" name=\"date_retour\" required type=\"date\">
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
                                        <option value=\"1\">HEURE</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
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
                                        <option value=\"1\">HEURE</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                    </select>
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center row\">

                            <div class=\"col-md-4\">

                                <div class=\"c\">
                                    <div class=\"form-group\" id=\"pointDePrise2-allez\" style=\"display: block;\">
                                        <label for=\"\">Point de prise</label>
                                        <select class=\"form-control\" id=\"pdp2-allez\" name=\"pdp-allez\" onclick=\"DomicileAllerRetour()\">
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

                                <div class=\"\" id=\"domicile2-allez\" style=\"display:none;\">

                                    <label for=\"firstName\">Adresse</label>
                                    <input class=\"form-control\" name=\"adresse\" placeholder=\"Adresse...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                    <input class=\"form-control\" name=\"cp\" placeholder=\"Ville...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                    <input class=\"form-control\" name=\"ville\" placeholder=\"Pays...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Pays</label>
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
                            <hr class=\"hr-vertical\" id=\"ligne\" style=\"height: 400px; display:none;\">
                            <div class=\"col-md-4\">

                                <div class=\"\">
                                    <div class=\"form-group\" id=\"pointDePrise2-retour\" style=\"display: block;\">
                                        <label for=\"\">Point de prise</label>
                                        <select class=\"form-control\" id=\"pdp2\" name=\"pdp\" onclick=\"DomicileAllerRetour1()\">
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

                                <div class=\"\" id=\"domicile2-retour\" style=\"display: none;\">

                                    <label for=\"firstName\">Adresse</label>
                                    <input class=\"form-control\" name=\"adresse\" placeholder=\"Adresse...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                    <input class=\"form-control\" name=\"cp\" placeholder=\"Ville...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                    <input class=\"form-control\" name=\"ville\" placeholder=\"Pays...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Pays</label>
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
                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"firstName\">Commentaire</label>
                                    <input class=\"form-control\" name=\"commentaire\" placeholder=\"Commentaire ...\" type=\"text\">
                                </div>
                            </div>
                        </div>

                        ";
        // line 513
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [])) {
            // line 514
            echo "                            <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                        ";
        } else {
            // line 516
            echo "                            <button class=\"btn btn-yellow\" disabled type=\"submit\">Réserver !</button>
                        ";
        }
        // line 518
        echo "
                    </form>
                </div>
            </div>

            <script>

                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                    'use strict';
                    window.addEventListener('load', function () { // Fetch all the forms we want to apply custom Bootstrap validation styles to
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

    // line 548
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 549
        echo "
        <script src=\"javascript/reservationAeroport.js\"></script>
        <script src=\"javascript/fonctionsjquery.js\" type=\"text/javascript\"></script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/aeroportNouveaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 549,  714 => 548,  676 => 518,  672 => 516,  668 => 514,  666 => 513,  511 => 360,  483 => 333,  472 => 323,  461 => 321,  457 => 320,  443 => 308,  432 => 306,  428 => 305,  416 => 296,  413 => 295,  409 => 292,  405 => 290,  401 => 288,  399 => 287,  388 => 278,  384 => 251,  356 => 209,  345 => 207,  341 => 206,  225 => 92,  216 => 84,  205 => 82,  201 => 81,  194 => 76,  192 => 75,  182 => 66,  171 => 64,  167 => 63,  159 => 57,  153 => 53,  150 => 52,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}

    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <meta content=\"Jekyll v3.8.5\" name=\"generator\">

{% endblock %}

{% block stylesheets %}
    <link href=\"stylesheets/base.css\" rel=\"stylesheet\">
    <link href=\"stylesheets/aeroport.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

    <div class=\"text-center\">
        <div class=\"p-lg-5\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
        </div>

        <a class=\"mt-3\" href=\"/horairesTarifs\">Consultez les horaires et les tarifs
            <i class=\"far fa-clock fa-lg\"></i>
        </a>

        <div class=\"col-md-8 mx-auto mt-3\">
            <h1>Faites votre réservation</h1>
            <hr class=\"py-3\">

            <div class=\"d-flex justify-content-around\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"CheckAllerSimple\" name=\"exampleRadios\" onclick=\"AllerRetour()\" type=\"radio\" value=\"\">

                    <label class=\"form-check-label\" for=\"\"></label>
                    <p>
                        <strong>Aller simple</strong>
                        <i class=\" ml-3 fas fa-arrow-right\"></i>
                    </p>
                </div>
                <div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"CheckAllerRetour\" name=\"exampleRadios\" onclick=\"AllerRetour()\" type=\"radio\" value=\"\">
                    <label class=\"form-check-label\" for=\"\"></label>
                    <p>
                        <strong>Aller / retour
                        </strong>
                        <i class=\"ml-3 fas fa-arrows-alt-h\"></i>
                    </p>
                </div>
            </div>

            {# .......................................................................Form1................................................................... #}
            <div id=\"FormAllerSimple\" style=\"display: none;\">
                <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"{{ path('reservationAller')}}\" novalidate>
                    <div
                        class=\"d-flex justify-content-center\">
                        {# ...................................lieux Départ...........................  #}
                        <div class=\"col-md-6 mb-3\">
                            <div>
                                <label for=\"\">Départ</label>
                                <select class=\"form-control\" id=\"depart\" name=\"depart_aller\" onchange=\"AfficherLesBoutonsHoraires()\" style=\"text-align:center;\">

                                    <option value=\"li\">Lieux de départ</option>
                                    {% for ville in lieux %}
                                        <option name=\"FormulaireDepart\" value={{ville.id}}>{{ville.lieux}}</option>
                                    {% endfor %}

                                </select>
                                <div id=\"contentJS\"></div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        {# ...................................Fin...........................  #}
                        {# ...................................lieux Destination...........................  #}
                        <div class=\"col-md-6 mb-3\">
                            <div>
                                <label for=\"\">Destination</label>
                                <select class=\"form-control\" name=\"destination_aller\" required>
                                    <option value=\"\">Lieux de destination</option>
                                    {% for ville in lieux %}
                                        <option name=\"FormulaireDepart\" value={{ville.id}}>{{ville.lieux}}</option>
                                    {% endfor %}
                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                    </div>
                    {# ...................................Fin...........................  #}


                    <hr>

                        <div></div>

                        <div class=\"d-flex justify-content-center\">

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Point de prise</label>
                                    <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                        <option value=\"\">Choisissez un endroit</option>
                                        <option value=\"Gare central\">Gare central</option>
                                        <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                        <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                        <option value=\"Domicile\">Domicile</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>


                        </div>
                        <div class=\"d-flex justify-content-center\">


                            <div class=\"col-md-6 mb-3\" id=\"domicile\" style=\"display: none;\">

                                <label for=\"firstName\">Adresse</label>
                                <input class=\"form-control\" name=\"adresse_aller\" placeholder=\"Adresse ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                <input class=\"form-control\" name=\"cp_aller\" placeholder=\"Code postal ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                <input class=\"form-control\" name=\"ville_aller\" placeholder=\"Ville ...\" type=\"text\">
                                <label class=\"mt-3\" for=\"firstName\">Pays</label>
                                <select class=\"form-control\" name=\"pays_aller_simple\">
                                    <option value=\"\">Pays.......</option>
                                    <option value=\"France\">France</option>
                                    <option value=\"Allemagne\">Allemagne</option>
                                    <option value=\"Suisse\">Suisse</option>
                                </select>

                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center\">

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_aller\" placeholder=\"Nombre de passagger ...\" type=\"number\">
                                </div>
                            </div>

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>

                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de départ</label>
                                    <input class=\"form-control\" name=\"date_depart_aller\" required type=\"date\">
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-around\">
                            <div class=\"row\">
                                <div class=\"form-check col-md-6 mb-3 \">


                                    <input class=\"form-check-input\" disabled id=\"CheckHeurFixe\" name=\"exampleRadios\" onchange=\"HeuresFixesPerso()\" type=\"radio\" value=\"CheckHeurFixe\">


                                    <label class=\"form-check-label\" for=\"\"></label>
                                    <p>
                                        <strong>Horaires fixées par la société</strong>


                                    </p>
                                </div>

                                <div class=\"form-check col-md-6 mb-3\">

                                    <input class=\"form-check-input\" disabled id=\"CheckHeurPerso\" name=\"exampleRadios\" onchange=\"HeuresFixesPerso()\" type=\"radio\" value=\"CheckHeurPerso\">

                                    <label class=\"form-check-label\" for=\"\"></label>
                                    <p>
                                        <strong>Horaires personnalisées</strong>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">


                                <div class=\"form-group\" id=\"FormHeurFixes\" style=\"display:none;\">
                                    <label for=\"\">Horaires fixées par la société</label>
                                    <select class=\"form-control\" id=\"horaire_fixe_val\" name=\"horaire_depart_aller_fixe\" type=\"string\">

                                        <option id=\"horaireDinamique\" value=\"\">HEURE</option>

                                        {% for ville in tableheure[38][\"hiver\"] %}
                                            <option value={{ville}}>{{ville}}</option>
                                        {% endfor %}


                                    </select>

                                </div>
                                <div class=\"form-group\" id=\"FormHeurPerso\" style=\"display:none;\">


                                    <label for=\"\">Horaires personnalisées</label>

                                    <input class=\"form-control\" id=\"horaire_Perso_val\" name=\"horaire_depart_aller\" placeholder=\"Nombre de passagger ...\">

                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>

                                </div>


                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>


                        {# <div class=\"d-flex justify-content-center\">
                                                                                                    <div class=\"col-md-6 mb-3\">
                                                                                                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                                                                                                            <label for=\"\">Point de prise</label>
                                                                                                            <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onclick=\"Domicile()\">
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
                                                                                                </div> #}


                        {# <div class=\"d-flex justify-content-center\">
                                                                        
                                                                        
                                                                                                    <div class=\"col-md-6 mb-3\" id=\"domicile\" style=\"display: none;\">
                                                                        
                                                                                                        <label for=\"firstName\">Adresse</label>
                                                                                                        <input class=\"form-control\" name=\"adresse_aller\" placeholder=\"Adresse ...\" type=\"text\">
                                                                                                        <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                                                                                        <input class=\"form-control\" name=\"cp_aller\" placeholder=\"Code postal ...\" type=\"text\">
                                                                                                        <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                                                                                        <input class=\"form-control\" name=\"ville_aller\" placeholder=\"Ville ...\" type=\"text\">
                                                                                                        <label class=\"mt-3\" for=\"firstName\">Pays</label>
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
                                                                                                </div> #}

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"firstName\">Commentaire</label>
                                    <input class=\"form-control\" name=\"commentaire_aller\" placeholder=\"Commentaire ...\" type=\"text\">
                                </div>
                            </div>
                        </div>
                        {% if app.user %}
                            <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                        {% else %}
                            <button class=\"btn btn-yellow\" disabled type=\"submit\">Réserver !</button>
                        {% endif %}
                    </form>
                </div>
                {# ..................................................................................form1 fin............................................................................................... #}
                <div id=\"FormAllerRetour\" style=\"display: none;\">
                    <form class=\"needs-validation\" method=\"get\" action=\"{{ path('reservation')}}\" novalidate>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-6 mb-3\">
                                <div>
                                    <label for=\"\">Départ</label>
                                    <select class=\"form-control\" name=\"depart\" onclick=\"PointdePrise2()\" style=\"text-align:center;\">

                                        <option value=\"li\">Lieux de départ</option>
                                        {% for ville in lieux %}
                                            <option name=\"FormulaireDepart\" value={{ville.id}}>{{ville.lieux}}</option>
                                        {% endfor %}

                                    </select>
                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 mb-3\">
                            <div>
                                <label for=\"\">Destination</label>
                                <select class=\"form-control\" name=\"destination\" required>
                                    {% for ville in lieux %}
                                        <option name=\"FormulaireDepart\" value={{ville.id}}>{{ville.lieux}}</option>
                                    {% endfor %}

                                </select>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>
                    </div>

                    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                    <hr>
                        <div></div>
                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-4 mb-3\">

                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_1\" placeholder=\"Nombre de passagger ...\" type=\"number\">

                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>
                                </div>
                            </div>
                            <hr class=\"hr-vertical\">
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"\">Nombre de Passager</label>
                                    <input class=\"form-control\" name=\"nb_passager_2\" placeholder=\"Nombre de passagger ...\" type=\"number\">
                                    <div class=\"invalid-feedback\">
                                        Please choose a number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-4 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de départ</label>
                                    <input class=\"form-control\" name=\"date_depart\" required type=\"date\">
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                            <hr class=\"hr-vertical\" style=\"height: 260px;\">
                            <div class=\"col-md-4 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"\">Date de retour</label>
                                    <input class=\"form-control\" name=\"date_retour\" required type=\"date\">
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
                                        <option value=\"1\">HEURE</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
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
                                        <option value=\"1\">HEURE</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                    </select>
                                </div>
                                <div class=\"invalid-feedback\">
                                    Please choose a number.
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-center row\">

                            <div class=\"col-md-4\">

                                <div class=\"c\">
                                    <div class=\"form-group\" id=\"pointDePrise2-allez\" style=\"display: block;\">
                                        <label for=\"\">Point de prise</label>
                                        <select class=\"form-control\" id=\"pdp2-allez\" name=\"pdp-allez\" onclick=\"DomicileAllerRetour()\">
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

                                <div class=\"\" id=\"domicile2-allez\" style=\"display:none;\">

                                    <label for=\"firstName\">Adresse</label>
                                    <input class=\"form-control\" name=\"adresse\" placeholder=\"Adresse...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                    <input class=\"form-control\" name=\"cp\" placeholder=\"Ville...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                    <input class=\"form-control\" name=\"ville\" placeholder=\"Pays...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Pays</label>
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
                            <hr class=\"hr-vertical\" id=\"ligne\" style=\"height: 400px; display:none;\">
                            <div class=\"col-md-4\">

                                <div class=\"\">
                                    <div class=\"form-group\" id=\"pointDePrise2-retour\" style=\"display: block;\">
                                        <label for=\"\">Point de prise</label>
                                        <select class=\"form-control\" id=\"pdp2\" name=\"pdp\" onclick=\"DomicileAllerRetour1()\">
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

                                <div class=\"\" id=\"domicile2-retour\" style=\"display: none;\">

                                    <label for=\"firstName\">Adresse</label>
                                    <input class=\"form-control\" name=\"adresse\" placeholder=\"Adresse...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                                    <input class=\"form-control\" name=\"cp\" placeholder=\"Ville...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Ville</label>
                                    <input class=\"form-control\" name=\"ville\" placeholder=\"Pays...\" type=\"text\">
                                    <label class=\"mt-3\" for=\"firstName\">Pays</label>
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
                        </div>

                        <div class=\"d-flex justify-content-center\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"form-group\">
                                    <label for=\"firstName\">Commentaire</label>
                                    <input class=\"form-control\" name=\"commentaire\" placeholder=\"Commentaire ...\" type=\"text\">
                                </div>
                            </div>
                        </div>

                        {% if app.user %}
                            <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                        {% else %}
                            <button class=\"btn btn-yellow\" disabled type=\"submit\">Réserver !</button>
                        {% endif %}

                    </form>
                </div>
            </div>

            <script>

                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                    'use strict';
                    window.addEventListener('load', function () { // Fetch all the forms we want to apply custom Bootstrap validation styles to
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
        <script src=\"javascript/fonctionsjquery.js\" type=\"text/javascript\"></script>


    {% endblock %}

", "aeroport/aeroportNouveaux.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\aeroport\\aeroportNouveaux.html.twig");
    }
}
