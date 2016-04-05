<?php

/* partials/navigation.html.twig */
class __TwigTemplate_fcb45de0886f7430a04359d452ae26a91ea956039f5ae464e0b045695ade12b4 extends Twig_Template
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
        // line 17
        echo "
<nav id=\"sg-mainmenu\">
  <ul class=\"";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            echo "dropdown ";
        }
        echo "menu\"";
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            echo " data-dropdown-menu";
        }
        echo ">
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 21
            echo "      ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 23
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 25
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
          <a href=\"";
                // line 26
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
            ";
                // line 27
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 28
                echo "            ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "      <li>
        <a href=\"";
            // line 35
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
          ";
            // line 36
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 37
            echo "          ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 42
            echo "      <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 42)->display($context);
            echo "</li>
    ";
        }
        // line 44
        echo "  </ul>
</nav>";
    }

    // line 1
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul class=\"vertical menu submenu\">
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 14,  167 => 11,  164 => 10,  162 => 9,  156 => 7,  150 => 6,  146 => 5,  141 => 4,  138 => 3,  133 => 2,  121 => 1,  116 => 44,  110 => 42,  107 => 41,  96 => 37,  90 => 36,  86 => 35,  83 => 34,  78 => 33,  75 => 32,  64 => 28,  58 => 27,  54 => 26,  49 => 25,  46 => 24,  41 => 23,  35 => 21,  33 => 20,  23 => 19,  19 => 17,);
    }
}
/* {% macro loop(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*         <li class="{{ current_page }}">*/
/*             <a href="{{ p.url }}">*/
/*                 {% if p.header.icon %}<i class="fa fa-{{ p.header.icon }}"></i>{% endif %}*/
/*                 {{ p.menu }}*/
/*             </a>*/
/*             {% if p.children.visible.count > 0 %}*/
/*                 <ul class="vertical menu submenu">*/
/*                     {{ _self.loop(p) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <nav id="sg-mainmenu">*/
/*   <ul class="{% if theme_config.dropdown.enabled %}dropdown {% endif %}menu"{% if theme_config.dropdown.enabled %} data-dropdown-menu{% endif %}>*/
/*     {% if theme_config.dropdown.enabled %}*/
/*       {{ _self.loop(pages) }}*/
/*     {% else %}*/
/*       {% for page in pages.children.visible %}*/
/*         {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*         <li class="{{ current_page }}">*/
/*           <a href="{{ page.url }}">*/
/*             {% if page.header.icon %}<i class="fa fa-{{ page.header.icon }}"></i>{% endif %}*/
/*             {{ page.menu }}*/
/*           </a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*     {% for mitem in site.menu %}*/
/*       <li>*/
/*         <a href="{{ mitem.url }}">*/
/*           {% if mitem.icon %}<i class="fa fa-{{ mitem.icon }}"></i>{% endif %}*/
/*           {{ mitem.text }}*/
/*         </a>*/
/*       </li>*/
/*     {% endfor %}*/
/*     {% if config.plugins.login.enabled and grav.user.username %}*/
/*       <li><i class="fa fa-lock"></i> {% include 'partials/login-status.html.twig' %}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </nav>*/