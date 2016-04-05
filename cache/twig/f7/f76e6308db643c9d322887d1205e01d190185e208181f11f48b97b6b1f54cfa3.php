<?php

/* partials/base.html.twig */
class __TwigTemplate_7dbcb82f47b1c4b6c44c6d829b9c193e20e8a000af0927902038c2741593a8ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mobile_navigation' => array($this, 'block_mobile_navigation'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "</head>
<body id=\"top\" class=\"";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
<div class=\"off-canvas-wrapper\">
    <div class=\"off-canvas-wrapper-inner\" data-off-canvas-wrapper>
        <div class=\"off-canvas position-";
        // line 41
        echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_position", array());
        echo "\" id=\"offCanvas\" data-off-canvas data-position=\"";
        echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_position", array());
        echo "\">
            <div class=\"row sg-center sg-spacer-small\">
                <div class=\"sg-content\">
                    ";
        // line 44
        $context["content"] = $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/mobilemenu"), "method"), "content", array());
        // line 45
        echo "                    ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 46
            echo "                        ";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                    ";
        }
        // line 48
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 49
            echo "                    <br />
                    ";
            // line 50
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 50)->display($context);
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                </div>
            </div>
            <div id=\"mobile-navigation\">
                ";
        // line 55
        $this->displayBlock('mobile_navigation', $context, $blocks);
        // line 58
        echo "            </div>
        </div>
        <div class=\"off-canvas-content\" data-off-canvas-content>

        ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "
        ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
        ";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('bottom', $context, $blocks);
        // line 136
        echo "        </div>
    </div>
</div>
</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
        // line 34
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 109), "method");
        // line 35
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->loadTemplate("partials/css.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "css_bones", array()), "enabled", array())) {
            // line 16
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bones.css", 1 => 110), "method");
            // line 17
            echo "        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "css_custom", array()), "enabled", array())) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 10), "method");
            // line 20
            echo "        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "animate_css", array()) == "disabled")) {
            // line 22
            echo "        ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "animate_css", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "animate_css", array()), "enabled", array()))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css", 1 => 115), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fontawesome", array()) == "disabled")) {
            // line 26
            echo "        ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fontawesome", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "fontawesome", array()), "enabled", array()))) {
            // line 27
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 115), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "site_title", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "google_fonts_logo", array()), "enabled", array()))) {
            // line 30
            echo "            <link href=\"//fonts.googleapis.com/css?family=Special+Elite&text=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        }
        // line 32
        echo "    ";
    }

    // line 55
    public function block_mobile_navigation($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->loadTemplate("partials/navigation_mobile.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                ";
    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        // line 63
        echo "        <header id=\"header\">

        \t<div class=\"row sg-header\">
                ";
        // line 66
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/logo"), "method"), "media", array()), "images", array()));
        // line 67
        echo "                ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 68
            echo "                <div id=\"logo\">
                    <a href=\"";
            // line 69
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">
                        ";
            // line 70
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropResize", array(0 => 96, 1 => 96), "method"), "html", array());
            echo "
                    </a>
                </div>
                ";
        }
        // line 74
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "site_title", array()), "enabled", array())) {
            // line 75
            echo "\t            <div id=\"sg-header-title\">
\t                <a href=\"";
            // line 76
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">
\t                    <h3";
            // line 77
            if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "google_fonts_logo", array()), "enabled", array())) {
                echo " style=\"font-family: 'Special Elite', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;\"";
            }
            echo ">";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
            echo "</h3>
\t                </a>
\t            </div>
                ";
        }
        // line 81
        echo "\t            <div id=\"navigation\" class=\"";
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array()) == "all")) {
            echo "hide";
        } else {
            echo "show-for-";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array());
        }
        echo "\">
\t                ";
        // line 82
        $this->displayBlock('header_extra', $context, $blocks);
        // line 83
        echo "\t                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 84
            echo "\t                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 84)->display($context);
            // line 85
            echo "\t                ";
        }
        // line 86
        echo "\t                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 89
        echo "\t            </div>
                ";
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fontawesome", array()) == "disabled")) {
            // line 91
            echo "                    <button class=\"sg-mobilemenu-icon float-right hide-for-";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array());
            echo "\" data-open=\"offCanvas\">[ menu ]</button>
                ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 92
(isset($context["page"]) ? $context["page"] : null), "header", array()), "fontawesome", array()) == "enabled")) {
            // line 93
            echo "                    <i class=\"mobile-nav-toggle fa fa-fw fa-bars float-right hide-for-";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array());
            echo "\" data-open=\"offCanvas\"></i>
                ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 94
