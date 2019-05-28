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

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_cc337b8aa242d6e084f4fc072723c9a98729c7f69f1b257bae5b24bf2e7d0e5d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'easyadmin_rest' => [$this, 'block_easyadmin_rest'],
                'item_actions' => [$this, 'block_item_actions'],
                'easyadmin_widget' => [$this, 'block_easyadmin_widget'],
                'easyadmin_widget_groups' => [$this, 'block_easyadmin_widget_groups'],
                'easyadmin_autocomplete_widget' => [$this, 'block_easyadmin_autocomplete_widget'],
                'easyadmin_autocomplete_inner_label' => [$this, 'block_easyadmin_autocomplete_inner_label'],
                'easyadmin_section_row' => [$this, 'block_easyadmin_section_row'],
                'easyadmin_batch_widget' => [$this, 'block_easyadmin_batch_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 114
        echo "
";
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('form_row', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('collection_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('button_row', $context, $blocks);
        // line 185
        echo "
";
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('form_label', $context, $blocks);
        // line 212
        echo "
";
        // line 215
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 230
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('item_actions', $context, $blocks);
        // line 366
        echo "
";
        // line 368
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 450
        echo "
";
        // line 452
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 462
        echo "
";
        // line 463
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 467
        echo "
";
        // line 469
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        // line 482
        echo "
";
        // line 484
        $this->displayBlock('easyadmin_batch_widget', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_join_filter([0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", []) . "-form")], " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
($context["easyadmin"] ?? null), "view", []), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["easyadmin"] ?? null), "entity", []), "name", []), "data-entity-id" => (((twig_get_attribute($this->env, $this->source,             // line 9
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "primary_key_field_name", []), [], "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "primary_key_field_name", []))))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "primary_key_field_name", []))) : (""))]);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "errors", [])) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "html", null, true);
        echo "\"/>";
    }

    // line 24
    public function block_form_widget($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", []), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a href=\"#\" onclick=\"";
            // line 50
            echo ($context["remove_item_javascript"] ?? null);
            echo "; return false;\" class=\"text-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                ";
            // line 55
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 67
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 68
            echo "        ";
            // line 69
            $context["required"] = false;
        }
        // line 71
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 74
    public function block_date_widget($context, array $blocks = [])
    {
        // line 75
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 76
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 77
        echo "</div>";
    }

    // line 80
    public function block_time_widget($context, array $blocks = [])
    {
        // line 81
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 82
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 83
        echo "</div>";
    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 87
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 88
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 90
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", []), false)) : (false))) {
            // line 91
            echo "        ";
            ob_start();
            // line 92
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 95
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 107
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 117
    public function block_form_row($context, array $blocks = [])
    {
        // line 118
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "fieldType", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "fieldType", []), "default")) : ("default"));
        // line 119
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 121
        echo "<div class=\"form-widget\">";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 124
        if ((twig_in_filter(($context["_field_type"] ?? null), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "nullable", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "nullable", []), false)) : (false)))) {
            // line 125
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 127
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 132
        echo "
            ";
        // line 133
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "help", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "help", []))) != "")) {
            // line 134
            echo "                <span class=\"help-block\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "help", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "help", []))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "translation_domain", []));
            echo "</span>
            ";
        }
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 138
        echo "</div>
    </div>";
    }

    // line 142
    public function block_collection_row($context, array $blocks = [])
    {
        // line 143
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 145
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 146
            echo "        ";
            ob_start();
            // line 147
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 150
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", []), "name", []), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 158
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", []), "name", []), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 159
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", []), "name", []), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 168
            echo "
        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a href=\"#\" onclick=\"";
            // line 171
            echo ($context["js_add_item"] ?? null);
            echo "; return false;\" class=\"btn btn-secondary btn-sm\">
                    <i class=\"fa fa-plus\"></i>
                    <span class=\"btn-label\">";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                </a>
            </div>
        </div>
    ";
        }
    }

    // line 180
    public function block_button_row($context, array $blocks = [])
    {
        // line 181
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 183
        echo "</div>";
    }

    // line 188
    public function block_form_label($context, array $blocks = [])
    {
        // line 189
        if ( !(($context["label"] ?? null) === false)) {
            // line 190
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 191
                $context["element"] = "legend";
                // line 192
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 194
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " form-control-label"))]);
            }
            // line 196
            if (($context["required"] ?? null)) {
                // line 197
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 199
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 200
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 201
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 202
($context["name"] ?? null), "%id%" =>                     // line 203
($context["id"] ?? null)]);
                } else {
                    // line 206
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 209
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 209, $this->source);
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 215
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 216
        echo "<div class=\"form-widget-compound\">
        ";
        // line 219
        echo "        ";
        if (((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))))) {
            // line 220
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 222
        echo "        ";
        if (((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "prototype", [], "any", true, true))) {
            // line 223
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 224
            echo "        ";
        }
        // line 225
        echo "
        ";
        // line 226
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
    }

    // line 230
    public function block_empty_collection($context, array $blocks = [])
    {
        // line 231
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 232
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "templates", []), "label_empty", []));
        echo "
    </div>
