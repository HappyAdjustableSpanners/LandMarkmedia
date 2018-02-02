<?php

/* modular/home_contact.html.twig */
class __TwigTemplate_d11e5f29f53b0b62cbe702a1894dba7677fe7b6f92df7b6f08ebd17e0539f69b extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section\" id=\"section-contact\">
  <h1 class=\"margin-top-0\">
    Contact us
  </h1>

  <p class=\"margin-bottom-50\">";
        // line 6
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "subheading", array());
        echo "</p>

  <div class=\"row\" id=\"contact-fields\">
    <div class=\"col-md-4\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-envelope fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">";
        // line 14
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "address", array());
        echo "</div>
        </div>
    </div>
    <div class=\"col-md-4 contact-dividers\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-mobile fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">
                ";
        // line 23
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "phone", array());
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-map-marker fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">";
        // line 32
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "email", array());
        echo "</div>
        </div>
    </div>
    ";
        // line 48
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/home_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 48,  61 => 32,  49 => 23,  37 => 14,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section\" id=\"section-contact\">
  <h1 class=\"margin-top-0\">
    Contact us
  </h1>

  <p class=\"margin-bottom-50\">{{header.subheading}}</p>

  <div class=\"row\" id=\"contact-fields\">
    <div class=\"col-md-4\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-envelope fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">{{header.address}}</div>
        </div>
    </div>
    <div class=\"col-md-4 contact-dividers\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-mobile fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">
                {{header.phone}}
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"row\">
            <div class=\"col-sm-2 contact-icon\">
                <i class=\"fa fa-map-marker fa-3x\"></i>
            </div>
            <div class=\"col-sm-10 contact-content\">{{header.email}}</div>
        </div>
    </div>
    {# <div class=\"col-md-4\">
        <div class=\"row\">
             <div class=\"col-md-4\">
            </div>
             <div class=\"col-md-4\" id=\"logos\">
                <a href=\"{{header.twitterurl}}\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                <a href=\"{{header.linkedinurl}}\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                <a href=\"{{header.facebookurl}}\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
            </div>
             <div class=\"col-md-4\">
            </div>
        </div>
    </div> #}
  </div>
</div>", "modular/home_contact.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\home_contact.html.twig");
    }
}
