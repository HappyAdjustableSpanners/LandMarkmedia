<?php

/* partials/head.html.twig */
class __TwigTemplate_fb5102653d84053e6cd484ea2d9bc152f4da38cd97b48f69c35f85d7d7559e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo " ";
        }
        echo "</title>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"shortcut icon\" href=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.ico\" type=\"image/x-icon\" />
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\"
    crossorigin=\"anonymous\">
";
        // line 14
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://fonts/font-awesome/css/font-awesome.min.css", 1 => 101), "method");
        // line 15
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/style.css", 1 => 101), "method");
        // line 16
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/mobile-menu.css", 1 => 101), "method");
        // line 17
        echo " ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/smoothscroll.js"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/mobile-menu.js"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/flexSlider/jquery.flexslider-min.js"), "method");
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 31
        echo "
    ";
        // line 32
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
        crossorigin=\"anonymous\"></script>
";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  96 => 26,  93 => 25,  88 => 22,  85 => 21,  82 => 20,  75 => 17,  73 => 16,  71 => 15,  69 => 14,  62 => 10,  58 => 8,  55 => 7,  51 => 20,  48 => 19,  46 => 7,  40 => 3,  34 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
{% block head %}
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% block stylesheets %}
<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/favicon.ico\" type=\"image/x-icon\" />
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\"
    crossorigin=\"anonymous\">
{% do assets.add('theme://fonts/font-awesome/css/font-awesome.min.css', 101) %}
{% do assets.add('theme://css/style.css', 101) %}
{% do assets.add('theme://css/mobile-menu.css', 101) %}
 {{ assets.css() }}
{% endblock %}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://js/smoothscroll.js') %}
    {% do assets.add('theme://js/mobile-menu.js') %}
    {% do assets.add('theme://js/flexSlider/jquery.flexslider-min.js') %}
    {% do assets.add('theme://js/scripts.js') %}

    {{ assets.js() }}

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
        crossorigin=\"anonymous\"></script>
{% endblock %}
{% endblock head %}
", "partials/head.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\partials\\head.html.twig");
    }
}