";
    }

    // line 236
    public function block_vich_file_row($context, array $blocks = [])
    {
        // line 237
        echo "    ";
        $context["force_error"] = true;
        // line 238
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 241
    public function block_vich_file_widget($context, array $blocks = [])
    {
        // line 242
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 243
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 244
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 245
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 246
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 253
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa ";
            // line 254
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true) &&  !(null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["extension_icons"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["file_extension"] ?? null)] ?? null) : null)))) ? ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["extension_icons"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["file_extension"] ?? null)] ?? null) : null)) : ("fa-file-o")), "html", null, true);
            echo "\"></i>
                ";
            // line 255
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 258
        echo "
        ";
        // line 259
        ob_start();
        // line 260
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 265
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 268
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                <span class=\"btn-label\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)]]);
        echo "</span>
            </div>

            ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true)) {
            // line 274
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", []), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 276
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 281
    public function block_vich_image_row($context, array $blocks = [])
    {
        // line 282
        echo "    ";
        $context["force_error"] = true;
        // line 283
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 286
    public function block_vich_image_widget($context, array $blocks = [])
    {
        // line 287
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 288
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 289
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 290
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 294
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
                // line 295
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 296
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 300
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 304
            echo "        ";
        }
        // line 305
        echo "
        ";
        // line 306
        ob_start();
        // line 307
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 312
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 315
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                <span class=\"btn-label\">";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)]]);
        echo "</span>
            </div>

            ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true)) {
            // line 321
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", []), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 323
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", []), "vars", []), "id", []), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 328
    public function block_easyadmin_rest($context, array $blocks = [])
    {
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 331
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 333
        $this->displayBlock("item_actions", $context, $blocks);
        // line 334
        echo "</div>
    </section>
";
    }

    // line 338
    public function block_item_actions($context, array $blocks = [])
    {
        // line 339
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "translation_domain", []);
        // line 340
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "name", [])), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "label", []))];
        // line 341
        echo "
    ";
        // line 343
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <span class=\"btn-label\">";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</span>
    </button>

    ";
        // line 347
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", []) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 348
($context["easyadmin"] ?? null), "entity", []), "name", []))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 349
($context["easyadmin"] ?? null), "entity", []), "name", []))));
        // line 350
        echo "
    ";
        // line 351
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", []) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 353
($context["easyadmin"] ?? null), "item", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "primary_key_field_name", []))));
        // line 354
        echo "
    ";
        // line 355
        $context["_request_parameters"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "name", []), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "referer"], "method")];
        // line 356
        echo "
    ";
        // line 357
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 358
($context["_entity_actions"] ?? null), "request_parameters" =>         // line 359
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 360
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 361
($context["_trans_parameters"] ?? null), "item_id" =>         // line 362
($context["_entity_id"] ?? null), "item" => twig_get_attribute($this->env, $this->source,         // line 363
($context["easyadmin"] ?? null), "item", [])], false);
        // line 364
        echo "
";
    }

    // line 368
    public function block_easyadmin_widget($context, array $blocks = [])
    {
        // line 369
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "translation_domain", []);
        // line 370
        echo "    <div class=\"row\">
        ";
        // line 371
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 372
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 376
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 377
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [])) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["tab_config"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["tab_config"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 378
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", []), false)) : (false))) {
                    // line 379
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", []), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 381
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["tab_config"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["label"] ?? null) : null), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
                echo "
                                    ";
                // line 382
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", []) > 0)) {
                    // line 383
                    echo "                                        <span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", []), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 384
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", []), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 387
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 393
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [])) {
                    echo "active";
                }
                echo "\">
                                ";
                // line 394
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true)) ? (_twig_default_filter((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["help"] ?? null) : null), false)) : (false))) {
                    // line 395
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 396
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["help"] ?? null) : null), array(), ($context["_translation_domain"] ?? null));
                    echo "
                                    </div>
                                ";
                }
                // line 399
                echo "
                                <div class=\"row\">
                                    ";
                // line 401
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 409
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 411
        echo "    </div>
