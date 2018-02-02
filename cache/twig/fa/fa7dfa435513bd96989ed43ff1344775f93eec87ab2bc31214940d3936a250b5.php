<?php

/* item.html.twig */
class __TwigTemplate_817943d1553d99d633259d38314c26fe46eedf75218445093e5a09fa8cf6bb1d extends Twig_Template
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
        // line 2
        echo "
\t";
        // line 3
        $this->loadTemplate("item.html.twig", "item.html.twig", 3, "582743565")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% set img = (../img.jpg) %} #}

\t{% embed 'partials/base.html.twig' %}

\t\t{% block content %}
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"hero-image\" style=\"background-image: url({{ 'img.jpg' }});\">
    \t\t\t<div class=\"hero-text\">
    \t\t\t\t<h1 id=\"main-title\">Blog</h1>
    \t\t\t\t<p>Lorum el Ipsum</p>
  \t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h1 id=\"recent-posts-title\">Recent</h1>
\t\t\t\t\t{% for p in page.find('/blog').children.order('date', 'desc').slice(0,5) %}
\t\t\t\t\t\t{% if loop.index <= 3 %}
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':p, 'truncate':true} %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t
\t\t{% endblock %}

\t{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_817943d1553d99d633259d38314c26fe46eedf75218445093e5a09fa8cf6bb1d_582743565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 7
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 7)->display($context);
            // line 8
            echo "\t\t\t";
        }
        // line 9
        echo "\t\t\t<div class=\"hero-image\" style=\"background-image: url(";
        echo "img.jpg";
        echo ");\">
    \t\t\t<div class=\"hero-text\">
    \t\t\t\t<h1 id=\"main-title\">Blog</h1>
    \t\t\t\t<p>Lorum el Ipsum</p>
  \t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t";
        // line 21
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 21)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 22
        echo "\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h1 id=\"recent-posts-title\">Recent</h1>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 30)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["p"], "truncate" => true)));
                // line 31
                echo "\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 33,  184 => 32,  181 => 31,  178 => 30,  175 => 29,  158 => 28,  150 => 22,  148 => 21,  132 => 9,  129 => 8,  126 => 7,  123 => 6,  120 => 5,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% set img = (../img.jpg) %} #}

\t{% embed 'partials/base.html.twig' %}

\t\t{% block content %}
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"hero-image\" style=\"background-image: url({{ 'img.jpg' }});\">
    \t\t\t<div class=\"hero-text\">
    \t\t\t\t<h1 id=\"main-title\">Blog</h1>
    \t\t\t\t<p>Lorum el Ipsum</p>
  \t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h1 id=\"recent-posts-title\">Recent</h1>
\t\t\t\t\t{% for p in page.find('/blog').children.order('date', 'desc').slice(0,5) %}
\t\t\t\t\t\t{% if loop.index <= 3 %}
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page, 'page':p, 'truncate':true} %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t
\t\t{% endblock %}

\t{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\item.html.twig");
    }
}
