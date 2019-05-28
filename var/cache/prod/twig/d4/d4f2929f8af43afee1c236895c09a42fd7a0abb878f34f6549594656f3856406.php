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

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_5d71fe44ef3d704699f187058a78af11b1a63341f4326fa8098a8e97896de007 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if (((($context["view"] ?? null) == "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->source, ($context["backend_config"] ?? null), "disabled_actions", [])))) {
            // line 4
            echo "    ";
            if ((($context["value"] ?? null) == true)) {
                // line 5
                echo "        <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <div class=\"checkbox-switch\" data-propertyname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "property", []), "html", null, true);
            echo "\">
        <label>
            <input type=\"checkbox\" ";
            // line 12
            echo (((($context["value"] ?? null) == true)) ? ("checked") : (""));
            echo ">
            ";
            // line 13
            echo "<span></span>
        </label>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  56 => 10,  49 => 7,  43 => 5,  40 => 4,  38 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_toggle.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