";
    }

    // line 414
    public function block_easyadmin_widget_groups($context, array $blocks = [])
    {
        // line 415
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", []) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", []) == ($context["tab_name"] ?? null)))) {
                // line 416
                echo "        <div class=\"field-group col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", []), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", []), "")) : ("")), "html", null, true);
                echo "\">
            <fieldset>
                ";
                // line 418
                if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", []), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", []), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", []), false)) : (false)))) {
                    // line 419
                    echo "                    <legend class=\"";
                    echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", []), false)) : (false))) ? ("with-icon") : (""));
                    echo "\">
                        ";
                    // line 420
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", []), false)) : (false))) {
                        // line 421
                        echo "                            <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", []), "html", null, true);
                        echo "\"></i>
                        ";
                    }
                    // line 423
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", []), array(), ($context["_translation_domain"] ?? null));
                    echo "
                    </legend>

                    ";
                    // line 426
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", []), false)) : (false))) {
                        // line 427
                        echo "                        <div class=\"legend-help\">";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", []), array(), ($context["_translation_domain"] ?? null));
                        echo "</div>
                    ";
                    }
                    // line 429
                    echo "                ";
                }
                // line 430
                echo "
                <div class=\"row\">
                    ";
                // line 432
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "block_prefixes", [])) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "easyadmin", []), "form_group", []) == $context["group_name"]))) {
                        // line 433
                        echo "                        ";
                        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "easyadmin", []), "form_tab", []) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "easyadmin", []), "form_tab", []) == ($context["tab_name"] ?? null)))) {
                            // line 434
                            echo "                            <div class=\"col-";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "columns", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "columns", []), "12")) : ("12")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
                            echo "\">
                                ";
                            // line 435
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                            </div>
                        ";
                        }
                        // line 438
                        echo "                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "                </div>
            </fieldset>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 443
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "block_prefixes", [])) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "easyadmin", []), "form_tab", []) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "easyadmin", []), "form_tab", []) == ($context["tab_name"] ?? null))))) {
                    // line 444
                    echo "            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "columns", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "columns", []), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 445
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 452
    public function block_easyadmin_autocomplete_widget($context, array $blocks = [])
    {
        // line 453
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", []), 'widget', ["attr" => twig_array_merge(        // line 454
($context["attr"] ?? null), ["data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "autocomplete", "entity" =>         // line 457
($context["autocomplete_entity_name"] ?? null)])])]);
        // line 460
        echo "
";
    }

    // line 463
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = [])
    {
        // line 464
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "name", []);
        // line 465
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 469
    public function block_easyadmin_section_row($context, array $blocks = [])
    {
        // line 470
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "translation_domain", []);
        // line 471
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "icon", []), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", []), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 473
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "icon", []), false)) : (false))) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", []), "icon", []), "html", null, true);
            echo "\"></i>";
        }
        // line 474
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", []), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "label", []), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
        }
        echo "</span>
        </h2>

        ";
        // line 477
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true), "help", []), false)) : (false))) {
            // line 478
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", []), "help", []), array(), ($context["_translation_domain"] ?? null));
            echo "</p>
        ";
        }
        // line 480
        echo "    </div>
