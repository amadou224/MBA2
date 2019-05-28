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

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_357979dffaea3faa38aab0beea188f9b6b16f7ff4dfbd85e54c64105c3a1bd21 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'entity_form' => [$this, 'block_entity_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "layout", []), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", []));
        // line 5
        $context["__internal_0702265ddade86faeaa93a15a838a0f61fcab61fb3f9519d3ff54de7eb3c055b"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []);
        // line 6
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), [],         // line 5
($context["__internal_0702265ddade86faeaa93a15a838a0f61fcab61fb3f9519d3ff54de7eb3c055b"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 6
($context["_entity_config"] ?? null), "label", []), [],         // line 5
($context["__internal_0702265ddade86faeaa93a15a838a0f61fcab61fb3f9519d3ff54de7eb3c055b"] ?? null)), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? null)];
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [])) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", [], "any", false, true), "title", [], "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", []), "title", []), ($context["_trans_parameters"] ?? null),         // line 5
($context["__internal_0702265ddade86faeaa93a15a838a0f61fcab61fb3f9519d3ff54de7eb3c055b"] ?? null))) : (        // line 16
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        echo "";
    }

    // line 22
    public function block_main($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 23
    public function block_entity_form($context, array $blocks = [])
    {
        // line 24
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
    }

    // line 27
    public function block_delete_form($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "edit", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["app"] ?? null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "delete_form" =>         // line 31
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 32
($context["_entity_config"] ?? null), "translation_domain", []), "_trans_parameters" =>         // line 33
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 34
($context["_entity_config"] ?? null)], false);
        // line 35
        echo "
    ";
    }

    // line 39
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 44
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  151 => 44,  143 => 40,  140 => 39,  135 => 35,  133 => 34,  132 => 33,  131 => 32,  130 => 31,  129 => 30,  127 => 28,  124 => 27,  117 => 24,  114 => 23,  110 => 27,  107 => 26,  104 => 23,  101 => 22,  95 => 20,  88 => 16,  87 => 5,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  71 => 11,  65 => 10,  61 => 8,  59 => 6,  58 => 5,  57 => 6,  56 => 5,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  47 => 1,  41 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/edit.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
