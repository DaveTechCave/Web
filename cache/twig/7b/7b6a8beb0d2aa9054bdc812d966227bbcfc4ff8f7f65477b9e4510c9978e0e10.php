<?php

/* blog.html.twig */
class __TwigTemplate_cfb8bdb285134e2bc15f9e7720f7b1e2195afc477b44b68b65bf4d207279b9b0 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "107626880")->display($context);
        // line 48
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 48,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_cfb8bdb285134e2bc15f9e7720f7b1e2195afc477b44b68b65bf4d207279b9b0_107626880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 7
        echo "
\t\t";
        // line 8
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 9
            echo "\t\t<div class=\"blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t\t<div class=\"row sg-center sg-highlight-light\">
\t\t\t\t<div class=\"sg-content\">
\t\t";
        } else {
            // line 13
            echo "\t\t<div class=\"blog-header\">
\t\t\t<div class=\"row sg-center\">
\t\t\t\t<div class=\"sg-content\">
\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 23
            echo "\t\t\t\t<div class=\"sg-breadcrumb\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 25
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 25)->display($context);
            // line 26
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 29
        echo "\t\t<div class=\"sg-blog\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"listing\" class=\"medium-8 columns medium-nopaddingleft\">
\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "\t\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 33)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 34
            echo "\t\t\t\t    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t                ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 37
            echo "\t                    ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 37)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 38
            echo "\t                ";
        }
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar\" class=\"medium-4 columns medium-nopaddingright\">
\t\t\t\t\t";
        // line 41
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 41)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 42
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 42,  172 => 41,  168 => 39,  165 => 38,  162 => 37,  160 => 36,  157 => 35,  143 => 34,  140 => 33,  123 => 32,  118 => 29,  113 => 26,  111 => 25,  107 => 23,  105 => 22,  96 => 17,  90 => 13,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  67 => 1,  65 => 3,  51 => 1,  21 => 48,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set collection = page.collection() %}*/
/* */
/* 	{% block content %}*/
/* 		{% set blog_image = page.media.images|first %}*/
/* */
/* 		{% if blog_image %}*/
/* 		<div class="blog-header-image" style="background-image: url({{ blog_image.url }});">*/
/* 			<div class="row sg-center sg-highlight-light">*/
/* 				<div class="sg-content">*/
/* 		{% else %}*/
/* 		<div class="blog-header">*/
/* 			<div class="row sg-center">*/
/* 				<div class="sg-content">*/
/* 		{% endif %}*/
/* 					{{ page.content }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 			{% if config.plugins.breadcrumbs.enabled %}*/
/* 				<div class="sg-breadcrumb">*/
/* 					<div class="row">*/
/* 						{% include 'partials/breadcrumbs.html.twig' %}*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		<div class="sg-blog">*/
/* 			<div class="row">*/
/* 				<div id="listing" class="medium-8 columns medium-nopaddingleft">*/
/* 					{% for child in collection %}*/
/* 				        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}*/
/* 				    {% endfor %}*/
/* */
/* 	                {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/* 	                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/* 	                {% endif %}*/
/* 				</div>*/
/* 				<div id="sidebar" class="medium-4 columns medium-nopaddingright">*/
/* 					{% include 'partials/sidebar.html.twig' with {'blog':page} %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
/* */
/* */
