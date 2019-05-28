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

/* profile/profile.html.twig */
class __TwigTemplate_5544361d10bb37919969652685bdad1f565c75c07872baf7c4f6e78d42b01fd3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        // line 16
        echo "



<div class=\"container mt-2\">
    <h1 class=\"text-center\">Bonjour ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", []), "html", null, true);
        echo "</h1>
    <h3 class=\"text-center\">Voici votre liste de réservations</h3>

    <table class=\"table\">
        <thead class=\"black white-text\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Horaires</th>
                <th scope=\"col\">Nombre Passager</th>
                <th scope=\"col\">Date réservation</th>
                <th scope=\"col\">Date de départ</th>
                <th scope=\"col\">Point de prise</th>

            </tr>
        </thead>
        <tbody>

            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "reservations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 39
            echo "            <tr>
                <th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", []), "html", null, true);
            echo "</th>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "horraire", []), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nbPassager", []), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", []), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDepart", []), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "pointDePrise", []), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "departDestination", []), "depart", []), "html", null, true);
            echo "</td>



            </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>




";
    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  102 => 39,  98 => 38,  76 => 21,  69 => 16,  66 => 15,  61 => 12,  58 => 11,  49 => 4,  46 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/profile.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/profile/profile.html.twig");
    }
}
