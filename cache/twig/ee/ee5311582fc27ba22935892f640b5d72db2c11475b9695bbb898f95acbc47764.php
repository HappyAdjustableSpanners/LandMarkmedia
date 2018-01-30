<?php

/* modular/home_posts.html.twig */
class __TwigTemplate_20cafe7dd4ff27e4e6a3b8c849b24b953734de49f271c5f5e8ea89d7690ec041 extends Twig_Template
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
<ul>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <li class=\"recent-posts\">
        <strong><a href=\"";
            // line 5
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a></strong>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>

<!-- display posts -->
<div class=\"container-fluid text-center section\" id=\"section-posts\">
  <h1 class=\"margin-top-0\">
    Latest news
  </h1>

  <button id=\"btn-all-posts\" class=\"margin-top-30 margin-bottom-50\"><i class=\"fa fa-arrow-right padding-right-10\"></i>All posts</button>

  <div class=\"row\" id=\"posts-div\">
    <div class=\"col-md-4 post-col\">
      <div class=\"post-div\">
          <h1>Post 1</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
 <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
    <div class=\"col-md-4 post-col\">
        <div class=\"post-div\">
          <h1>Post 2</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
 <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
    <div class=\"col-md-4 post-col\">
         <div class=\"post-div\">
          <h1>Post 3</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
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
        return array (  41 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
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
<ul>
{% for post in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
    <li class=\"recent-posts\">
        <strong><a href=\"{{ post.url }}\">{{ post.title }}</a></strong>
    </li>
{% endfor %}
</ul>

<!-- display posts -->
<div class=\"container-fluid text-center section\" id=\"section-posts\">
  <h1 class=\"margin-top-0\">
    Latest news
  </h1>

  <button id=\"btn-all-posts\" class=\"margin-top-30 margin-bottom-50\"><i class=\"fa fa-arrow-right padding-right-10\"></i>All posts</button>

  <div class=\"row\" id=\"posts-div\">
    <div class=\"col-md-4 post-col\">
      <div class=\"post-div\">
          <h1>Post 1</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
 <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
    <div class=\"col-md-4 post-col\">
        <div class=\"post-div\">
          <h1>Post 2</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
 <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
    <div class=\"col-md-4 post-col\">
         <div class=\"post-div\">
          <h1>Post 3</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <button class=\"btn-read-more\"><i class=\"fa fa-arrow-right padding-right-10\"></i>Read more</button>
        </div>
    </div>
  </div>
</div>
", "modular/home_posts.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\modular\\home_posts.html.twig");
    }
}