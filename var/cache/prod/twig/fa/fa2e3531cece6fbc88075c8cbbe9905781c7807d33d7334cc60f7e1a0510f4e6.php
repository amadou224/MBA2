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

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_38be45cbe9eda037a23942204ef818df9554b4e620f93284679356e5b4e49adf extends \Twig\Template
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
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "layout", []), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 2
        $context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), [],         // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
($context["_entity_config"] ?? null), "label", []), [],         // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter(($context["_request_parameters"] ?? null), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", []), "get", [0 => "action"], "method"), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
($context["_entity_config"] ?? null), "name", []), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["app"] ?? null), "request", []), "get", [0 => "menuIndex"], "method"), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["app"] ?? null), "request", []), "get", [0 => "submenuIndex"], "method"), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["app"] ?? null), "request", []), "get", [0 => "sortField", 1 => ""], "method"), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["app"] ?? null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method"), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", []), "get", [0 => "page", 1 => 1], "method"), "referer" => null]);
        // line 18
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "action"], "method"))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortField", 1 => ""], "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortField", 1 => ""], "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method")))]);
        }
        // line 26
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ($context["_request_parameters"] ?? null)))]);
        // line 27
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["batch_form"] ?? null), "vars", []), "batch_actions", [])) > 0));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [])), "html", null, true);
    }

    // line 30
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))), "html", null, true);
    }

    // line 32
    public function block_content_title($context, array $blocks = [])
    {
        // line 33
        ob_start();
        // line 34
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "action"], "method"))) {
            // line 35
            echo "        ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", []), [], "EasyAdminBundle");
            // line 36
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "title", [], "any", true, true)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", []), "title", []), twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", []), [],             // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null))) : (            // line 36
($context["_default_title"] ?? null)));
            echo "
    ";
        } else {
            // line 38
            echo "        ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 39
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true), "title", [], "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", []), "title", []), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null))) : (            // line 39
($context["_default_title"] ?? null)));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_global_actions($context, array $blocks = [])
    {
        // line 45
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))) {
            // line 46
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []));
            // line 47
            echo "
        ";
            // line 48
            $this->displayBlock('search_action', $context, $blocks);
            // line 67
            echo "    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []))) {
            // line 70
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []));
            // line 71
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 79
            echo "    ";
        }
    }

    // line 48
    public function block_search_action($context, array $blocks = [])
    {
        // line 49
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 51
        $this->displayBlock('search_form', $context, $blocks);
        // line 64
        echo "                </form>
            </div>
        ";
    }

    // line 51
    public function block_search_form($context, array $blocks = [])
    {
        // line 52
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "entity", []), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", []), twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", []))) : (twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", []))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", []), twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", []))) : (twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", []))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "menuIndex", []), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "submenuIndex", []), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", []), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null)), "html", null, true);
        // line 60
        echo "\">
                            </div>
                        </div>
                    ";
    }

    // line 71
    public function block_new_action($context, array $blocks = [])
    {
        // line 72
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["action" => twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "name", [])])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "target", []), "html", null, true);
        echo "\">
                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", [])) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>";
        }
        // line 75
        echo "                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [])))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", []), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null))) : ("")), "html", null, true);
        // line 75
        echo "
                </a>
            </div>
        ";
    }

    // line 82
    public function block_batch_actions($context, array $blocks = [])
    {
        // line 83
        echo "    ";
        if (($context["_has_batch_actions"] ?? null)) {
            // line 84
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 85
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["batch_form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
            // line 86
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["batch_form"] ?? null), 'form');
            echo "
        </div>
    ";
        }
    }

    // line 91
    public function block_content_header($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 93
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []));
        // line 98
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 180
        echo "        </tbody>
    </table>

    ";
        // line 183
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 101
    public function block_table_head($context, array $blocks = [])
    {
        // line 102
        echo "            <tr>
                ";
        // line 103
        if (($context["_has_batch_actions"] ?? null)) {
            // line 104
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 106
        echo "
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 108
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortField"], "method")) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [])) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortField"], "method")) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", []) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 109
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortDirection"], "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 110
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", []), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null));
            // line 111
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 112
            echo "
                    <th class=\"";
            // line 113
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [])) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", []), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [])) {
                // line 115
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", []), "sortDirection" => ($context["nextSortDirection"] ?? null)])), "html", null, true);
                echo "\">
                                ";
                // line 116
                echo ($context["_column_label"] ?? null);
                echo " <i class=\"fa ";
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 125
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", []), "collapse_actions", [])) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
    }

    // line 134
    public function block_table_body($context, array $blocks = [])
    {
        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", []));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [])));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 139
            if (($context["_has_batch_actions"] ?? null)) {
                // line 140
                echo "                        <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
                echo "\"></td>
                    ";
            }
            // line 142
            echo "
                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 144
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "sortField"], "method"));
                // line 145
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [])) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [])) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                 // line 2
($context["__internal_e3d05e92629788b3e145a3d81049ffb31ce2a5045879d519e59bcd0e9be70c91"] ?? null));
                // line 146
                echo "
                        <td class=\"";
                // line 147
                echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", []), "html", null, true);
                echo "\" ";
                echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 148
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
                    ";
            // line 152
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                // line 153
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                // line 154
                echo "                        <td class=\"actions\">
                        ";
                // line 155
                $this->displayBlock('item_actions', $context, $blocks);
                // line 169
                echo "                        </td>
                    ";
            }
            // line 171
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 173
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 174
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? null)) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? null)))), "html", null, true);
            echo "\">
                        ";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "        ";
    }

    // line 155
    public function block_item_actions($context, array $blocks = [])
    {
        // line 156
        echo "                            ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", []), "collapse_actions", [])) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 160
        echo "                            ";
        echo twig_include($this->env, $context, ($context["_actions_template"] ?? null), ["actions" =>         // line 161
($context["_list_item_actions"] ?? null), "request_parameters" =>         // line 162
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 163
($context["_entity_config"] ?? null), "translation_domain", []), "trans_parameters" =>         // line 164
($context["_trans_parameters"] ?? null), "item_id" =>         // line 165
($context["_item_id"] ?? null), "item" =>         // line 166
($context["item"] ?? null)], false);
        // line 167
        echo "
                        ";
    }

    // line 183
    public function block_delete_form($context, array $blocks = [])
    {
        // line 184
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", []) == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbPages", [])) && (1 != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", []))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", []))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 185
($context["app"] ?? null), "request", []), "query", []), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "page"], "method") - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 186
($context["app"] ?? null), "request", []), "requestUri", [])));
        // line 188
        echo "
        ";
        // line 189
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" => twig_urlencode_filter(        // line 191
($context["referer"] ?? null)), "delete_form" =>         // line 192
($context["delete_form_template"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 193
($context["_entity_config"] ?? null), "translation_domain", []), "_trans_parameters" =>         // line 194
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 195
($context["_entity_config"] ?? null)], false);
        // line 196
        echo "
    ";
    }

    // line 200
    public function block_content_footer($context, array $blocks = [])
    {
        // line 201
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
    }

    public function block_paginator($context, array $blocks = [])
    {
        // line 202
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "paginator", []));
        echo "
    ";
    }

    // line 206
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 207
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", []), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 250
        if (($context["_has_batch_actions"] ?? null)) {
            // line 251
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            ";
        }
        // line 287
        echo "        });
    </script>

    ";
        // line 290
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "action"], "method"))) {
            // line 291
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 292
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 292,  710 => 291,  708 => 290,  703 => 287,  665 => 251,  663 => 250,  629 => 219,  613 => 207,  610 => 206,  603 => 202,  596 => 201,  593 => 200,  588 => 196,  586 => 195,  585 => 194,  584 => 193,  583 => 192,  582 => 191,  581 => 189,  578 => 188,  576 => 186,  575 => 185,  573 => 184,  570 => 183,  565 => 167,  563 => 166,  562 => 165,  561 => 164,  560 => 163,  559 => 162,  558 => 161,  556 => 160,  553 => 156,  550 => 155,  546 => 179,  536 => 175,  532 => 174,  529 => 173,  515 => 171,  511 => 169,  509 => 155,  506 => 154,  503 => 153,  501 => 152,  498 => 151,  489 => 148,  479 => 147,  476 => 146,  474 => 2,  472 => 145,  469 => 144,  465 => 143,  462 => 142,  456 => 140,  454 => 139,  449 => 138,  446 => 137,  444 => 136,  425 => 135,  422 => 134,  417 => 129,  411 => 126,  402 => 125,  400 => 124,  397 => 123,  390 => 121,  384 => 119,  376 => 116,  371 => 115,  369 => 114,  357 => 113,  354 => 112,  351 => 111,  349 => 2,  347 => 110,  344 => 109,  341 => 108,  337 => 107,  334 => 106,  330 => 104,  328 => 103,  325 => 102,  322 => 101,  318 => 183,  313 => 180,  311 => 134,  306 => 131,  304 => 101,  299 => 98,  296 => 97,  293 => 96,  287 => 93,  282 => 92,  279 => 91,  270 => 86,  268 => 85,  265 => 84,  262 => 83,  259 => 82,  252 => 75,  250 => 2,  248 => 75,  242 => 74,  234 => 73,  231 => 72,  228 => 71,  221 => 60,  219 => 2,  216 => 60,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  194 => 53,  191 => 52,  188 => 51,  182 => 64,  180 => 51,  176 => 50,  171 => 49,  168 => 48,  163 => 79,  160 => 71,  157 => 70,  155 => 69,  152 => 68,  149 => 67,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  127 => 39,  126 => 2,  124 => 39,  121 => 38,  116 => 36,  115 => 2,  113 => 36,  110 => 35,  107 => 34,  105 => 33,  102 => 32,  96 => 30,  90 => 29,  86 => 5,  84 => 27,  82 => 26,  79 => 22,  78 => 21,  77 => 20,  76 => 19,  74 => 18,  72 => 14,  71 => 13,  70 => 12,  69 => 11,  68 => 10,  67 => 9,  66 => 8,  65 => 7,  63 => 2,  62 => 3,  61 => 2,  60 => 3,  58 => 2,  56 => 1,  50 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/list.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
