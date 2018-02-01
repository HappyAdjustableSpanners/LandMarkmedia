<?php

/* modular/home_services.html.twig */
class __TwigTemplate_6994405b2543da0b5d59730e695e02bb9e2454f8a55f51c72e0748a340493814 extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section\" id=\"section-services\">
  <h1 class=\"margin-top-0\">
    About
  </h1>
  
  ";
        // line 6
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
            // line 7
            echo "         <!-- For each 2 items, add a row -->
        ";
            // line 8
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 9
                echo "                <div class=\"row row-center\">
        ";
            }
            // line 11
            echo "            <div class=\"col-md-5 col-center\">
                <div class=\"service-card\">
                    <!-- icon -->
                    ";
            // line 14
            if (($this->getAttribute($context["service"], "image", array()) == "graph.PNG")) {
                // line 15
                echo "                        <i class=\"fa fa-bar-chart fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 17
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "pie-chart.PNG")) {
                // line 18
                echo "                        <i class=\"fa fa-pie-chart fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 20
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "lock.PNG")) {
                // line 21
                echo "                        <i class=\"fa fa-lock fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 23
            echo "                    ";
            if (($this->getAttribute($context["service"], "image", array()) == "house.PNG")) {
                // line 24
                echo "                        <i class=\"fa fa-home fa-5x\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 26
            echo "
                    <!-- Title -->
                    <b><p class=\"padding-bottom-15 padding-top-15\">";
            // line 28
            echo $this->getAttribute($context["service"], "text", array());
            echo "</p></b>
                    <button class=\"goto-btn\"><i class=\"fa fa-arrow-circle-right fa-3x\"></i></button>
                </div> <!-- End of card -->
                <hr class=\"hr-red margin-bottom-50\">
            </div> <!-- End col -->

               ";
            // line 34
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 2) == 0))) {
                // line 35
                echo "        </div>
        ";
            }
            // line 37
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
        // line 39
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
        return array (  118 => 39,  103 => 37,  99 => 35,  97 => 34,  88 => 28,  84 => 26,  80 => 24,  77 => 23,  73 => 21,  70 => 20,  66 => 18,  63 => 17,  59 => 15,  57 => 14,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section\" id=\"section-services\">
  <h1 class=\"margin-top-0\">
    About
  </h1>
  
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
                    <button class=\"goto-btn\"><i class=\"fa fa-arrow-circle-right fa-3x\"></i></button>
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
