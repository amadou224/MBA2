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

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_0d503ce1db1dfc0b120244b614bc7ae620984ac37fadf2baa8eeb4007eeb5fd1 extends \Twig\Template
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
            'show_fields' => [$this, 'block_show_fields'],
            'show_field' => [$this, 'block_show_field'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "layout", []), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [])));
        // line 4
        $context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), [],         // line 4
($context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", []), [],         // line 4
($context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] ?? null)), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? null)];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [])) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", [], "any", false, true), "title", [], "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", []), "title", []), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] ?? null))) : (        // line 15
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
        echo "    <div class=\"form-horizontal\">
        ";
        // line 23
        $this->displayBlock('show_fields', $context, $blocks);
        // line 43
        echo "    </div>

    <section class=\"content-footer\">
        <div class=\"form-actions\">
            ";
        // line 47
        $this->displayBlock('item_actions', $context, $blocks);
        // line 60
        echo "        </div>
    </section>

    ";
        // line 63
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 23
    public function block_show_fields($context, array $blocks = [])
    {
        // line 24
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 25
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 41
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        ";
    }

    // line 25
    public function block_show_field($context, array $blocks = [])
    {
        // line 26
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", []), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"control-label\">
                            ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "label", []), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] ?? null));
        // line 28
        echo "
                        </label>
                        <div class=\"form-widget\">
                            <div class=\"form-control\">
                                ";
        // line 32
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), ($context["entity"] ?? null), ($context["metadata"] ?? null));
        echo "
                            </div>

                            ";
        // line 35
        if ((((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", []), "")) : ("")) != "")) {
            // line 36
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", []), [],             // line 4
($context["__internal_a43ec470aa6a33e1a15572d405bc608f48e750483fe477828eb4f671ff3d2387"] ?? null));
            // line 36
            echo "</span>
                            ";
        }
        // line 38
        echo "                        </div>
                    </div>
                ";
    }

    // line 47
    public function block_item_actions($context, array $blocks = [])
    {
        // line 48
        echo "                ";
        $context["_show_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []));
        // line 49
        echo "                ";
        $context["_request_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []);
        // line 50
        echo "
                ";
        // line 51
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 52
($context["_show_actions"] ?? null), "request_parameters" =>         // line 53
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 54
($context["_entity_config"] ?? null), "translation_domain", []), "trans_parameters" =>         // line 55
($context["_trans_parameters"] ?? null), "item_id" =>         // line 56
($context["_entity_id"] ?? null), "item" =>         // line 57
($context["entity"] ?? null)], false);
        // line 58
        echo "
            ";
    }

    // line 63
    public function block_delete_form($context, array $blocks = [])
    {
        // line 64
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "show", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["app"] ?? null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "delete_form" =>         // line 67
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 68
($context["_entity_config"] ?? null), "translation_domain", []), "_trans_parameters" =>         // line 69
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 70
($context["_entity_config"] ?? null)], false);
        // line 71
        echo "
    ";
    }

    // line 75
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 76,  251 => 75,  246 => 71,  244 => 70,  243 => 69,  242 => 68,  241 => 67,  240 => 66,  238 => 64,  235 => 63,  230 => 58,  228 => 57,  227 => 56,  226 => 55,  225 => 54,  224 => 53,  223 => 52,  222 => 51,  219 => 50,  216 => 49,  213 => 48,  210 => 47,  204 => 38,  200 => 36,  198 => 4,  196 => 36,  194 => 35,  188 => 32,  182 => 28,  180 => 4,  179 => 28,  171 => 26,  168 => 25,  164 => 42,  150 => 41,  147 => 25,  129 => 24,  126 => 23,  122 => 63,  117 => 60,  115 => 47,  109 => 43,  107 => 23,  104 => 22,  101 => 21,  95 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  77 => 12,  71 => 10,  65 => 9,  61 => 7,  59 => 5,  58 => 4,  57 => 5,  56 => 4,  55 => 5,  53 => 4,  51 => 3,  49 => 1,  43 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/show.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
