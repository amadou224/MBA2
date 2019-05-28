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
class __TwigTemplate_76faf410183d6b5f367f955ae2605d2394c4e149da8a1530c489decd1915610e extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "

<div class=\"container\">

    <h1 class=\"text-center mt-3\">Connexion</h1>
    <p class=\"text-muted text-center mt-2\">Tout les champs qui contiennent un * sont obligatoires</p>


    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex justify-content-center\">
            <div>
                <label for=\"email\" class=\"text-center col-12 mt-2\">Civilité*</label>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "civilite", []), 'row', ["attr" => ["class" => "form-control"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Prénom*</label>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prenom..."]]);
        echo "
        </div>
    </div>

    <label for=\"email\">E-mail*</label>
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email..."]]);
        echo "

    <label for=\"password\" class=\"text-center col-12 mt-2\">Mot de Passe*</label>
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
        echo "
    <small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted text-center\">
        Doit contenir 8 caractères
    </small>

    <label for=\"email\" class=\"text-center col-12 mt-2\">Confirmation de mot de passe*</label>
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirmPassword", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Confirmation de mot de passe..."]]);
        echo "

    <hr>

    

    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <label for=\"email\" >Adresse</label>
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Pays</label>
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Pays..."]]);
        echo "

        </div>
    </div>

    
    <div class=\"form-row mb-4 mt-2\">
        <div class=\"col\">
            <!-- First name -->
            <label for=\"nom\">Code Postal</label>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codepostal", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Code postale..."]]);
        echo "
        </div>
        <div class=\"col\">
            <!-- Last name -->
            <label for=\"prenom\">Ville</label>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ville..."]]);
        echo "

        </div>
    </div>

    <label for=\"email\">Téléphone</label>
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telportable", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "telephone..."]]);
        echo "


    <div class=\"d-flex justify-content-center mt-3\">
        <div>
            <div class=\"form-check\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "professionnel", []), 'row', ["id" => "CheckPro", "attr" => ["class" => "form-check-input", "onclick" => "Prochecked()"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomsociete", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la société..."]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>

";
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
        return array (  200 => 112,  188 => 103,  176 => 94,  167 => 88,  158 => 82,  150 => 77,  137 => 67,  129 => 62,  117 => 53,  108 => 47,  102 => 44,  94 => 39,  86 => 34,  66 => 17,  57 => 11,  47 => 3,  44 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/registration.html.twig", "/homepages/15/d190186549/htdocs/Symfony/templates/security/registration.html.twig");
    }
}
