<?php

/* partials/navbar.html.twig */
class __TwigTemplate_d40c7d044bebea1d2cd24913240aabef749d9ec5f77b7ad029a22db450bde977 extends Twig_Template
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
        // line 35
        echo "
<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 46
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array()) != "")) {
            // line 47
            echo "            <a class=\"navbar-brand\" href=\"";
            echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
            echo "\">
                <img src=\"";
            // line 48
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array())));
            echo "\" alt=\"\">
            </a>
            ";
        }
        // line 51
        echo "        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            ";
        // line 54
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 55
            echo "            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            ";
            // line 60
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navbar.html.twig", 60)->display($context);
            // line 61
            echo "                        </li>
                    </ul>
                </li>
            </ul>
            ";
        }
        // line 66
        echo "
            <ul class=\"nav navbar-nav navbar-right main-nav\">
                ";
        // line 68
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
            </ul>

        </div>
    </div>
</nav>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li class=\"dropdown m-menu-fw ";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
                    // line 6
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    ";
                    // line 9
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 10
                        echo "                    <ul class=\"dropdown-menu\">
                    ";
                        // line 11
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["dropdownHeader"]) {
                            // line 12
                            echo "                        <li class=\"m-menu-content\">
                            <ul class=\"col-sm-";
                            // line 13
                            echo twig_round((12 / $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array())));
                            echo "\">
                            ";
                            // line 14
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()), "count", array()) > 0)) {
                                // line 15
                                echo "                            <li class=\"dropdown-header\">";
                                echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                                echo "</li>
                            ";
                                // line 16
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["dropdownItem"]) {
                                    // line 17
                                    echo "                            <li>
                                <a href=\"";
                                    // line 18
                                    echo $this->getAttribute($context["dropdownItem"], "url", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["dropdownItem"], "menu", array());
                                    echo "</a>
                            </li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownItem'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 21
                                echo "                            ";
                            }
                            // line 22
                            echo "                            </ul>
                        </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownHeader'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                    </ul>
                    ";
                    }
                    // line 27
                    echo "            </li>
        ";
                } else {
                    // line 29
                    echo "            <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"";
                    // line 30
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
            </li>
        ";
                }
                // line 33
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 33,  182 => 30,  177 => 29,  173 => 27,  169 => 25,  161 => 22,  158 => 21,  147 => 18,  144 => 17,  140 => 16,  135 => 15,  133 => 14,  129 => 13,  126 => 12,  122 => 11,  119 => 10,  117 => 9,  111 => 6,  106 => 5,  103 => 4,  100 => 3,  95 => 2,  83 => 1,  72 => 68,  68 => 66,  61 => 61,  59 => 60,  52 => 55,  50 => 54,  45 => 51,  39 => 48,  34 => 47,  32 => 46,  19 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"dropdown m-menu-fw {{ current_page }}\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ p.menu }}
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    {% if p.children.visible.count > 0 %}
                    <ul class=\"dropdown-menu\">
                    {% for dropdownHeader in p.children.visible %}
                        <li class=\"m-menu-content\">
                            <ul class=\"col-sm-{{ (12 / p.children.visible.count)|round }}\">
                            {% if dropdownHeader.children.visible.count > 0 %}
                            <li class=\"dropdown-header\">{{ dropdownHeader.menu }}</li>
                            {% for dropdownItem in dropdownHeader.children.visible %}
                            <li>
                                <a href=\"{{ dropdownItem.url }}\">{{ dropdownItem.menu }}</a>
                            </li>
                            {% endfor %}
                            {% endif %}
                            </ul>
                        </li>
                    {% endfor %}
                    </ul>
                    {% endif %}
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">{{ p.menu }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            {% if theme_config.logo != '' %}
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <img src=\"{{ url('theme://img/' ~ theme_config.logo) }}\" alt=\"\">
            </a>
            {% endif %}
        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            {% if config.plugins.simplesearch.enabled %}
            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </li>
                    </ul>
                </li>
            </ul>
            {% endif %}

            <ul class=\"nav navbar-nav navbar-right main-nav\">
                {{ _self.loop(pages) }}
            </ul>

        </div>
    </div>
</nav>
", "partials/navbar.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\partials\\navbar.html.twig");
    }
}
