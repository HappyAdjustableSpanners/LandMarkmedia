<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_8445a2665accf18e8aad2e8dd1adec01a75c4629b3fea6ff4e9f86ba0547ef4d extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 500);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
      

             ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 12
            echo "        <span class=\"tags\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 14
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </span>
        ";
        }
        // line 18
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 19
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 20
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 21
                echo "            ";
            } else {
                // line 22
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 23
                echo "            ";
            }
            // line 24
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 26
        echo "
           ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 28
            echo "            <h4 class=\"p-name\">
                ";
            // line 29
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 30
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 32
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 35
            echo "            <h2 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 37
        echo "    
     

       

        <hr class=\"hr-short-red\">

          <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 45
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "c");
        echo "\">
                <span>";
        // line 46
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 47
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
            </time>
        </span>
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 55
            echo "        <div class=\"e-content\">        
            ";
            // line 56
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 58
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 59
                echo "        ";
                $context["show_prev_next"] = true;
                // line 60
                echo "        ";
            }
            // line 61
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 62
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 63
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()), 100);
            echo "
            
            <p><a href=\"";
            // line 65
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Continue Reading");
            echo "</a><i class=\"fa fa-long-arrow-right icon-cont-reading\"></i></p>
        </div>
    ";
        } elseif (        // line 67
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 68
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 69
            echo \Grav\Common\Utils::truncate(call_user_func_array($this->env->getFilter('striptag')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))), 50);
            echo "
            <p><a href=\"";
            // line 70
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Continue Reading");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 73
            echo "        <div class=\"e-content\">
            ";
            // line 74
            echo \Grav\Common\Utils::truncate(call_user_func_array($this->env->getFilter('striptag')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))), 50);
            echo "
        </div>
        ";
            // line 76
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 77
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 77)->display($context);
                // line 78
                echo "        ";
            }
            // line 79
            echo "
        ";
            // line 80
            $context["show_prev_next"] = true;
            // line 81
            echo "    ";
        }
        // line 82
        echo "    <hr class=\"hr-short-red width-130\">

    ";
        // line 84
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 85
            echo "
        <p class=\"prev-next\">
            ";
            // line 87
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 88
                echo "                <a class=\"button btn-prev-blog\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Previous Post");
                echo "</a>
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 92
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Next Post");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 94
            echo "        </p>
    ";
        }
        // line 96
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 96,  262 => 94,  254 => 92,  252 => 91,  249 => 90,  241 => 88,  239 => 87,  235 => 85,  233 => 84,  229 => 82,  226 => 81,  224 => 80,  221 => 79,  218 => 78,  215 => 77,  213 => 76,  208 => 74,  205 => 73,  197 => 70,  193 => 69,  190 => 68,  188 => 67,  181 => 65,  176 => 63,  173 => 62,  170 => 61,  167 => 60,  164 => 59,  162 => 58,  157 => 56,  154 => 55,  152 => 54,  142 => 47,  138 => 46,  134 => 45,  124 => 37,  116 => 35,  107 => 32,  101 => 30,  99 => 29,  96 => 28,  94 => 27,  91 => 26,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  63 => 16,  49 => 14,  45 => 13,  42 => 12,  40 => 11,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(500) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
      

             {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

           {% if page.header.link %}
            <h4 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h2 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h2>
        {% endif %}
    
     

       

        <hr class=\"hr-short-red\">

          <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
        </span>
    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary | truncate(100) }}
            
            <p><a href=\"{{ page.url }}\">{{ 'Continue Reading'|t }}</a><i class=\"fa fa-long-arrow-right icon-cont-reading\"></i></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content | striptag | truncate(50) }}
            <p><a href=\"{{ page.url }}\">{{ 'Continue Reading'|t }}</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content | striptag | truncate(50) }}
        </div>
        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}
    <hr class=\"hr-short-red width-130\">

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button btn-prev-blog\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'Previous Post'|t }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'Next Post'|t }} <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\partials\\blog_item.html.twig");
    }
}
