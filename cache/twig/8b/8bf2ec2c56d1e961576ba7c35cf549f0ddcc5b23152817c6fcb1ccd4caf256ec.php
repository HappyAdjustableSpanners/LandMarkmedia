<?php

/* modular/service_service.html.twig */
class __TwigTemplate_8715f02634add91c372e34766f00c2af6be5c7bf894e2c063d00c1d3b8e87bf4 extends Twig_Template
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
        echo "

";
        // line 3
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "bgColor", array()) == "white")) {
            // line 4
            echo "    
    <div class=\"container-fluid bg-white section service-container\" id=\"service-service-section\">
";
        } elseif (($this->getAttribute(        // line 6
(isset($context["header"]) ? $context["header"] : null), "bgColor", array()) == "red")) {
            // line 7
            echo "    
    <div class=\"container-fluid bg-red section service-container\" id=\"service-service-section\">

";
        } else {
            // line 11
            echo "
    <div class=\"container-fluid bg-blue section service-container\" id=\"service-service-section\">

";
        }
        // line 15
        echo "
    <h1>";
        // line 16
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
        echo "</h1>
    <hr class=\"hr-short-red\">
    <p class=\"margin-bottom-50 margin-top-50\">";
        // line 18
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
        echo "</p>

    <ul>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "points", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 22
            echo "    
        <div class=\"row service-point-row\"> 
        <div class=\"col-md-1\">
        <!-- Get icon -->
        ";
            // line 26
            if (($this->getAttribute($context["point"], "image", array()) == "book.PNG")) {
                // line 27
                echo "            <i class=\"fa fa-book fa-5x\" aria-hidden=\"true\"></i>
        ";
            }
            // line 29
            echo "        ";
            if (($this->getAttribute($context["point"], "image", array()) == "hourglass.PNG")) {
                // line 30
                echo "            <i class=\"fa fa-hourglass-o fa-5x\" aria-hidden=\"true\"></i>
        ";
            }
            // line 32
            echo "        ";
            if (($this->getAttribute($context["point"], "image", array()) == "leaf.PNG")) {
                // line 33
                echo "            <i class=\"fa fa-leaf fa-5x\" aria-hidden=\"true\"></i>
        ";
            }
            // line 35
            echo "        ";
            if (($this->getAttribute($context["point"], "image", array()) == "lightbulb.PNG")) {
                // line 36
                echo "            <i class=\"fa fa-lightbulb-o fa-5x\" aria-hidden=\"true\"></i>
        ";
            }
            // line 38
            echo "        ";
            if (($this->getAttribute($context["point"], "image", array()) == "rocket.PNG")) {
                // line 39
                echo "            <i class=\"fa fa-rocket fa-5x\" aria-hidden=\"true\"></i>
        ";
            }
            // line 41
            echo "        </div>

        <div class=\"col-md-11 padding-top-10\"> 
            <p>";
            // line 44
            echo $this->getAttribute($context["point"], "text", array());
            echo "</p>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modular/service_service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  106 => 44,  101 => 41,  97 => 39,  94 => 38,  90 => 36,  87 => 35,  83 => 33,  80 => 32,  76 => 30,  73 => 29,  69 => 27,  67 => 26,  61 => 22,  57 => 21,  51 => 18,  46 => 16,  43 => 15,  37 => 11,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% if header.bgColor == \"white\" %}
    
    <div class=\"container-fluid bg-white section service-container\" id=\"service-service-section\">
{% elseif header.bgColor == \"red\" %}
    
    <div class=\"container-fluid bg-red section service-container\" id=\"service-service-section\">

{% else %}

    <div class=\"container-fluid bg-blue section service-container\" id=\"service-service-section\">

{% endif %}

    <h1>{{header.title}}</h1>
    <hr class=\"hr-short-red\">
    <p class=\"margin-bottom-50 margin-top-50\">{{header.description}}</p>

    <ul>
    {% for point in page.header.points %}
    
        <div class=\"row service-point-row\"> 
        <div class=\"col-md-1\">
        <!-- Get icon -->
        {% if point.image == \"book.PNG\" %}
            <i class=\"fa fa-book fa-5x\" aria-hidden=\"true\"></i>
        {% endif %}
        {% if point.image == \"hourglass.PNG\" %}
            <i class=\"fa fa-hourglass-o fa-5x\" aria-hidden=\"true\"></i>
        {% endif %}
        {% if point.image == \"leaf.PNG\" %}
            <i class=\"fa fa-leaf fa-5x\" aria-hidden=\"true\"></i>
        {% endif %}
        {% if point.image == \"lightbulb.PNG\" %}
            <i class=\"fa fa-lightbulb-o fa-5x\" aria-hidden=\"true\"></i>
        {% endif %}
        {% if point.image == \"rocket.PNG\" %}
            <i class=\"fa fa-rocket fa-5x\" aria-hidden=\"true\"></i>
        {% endif %}
        </div>

        <div class=\"col-md-11 padding-top-10\"> 
            <p>{{point.text}}</p>
        </div>
        </div>

    {% endfor %}
</div>", "modular/service_service.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\service_service.html.twig");
    }
}
