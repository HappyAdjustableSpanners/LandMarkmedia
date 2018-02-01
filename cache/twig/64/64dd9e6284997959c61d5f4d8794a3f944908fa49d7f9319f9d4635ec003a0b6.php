<?php

/* modular/team_team.html.twig */
class __TwigTemplate_2816b837df3ad2e795a4a62ad6764e22c8786d61e2aba4236daeb719d4c6b477 extends Twig_Template
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
        echo "<div class=\"container-fluid section\">

    <!-- Foreach member -->
    <!-- Row -->
    
    <!-- Foeach row -->
    <!-- 3 Cols -->

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "members", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "        <div class=\"row member-row\">
            <div class=\"col-xs-1 member-icon\">
                <div class=\"row\">
                    <i class=\"fa fa-facebook\"></i>
                </div>
                <div class=\"row\">
                    <i class=\"fa fa-twitter\"></i>
                </div>
                <div class=\"row\">
                    <i class=\"fa fa-linkedin\"></i>
                </div>
            </div>
            <div class=\"col-md-3 img-col\">
                  ";
            // line 23
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["member"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["member"], "title", array())), "method");
            echo "
            </div>
            <div class=\"col-md-8\">
                <div>
                    <h1 class=\"member-name\">";
            // line 27
            echo $this->getAttribute($context["member"], "name", array());
            echo "</h1>
                </div>
                <hr class=\"hr-short-red\">
                <div>
                    <p class=\"member-pos\">";
            // line 31
            echo $this->getAttribute($context["member"], "position", array());
            echo "</p> 
                </div>
                <div>
                    <p class=\"member-desc\">";
            // line 34
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($context["member"], "description", array()));
            echo "</p>
                </div>
            </div>
        </div>
        <hr class=\"hr-black\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modular/team_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  68 => 34,  62 => 31,  55 => 27,  48 => 23,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid section\">

    <!-- Foreach member -->
    <!-- Row -->
    
    <!-- Foeach row -->
    <!-- 3 Cols -->

    {% for member in header.members %}
        <div class=\"row member-row\">
            <div class=\"col-xs-1 member-icon\">
                <div class=\"row\">
                    <i class=\"fa fa-facebook\"></i>
                </div>
                <div class=\"row\">
                    <i class=\"fa fa-twitter\"></i>
                </div>
                <div class=\"row\">
                    <i class=\"fa fa-linkedin\"></i>
                </div>
            </div>
            <div class=\"col-md-3 img-col\">
                  {{ page.media.images[member.image].html('', member.title) }}
            </div>
            <div class=\"col-md-8\">
                <div>
                    <h1 class=\"member-name\">{{member.name}}</h1>
                </div>
                <hr class=\"hr-short-red\">
                <div>
                    <p class=\"member-pos\">{{member.position}}</p> 
                </div>
                <div>
                    <p class=\"member-desc\">{{member.description | markdown}}</p>
                </div>
            </div>
        </div>
        <hr class=\"hr-black\">
    {% endfor %}
</div>", "modular/team_team.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\team_team.html.twig");
    }
}
