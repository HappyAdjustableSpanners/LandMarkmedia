<?php

/* modular/about_custom.html.twig */
class __TwigTemplate_9e8e16553dd33735f9734afac5e733a2f9cc7946bace2eeb3caceb24fc761e39 extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section\" id=\"section-about\">
  <h1 class=\"margin-top-0\">
    About
  </h1>
  
  <p class=\"padding-top-20 padding-bottom-20\">
    ";
        // line 7
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "text", array());
        echo "
  </p>
  
  <button class=\"btn-styled\">
    Read More
  </button>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/about_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section\" id=\"section-about\">
  <h1 class=\"margin-top-0\">
    About
  </h1>
  
  <p class=\"padding-top-20 padding-bottom-20\">
    {{header.text}}
  </p>
  
  <button class=\"btn-styled\">
    Read More
  </button>
</div>", "modular/about_custom.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\modular\\about_custom.html.twig");
    }
}
