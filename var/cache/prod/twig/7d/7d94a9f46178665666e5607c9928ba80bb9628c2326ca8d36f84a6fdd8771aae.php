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

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_251c3586b6bd16197c0c92cce45f1d450e7efddd9b00d62ad5eb28bd69b5b6a9 extends \Twig\Template
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
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "layout", []), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 4
        $context["__internal_c04d3903e04750aaf49cd54a0943b7151e663b45afcb03610d89987cd0b8204b"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), [],         // line 4
($context["__internal_c04d3903e04750aaf49cd54a0943b7151e663b45afcb03610d89987cd0b8204b"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", []), [],         // line 4
($context["__internal_c04d3903e04750aaf49cd54a0943b7151e663b45afcb03610d89987cd0b8204b"] ?? null))];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [])), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", [], "any", false, true), "title", [], "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", []), "title", []), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_c04d3903e04750aaf49cd54a0943b7151e663b45afcb03610d89987cd0b8204b"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        echo "";
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
    }

    public function block_entity_form($context, array $blocks = [])
    {
        // line 23
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
    }

    // line 27
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            // prevent multiple form submissions to avoid creating duplicated entities
            const form = document.querySelector('form.new-form');
            form.addEventListener('submit', function() {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(function() {
                    const submitButtons = form.querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach(function(button) {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    </script>

    ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  125 => 32,  117 => 28,  114 => 27,  107 => 23,  100 => 22,  97 => 21,  91 => 19,  84 => 15,  83 => 4,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  67 => 10,  61 => 9,  57 => 7,  55 => 4,  54 => 5,  53 => 4,  52 => 5,  50 => 4,  48 => 3,  46 => 1,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/new.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
