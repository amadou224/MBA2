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

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_5dc5eb27b53fbb75827c7d1791c32c5a8d2d7a82e20ab89229a49c8650abb969 extends \Twig\Template
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
        $context["_paginator_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["referer" => null]);
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("paginator.results", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", []), [], "EasyAdminBundle");
        echo "
    </div>

    <div class=\"pager pagination list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [])) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [])) ? ("last-page") : (""));
        echo "\">
        <a class=\"btn btn-secondary ";
        // line 11
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [])) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 12
        echo twig_escape_filter($this->env, (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [])) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), ["page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [])])))), "html", null, true);
        echo "\">
            <i class=\"fa fa-angle-left\"></i> <span class=\"btn-label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
        </a>

        <a class=\"btn btn-secondary ";
        // line 16
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [])) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 17
        echo twig_escape_filter($this->env, (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [])) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), ["page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [])])))), "html", null, true);
        echo "\">
            <span class=\"btn-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  75 => 17,  71 => 16,  65 => 13,  61 => 12,  57 => 11,  51 => 10,  45 => 7,  40 => 4,  38 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/paginator.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
