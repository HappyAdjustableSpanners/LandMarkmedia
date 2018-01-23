<?php

/* modular/contact.html.twig */
class __TwigTemplate_c2be55b0c5f2d5598c69930b93cdbcdbed60eeff2a2911a354746959102ce888 extends Twig_Template
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
        echo "<section class=\"contact-form ptb-100\">
    <div class=\"container text-center\">
        <h2>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>

        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 7
        $this->loadTemplate("forms/contact.html.twig", "modular/contact.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"contact-form ptb-100\">
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>

        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                {% include \"forms/contact.html.twig\" %}
            </div>
        </div>
    </div>
</section>
", "modular/contact.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\modular\\contact.html.twig");
    }
}
