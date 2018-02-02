<?php

/* modular/home_services.html.twig */
class __TwigTemplate_a960287ab974d53f43ba8db50499f7dbd6ef30028102a7219b74203a65def4fc extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section bg-white\">
    <div>
  <h1 class=\"margin-top-0\">
    Services
  </h1>
  <hr align=\"middle\" class=\"hr-center hr-red\">
  <p>";
        // line 7
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "subheading", array());
        echo "</p>
  </div>
  
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 11
            echo "         <!-- For each 2 items, add a row -->
        ";
            // line 12
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 13
                echo "                <div class=\"row row-center\">
        ";
            }
            // line 15
            echo "            <div class=\"col-md-5 col-center\">
                <div class=\"service-card\">
                    <!-- icon -->
                    ";
            // line 18
            if (($this->getAttribute($context["service"], "image", array()) == "graph.PNG")) {
                // line 19
                echo "                        <i class=\"fa fa-bar-chart fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 21
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "pie-chart.PNG")) {
                // line 22
                echo "                        <i class=\"fa fa-pie-chart fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 24
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "lock.PNG")) {
                // line 25
                echo "                        <i class=\"fa fa-lock fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 27
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "house.PNG")) {
                // line 28
                echo "                        <i class=\"fa fa-home fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 30
            echo "
                    <!-- Title -->
                    <b><p class=\"padding-bottom-15 padding-top-15\">";
            // line 32
            echo $this->getAttribute($context["service"], "text", array());
            echo "</p></b>
                    <a href=\"/LandMarkmedia/services\"><button class=\"btn-hover goto-btn\"><i class=\"fa fa-chevron-circle-right fa-3x\"></i></button></a>
                </div> <!-- End of card -->
                <hr class=\"hr-red margin-bottom-50\">
            </div> <!-- End col -->

               ";
            // line 38
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 2) == 0))) {
                // line 39
                echo "        </div>
        ";
            }
            // line 41
            echo "
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/home_services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  110 => 41,  106 => 39,  104 => 38,  95 => 32,  91 => 30,  87 => 28,  84 => 27,  80 => 25,  77 => 24,  73 => 22,  70 => 21,  66 => 19,  64 => 18,  59 => 15,  55 => 13,  53 => 12,  50 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section bg-white\">
    <div>
  <h1 class=\"margin-top-0\">
    Services
  </h1>
  <hr align=\"middle\" class=\"hr-center hr-red\">
  <p>{{header.subheading}}</p>
  </div>
  
  {% for service in page.header.services %}
         <!-- For each 2 items, add a row -->
        {% if loop.index % 2 == 1 %}
                <div class=\"row row-center\">
        {% endif %}
            <div class=\"col-md-5 col-center\">
                <div class=\"service-card\">
                    <!-- icon -->
                    {% if service.image == \"graph.PNG\" %}
                        <i class=\"fa fa-bar-chart fa-5x\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if service.image == \"pie-chart.PNG\" %}
                        <i class=\"fa fa-pie-chart fa-5x\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if service.image == \"lock.PNG\" %}
                        <i class=\"fa fa-lock fa-5x\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if service.image == \"house.PNG\" %}
                        <i class=\"fa fa-home fa-5x\" aria-hidden=\"true\"></i>
                    {% endif %}

                    <!-- Title -->
                    <b><p class=\"padding-bottom-15 padding-top-15\">{{service.text}}</p></b>
                    <a href=\"/LandMarkmedia/services\"><button class=\"btn-hover goto-btn\"><i class=\"fa fa-chevron-circle-right fa-3x\"></i></button></a>
                </div> <!-- End of card -->
                <hr class=\"hr-red margin-bottom-50\">
            </div> <!-- End col -->

               {% if loop.index == page.header.services.count or loop.index % 2 == 0 %}
        </div>
        {% endif %}

  {% endfor %}
</div>
</div>", "modular/home_services.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\home_services.html.twig");
    }
}