";
    }

    // line 484
    public function block_easyadmin_batch_widget($context, array $blocks = [])
    {
        // line 485
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "translation_domain", []);
        // line 486
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "name", [])), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", []), "label", []))];
        // line 487
        echo "
    ";
        // line 488
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", []), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</button>
    ";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 491
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", []), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", []), "")) : ("")))) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", []), ($context["_trans_parameters"] ?? null)))), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "vars", []), "full_name", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", []), "html", null, true);
            echo "\">";
            // line 492
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", []), "html", null, true);
                echo "\"></i> ";
            }
            // line 493
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [])))) {
                // line 494
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [])), "html", null, true);
            }
            // line 496
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1293 => 496,  1290 => 494,  1288 => 493,  1282 => 492,  1272 => 491,  1268 => 490,  1264 => 489,  1260 => 488,  1257 => 487,  1254 => 486,  1251 => 485,  1248 => 484,  1243 => 480,  1237 => 478,  1235 => 477,  1226 => 474,  1220 => 473,  1212 => 471,  1209 => 470,  1206 => 469,  1202 => 465,  1199 => 464,  1196 => 463,  1191 => 460,  1189 => 457,  1188 => 454,  1186 => 453,  1183 => 452,  1175 => 448,  1165 => 445,  1158 => 444,  1152 => 443,  1143 => 439,  1136 => 438,  1130 => 435,  1123 => 434,  1120 => 433,  1115 => 432,  1111 => 430,  1108 => 429,  1102 => 427,  1100 => 426,  1093 => 423,  1087 => 421,  1085 => 420,  1080 => 419,  1078 => 418,  1070 => 416,  1063 => 415,  1060 => 414,  1055 => 411,  1049 => 409,  1043 => 405,  1025 => 401,  1021 => 399,  1015 => 396,  1012 => 395,  1010 => 394,  1001 => 393,  984 => 392,  980 => 390,  972 => 387,  966 => 384,  961 => 383,  959 => 382,  954 => 381,  948 => 379,  946 => 378,  936 => 377,  933 => 376,  929 => 375,  924 => 372,  922 => 371,  919 => 370,  916 => 369,  913 => 368,  908 => 364,  906 => 363,  905 => 362,  904 => 361,  903 => 360,  902 => 359,  901 => 358,  900 => 357,  897 => 356,  895 => 355,  892 => 354,  890 => 353,  889 => 351,  886 => 350,  884 => 349,  883 => 348,  882 => 347,  876 => 344,  873 => 343,  870 => 341,  867 => 340,  864 => 339,  861 => 338,  855 => 334,  853 => 333,  850 => 331,  848 => 329,  845 => 328,  838 => 324,  835 => 323,  829 => 321,  827 => 320,  821 => 317,  817 => 316,  814 => 315,  810 => 312,  805 => 310,  798 => 307,  796 => 306,  793 => 305,  790 => 304,  784 => 301,  780 => 300,  774 => 297,  770 => 296,  767 => 295,  764 => 294,  758 => 291,  755 => 290,  752 => 289,  750 => 288,  747 => 287,  744 => 286,  737 => 283,  734 => 282,  731 => 281,  724 => 277,  721 => 276,  715 => 274,  713 => 273,  707 => 270,  703 => 269,  700 => 268,  696 => 265,  691 => 263,  684 => 260,  682 => 259,  679 => 258,  673 => 255,  669 => 254,  664 => 253,  661 => 246,  658 => 245,  655 => 244,  653 => 243,  650 => 242,  647 => 241,  640 => 238,  637 => 237,  634 => 236,  627 => 232,  624 => 231,  621 => 230,  615 => 226,  612 => 225,  609 => 224,  606 => 223,  603 => 222,  597 => 220,  594 => 219,  591 => 216,  588 => 215,  567 => 209,  563 => 206,  560 => 203,  559 => 202,  558 => 201,  556 => 200,  554 => 199,  551 => 197,  549 => 196,  546 => 194,  543 => 192,  541 => 191,  539 => 190,  537 => 189,  534 => 188,  530 => 183,  528 => 182,  522 => 181,  519 => 180,  509 => 173,  504 => 171,  499 => 168,  483 => 159,  475 => 158,  471 => 157,  461 => 150,  456 => 147,  453 => 146,  451 => 145,  445 => 143,  442 => 142,  437 => 138,  435 => 137,  429 => 134,  427 => 133,  424 => 132,  417 => 128,  411 => 127,  407 => 125,  405 => 124,  403 => 122,  401 => 121,  399 => 120,  391 => 119,  389 => 118,  386 => 117,  377 => 109,  372 => 107,  368 => 105,  355 => 95,  350 => 92,  347 => 91,  345 => 90,  343 => 88,  341 => 87,  338 => 86,  334 => 83,  332 => 82,  330 => 81,  327 => 80,  323 => 77,  321 => 76,  319 => 75,  316 => 74,  312 => 71,  309 => 69,  307 => 68,  305 => 67,  302 => 65,  300 => 64,  297 => 63,  289 => 59,  282 => 55,  272 => 50,  267 => 47,  247 => 30,  242 => 27,  239 => 26,  236 => 25,  233 => 24,  227 => 19,  225 => 17,  219 => 14,  217 => 13,  214 => 12,  211 => 11,  209 => 9,  208 => 8,  207 => 7,  206 => 6,  204 => 5,  202 => 4,  199 => 3,  195 => 484,  192 => 482,  190 => 469,  187 => 467,  185 => 463,  182 => 462,  180 => 452,  177 => 450,  175 => 414,  172 => 413,  170 => 368,  167 => 366,  165 => 338,  162 => 337,  160 => 328,  157 => 327,  155 => 286,  152 => 285,  150 => 281,  147 => 280,  145 => 241,  142 => 240,  140 => 236,  137 => 235,  135 => 230,  133 => 215,  130 => 212,  128 => 188,  125 => 187,  122 => 185,  120 => 180,  117 => 179,  115 => 142,  112 => 141,  110 => 117,  107 => 116,  104 => 114,  102 => 86,  99 => 85,  97 => 80,  94 => 79,  92 => 74,  89 => 73,  87 => 63,  84 => 62,  82 => 24,  79 => 23,  76 => 21,  74 => 3,  71 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/form/bootstrap_4.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
