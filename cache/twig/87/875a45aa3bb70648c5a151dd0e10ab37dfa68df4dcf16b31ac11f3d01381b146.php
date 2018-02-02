<?php

/* modular/home_posts.html.twig */
class __TwigTemplate_0863200528afee892f596e4ad3e3cead89be279fc4ed64cf80d0335708d0cc12 extends Twig_Template
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
        echo "<!-- read in latest posts -->
";
        // line 9
        echo "
<!-- display posts -->
<div class=\"container-fluid text-center section\" id=\"section-posts\">
  <h1 class=\"margin-top-0\">
    Latest news
  </h1>


  

   <a href=\"/LandMarkmedia/blog/\"><button id=\"btn-all-posts\" class=\"margin-top-30 margin-bottom-50\"><i class=\"fa fa-chevron-circle-right padding-right-10\"></i>All posts</button></a>

  <div class=\"row\" id=\"posts-div\">

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "      ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 25
                echo "        <div class=\"col-md-4 post-col\">
          <div class=\"post-div\">
            <h1>";
                // line 27
                echo $this->getAttribute($context["p"], "title", array());
                echo "</h1>
            
            ";
                // line 29
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($context["p"], "content", array()));
                echo "
            <a href=\"/LandMarkmedia/blog/\"><button class=\"btn-read-more\"><i class=\"fa fa-chevron-circle-right padding-right-10\"></i>Read more</button></a>
        </div>
    </div>
      ";
            }
            // line 34
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
   
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/home_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  75 => 34,  67 => 29,  62 => 27,  58 => 25,  55 => 24,  38 => 23,  22 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- read in latest posts -->
{# <ul>
{% for post in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
    <li class=\"recent-posts\">
        <strong><a href=\"{{ post.url }}\">{{ post.title }}</a></strong>
    </li>
{% endfor %}
</ul> #}

<!-- display posts -->
<div class=\"container-fluid text-center section\" id=\"section-posts\">
  <h1 class=\"margin-top-0\">
    Latest news
  </h1>


  

   <a href=\"/LandMarkmedia/blog/\"><button id=\"btn-all-posts\" class=\"margin-top-30 margin-bottom-50\"><i class=\"fa fa-chevron-circle-right padding-right-10\"></i>All posts</button></a>

  <div class=\"row\" id=\"posts-div\">

    {% for p in page.find('/blog').children.order('date', 'desc').slice(0,5) %}
      {% if loop.index <= 3 %}
        <div class=\"col-md-4 post-col\">
          <div class=\"post-div\">
            <h1>{{p.title}}</h1>
            
            {{p.content | markdown}}
            <a href=\"/LandMarkmedia/blog/\"><button class=\"btn-read-more\"><i class=\"fa fa-chevron-circle-right padding-right-10\"></i>Read more</button></a>
        </div>
    </div>
      {% endif %}
    {% endfor %}

   
  </div>
</div>
", "modular/home_posts.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\home_posts.html.twig");
    }
}
