<?php

/* partials/base.html.twig */
class __TwigTemplate_5d22347dfb32abd7505e20a592eefaa90879c2d7531e73083d0b3ff4925ca9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 5
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 5)->display($context);
        // line 6
        echo "    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    ";
        // line 17
        $this->loadTemplate("partials/navbar.html.twig", "partials/base.html.twig", 17)->display($context);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 30
            echo "                            ";
            $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
            // line 31
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) == 0)) {
                // line 32
                echo "                                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                                    <a href=\"";
                // line 33
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
                                </li>
                            ";
            }
            // line 36
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 43
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "    </body>
</html>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 19,  102 => 44,  100 => 43,  92 => 37,  86 => 36,  78 => 33,  73 => 32,  70 => 31,  67 => 30,  63 => 29,  52 => 20,  50 => 19,  47 => 18,  45 => 17,  32 => 6,  30 => 5,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% include 'partials/head.html.twig' %}
    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    {% include 'partials/navbar.html.twig' %}

                    {% block content %}{% endblock %}
                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        {% for p in pages.children.visible %}
                            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
                            {% if p.children.visible.count == 0 %}
                                <li class=\"{{ current_page }}\">
                                    <a href=\"{{ p.url }}\">{{ p.menu }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {% include 'partials/footer.html.twig' %}
    </body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\partials\\base.html.twig");
    }
}
