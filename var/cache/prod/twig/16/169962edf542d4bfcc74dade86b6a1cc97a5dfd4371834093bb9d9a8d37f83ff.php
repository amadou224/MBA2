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

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_fbc1485a1304fe398a416503a94ef02190d0960994369fac36c9120977351731 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 31
        echo "
";
        // line 32
        $context["helper"] = $this;
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $context["_translation_domain"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))), "messages");
        // line 37
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\" data-animation-speed=\"250\">
    ";
        // line 38
        $context["_menu_items"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.menu");
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('main_menu', $context, $blocks);
        // line 63
        echo "</ul>

";
        // line 65
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 34
    public function block_main_menu_before($context, array $blocks = [])
    {
    }

    // line 40
    public function block_main_menu($context, array $blocks = [])
    {
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? null));
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
            // line 42
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 61
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    ";
    }

    // line 42
    public function block_menu_item($context, array $blocks = [])
    {
        // line 43
        echo "                ";
        $context["is_selected_menu"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", []));
        // line 44
        echo "                ";
        $context["is_selected_submenu"] = (($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) !=  -1));
        // line 45
        echo "                <li class=\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", []) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", []))) ? ("treeview") : (""));
        echo " ";
        echo ((($context["is_selected_menu"] ?? null)) ? ("active") : (""));
        echo " ";
        echo ((($context["is_selected_submenu"] ?? null)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 46
        echo $context["helper"]->macro_render_menu_item(($context["item"] ?? null), ($context["_translation_domain"] ?? null));
        echo "

                    ";
        // line 48
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", []), [])) : ([])))) {
            // line 49
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 51
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 56
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        </ul>
                    ";
        }
        // line 59
        echo "                </li>
            ";
    }

    // line 51
    public function block_menu_subitem($context, array $blocks = [])
    {
        // line 52
        echo "                                    <li class=\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", []) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", [])))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 53
        echo $context["helper"]->macro_render_menu_item(($context["subitem"] ?? null), ($context["_translation_domain"] ?? null));
        echo "
                                    </li>
                                ";
    }

    // line 65
    public function block_main_menu_after($context, array $blocks = [])
    {
    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", []) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = ["menuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "menu_index", []), "submenuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "submenu_index", [])];
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->source,                 // line 7
($context["item"] ?? null), "type", []) == "link")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [])) : ((((twig_get_attribute($this->env, $this->source,                 // line 8
($context["item"] ?? null), "type", []) == "route")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", []), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", []))) : ((((twig_get_attribute($this->env, $this->source,                 // line 9
($context["item"] ?? null), "type", []) == "entity")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_array_merge(["entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "entity", []), "action" => "list"], ($context["menu_params"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", [])))) : ((((twig_get_attribute($this->env, $this->source,                 // line 10
($context["item"] ?? null), "type", []) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", []) == "route") && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["path"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", []), twig_array_merge(($context["menu_params"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", [])));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\"
           class=\"";
                // line 22
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", []), "")) : ("")), "html", null, true);
                echo "\"
           ";
                // line 23
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", []), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", []), "html", null, true);
                    echo "\"";
                }
                // line 24
                echo "           ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", []), false)) : (false))) {
                    echo "rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", []), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 25
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 26
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</span>
            ";
                // line 27
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", []), [])) : ([])))) {
                    echo "<i class=\"fa fa-angle-right treeview-icon\"></i>";
                }
                // line 28
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 28,  296 => 27,  291 => 26,  285 => 25,  276 => 24,  270 => 23,  266 => 22,  262 => 21,  259 => 20,  256 => 19,  253 => 18,  250 => 17,  247 => 12,  245 => 10,  244 => 9,  243 => 8,  242 => 7,  240 => 6,  237 => 5,  231 => 3,  228 => 2,  215 => 1,  210 => 65,  203 => 53,  196 => 52,  193 => 51,  188 => 59,  184 => 57,  170 => 56,  167 => 51,  150 => 50,  147 => 49,  145 => 48,  140 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  116 => 62,  102 => 61,  99 => 42,  81 => 41,  78 => 40,  73 => 34,  69 => 65,  65 => 63,  63 => 40,  60 => 39,  58 => 38,  55 => 37,  53 => 36,  50 => 35,  48 => 34,  45 => 33,  43 => 32,  40 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/menu.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
