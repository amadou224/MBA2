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

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_2f18688e1165aa0da32f12e8763ecb5cad0aa8d34bf3723b90447613f1eca57e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions_wrapper' => [$this, 'block_global_actions_wrapper'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_help' => [$this, 'block_content_help'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) {
            // line 34
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-rtl.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "    </head>

    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 188
        echo "</html>
";
    }

    // line 10
    public function block_page_title($context, array $blocks = [])
    {
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">

            <style>
                :root { --color-primary: ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color"), "html", null, true);
        echo "; }
            </style>
        ";
    }

    // line 24
    public function block_head_favicon($context, array $blocks = [])
    {
        // line 25
        echo "            ";
        $context["favicon"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.favicon");
        // line 26
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "mime_type", []), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "path", [])), "html", null, true);
        echo "\" />
        ";
    }

    // line 29
    public function block_head_javascript($context, array $blocks = [])
    {
        // line 30
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <script>
            document.body.classList.add(
                'easyadmin-content-width-' + (localStorage.getItem('easyadmin/content/width') || 'normal'),
                'easyadmin-sidebar-width-' + (localStorage.getItem('easyadmin/sidebar/width') || 'normal')
            );
        </script>

        ";
        // line 47
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 180
        echo "
        ";
        // line 181
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 182
        echo "
        ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 184
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "    </body>
    ";
    }

    // line 39
    public function block_body_id($context, array $blocks = [])
    {
    }

    public function block_body_class($context, array $blocks = [])
    {
    }

    // line 47
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        // line 48
        echo "        <div class=\"wrapper\">
        ";
        // line 49
        $this->displayBlock('wrapper', $context, $blocks);
        // line 178
        echo "        </div>
        ";
    }

    // line 49
    public function block_wrapper($context, array $blocks = [])
    {
        // line 50
        echo "            <header class=\"main-header\">
                ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 112
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 115
        $this->displayBlock('sidebar', $context, $blocks);
        // line 127
        echo "            </aside>

            <div class=\"content-wrapper\">
                ";
        // line 130
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 133
        echo "
                <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                ";
        // line 136
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "
                <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
            </div>
        ";
    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        // line 52
        echo "                    <nav class=\"navbar\" role=\"navigation\">
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-bars\"></i>
                        </button>

                        <div id=\"header-logo\">
                            ";
        // line 58
        $this->displayBlock('header_logo', $context, $blocks);
        // line 63
        echo "                        </div>
                    </nav>

                    ";
        // line 66
        $context["_user_name"] = _twig_default_filter($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.name_property_path")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"));
        // line 67
        echo "                    ";
        $context["_logout_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getLogoutPath();
        // line 68
        echo "                    ";
        $context["_user_has_logout"] =  !twig_test_empty(($context["_logout_path"] ?? null));
        // line 69
        echo "                    ";
        $context["_user_is_impersonated"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN");
        // line 70
        echo "                    ";
        ob_start();
        // line 71
        echo "                        <div class=\"popover-content-section user-details ";
        echo (((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) ? ("user-has-actions") : (""));
        echo "\">
                            <p class=\"small text-muted mb-0\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                            <p class=\"user-details-name\">
                                ";
        // line 74
        if ((((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), false)) : (false)) == false)) {
            // line 75
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                ";
        } else {
            // line 77
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "
                                ";
        }
        // line 79
        echo "                            </p>
                        </div>

                        ";
        // line 82
        $this->displayBlock('user_menu', $context, $blocks);
        // line 94
        echo "                    ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
                    <div class=\"content-top navbar-custom-menu\">
                        <div class=\"user user-menu-wrapper ";
        // line 97
        echo ((($context["_user_is_impersonated"] ?? null)) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                            ";
        // line 98
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_avatar")) {
            // line 99
            echo "                                ";
            $context["_avatar_image_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.avatar_property_path"));
            // line 100
            echo "                                ";
            if ((null == ($context["_avatar_image_path"] ?? null))) {
                // line 101
                echo "                                    <i class=\"fa ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                ";
            } else {
                // line 103
                echo "                                    <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, ($context["_avatar_image_path"] ?? null), "html", null, true);
                echo "\" />
                                ";
            }
            // line 105
            echo "                            ";
        }
        // line 106
        echo "                            ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_name")) {
            // line 107
            echo "                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "</span>
                            ";
        }
        // line 109
        echo "                        </div>
                    </div>
                ";
    }

    // line 58
    public function block_header_logo($context, array $blocks = [])
    {
        // line 59
        echo "                                <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                                    ";
        // line 60
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                                </a>
                            ";
    }

    // line 82
    public function block_user_menu($context, array $blocks = [])
    {
        // line 83
        echo "                            ";
        if ((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) {
            // line 84
            echo "                                <div class=\"popover-content-section user-menu\">
                                    ";
            // line 85
            if (($context["_user_has_logout"] ?? null)) {
                // line 86
                echo "                                        <a class=\"user-action user-action-logout\" href=\"";
                echo twig_escape_filter($this->env, ($context["_logout_path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 88
            echo "                                    ";
            if (($context["_user_is_impersonated"] ?? null)) {
                // line 89
                echo "                                        <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 91
            echo "                                </div>
                            ";
        }
        // line 93
        echo "                        ";
    }

    // line 115
    public function block_sidebar($context, array $blocks = [])
    {
        // line 116
        echo "                <section class=\"sidebar\">
                    ";
        // line 117
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 124
        echo "                </section>

            ";
    }

    // line 117
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        // line 118
        echo "                        ";
        echo twig_include($this->env, $context, [0 => ((        // line 119
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "menu", [])) : ("")), 1 => $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"]);
        // line 122
        echo "
                    ";
    }

    // line 130
    public function block_flash_messages($context, array $blocks = [])
    {
        // line 131
        echo "                    ";
        echo twig_include($this->env, $context, (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", []), "flash_messages", [])) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        // line 137
        echo "                    <div class=\"content\">
                        ";
        // line 138
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 162
        echo "
                        <section id=\"main\" class=\"content-body\">
                            ";
        // line 164
        $this->displayBlock('main', $context, $blocks);
        // line 165
        echo "                        </section>

                        ";
        // line 167
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 172
        echo "                    </div>
                ";
    }

    // line 138
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        // line 139
        echo "                        ";
        $context["_has_content_help"] = ((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array", true, true)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["help"] ?? null) : null), false)) : (false)));
        // line 140
        echo "                        <section class=\"content-header ";
        echo ((($context["_has_content_help"] ?? null)) ? ("has-content-help") : (""));
        echo "\">
                            ";
        // line 141
        $this->displayBlock('content_header', $context, $blocks);
        // line 160
        echo "                        </section>
                        ";
    }

    // line 141
    public function block_content_header($context, array $blocks = [])
    {
        // line 142
        echo "                                <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                    <div class=\"content-header-title\">
                                        <h1 class=\"title\">";
        // line 144
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                    </div>

                                    ";
        // line 147
        $this->displayBlock('global_actions_wrapper', $context, $blocks);
        // line 150
        echo "                                </div>

                                ";
        // line 152
        $this->displayBlock('content_help', $context, $blocks);
        // line 159
        echo "                            ";
    }

    // line 144
    public function block_content_title($context, array $blocks = [])
    {
    }

    // line 147
    public function block_global_actions_wrapper($context, array $blocks = [])
    {
        // line 148
        echo "                                        <div class=\"global-actions\">";
        $this->displayBlock('global_actions', $context, $blocks);
        echo "</div>
                                    ";
    }

    public function block_global_actions($context, array $blocks = [])
    {
    }

    // line 152
    public function block_content_help($context, array $blocks = [])
    {
        // line 153
        echo "                                    ";
        if (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array", true, true)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["help"] ?? null) : null), false)) : (false)))) {
            // line 154
            echo "                                        <div class=\"content-header-help\">
                                            ";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["_entity_config"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "action"], "method")] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", []));
            echo "
                                        </div>
                                    ";
        }
        // line 158
        echo "                                ";
    }

    // line 164
    public function block_main($context, array $blocks = [])
    {
    }

    // line 167
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        // line 168
        echo "                            <section class=\"content-footer\">
                                ";
        // line 169
        $this->displayBlock('content_footer', $context, $blocks);
        // line 170
        echo "                            </section>
                        ";
    }

    // line 169
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 181
    public function block_body_javascript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 181,  610 => 169,  605 => 170,  603 => 169,  600 => 168,  597 => 167,  592 => 164,  588 => 158,  582 => 155,  579 => 154,  576 => 153,  573 => 152,  562 => 148,  559 => 147,  554 => 144,  550 => 159,  548 => 152,  544 => 150,  542 => 147,  536 => 144,  532 => 142,  529 => 141,  524 => 160,  522 => 141,  517 => 140,  514 => 139,  511 => 138,  506 => 172,  504 => 167,  500 => 165,  498 => 164,  494 => 162,  492 => 138,  489 => 137,  486 => 136,  479 => 131,  476 => 130,  471 => 122,  469 => 119,  467 => 118,  464 => 117,  458 => 124,  456 => 117,  453 => 116,  450 => 115,  446 => 93,  442 => 91,  436 => 89,  433 => 88,  425 => 86,  423 => 85,  420 => 84,  417 => 83,  414 => 82,  407 => 60,  398 => 59,  395 => 58,  389 => 109,  383 => 107,  380 => 106,  377 => 105,  371 => 103,  365 => 101,  362 => 100,  359 => 99,  357 => 98,  351 => 97,  347 => 95,  344 => 94,  342 => 82,  337 => 79,  331 => 77,  325 => 75,  323 => 74,  318 => 72,  313 => 71,  310 => 70,  307 => 69,  304 => 68,  301 => 67,  299 => 66,  294 => 63,  292 => 58,  284 => 52,  281 => 51,  274 => 174,  272 => 136,  267 => 133,  265 => 130,  260 => 127,  258 => 115,  253 => 112,  251 => 51,  248 => 50,  245 => 49,  240 => 178,  238 => 49,  235 => 48,  232 => 47,  223 => 39,  218 => 186,  209 => 184,  205 => 183,  202 => 182,  200 => 181,  197 => 180,  195 => 47,  181 => 39,  178 => 38,  171 => 30,  168 => 29,  159 => 26,  156 => 25,  153 => 24,  146 => 16,  139 => 13,  136 => 12,  130 => 10,  125 => 188,  123 => 38,  119 => 36,  113 => 34,  111 => 33,  108 => 32,  106 => 29,  103 => 28,  101 => 24,  98 => 23,  89 => 21,  85 => 20,  82 => 19,  80 => 12,  75 => 10,  64 => 2,  61 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/layout.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
