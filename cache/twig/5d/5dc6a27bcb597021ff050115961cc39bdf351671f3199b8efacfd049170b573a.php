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
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 14
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 17
            echo "            <h4><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 19
        echo "        <span class=\"list-blog-date\">
            <span>";
        // line 20
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
            <em>";
        // line 21
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
        </span>
        ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 24
            echo "        <span class=\"tags\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "            <a href=\"";
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
            // line 28
            echo "        </span>
        ";
        }
        // line 30
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 31
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 32
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 35
                echo "            ";
            }
            // line 36
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 38
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 44
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 45
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 46
                echo "        ";
                $context["show_prev_next"] = true;
                // line 47
                echo "        ";
            }
            // line 48
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 49
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
        <p><a href=\"";
            // line 50
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 51
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 52
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 53
                echo "            ";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "
        ";
            } else {
                // line 55
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
        ";
            }
            // line 57
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 59
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 60
            $context["show_prev_next"] = true;
            // line 61
            echo "    ";
        }
        // line 62
        echo "    
    ";
        // line 63
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 64
            echo "        <p class=\"prev-next sg-center\">
            ";
            // line 65
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 66
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            ";
            }
            // line 68
            echo "            ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 69
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 71
            echo "        </p>
    ";
        }
        // line 73
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
        return array (  227 => 73,  223 => 71,  217 => 69,  214 => 68,  208 => 66,  206 => 65,  203 => 64,  201 => 63,  198 => 62,  195 => 61,  193 => 60,  188 => 59,  182 => 57,  176 => 55,  170 => 53,  167 => 52,  165 => 51,  161 => 50,  156 => 49,  153 => 48,  150 => 47,  147 => 46,  145 => 45,  140 => 44,  138 => 43,  131 => 38,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  103 => 28,  89 => 26,  85 => 25,  82 => 24,  80 => 23,  75 => 21,  71 => 20,  68 => 19,  60 => 17,  51 => 14,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(960) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(400) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <div class="list-blog-header">*/
/*         {% if page.header.link %}*/
/*             <h4>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h4>*/
/*         {% else %}*/
/*             <h4><a href="{{ page.url }}">{{ page.title }}</a></h4>*/
/*         {% endif %}*/
/*         <span class="list-blog-date">*/
/*             <span>{{ page.date|date("d") }}</span>*/
/*             <em>{{ page.date|date("M") }}</em>*/
/*         </span>*/
/*         {% if page.taxonomy.tag %}*/
/*         <span class="tags">*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a href="{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% endif %}*/
/*         {% if header_image %}*/
/*             {% if header_image_file %}*/
/*                 {% set header_image_media = page.media.images[header_image_file] %}*/
/*             {% else %}*/
/*                 {% set header_image_media = page.media.images|first %}*/
/*             {% endif %}*/
/*             {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div class="list-blog-padding">*/
/* */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         {{ page.content }}*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         {{ page.summary }}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% elseif truncate %}*/
/*         {% if page.summary != page.content %}*/
/*             {{ page.content|truncate(550) }}*/
/*         {% else %}*/
/*             {{ page.content }}*/
/*         {% endif %}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% else %}*/
/*         {{ page.content }}*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/*     */
/*     {% if show_prev_next %}*/
/*         <p class="prev-next sg-center">*/
/*             {% if not page.isLast %}*/
/*                 <a class="button" href="{{ page.prevSibling.url }}"><i class="fa fa-chevron-left"></i> Previous Post</a>*/
/*             {% endif %}*/
/*             {% if not page.isFirst %}*/
/*                 <a class="button" href="{{ page.nextSibling.url }}">Next Post <i class="fa fa-chevron-right"></i></a>*/
/*             {% endif %}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
