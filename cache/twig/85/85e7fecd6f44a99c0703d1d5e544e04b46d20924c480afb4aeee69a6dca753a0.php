<?php

/* modular/home_team.html.twig */
class __TwigTemplate_7e48ffa496b943b620adb56939e78b082b3aa677116d8bfcef01616f1b85a1d3 extends Twig_Template
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
        echo "<div class=\"container-fluid text-center section\" id=\"section-team\">
  <h1 class=\"margin-top-0\">
    Team
  </h1>
  <hr class=\"hr-center hr-white\">
  <p class=\"margin-bottom-50\">";
        // line 6
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "subheading", array());
        echo "</p>
  
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "team", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 9
            echo "         <!-- For each 2 items, add a row -->
        ";
            // line 10
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 1)) {
                // line 11
                echo "                <div class=\"row row-center\">
        ";
            }
            // line 13
            echo "            <div class=\"col-center col-md-2\">
                <div class=\"member-card\">
                    
                    <!-- img -->
                    <a href=\"/LandmarkMedia/team\" class=\"border-radius-50 team-img\">
                        ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["member"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["member"], "name", array())), "method");
            echo "
                    </a>

                    <!-- Info -->
                    <p class=\"team-name\">";
            // line 22
            echo $this->getAttribute($context["member"], "name", array());
            echo "</p>
                    <p class=\"team-position\">";
            // line 23
            echo $this->getAttribute($context["member"], "position", array());
            echo "</p>
                    <p class=\"team-description\">";
            // line 24
            echo $this->getAttribute($context["member"], "description", array());
            echo "</p>

                    <div class=\"row\">
                        <div class=\"col-xs-offset-3 col-xs-2 team-icon\">
                            <a href=\"";
            // line 28
            echo $this->getAttribute($context["member"], "facebookurl", array());
            echo "\"><i class=\"fa fa-facebook btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"col-xs-2 team-icon\">
                            <a href=\"";
            // line 31
            echo $this->getAttribute($context["member"], "twitterurl", array());
            echo "\"><i class=\"fa fa-twitter btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"col-xs-2 team-icon\">
                            <a href=\"";
            // line 34
            echo $this->getAttribute($context["member"], "linkedinurl", array());
            echo "\"><i class=\"fa fa-linkedin btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>

                    </div>
                </div> <!-- End of card -->
                <hr class=\"hr-red margin-bottom-50\">
            </div> <!-- End col -->

               ";
            // line 42
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()), "count", array())) || (($this->getAttribute($context["loop"], "index", array()) % 4) == 0))) {
                // line 43
                echo "        </div>
        ";
            }
            // line 45
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/home_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  115 => 45,  111 => 43,  109 => 42,  98 => 34,  92 => 31,  86 => 28,  79 => 24,  75 => 23,  71 => 22,  64 => 18,  57 => 13,  53 => 11,  51 => 10,  48 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid text-center section\" id=\"section-team\">
  <h1 class=\"margin-top-0\">
    Team
  </h1>
  <hr class=\"hr-center hr-white\">
  <p class=\"margin-bottom-50\">{{header.subheading}}</p>
  
  {% for member in page.header.team %}
         <!-- For each 2 items, add a row -->
        {% if loop.index % 4 == 1 %}
                <div class=\"row row-center\">
        {% endif %}
            <div class=\"col-center col-md-2\">
                <div class=\"member-card\">
                    
                    <!-- img -->
                    <a href=\"/LandmarkMedia/team\" class=\"border-radius-50 team-img\">
                        {{ page.media.images[member.image].html('', member.name) }}
                    </a>

                    <!-- Info -->
                    <p class=\"team-name\">{{member.name}}</p>
                    <p class=\"team-position\">{{member.position}}</p>
                    <p class=\"team-description\">{{member.description}}</p>

                    <div class=\"row\">
                        <div class=\"col-xs-offset-3 col-xs-2 team-icon\">
                            <a href=\"{{member.facebookurl}}\"><i class=\"fa fa-facebook btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"col-xs-2 team-icon\">
                            <a href=\"{{member.twitterurl}}\"><i class=\"fa fa-twitter btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"col-xs-2 team-icon\">
                            <a href=\"{{member.linkedinurl}}\"><i class=\"fa fa-linkedin btn-hover\" aria-hidden=\"true\"></i></a>
                        </div>

                    </div>
                </div> <!-- End of card -->
                <hr class=\"hr-red margin-bottom-50\">
            </div> <!-- End col -->

               {% if loop.index == page.header.services.count or loop.index % 4 == 0 %}
        </div>
        {% endif %}

  {% endfor %}
</div>
</div>", "modular/home_team.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\home_team.html.twig");
    }
}