(isset($context["theme_config"]) ? $context["theme_config"] : null), "fontawesome", array()), "enabled", array())) {
            // line 95
            echo "                    <i class=\"mobile-nav-toggle fa fa-fw fa-bars float-right hide-for-";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array());
            echo "\" data-open=\"offCanvas\"></i>
                ";
        } else {
            // line 97
            echo "                    <button class=\"sg-mobilemenu-icon float-right hide-for-";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "mobilemenu_breakpoint", array());
            echo "\" data-open=\"offCanvas\">[ menu ]</button>
                ";
        }
        // line 99
        echo "            </div>
        </header>
        ";
    }

    // line 82
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 86
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 87
        echo "\t                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 87)->display($context);
        // line 88
        echo "\t                ";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        // line 104
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 105
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "        </section>
        ";
    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        echo "        ";
        $context["content"] = $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/footer"), "method"), "content", array());
        // line 111
        echo "        ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 112
            echo "        <footer id=\"footer\">
            <div class=\"row sg-center\">
                 ";
            // line 114
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
            </div>
        </footer>
        ";
        }
        // line 118
        echo "        ";
    }

    // line 120
    public function block_bottom($context, array $blocks = array())
    {
        // line 121
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "                ";
        $this->loadTemplate("partials/js.html.twig", "partials/base.html.twig", 122)->display($context);
        // line 123
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/what-input/what-input.js", 1 => array("priority" => 105, "group" => "bottom")), "method");
        // line 124
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "wow_js", array()) == "disabled")) {
            // line 125
            echo "                ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "wow_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "wow_js", array()), "enabled", array()))) {
            // line 126
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/wow.js", 1 => array("priority" => 101, "group" => "bottom")), "method");
            // line 127
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => "var wow = new WOW();wow.init();", 1 => array("priority" => 99, "pipeline" => false, "group" => "bottom")), "method");
            // line 128
            echo "                ";
        }
        // line 129
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "google_prettify", array()) == "disabled")) {
            // line 130
            echo "                ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "google_prettify", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "google_prettify", array()), "enabled", array()))) {
            // line 131
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js", 1 => array("priority" => 100, "group" => "bottom")), "method");
            // line 132
            echo "                ";
        }
        // line 133
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 133,  448 => 132,  445 => 131,  442 => 130,  439 => 129,  436 => 128,  433 => 127,  430 => 126,  427 => 125,  424 => 124,  421 => 123,  418 => 122,  415 => 121,  408 => 134,  405 => 121,  402 => 120,  398 => 118,  391 => 114,  387 => 112,  384 => 111,  381 => 110,  378 => 109,  373 => 105,  368 => 106,  366 => 105,  361 => 104,  358 => 103,  354 => 88,  351 => 87,  348 => 86,  343 => 82,  337 => 99,  331 => 97,  325 => 95,  323 => 94,  318 => 93,  316 => 92,  311 => 91,  309 => 90,  306 => 89,  303 => 86,  300 => 85,  297 => 84,  294 => 83,  292 => 82,  282 => 81,  271 => 77,  267 => 76,  264 => 75,  261 => 74,  254 => 70,  250 => 69,  247 => 68,  244 => 67,  242 => 66,  237 => 63,  234 => 62,  230 => 57,  227 => 56,  224 => 55,  220 => 32,  214 => 30,  211 => 29,  208 => 28,  205 => 27,  202 => 26,  199 => 25,  196 => 24,  193 => 23,  190 => 22,  187 => 21,  184 => 20,  181 => 19,  178 => 18,  175 => 17,  172 => 16,  169 => 15,  166 => 14,  163 => 13,  156 => 35,  154 => 34,  149 => 33,  147 => 13,  143 => 12,  139 => 11,  136 => 10,  134 => 9,  126 => 8,  123 => 7,  120 => 6,  111 => 136,  109 => 120,  106 => 119,  104 => 109,  101 => 108,  99 => 103,  96 => 102,  94 => 62,  88 => 58,  86 => 55,  81 => 52,  78 => 51,  76 => 50,  73 => 49,  70 => 48,  64 => 46,  61 => 45,  59 => 44,  51 => 41,  45 => 38,  42 => 37,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*     {% block stylesheets %}*/
/*         {% include 'partials/css.html.twig' %}*/
/*         {% if theme_config.css_bones.enabled %}*/
/*             {% do assets.addCss('theme://css/bones.css',110) %}*/
/*         {% endif %}*/
/*         {% if theme_config.css_custom.enabled %}*/
/*             {% do assets.addCss('theme://css/custom.css',10) %}*/
/*         {% endif %}*/
/*         {% if page.header.animate_css == "disabled" %}*/
/*         {% elseif page.header.animate_css == "enabled" or theme_config.animate_css.enabled %}*/
/*             {% do assets.addCss('theme://css/animate.css',115) %}*/
/*         {% endif %}*/
/*         {% if page.header.fontawesome == "disabled" %}*/
/*         {% elseif page.header.fontawesome == "enabled" or theme_config.fontawesome.enabled %}*/
/*             {% do assets.addCss('theme://css/font-awesome.min.css',115) %}*/
/*         {% endif %}*/
/*         {% if theme_config.site_title.enabled and theme_config.google_fonts_logo.enabled %}*/
/*             <link href="//fonts.googleapis.com/css?family=Special+Elite&text={{ site.title|e }}" type="text/css" rel="stylesheet" />*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/*     {% do assets.addJs('jquery',109) %}*/
/*     {{ assets.js() }}*/
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/* <div class="off-canvas-wrapper">*/
/*     <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>*/
/*         <div class="off-canvas position-{{ theme_config.mobilemenu_position }}" id="offCanvas" data-off-canvas data-position="{{ theme_config.mobilemenu_position }}">*/
/*             <div class="row sg-center sg-spacer-small">*/
/*                 <div class="sg-content">*/
/*                     {% set content = pages.find('/mobilemenu').content %}*/
/*                     {% if content %}*/
/*                         {{ content }}*/
/*                     {% endif %}*/
/*                     {% if config.plugins.langswitcher.enabled %}*/
/*                     <br />*/
/*                     {% include 'partials/langswitcher.html.twig' %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div id="mobile-navigation">*/
/*                 {% block mobile_navigation %}*/
/*                 {% include 'partials/navigation_mobile.html.twig' %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="off-canvas-content" data-off-canvas-content>*/
/* */
/*         {% block header %}*/
/*         <header id="header">*/
/* */
/*         	<div class="row sg-header">*/
/*                 {% set image = pages.find('/logo').media.images|first %}*/
/*                 {% if image %}*/
/*                 <div id="logo">*/
/*                     <a href="{{ base_url == '' ? '/' : base_url }}">*/
/*                         {{ image.cropResize(96,96).html }}*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if theme_config.site_title.enabled %}*/
/* 	            <div id="sg-header-title">*/
/* 	                <a href="{{ base_url == '' ? '/' : base_url }}">*/
/* 	                    <h3{% if theme_config.google_fonts_logo.enabled %} style="font-family: 'Special Elite', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;"{% endif %}>{{ config.site.title }}</h3>*/
/* 	                </a>*/
/* 	            </div>*/
/*                 {% endif %}*/
/* 	            <div id="navigation" class="{% if theme_config.mobilemenu_breakpoint == 'all' %}hide{% else %}show-for-{{ theme_config.mobilemenu_breakpoint }}{% endif %}">*/
/* 	                {% block header_extra %}{% endblock %}*/
/* 	                {% if config.plugins.langswitcher.enabled %}*/
/* 	                {% include 'partials/langswitcher.html.twig' %}*/
/* 	                {% endif %}*/
/* 	                {% block header_navigation %}*/
/* 	                {% include 'partials/navigation.html.twig' %}*/
/* 	                {% endblock %}*/
/* 	            </div>*/
/*                 {% if page.header.fontawesome == "disabled" %}*/
/*                     <button class="sg-mobilemenu-icon float-right hide-for-{{ theme_config.mobilemenu_breakpoint }}" data-open="offCanvas">[ menu ]</button>*/
/*                 {% elseif page.header.fontawesome == "enabled" %}*/
/*                     <i class="mobile-nav-toggle fa fa-fw fa-bars float-right hide-for-{{ theme_config.mobilemenu_breakpoint }}" data-open="offCanvas"></i>*/
/*                 {% elseif theme_config.fontawesome.enabled %}*/
/*                     <i class="mobile-nav-toggle fa fa-fw fa-bars float-right hide-for-{{ theme_config.mobilemenu_breakpoint }}" data-open="offCanvas"></i>*/
/*                 {% else %}*/
/*                     <button class="sg-mobilemenu-icon float-right hide-for-{{ theme_config.mobilemenu_breakpoint }}" data-open="offCanvas">[ menu ]</button>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </header>*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         {% set content = pages.find('/footer').content %}*/
/*         {% if content %}*/
/*         <footer id="footer">*/
/*             <div class="row sg-center">*/
/*                  {{ content }}*/
/*             </div>*/
/*         </footer>*/
/*         {% endif %}*/
/*         {% endblock %}*/
/* */
/*         {% block bottom %}*/
/*             {% block javascripts %}*/
/*                 {% include 'partials/js.html.twig' %}*/
/*                 {% do assets.addJs('theme://bower_components/what-input/what-input.js',{'priority':105, 'group':'bottom'}) %}*/
/*                 {% if page.header.wow_js == "disabled" %}*/
/*                 {% elseif page.header.wow_js == "enabled" or theme_config.wow_js.enabled %}*/
/*                     {% do assets.addJs('theme://js/wow.js',{'priority':101, 'group':'bottom'}) %}*/
/*                     {% do assets.addInlineJs('var wow = new WOW();wow.init();',{'priority':99, 'pipeline':false, 'group':'bottom'}) %}*/
/*                 {% endif %}*/
/*                 {% if page.header.google_prettify == "disabled" %}*/
/*                 {% elseif page.header.google_prettify == "enabled" or theme_config.google_prettify.enabled %}*/
/*                     {% do assets.addJs('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js',{'priority':100, 'group':'bottom'}) %}*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*             {{ assets.js('bottom') }}*/
/*         {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
