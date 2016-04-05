<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_8a4cd0e718f3ea0ec9ba661ba16342e5e6dcd83da26fa35f57b6fdf4639f2930 extends Twig_Template
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
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 960);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 400);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 10
            echo "            <h4>
                ";
            // line 11
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 12
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">
                        <i class=\"fa fa-angle-double-right\"></i>
                    </a>
                ";
            }
            // line 16
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 19
            echo "            <h4>
                <a href=\"";
            // line 20
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        }
        // line 23
        echo "        <span class=\"list-blog-date\">
            <span>";
        // line 24
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
            <em>";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
        </span>
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 28
            echo "            <span class=\"tags\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "                    <a href=\"";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array());
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </span>
        ";
        }
        // line 34
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 35
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 36
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 37
                echo "            ";
            } else {
                // line 38
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 39
                echo "            ";
            }
            // line 40
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 42
        echo "
    </div>

    <div class=\"list-blog-padding\">

        ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 48
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 49
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 50
                echo "                ";
                $context["show_prev_next"] = true;
                // line 51
                echo "            ";
            }
            // line 52
            echo "        ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 53
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <p>
                <a href=\"";
            // line 55
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a>
            </p>
        ";
        } elseif (        // line 57
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 58
            echo "            ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 59
                echo "                ";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "
            ";
            } else {
                // line 61
                echo "                ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
            ";
            }
            // line 63
            echo "            <p>
                <a href=\"";
            // line 64
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a>
            </p>
        ";
        } else {
            // line 67
            echo "            ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            ";
            // line 68
            $context["show_prev_next"] = true;
            // line 69
            echo "        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 72
            echo "            <p class=\"prev-next sg-center\">
                ";
            // line 73
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 74
                echo "                    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">
                        <i class=\"fa fa-chevron-left\"></i>
                        Previous Post</a>
                ";
            }
            // line 78
            echo "
                ";
            // line 79
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 80
                echo "                    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\">Next Post
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                ";
            }
            // line 84
            echo "
                ";
            // line 86
            echo "                ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 86)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
            // line 87
            echo "            </p>
        ";
        }
        // line 89
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 89,  245 => 87,  242 => 86,  239 => 84,  231 => 80,  229 => 79,  226 => 78,  218 => 74,  216 => 73,  213 => 72,  211 => 71,  208 => 70,  205 => 69,  203 => 68,  198 => 67,  192 => 64,  189 => 63,  183 => 61,  177 => 59,  174 => 58,  172 => 57,  167 => 55,  161 => 53,  158 => 52,  155 => 51,  152 => 50,  150 => 49,  145 => 48,  143 => 47,  136 => 42,  130 => 40,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  115 => 35,  112 => 34,  108 => 32,  94 => 30,  90 => 29,  87 => 28,  85 => 27,  80 => 25,  76 => 24,  73 => 23,  65 => 20,  62 => 19,  53 => 16,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item">*/
/* */
/*     {% set header_image = page.header.header_image | defined(true) %}*/
/*     {% set header_image_width = page.header.header_image_width | defined(960) %}*/
/*     {% set header_image_height = page.header.header_image_height | defined(400) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <div class="list-blog-header">*/
/*         {% if page.header.link %}*/
/*             <h4>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                     <a href="{{ page.url }}">*/
/*                         <i class="fa fa-angle-double-right"></i>*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h4>*/
/*         {% else %}*/
/*             <h4>*/
/*                 <a href="{{ page.url }}">{{ page.title }}</a>*/
/*             </h4>*/
/*         {% endif %}*/
/*         <span class="list-blog-date">*/
/*             <span>{{ page.date|date("d") }}</span>*/
/*             <em>{{ page.date|date("M") }}</em>*/
/*         </span>*/
/*         {% if page.taxonomy.tag %}*/
/*             <span class="tags">*/
/*                 {% for tag in page.taxonomy.tag %}*/
/*                     <a href="{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*                 {% endfor %}*/
/*             </span>*/
/*         {% endif %}*/
/*         {% if header_image %}*/
/*             {% if header_image_file %}*/
/*                 {% set header_image_media = page.media.images[header_image_file] %}*/
/*             {% else %}*/
/*                 {% set header_image_media = page.media.images | first %}*/
/*             {% endif %}*/
/*             {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div class="list-blog-padding">*/
/* */
/*         {% if page.header.continue_link is sameas(false) %}*/
/*             {{ page.content }}*/
/*             {% if not truncate %}*/
/*                 {% set show_prev_next = true %}*/
/*             {% endif %}*/
/*         {% elseif truncate and page.summary != page.content %}*/
/*             {{ page.summary }}*/
/*             <p>*/
/*                 <a href="{{ page.url }}">Continue Reading...</a>*/
/*             </p>*/
/*         {% elseif truncate %}*/
/*             {% if page.summary != page.content %}*/
/*                 {{ page.content|truncate(550) }}*/
/*             {% else %}*/
/*                 {{ page.content }}*/
/*             {% endif %}*/
/*             <p>*/
/*                 <a href="{{ page.url }}">Continue Reading...</a>*/
/*             </p>*/
/*         {% else %}*/
/*             {{ page.content }}*/
/*             {% set show_prev_next = true %}*/
/*         {% endif %}*/
/* */
/*         {% if show_prev_next %}*/
/*             <p class="prev-next sg-center">*/
/*                 {% if not page.isLast %}*/
/*                     <a class="button" href="{{ page.prevSibling.url }}">*/
/*                         <i class="fa fa-chevron-left"></i>*/
/*                         Previous Post</a>*/
/*                 {% endif %}*/
/* */
/*                 {% if not page.isFirst %}*/
/*                     <a class="button" href="{{ page.nextSibling.url }}">Next Post*/
/*                         <i class="fa fa-chevron-right"></i>*/
/*                     </a>*/
/*                 {% endif %}*/
/* */
/*                 {# Devon Smith: Added comment twig line #}*/
/*                 {% include 'partials/comments.html.twig' with {'page': page} %}*/
/*             </p>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
