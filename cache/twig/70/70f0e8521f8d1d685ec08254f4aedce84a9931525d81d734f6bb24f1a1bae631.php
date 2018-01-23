<?php

/* forms/contact.html.twig */
class __TwigTemplate_fd3a9c749204d46a909aa5e4db4b0747c2803680f768f0c9e271670251e00a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()))) {
                // line 3
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL");
                echo "</p></div>
    ";
            } else {
                // line 5
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</p></div>
    ";
            }
        }
        // line 8
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 9
        $context["multipart"] = "";
        // line 10
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 13
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 14
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 15
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $context["action"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "url", array(), "method")));
        // line 19
        echo "
";
        // line 20
        if (((isset($context["action"]) ? $context["action"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 21
            echo "    ";
            $context["action"] = (((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 23
        echo "
<form name=\"";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 25
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\"
      method=\"";
        // line 26
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo "
      ";
        // line 27
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array());
            echo "\"";
        }
        // line 28
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 31
        echo ">

  ";
        // line 33
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 34
        echo "
  <div class=\"row\">
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 37
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 38
                echo "        ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 39
                echo "    ";
            }
            // line 40
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 41
            echo "
    ";
            // line 42
            if (($this->getAttribute($context["field"], "name", array()) == "name")) {
                // line 43
                echo "    <div class=\"col-md-6\">
    ";
            } elseif (($this->getAttribute(            // line 44
$context["field"], "name", array()) == "message")) {
                // line 45
                echo "    </div>
    <div class=\"col-md-6\">
    ";
            }
            // line 48
            echo "
        ";
            // line 49
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/contact.html.twig", 49)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 50
            echo "
    ";
            // line 51
            if (($this->getAttribute($context["field"], "name", array()) == "message")) {
                // line 52
                echo "    </div>
    ";
            }
            // line 54
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>

  ";
        // line 57
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/contact.html.twig", 57)->display($context);
        // line 58
        echo "
  ";
        // line 59
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 60
        echo "
  ";
        // line 61
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 64
        echo "
  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 66
            echo "      <button
            ";
            // line 67
            $this->displayBlock('button_classes', $context, $blocks);
            // line 70
            echo "            type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"
        >
            ";
            // line 72
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
        </button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
  ";
        // line 76
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 28
    public function block_form_classes($context, array $blocks = array())
    {
        // line 29
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
            echo "\"";
        }
        // line 30
        echo "      ";
    }

    // line 33
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 59
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 61
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 62
        echo "  <div class=\"buttons\">
  ";
    }

    // line 67
    public function block_button_classes($context, array $blocks = array())
    {
        // line 68
        echo "            class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo "\"
            ";
    }

    // line 76
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 77
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 77,  321 => 76,  314 => 68,  311 => 67,  306 => 62,  303 => 61,  298 => 59,  293 => 33,  289 => 30,  282 => 29,  279 => 28,  272 => 80,  269 => 79,  267 => 76,  264 => 75,  247 => 72,  241 => 70,  239 => 67,  236 => 66,  219 => 65,  216 => 64,  214 => 61,  211 => 60,  209 => 59,  206 => 58,  204 => 57,  200 => 55,  186 => 54,  182 => 52,  180 => 51,  177 => 50,  170 => 49,  167 => 48,  162 => 45,  160 => 44,  157 => 43,  155 => 42,  152 => 41,  149 => 40,  146 => 39,  143 => 38,  140 => 37,  123 => 36,  119 => 34,  117 => 33,  113 => 31,  110 => 28,  104 => 27,  98 => 26,  94 => 25,  90 => 24,  87 => 23,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  66 => 15,  63 => 14,  60 => 13,  56 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  38 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
    {% if form.inline_errors and form.messages %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ \"FORM.VALIDATION_FAIL\"|t|raw }}</p></div>
    {% else %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
    {% endif %}
{% endif %}
{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : uri.url() %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  <div class=\"row\">
  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}

    {% if field.name == 'name' %}
    <div class=\"col-md-6\">
    {% elseif field.name == 'message' %}
    </div>
    <div class=\"col-md-6\">
    {% endif %}

        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}

    {% if field.name == 'message' %}
    </div>
    {% endif %}
  {% endfor %}
  </div>

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"buttons\">
  {% endblock %}

  {% for button in form.buttons %}
      <button
            {% block button_classes %}
            class=\"{{ button.classes|default('button') }}\"
            {% endblock %}
            type=\"{{ button.type|default('submit') }}\"
        >
            {{ button.value|t|default('Submit') }}
        </button>
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/contact.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\forms\\contact.html.twig");
    }
}
