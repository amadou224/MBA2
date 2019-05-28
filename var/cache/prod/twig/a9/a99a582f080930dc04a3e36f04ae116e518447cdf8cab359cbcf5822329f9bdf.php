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

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_888f05bfc8c262ea537aae835f9a07be678718438727ffd5615c2eccad1d2255 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["layout_template_path"] ?? null), "@EasyAdmin/default/exception.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        echo "error";
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("errors", 1, [], "EasyAdminBundle"), "html", null, true);
    }

    // line 6
    public function block_content_header($context, array $blocks = [])
    {
        echo "";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        // line 8
        echo "    <div class=\"error-message\">
        <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "publicMessage", []), twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "translationParameters", []), "EasyAdminBundle"), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  70 => 9,  67 => 8,  64 => 7,  58 => 6,  52 => 4,  46 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/exception.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
