<?php

/* modular/hero-image.html.twig */
class __TwigTemplate_b24dbe69dc959172f07804feb52ff9d5c7496b9b8d4726f894825727085047e4 extends Twig_Template
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
</div>";
    }

    public function getTemplateName()
    {
        return "modular/hero-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
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
</div>", "modular/hero-image.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\hero-image.html.twig");
    }
}
