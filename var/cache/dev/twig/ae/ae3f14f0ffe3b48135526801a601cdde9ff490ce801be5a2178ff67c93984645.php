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

/* admistration_reservation_aeroport/index.html.twig */
class __TwigTemplate_620a0b4471b306e5886941260480fbe98dee80126249f8f232ad7c049fcffcfe extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admistration_reservation_aeroport/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admistration_reservation_aeroport/index.html.twig"));

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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <div id=\"FormAllerSimple\" style=\"display:block;\">
        <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifie_reservation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 17, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" novalidate>


            <div
                class=\"d-flex justify-content-center\">
                ";
        // line 23
        echo "                <div class=\"col-md-6 mb-3\">
                    <div>
                        <label for=\"\">Départ</label>
                        <select class=\"form-control\" id=\"depart\" name=\"depart_aller\" onclick=\"AfficherLesBoutonsHoraires()\" style=\"text-align:center;\">


                            <option value=";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 29, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 29, $this->source); })()), "departDestination", []), "depart", []), "html", null, true);
        echo "</option>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 31
            echo "                                <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                        </select>
                        <div id=\"contentJS\"></div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                ";
        // line 42
        echo "                ";
        // line 43
        echo "                <div class=\"col-md-6 mb-3\">
                    <div>
                        <label for=\"\">Destination</label>
                        <select class=\"form-control Destination\" name=\"destination_aller\" required>
                            <option value=";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 47, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 47, $this->source); })()), "departDestination", []), "destination", []), "html", null, true);
        echo "</option>
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 49
            echo "                                <option name=\"FormulaireDepart\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "lieux", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </select>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 59
        echo "

            <hr>

                <div></div>
                ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 64, $this->source); })()), "pointDePrise", []) == "Domicile")) {
            // line 65
            echo "

                    <div class=\"d-flex justify-content-center\">

                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-group\">

                                <label for=\"\">Point de prise</label>
                                <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                    <option value=";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 74, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 74, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo "</option>
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


                        <div class=\"col-md-6 mb-3\" id=\"domicile\" style=\"display:block;\">

                            <label for=\"firstName\">Adresse</label>
                            <input class=\"form-control\" name=\"adresse_aller\" placeholder=\"Adresse ...\" type=\"text\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 95, $this->source); })()), "adresse", []), "html", null, true);
            echo " \">


                            <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                            <input class=\"form-control\" name=\"cp_aller\" placeholder=\"Code postal ...\" type=\"text\" value=";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 99, $this->source); })()), "codepostal", []), "html", null, true);
            echo ">


                            <label class=\"mt-3\" for=\"firstName\">Ville</label>
                            <input class=\"form-control\" name=\"ville_aller\" placeholder=\"Ville ...\" type=\"text\" value=";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 103, $this->source); })()), "ville", []), "html", null, true);
            echo ">


                            <label class=\"mt-3\" for=\"firstName\">Pays</label>
                            <select class=\"form-control\" name=\"pays_aller_simple\">
                                <option value=";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 108, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 108, $this->source); })()), "pays", []), "html", null, true);
            echo "</option>
                                <option value=\"France\">France</option>
                                <option value=\"Allemagne\">Allemagne</option>
                                <option value=\"Suisse\">Suisse</option>
                            </select>

                        </div>
                    </div>
                ";
        } else {
            // line 117
            echo "

                    <div class=\"d-flex justify-content-center\">

                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-group\">

                                <label for=\"\">Point de prise</label>
                                <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                    <option value=";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 126, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 126, $this->source); })()), "pointDePrise", []), "html", null, true);
            echo "</option>
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


                ";
        }
        // line 144
        echo "                <div class=\"d-flex justify-content-center\">

                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input class=\"form-control\" name=\"nb_passager_aller\" placeholder=\"Nombre de passagger ...\" type=\"number\" value=";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 149, $this->source); })()), "nbPassager", []), "html", null, true);
        echo ">


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
                            ";
        // line 165
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 165, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "
                            <input class=\"form-control\" name=\"date_depart_aller\" required type=\"date\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 166, $this->source); })()), "dateDepart", []), "d/m/y"), "html", null, true);
        echo "\">


                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-around\">
                    <div class=\"row\"></div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">


                        <div class=\"form-group\" id=\"FormHeurFixes\" style=\"display:none;\">
                            <label for=\"\">Horaires fixées par la société</label>
                            <select class=\"form-control\" id=\"horaire_fixe_val\" name=\"horaire_depart_aller_fixe\" type=\"string\">


                                <div id=\"for\"></div>

                            </select>

                        </div>
                        <div class=\"form-group\" id=\"FormHeurPerso\" style=\"display:none;\">


                            <label for=\"\">Horaires personnalisées</label>

                            <input class=\"form-control\" id=\"horaire_Perso_val\" name=\"horaire_depart_aller\" placeholder=\"Veuillez choisir une heure de rendez-vous :\" style=\" text-align:center\" type=\"time\">


                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>

                        </div>


                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"d-flex justify-content-center\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">Commentaire</label>
                        <input class=\"form-control\" name=\"commentaire_aller\" type=\"text\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 220, $this->source); })()), "commentaire", []), "html", null, true);
        echo "\">
                    </div>
                </div>


            </div>
            ";
        // line 227
        echo "            <div class=\"d-flex justify-content-center\">

                <div class=\"col-md-6 mb-3\">
                    <div>
                        <label for=\"\">Chauffeur</label>
                        <select class=\"form-control Destination\" name=\"Chauffeur\" required>

                            ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Chauffeur"]) || array_key_exists("Chauffeur", $context) ? $context["Chauffeur"] : (function () { throw new RuntimeError('Variable "Chauffeur" does not exist.', 234, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chauffeurs"]) {
            // line 235
            echo "                                <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeurs"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeurs"], "nom", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeurs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                        </select>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 246
        echo "        <div class=\"d-flex justify-content-center\">

            <div class=\"col-md-6 mb-3\">
                <div>
                    <label for=\"\">Véhicule</label>

                    <select class=\"form-control Destination\" name=\"Vehicule\" required>


                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Vehicule"]) || array_key_exists("Vehicule", $context) ? $context["Vehicule"] : (function () { throw new RuntimeError('Variable "Vehicule" does not exist.', 255, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 256
            echo "                            <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", []), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "typeVehicule", []), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                    </select>
                    <div class=\"invalid-feedback\">
                        Please choose a number.
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 267
        echo "
    <div class=\"d-flex justify-content-center\">

        <button class=\"btn btn-success\" type=\"submit\">Confirmer la réservation !</button>

    </div>
    <div class=\"d-flex justify-content-center\">

        <a class=\"btn btn-danger\" href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annulation_reservation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Reservation"]) || array_key_exists("Reservation", $context) ? $context["Reservation"] : (function () { throw new RuntimeError('Variable "Reservation" does not exist.', 275, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" type=\"submit\">Annuler la réservation</a>


    </div>

</form></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script><script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script><script src=\"javascript/reservationAeroport.js\"></script><script src=\"javascript/fonctionsjquery.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admistration_reservation_aeroport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 280,  494 => 275,  484 => 267,  474 => 258,  463 => 256,  459 => 255,  448 => 246,  438 => 237,  427 => 235,  423 => 234,  414 => 227,  405 => 220,  348 => 166,  344 => 165,  325 => 149,  318 => 144,  295 => 126,  284 => 117,  270 => 108,  262 => 103,  255 => 99,  248 => 95,  222 => 74,  211 => 65,  209 => 64,  202 => 59,  193 => 51,  182 => 49,  178 => 48,  172 => 47,  166 => 43,  164 => 42,  154 => 33,  143 => 31,  139 => 30,  133 => 29,  125 => 23,  117 => 17,  113 => 15,  104 => 14,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
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

    <div id=\"FormAllerSimple\" style=\"display:block;\">
        <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"{{ path('modifie_reservation',{'id':Reservation.id})}}\" novalidate>


            <div
                class=\"d-flex justify-content-center\">
                {# ...................................lieux Départ...........................  #}
                <div class=\"col-md-6 mb-3\">
                    <div>
                        <label for=\"\">Départ</label>
                        <select class=\"form-control\" id=\"depart\" name=\"depart_aller\" onclick=\"AfficherLesBoutonsHoraires()\" style=\"text-align:center;\">


                            <option value={{Reservation.departDestination.depart}}>{{Reservation.departDestination.depart}}</option>
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
                        <select class=\"form-control Destination\" name=\"destination_aller\" required>
                            <option value={{Reservation.departDestination.destination}}>{{Reservation.departDestination.destination}}</option>
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
                {% if Reservation.pointDePrise == \"Domicile\" %}


                    <div class=\"d-flex justify-content-center\">

                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-group\">

                                <label for=\"\">Point de prise</label>
                                <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                    <option value={{Reservation.pointDePrise}}>{{Reservation.pointDePrise}}</option>
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


                        <div class=\"col-md-6 mb-3\" id=\"domicile\" style=\"display:block;\">

                            <label for=\"firstName\">Adresse</label>
                            <input class=\"form-control\" name=\"adresse_aller\" placeholder=\"Adresse ...\" type=\"text\" value=\"{{Reservation.adresse}} \">


                            <label class=\"mt-3\" for=\"firstName\">Code Postal</label>
                            <input class=\"form-control\" name=\"cp_aller\" placeholder=\"Code postal ...\" type=\"text\" value={{Reservation.codepostal}}>


                            <label class=\"mt-3\" for=\"firstName\">Ville</label>
                            <input class=\"form-control\" name=\"ville_aller\" placeholder=\"Ville ...\" type=\"text\" value={{Reservation.ville}}>


                            <label class=\"mt-3\" for=\"firstName\">Pays</label>
                            <select class=\"form-control\" name=\"pays_aller_simple\">
                                <option value={{Reservation.pointDePrise}}>{{Reservation.pays}}</option>
                                <option value=\"France\">France</option>
                                <option value=\"Allemagne\">Allemagne</option>
                                <option value=\"Suisse\">Suisse</option>
                            </select>

                        </div>
                    </div>
                {% else %}


                    <div class=\"d-flex justify-content-center\">

                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-group\">

                                <label for=\"\">Point de prise</label>
                                <select class=\"form-control\" id=\"pdp\" name=\"pdp_aller\" onchange=\"Domicile()\">
                                    <option value={{Reservation.pointDePrise}}>{{Reservation.pointDePrise}}</option>
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


                {% endif %}
                <div class=\"d-flex justify-content-center\">

                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input class=\"form-control\" name=\"nb_passager_aller\" placeholder=\"Nombre de passagger ...\" type=\"number\" value={{Reservation.nbPassager}}>


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
                            {{Reservation.dateDepart | date(\"d/m/y\")}}
                            <input class=\"form-control\" name=\"date_depart_aller\" required type=\"date\" value=\"{{Reservation.dateDepart | date(\"d/m/y\")}}\">


                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-around\">
                    <div class=\"row\"></div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">


                        <div class=\"form-group\" id=\"FormHeurFixes\" style=\"display:none;\">
                            <label for=\"\">Horaires fixées par la société</label>
                            <select class=\"form-control\" id=\"horaire_fixe_val\" name=\"horaire_depart_aller_fixe\" type=\"string\">


                                <div id=\"for\"></div>

                            </select>

                        </div>
                        <div class=\"form-group\" id=\"FormHeurPerso\" style=\"display:none;\">


                            <label for=\"\">Horaires personnalisées</label>

                            <input class=\"form-control\" id=\"horaire_Perso_val\" name=\"horaire_depart_aller\" placeholder=\"Veuillez choisir une heure de rendez-vous :\" style=\" text-align:center\" type=\"time\">


                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>

                        </div>


                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"d-flex justify-content-center\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"form-group\">
                        <label for=\"firstName\">Commentaire</label>
                        <input class=\"form-control\" name=\"commentaire_aller\" type=\"text\" value=\"{{Reservation.commentaire}}\">
                    </div>
                </div>


            </div>
            {# ...................................lieux Destination...........................  #}
            <div class=\"d-flex justify-content-center\">

                <div class=\"col-md-6 mb-3\">
                    <div>
                        <label for=\"\">Chauffeur</label>
                        <select class=\"form-control Destination\" name=\"Chauffeur\" required>

                            {% for chauffeurs in Chauffeur %}
                                <option value={{chauffeurs.id}}>{{chauffeurs.nom}}</option>
                            {% endfor %}
                        </select>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {# ...................................Fin...........................  #}
        <div class=\"d-flex justify-content-center\">

            <div class=\"col-md-6 mb-3\">
                <div>
                    <label for=\"\">Véhicule</label>

                    <select class=\"form-control Destination\" name=\"Vehicule\" required>


                        {% for vehicule in Vehicule %}
                            <option value={{vehicule.id}}>{{vehicule.typeVehicule}}</option>
                        {% endfor %}
                    </select>
                    <div class=\"invalid-feedback\">
                        Please choose a number.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# ...................................Fin...........................  #}

    <div class=\"d-flex justify-content-center\">

        <button class=\"btn btn-success\" type=\"submit\">Confirmer la réservation !</button>

    </div>
    <div class=\"d-flex justify-content-center\">

        <a class=\"btn btn-danger\" href=\"{{ path('annulation_reservation',{'id':Reservation.id})}}\" type=\"submit\">Annuler la réservation</a>


    </div>

</form></div>{% endblock %}{% block javascripts %}<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script><script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script><script src=\"javascript/reservationAeroport.js\"></script><script src=\"javascript/fonctionsjquery.js\"></script>{% endblock %}
", "admistration_reservation_aeroport/index.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\admistration_reservation_aeroport\\index.html.twig");
    }
}
