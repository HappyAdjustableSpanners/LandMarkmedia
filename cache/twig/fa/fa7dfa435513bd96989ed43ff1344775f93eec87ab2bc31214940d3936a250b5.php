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
        echo "<div class=\"hero-image\" style=\"background-image: url(";
        echo "img.jpg";
        echo ");\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">Blog</h1>
    <p>Lorum el Ipsum</p>
  </div>
</div>

\t";
        // line 9
        $this->loadTemplate("item.html.twig", "item.html.twig", 9, "517973027")->display($context);
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
        return array (  30 => 9,  19 => 2,);
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
<div class=\"hero-image\" style=\"background-image: url({{ 'img.jpg' }});\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">Blog</h1>
    <p>Lorum el Ipsum</p>
  </div>
</div>

\t{% embed 'partials/base.html.twig' %}

\t\t{% block content %}
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
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
class __TwigTemplate_817943d1553d99d633259d38314c26fe46eedf75218445093e5a09fa8cf6bb1d_517973027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 9);
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 13
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t";
        }
        // line 15
        echo "\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t";
        // line 20
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 20)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 21
        echo "\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t</div>
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
        return array (  141 => 21,  139 => 20,  132 => 15,  129 => 14,  126 => 13,  123 => 12,  120 => 11,  30 => 9,  19 => 2,);
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
<div class=\"hero-image\" style=\"background-image: url({{ 'img.jpg' }});\">
    <div class=\"hero-text\">
    <h1 id=\"main-title\">Blog</h1>
    <p>Lorum el Ipsum</p>
  </div>
</div>

\t{% embed 'partials/base.html.twig' %}

\t\t{% block content %}
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t\t\t\t\t{% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
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
