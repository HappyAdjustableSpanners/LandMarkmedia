<?php

/* modular/about_about.html.twig */
class __TwigTemplate_64de4c5ea8e3b1f6a9ac88d6a3863f71c50524bc0018e8dbcd1c1f3d641d8406 extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section bg-blue\">

  <div class=\"row align-text-left about-dual-col\">
    <div class=\"col-md-6 margin-bottom-20\">
      <h1>
        ";
        // line 6
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "heading1", array());
        echo "
      </h1>
      <hr class=\"hr-short-red\">
      <p>
              ";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "text1", array()));
        echo "
      </p>
    </div>
    <div class=\"col-md-6\">
    <h1>      
        ";
        // line 15
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "heading2", array());
        echo "
    </h1>
    <hr class=\"hr-short-red\">
      <p>
              ";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "text2", array()));
        echo "
      </p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/about_about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  41 => 15,  33 => 10,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section bg-blue\">

  <div class=\"row align-text-left about-dual-col\">
    <div class=\"col-md-6 margin-bottom-20\">
      <h1>
        {{header.heading1}}
      </h1>
      <hr class=\"hr-short-red\">
      <p>
              {{header.text1 | markdown}}
      </p>
    </div>
    <div class=\"col-md-6\">
    <h1>      
        {{header.heading2}}
    </h1>
    <hr class=\"hr-short-red\">
      <p>
              {{header.text2 | markdown}}
      </p>
    </div>
  </div>
</div>", "modular/about_about.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\about_about.html.twig");
    }
}
