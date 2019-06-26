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

/* Payement/payement.html.twig */
class __TwigTemplate_c65801061e8cb7403ee4a41e6fc3fe291cc6833d72e070f803c3b7b845217b9f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Payement/payement.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Payement/payement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Payement/payement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 9, $this->source); })()), "numeroCarte", []), 'row', ["attr" => ["placeholder" => "Numéro de la carte"]]);
        echo "

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 11, $this->source); })()), "nomCarte", []), 'row', ["attr" => ["placeholder" => "Nom et prénom du propriétaire de la carte"]]);
        echo "

    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 13, $this->source); })()), "dateCarte", []), 'row', ["attr" => ["placeholder" => "Date d'expiration de la carte"]]);
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 15, $this->source); })()), "cvcCarte", []), 'row', ["attr" => ["placeholder" => "Cryptogramme de la carte"]]);
        echo "

    <button>Payer</button>
</form></div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"https://js.stripe.com/v3/\" type=\"text/javascript\"></script><script>var stripe = Stripe('pk_test_5VrYHcfqrWWrr0Tuw9zBGxlG00IX4Pvb9F');</script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script><script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script><script src=\"javascript/reservationAeroport.js\"></script><script src=\"javascript/fonctionsjquery.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Payement/payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  89 => 15,  84 => 13,  79 => 11,  74 => 9,  69 => 7,  66 => 6,  57 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{#  Création d'une carte qui sera utilisé dans un paiement et qui servira à la création du jeton envoyé.
    Utilisation du formulaire créé en utilisant Twig. (A améliorer)
#}
{% block body %}

    {{form_start(formPaie)}}

    {{form_row(formPaie.numeroCarte, {'attr':{'placeholder':\"Numéro de la carte\"}}) }}

    {{form_row(formPaie.nomCarte, {'attr':{'placeholder':\"Nom et prénom du propriétaire de la carte\"}}) }}

    {{form_row(formPaie.dateCarte, {'attr':{'placeholder':\"Date d'expiration de la carte\"}}) }}

    {{form_row(formPaie.cvcCarte, {'attr':{'placeholder':\"Cryptogramme de la carte\"}}) }}

    <button>Payer</button>
</form></div></div>{% endblock %}{% block javascripts %}<script src=\"https://js.stripe.com/v3/\" type=\"text/javascript\"></script><script>var stripe = Stripe('pk_test_5VrYHcfqrWWrr0Tuw9zBGxlG00IX4Pvb9F');</script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script><script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script><script src=\"javascript/reservationAeroport.js\"></script><script src=\"javascript/fonctionsjquery.js\"></script>{% endblock %}
", "Payement/payement.html.twig", "C:\\wamp64\\www\\Symfony\\templates\\Payement\\payement.html.twig");
    }
}
