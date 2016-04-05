<?php

/* partials/js.html.twig */
class __TwigTemplate_a20eca5043240f4d42dc3ca983cd52250263679922c7940b93f71a5da19e6c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.core.js", 1 => array("priority" => 104, "group" => "bottom")), "method");
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_abide_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 3
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_abide_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_abide_js", array()), "enabled", array()))) {
            // line 4
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.abide.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_accoridion_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 7
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_accoridion_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_accoridion_js", array()), "enabled", array()))) {
            // line 8
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.accoridion.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_accordionMenu_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 11
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_accordionMenu_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_accordionMenu_js", array()), "enabled", array()))) {
            // line 12
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.accordionMenu.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_drilldown_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 15
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_drilldown_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_drilldown_js", array()), "enabled", array()))) {
            // line 16
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.drilldown.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_dropdown_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 19
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_dropdown_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_dropdown_js", array()), "enabled", array()))) {
            // line 20
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.dropdown.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_dropdownMenu_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 23
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_dropdownMenu_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_dropdownMenu_js", array()), "enabled", array()))) {
            // line 24
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.dropdownMenu.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_equalizer_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 27
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_equalizer_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_equalizer_js", array()), "enabled", array()))) {
            // line 28
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.equalizer.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_interchange_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 31
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_interchange_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_interchange_js", array()), "enabled", array()))) {
            // line 32
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.interchange.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_magellan_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 35
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_magellan_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_magellan_js", array()), "enabled", array()))) {
            // line 36
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.magellan.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_offcanvas_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 39
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_offcanvas_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_offcanvas_js", array()), "enabled", array()))) {
            // line 40
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.offcanvas.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_orbit_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 43
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_orbit_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_orbit_js", array()), "enabled", array()))) {
            // line 44
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.orbit.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_responsiveMenu_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 47
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_responsiveMenu_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_responsiveMenu_js", array()), "enabled", array()))) {
            // line 48
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.responsiveMenu.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_responsiveToggle_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 51
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_responsiveToggle_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_responsiveToggle_js", array()), "enabled", array()))) {
            // line 52
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.responsiveToggle.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_reveal_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 55
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_reveal_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_reveal_js", array()), "enabled", array()))) {
            // line 56
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.reveal.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_slider_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 59
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_slider_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_slider_js", array()), "enabled", array()))) {
            // line 60
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.slider.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_sticky_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 63
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_sticky_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_sticky_js", array()), "enabled", array()))) {
            // line 64
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.sticky.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_tabs_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 67
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_tabs_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_tabs_js", array()), "enabled", array()))) {
            // line 68
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.tabs.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 70
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_toggler_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 71
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_toggler_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_toggler_js", array()), "enabled", array()))) {
            // line 72
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.toggler.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_tooltip_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 75
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_tooltip_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_tooltip_js", array()), "enabled", array()))) {
            // line 76
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.tooltip.js", 1 => array("priority" => 103, "group" => "bottom")), "method");
        }
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_box_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 79
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_box_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_box_js", array()), "enabled", array()))) {
            // line 80
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.box.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 82
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_keyboard_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 83
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_keyboard_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_keyboard_js", array()), "enabled", array()))) {
            // line 84
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.keyboard.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 86
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_mediaQuery_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 87
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_mediaQuery_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_mediaQuery_js", array()), "enabled", array()))) {
            // line 88
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.mediaQuery.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_motion_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 91
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_motion_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_motion_js", array()), "enabled", array()))) {
            // line 92
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.motion.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_nest_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 95
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_nest_util_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_nest_js", array()), "enabled", array()))) {
            // line 96
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.nest.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 98
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_timerAndImageLoader_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 99
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_timerAndImageLoader_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_timerAndImageLoader_js", array()), "enabled", array()))) {
            // line 100
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.timerAndImageLoader.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 102
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_touch_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 103
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_touch_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_touch_js", array()), "enabled", array()))) {
            // line 104
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.touch.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 106
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_triggers_js", array()) == "disabled")) {
        } elseif ((($this->getAttribute($this->getAttribute(        // line 107
(isset($context["page"]) ? $context["page"] : null), "header", array()), "foundation_util_triggers_js", array()) == "enabled") || $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "foundation_util_triggers_js", array()), "enabled", array()))) {
            // line 108
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/js/foundation.util.triggers.js", 1 => array("priority" => 102, "group" => "bottom")), "method");
        }
        // line 110
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => "\$(document).foundation();", 1 => array("priority" => 99, "pipeline" => false, "group" => "bottom")), "method");
    }

    public function getTemplateName()
    {
        return "partials/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 110,  233 => 108,  231 => 107,  229 => 106,  225 => 104,  223 => 103,  221 => 102,  217 => 100,  215 => 99,  213 => 98,  209 => 96,  207 => 95,  205 => 94,  201 => 92,  199 => 91,  197 => 90,  193 => 88,  191 => 87,  189 => 86,  185 => 84,  183 => 83,  181 => 82,  177 => 80,  175 => 79,  173 => 78,  169 => 76,  167 => 75,  165 => 74,  161 => 72,  159 => 71,  157 => 70,  153 => 68,  151 => 67,  149 => 66,  145 => 64,  143 => 63,  141 => 62,  137 => 60,  135 => 59,  133 => 58,  129 => 56,  127 => 55,  125 => 54,  121 => 52,  119 => 51,  117 => 50,  113 => 48,  111 => 47,  109 => 46,  105 => 44,  103 => 43,  101 => 42,  97 => 40,  95 => 39,  93 => 38,  89 => 36,  87 => 35,  85 => 34,  81 => 32,  79 => 31,  77 => 30,  73 => 28,  71 => 27,  69 => 26,  65 => 24,  63 => 23,  61 => 22,  57 => 20,  55 => 19,  53 => 18,  49 => 16,  47 => 15,  45 => 14,  41 => 12,  39 => 11,  37 => 10,  33 => 8,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.core.js',{'priority':104, 'group':'bottom'}) %}*/
/* {% if page.header.foundation_abide_js == "disabled" %}*/
/* {% elseif page.header.foundation_abide_js == "enabled" or theme_config.foundation_abide_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.abide.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_accoridion_js == "disabled" %}*/
/* {% elseif page.header.foundation_accoridion_js == "enabled" or theme_config.foundation_accoridion_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.accoridion.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_accordionMenu_js == "disabled" %}*/
/* {% elseif page.header.foundation_accordionMenu_js == "enabled" or theme_config.foundation_accordionMenu_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.accordionMenu.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_drilldown_js == "disabled" %}*/
/* {% elseif page.header.foundation_drilldown_js == "enabled" or theme_config.foundation_drilldown_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.drilldown.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_dropdown_js == "disabled" %}*/
/* {% elseif page.header.foundation_dropdown_js == "enabled" or theme_config.foundation_dropdown_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.dropdown.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_dropdownMenu_js == "disabled" %}*/
/* {% elseif page.header.foundation_dropdownMenu_js == "enabled" or theme_config.foundation_dropdownMenu_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.dropdownMenu.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_equalizer_js == "disabled" %}*/
/* {% elseif page.header.foundation_equalizer_js == "enabled" or theme_config.foundation_equalizer_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.equalizer.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_interchange_js == "disabled" %}*/
/* {% elseif page.header.foundation_interchange_js == "enabled" or theme_config.foundation_interchange_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.interchange.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_magellan_js == "disabled" %}*/
/* {% elseif page.header.foundation_magellan_js == "enabled" or theme_config.foundation_magellan_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.magellan.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_offcanvas_js == "disabled" %}*/
/* {% elseif page.header.foundation_offcanvas_js == "enabled" or theme_config.foundation_offcanvas_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.offcanvas.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_orbit_js == "disabled" %}*/
/* {% elseif page.header.foundation_orbit_js == "enabled" or theme_config.foundation_orbit_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.orbit.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_responsiveMenu_js == "disabled" %}*/
/* {% elseif page.header.foundation_responsiveMenu_js == "enabled" or theme_config.foundation_responsiveMenu_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.responsiveMenu.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_responsiveToggle_js == "disabled" %}*/
/* {% elseif page.header.foundation_responsiveToggle_js == "enabled" or theme_config.foundation_responsiveToggle_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.responsiveToggle.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_reveal_js == "disabled" %}*/
/* {% elseif page.header.foundation_reveal_js == "enabled" or theme_config.foundation_reveal_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.reveal.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_slider_js == "disabled" %}*/
/* {% elseif page.header.foundation_slider_js == "enabled" or theme_config.foundation_slider_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.slider.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_sticky_js == "disabled" %}*/
/* {% elseif page.header.foundation_sticky_js == "enabled" or theme_config.foundation_sticky_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.sticky.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_tabs_js == "disabled" %}*/
/* {% elseif page.header.foundation_tabs_js == "enabled" or theme_config.foundation_tabs_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.tabs.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_toggler_js == "disabled" %}*/
/* {% elseif page.header.foundation_toggler_js == "enabled" or theme_config.foundation_toggler_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.toggler.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_tooltip_js == "disabled" %}*/
/* {% elseif page.header.foundation_tooltip_js == "enabled" or theme_config.foundation_tooltip_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.tooltip.js',{'priority':103, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_box_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_box_js == "enabled" or theme_config.foundation_util_box_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.box.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_keyboard_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_keyboard_js == "enabled" or theme_config.foundation_util_keyboard_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.keyboard.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_mediaQuery_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_mediaQuery_js == "enabled" or theme_config.foundation_util_mediaQuery_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.mediaQuery.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_motion_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_motion_js == "enabled" or theme_config.foundation_util_motion_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.motion.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_nest_js == "disabled" %}*/
/* {% elseif page.header.foundation_nest_util_js == "enabled" or theme_config.foundation_util_nest_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.nest.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_timerAndImageLoader_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_timerAndImageLoader_js == "enabled" or theme_config.foundation_util_timerAndImageLoader_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.timerAndImageLoader.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_touch_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_touch_js == "enabled" or theme_config.foundation_util_touch_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.touch.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% if page.header.foundation_util_triggers_js == "disabled" %}*/
/* {% elseif page.header.foundation_util_triggers_js == "enabled" or theme_config.foundation_util_triggers_js.enabled %}*/
/*     {% do assets.addJs('theme://bower_components/foundation-sites/js/foundation.util.triggers.js',{'priority':102, 'group':'bottom'}) %}*/
/* {% endif %}*/
/* {% do assets.addInlineJs('$(document).foundation();',{'priority':99, 'pipeline':false, 'group':'bottom'}) %}*/
