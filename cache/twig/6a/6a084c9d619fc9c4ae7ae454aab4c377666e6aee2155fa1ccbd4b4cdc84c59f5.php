<?php

/* blog.html.twig */
class __TwigTemplate_c436e1323458ba47f65e53cf04cc71aa3a5b54a3e40f1ca3b438607ec604562e extends Twig_Template
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
        $context["img"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 2
        echo "<div class=\"hero-image\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo ");\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "heading", array());
        echo "</h1>
    <p>";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
        echo "</p>
  </div>
</div>


";
        // line 10
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 10, "1009238732")->display($context);
        // line 61
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
        return array (  41 => 61,  39 => 10,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img = page.media.images|first %}
<div class=\"hero-image\" style=\"background-image: url({{ img.url }});\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">{{ page.header.heading }}</h1>
    <p>{{ page.header.subheading }}</p>
  </div>
</div>


{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- eof col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t\t{% if loop.index <= 3 %}
\t\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div> 
\t\t\t</div> <!-- eof row -->
\t\t</div> <!-- eof container -->
\t{% endblock %}

{% endembed %}


", "blog.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_c436e1323458ba47f65e53cf04cc71aa3a5b54a3e40f1ca3b438607ec604562e_1009238732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 10);
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
        // line 12
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 16
        echo "
\t\t";
        // line 17
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 18
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 20
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 22
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t\t";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 26
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t";
        }
        // line 28
        echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t";
        // line 33
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
            // line 34
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 34)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 35
            echo "\t\t\t\t\t\t\t";
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
        // line 36
        echo "
\t\t\t\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 38
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 38)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 39
            echo "\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- eof col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t";
        // line 47
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
            // line 48
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 49)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
                // line 50
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t";
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
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div> 
\t\t\t</div> <!-- eof row -->
\t\t</div> <!-- eof container -->
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
        return array (  303 => 52,  289 => 51,  286 => 50,  283 => 49,  280 => 48,  263 => 47,  254 => 40,  251 => 39,  248 => 38,  246 => 37,  243 => 36,  229 => 35,  226 => 34,  209 => 33,  202 => 28,  199 => 27,  196 => 26,  194 => 25,  187 => 22,  183 => 20,  177 => 18,  175 => 17,  172 => 16,  169 => 15,  166 => 14,  162 => 10,  160 => 12,  146 => 10,  41 => 61,  39 => 10,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img = page.media.images|first %}
<div class=\"hero-image\" style=\"background-image: url({{ img.url }});\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">{{ page.header.heading }}</h1>
    <p>{{ page.header.subheading }}</p>
  </div>
</div>


{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- eof col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t\t{% if loop.index <= 3 %}
\t\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div> 
\t\t\t</div> <!-- eof row -->
\t\t</div> <!-- eof container -->
\t{% endblock %}

{% endembed %}


", "blog.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\blog.html.twig");
    }
}
