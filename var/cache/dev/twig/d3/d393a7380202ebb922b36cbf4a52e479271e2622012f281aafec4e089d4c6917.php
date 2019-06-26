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

/* security/registration.html.twig */
class __TwigTemplate_40bf94a9ca694d1efc5cbb428437a680ce293fd601098f12e0165253137cad68 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<div class=\"container\">

    <h1 class=\"text-center mt-3\">Connexion</h1>
    <p class=\"text-muted text-center mt-2\">Tout les champs qui contiennent un * sont obligatoires</p>


    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex justify-content-center\">
            <div>
                <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité*</label>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "civilite", []), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                <div class=\"invalid-feedback\">
                    Veuillez renseigné un e-mail.
                </div>
            </div>
        </div>
    </div>
    <div class=\"invalid-feedback\">
        Veuillez renseigné une civilité.
    </div>
    <hr>

    <div class=\"form-row mb-4\">
        <div class=\"col\">
            <!-- First name -->
            <label for=\"nom\">Nom*</label>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Prénom*</label>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prenom..."]]);
        echo "
        </div>
    </div>

    <label for=\"email\">E-mail*</label>
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email..."]]);
        echo "

    <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe*</label>
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
        echo "
    <small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted text-center\">
        Doit contenir 8 caractères
    </small>

    <label for=\"email\" class=\"text-center col-12 mt-2\">Confirmation de mot de passe*</label>
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "confirmPassword", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Confirmation de mot de passe..."]]);
        echo "

    <hr>

    

    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <label for=\"email\" >Adresse</label>
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "adresse", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Pays</label>
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "pays", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Pays..."]]);
        echo "

        </div>
    </div>

    
    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <!-- First name -->
            <label for=\"nom\">Code Postal</label>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "codepostal", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Code postale..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Ville</label>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "ville", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ville..."]]);
        echo "

        </div>
    </div>

    <label for=\"email\">Téléphone</label>
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "telportable", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "telephone..."]]);
        echo "


    <div class=\"d-flex justify-content-center mt-3\">
        <div>
            <div class=\"form-check\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "professionnel", []), 'row', ["id" => "CheckPro", "attr" => ["class" => "form-check-input", "onclick" => "Prochecked()"]]);
        echo "
                <label class=\"form-check-label\" for=\"CheckPro\">
                    Professionel ?
                </label>
            </div>
        </div>
    </div>
    <div style=\"display:none\" id=\"InputPro\">
        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "nomsociete", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la société..."]]);
        echo "
        <div class=\"invalid-feedback\">
            Veuillez renseigné un nom de société
        </div>
    </div>
    <div class=\"d-flex justify-content-center mt-3\">
        <button type=\"submit\" class=\"btn btn-primary\">Inscription</button>

    </div>
    ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  206 => 103,  194 => 94,  185 => 88,  176 => 82,  168 => 77,  155 => 67,  147 => 62,  135 => 53,  126 => 47,  120 => 44,  112 => 39,  104 => 34,  84 => 17,  75 => 11,  65 => 3,  56 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


<div class=\"container\">

    <h1 class=\"text-center mt-3\">Connexion</h1>
    <p class=\"text-muted text-center mt-2\">Tout les champs qui contiennent un * sont obligatoires</p>


    {{ form_start(form) }}

    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex justify-content-center\">
            <div>
                <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité*</label>
                {{ form_row(form.civilite, { 'attr' : { 'class': 'form-control'} }) }}

                <div class=\"invalid-feedback\">
                    Veuillez renseigné un e-mail.
                </div>
            </div>
        </div>
    </div>
    <div class=\"invalid-feedback\">
        Veuillez renseigné une civilité.
    </div>
    <hr>

    <div class=\"form-row mb-4\">
        <div class=\"col\">
            <!-- First name -->
            <label for=\"nom\">Nom*</label>
            {{ form_row(form.nom, { 'attr' : { 'class': 'form-control' , 'placeholder':'Nom...'} }) }}
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Prénom*</label>
            {{ form_row(form.prenom, { 'attr' : { 'class': 'form-control' , 'placeholder':'Prenom...'} }) }}
        </div>
    </div>

    <label for=\"email\">E-mail*</label>
    {{ form_row(form.email, { 'attr' : { 'class': 'form-control' , 'placeholder':'Email...'} }) }}

    <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe*</label>
    {{ form_row(form.password, { 'attr' : { 'class': 'form-control' , 'placeholder':'Mot de passe...'} }) }}
    <small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted text-center\">
        Doit contenir 8 caractères
    </small>

    <label for=\"email\" class=\"text-center col-12 mt-2\">Confirmation de mot de passe*</label>
    {{ form_row(form.confirmPassword, { 'attr' : { 'class': 'form-control' , 'placeholder':'Confirmation de mot de passe...'} }) }}

    <hr>

    

    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <label for=\"email\" >Adresse</label>
    {{ form_row(form.adresse, { 'attr' : { 'class': 'form-control' , 'placeholder':'Adresse...'} }) }}
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Pays</label>
            {{ form_row(form.pays, { 'attr' : { 'class': 'form-control' , 'placeholder':'Pays...'} }) }}

        </div>
    </div>

    
    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <!-- First name -->
            <label for=\"nom\">Code Postal</label>
            {{ form_row(form.codepostal, { 'attr' : { 'class': 'form-control' , 'placeholder':'Code postale...'} }) }}
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Ville</label>
            {{ form_row(form.ville, { 'attr' : { 'class': 'form-control' , 'placeholder':'Ville...'} }) }}

        </div>
    </div>

    <label for=\"email\">Téléphone</label>
    {{ form_row(form.telportable, { 'attr' : { 'class': 'form-control' , 'placeholder':'telephone...'} }) }}


    <div class=\"d-flex justify-content-center mt-3\">
        <div>
            <div class=\"form-check\">
                {{ form_row(form.professionnel, { 'id' : 'CheckPro' ,'attr' : { 'class': 'form-check-input', 'onclick': 'Prochecked()' } }) }}
                <label class=\"form-check-label\" for=\"CheckPro\">
                    Professionel ?
                </label>
            </div>
        </div>
    </div>
    <div style=\"display:none\" id=\"InputPro\">
        <label for=\"telephone\" class=\"text-center col-12 mt-2\">Nom de la société</label>
        {{ form_row(form.nomsociete, { 'attr' : { 'class': 'form-control', 'placeholder': 'Nom de la société...' } }) }}
        <div class=\"invalid-feedback\">
            Veuillez renseigné un nom de société
        </div>
    </div>
    <div class=\"d-flex justify-content-center mt-3\">
        <button type=\"submit\" class=\"btn btn-primary\">Inscription</button>

    </div>
    {{ form_end(form) }}
</div>

{% endblock %}", "security/registration.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\security\\registration.html.twig");
    }
}
