<?php

/* modular/services_custom.html.twig */
class __TwigTemplate_2c6c0e5951d9bd72d5164f0a61992624354264cd2ca561a9a32dbbf8835814fe extends Twig_Template
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
        echo "<section class=\"x-services ptb-100 gray-bg\">

    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
            <h4>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
        echo "</h4>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
    ";
        // line 12
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
            // line 13
            echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"thumbnail clearfix\">
                    <a href=\"";
            // line 17
            echo $this->getAttribute($context["service"], "url", array());
            echo "\" class=\"padding-20\">
                        ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["service"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["service"], "title", array())), "method");
            echo "
                    </a>

                    <div class=\"caption\">
                        <h3><a href=\"";
            // line 22
            echo $this->getAttribute($context["service"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["service"], "title", array());
            echo "</a></h3>

                        <p>";
            // line 24
            echo $this->getAttribute($context["service"], "description", array());
            echo "</p>

                        </hr>

                        <ul>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["service"], "points", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                // line 30
                echo "                            <li><b>";
                echo $this->getAttribute($context["point"], "text", array());
                echo "</b></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
            // line 36
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 2) == 0))) {
                // line 37
                echo "        </div>
        ";
            }
            // line 39
            echo "    ";
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
        // line 40
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  112 => 39,  108 => 37,  106 => 36,  100 => 32,  91 => 30,  87 => 29,  79 => 24,  72 => 22,  65 => 18,  61 => 17,  55 => 13,  38 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"x-services ptb-100 gray-bg\">

    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title }}</h2>
            <h4>{{ page.header.description }}</h4>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>

    <div class=\"container\">
    {% for service in page.header.services %}

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"thumbnail clearfix\">
                    <a href=\"{{ service.url }}\" class=\"padding-20\">
                        {{ page.media.images[service.image].html('', service.title) }}
                    </a>

                    <div class=\"caption\">
                        <h3><a href=\"{{ service.url }}\">{{ service.title }}</a></h3>

                        <p>{{ service.description }}</p>

                        </hr>

                        <ul>
                        {% for point in service.points %}
                            <li><b>{{ point.text }}</b></li>
                        {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        {% if loop.index == page.header.services.count or loop.index % 2 == 0 %}
        </div>
        {% endif %}
    {% endfor %}
    </div>
</section>
", "modular/services_custom.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\modular\\services_custom.html.twig");
    }
}
