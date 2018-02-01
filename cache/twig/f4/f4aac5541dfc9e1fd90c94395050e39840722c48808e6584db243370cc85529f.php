<?php

/* modular/dual_col_text_image.html.twig */
class __TwigTemplate_63edb32789abc7caea759e2b57a5b7d6015e98fbbfb138ec172f3a60edca0ff7 extends Twig_Template
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
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "bgColor", array()) == "white")) {
            // line 2
            echo "    
<div class=\"container-fluid text-center section bg-white dual-col-img align-text-left\">
";
        } else {
            // line 5
            echo "    
<div class=\"container-fluid text-center section bg-red dual-col-img align-text-left\">
";
        }
        // line 8
        echo "
    <!-- First row -->
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h1>
          ";
        // line 13
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "heading", array());
        echo "
        </h1>
        <hr class=\"hr-short-red\">
      </div>  <!-- EOF col -->
    </div>  <!-- EOF row -->

    <div class=\"row\">

      ";
        // line 21
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "alignment", array()) == "imgRight")) {
            // line 22
            echo "      <div class=\"col-md-6\">
        <p>
          ";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "text", array()));
            echo "
        </p>
      </div>  <!-- EOF col -->
      <div class=\"col-md-6\">
        ";
            // line 28
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                // line 29
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 31
            echo "      </div>  <!-- EOF col -->

      ";
        } else {
            // line 34
            echo "      <div class=\"col-md-6\">
        ";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                // line 36
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 38
            echo "      </div>  <!-- EOF col -->
      <div class=\"col-md-6\">
        <p>
          ";
            // line 41
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "text", array()));
            echo "
        </p>
      </div>  <!-- EOF col -->
    ";
        }
        // line 45
        echo "    </div>  <!-- EOF row -->

</div>";
    }

    public function getTemplateName()
    {
        return "modular/dual_col_text_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  91 => 41,  86 => 38,  80 => 36,  78 => 35,  75 => 34,  70 => 31,  64 => 29,  62 => 28,  55 => 24,  51 => 22,  49 => 21,  38 => 13,  31 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if header.bgColor == \"white\" %}
    
<div class=\"container-fluid text-center section bg-white dual-col-img align-text-left\">
{% else %}
    
<div class=\"container-fluid text-center section bg-red dual-col-img align-text-left\">
{% endif %}

    <!-- First row -->
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h1>
          {{header.heading}}
        </h1>
        <hr class=\"hr-short-red\">
      </div>  <!-- EOF col -->
    </div>  <!-- EOF row -->

    <div class=\"row\">

      {% if header.alignment == \"imgRight\" %}
      <div class=\"col-md-6\">
        <p>
          {{header.text | markdown}}
        </p>
      </div>  <!-- EOF col -->
      <div class=\"col-md-6\">
        {% if page.header.image != '' %}
          {{ page.media.images[page.header.image].html() }}
        {% endif %}
      </div>  <!-- EOF col -->

      {% else %}
      <div class=\"col-md-6\">
        {% if page.header.image != '' %}
          {{ page.media.images[page.header.image].html() }}
        {% endif %}
      </div>  <!-- EOF col -->
      <div class=\"col-md-6\">
        <p>
          {{header.text | markdown}}
        </p>
      </div>  <!-- EOF col -->
    {% endif %}
    </div>  <!-- EOF row -->

</div>", "modular/dual_col_text_image.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\dual_col_text_image.html.twig");
    }
}
