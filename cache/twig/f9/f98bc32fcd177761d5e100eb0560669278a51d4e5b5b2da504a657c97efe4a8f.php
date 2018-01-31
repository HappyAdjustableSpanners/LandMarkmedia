<?php

/* modular/blog_blog.html.twig */
class __TwigTemplate_795bfea73b28e22d035440d1935ddde373fe778e933370d4ec59057e091393bc extends Twig_Template
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
        echo "<div class=\"container-fluid section bg-white\">


        <!-- Entire content -->
        <div class=\"row\">

            <!-- main-blog column -->
            <div class=\"col-md-8 border-right\">

            
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "                    <!-- Img -->
                    <div class=\"row\">
                    
                        <!-- Full Col -->
                        <div class=\"col-md-12 blog-image\">
                            ";
            // line 17
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                // line 18
                echo "                                ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["post"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
                            ";
            }
            // line 20
            echo "                        </div>
                    </div>

                    <!-- Title -->
                    <div class=\"row\">
                        <!-- Full Col -->
                        <div class=\"col-md-12 padding-top-20\">
                            <h1>";
            // line 27
            echo $this->getAttribute($context["post"], "heading", array());
            echo "</h1>
                            <hr class=\"hr-short-red\">
                        </div>
                    </div>

                    <!-- Date and author -->
                    <div class=\"row padding-top-20\">
                        <!-- Full Col -->
                        <div class=\"col-xs-6\">
                                <button class=\"blog-date\">January 29th 2018</button>

                        </div>

                        <div class=\"col-xs-6\">
                                   <p>By: ";
            // line 41
            echo $this->getAttribute($context["post"], "author", array());
            echo "</p>
                        </div> 
                    </div>

                    <!-- Text -->
                    <div class=\"row padding-top-20\">
                        <!-- Full Col -->
                        <div class=\"col-md-12\">
                            ";
            // line 49
            echo $this->getAttribute($context["post"], "text", array());
            echo "}
                            <hr class=\"hr-black\">
                        </div>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            </div> <!-- Eof main blog col -->


            <!-- Recent blog posts column -->
            <div class=\"col-md-4\">
                <h1>Recent</h1>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "posts", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            echo "                    ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 64
                echo "                        <!-- Img -->
                            <div class=\"row\">
                            
                                <!-- Full Col -->
                                <div class=\"col-md-12 blog-image\">
                                    ";
                // line 69
                if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()) != "")) {
                    // line 70
                    echo "                                        ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["post"], "image", array()), array(), "array"), "html", array(), "method");
                    echo "
                                    ";
                }
                // line 72
                echo "                                </div>
                            </div>

                            <!-- Title -->
                            <div class=\"row\">
                                <!-- Full Col -->
                                <div class=\"col-md-12 padding-top-20\">
                                    <h1>";
                // line 79
                echo $this->getAttribute($context["post"], "heading", array());
                echo "</h1>
                                     <hr class=\"hr-short-red\">
                                </div>
                            </div>

                            <!-- Date and author -->
                            <div class=\"row padding-top-20\">
                                 <!-- Full Col -->
                                <div class=\"col-xs-6\">
                                    <button class=\"blog-date\">January 29th 2018</button>
                                </div>

                                <div class=\"col-xs-6\">
                                   <p>By: ";
                // line 92
                echo $this->getAttribute($context["post"], "author", array());
                echo "</p>
                                </div> 
                            </div>

                            <!-- Text -->
                            <div class=\"row  padding-top-20\">
                                <!-- Full Col -->
                                <div class=\"col-md-12\">
                                    ";
                // line 100
                echo $this->getAttribute($context["post"], "text", array());
                echo "
                                    <hr class=\"hr-black\">
                                </div>
                            </div>
                        ";
            }
            // line 105
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </div> <!-- Eof recent posts col -->
            </div>
    
    </div> <!-- Eof entire content -->
</div><!-- Eof container -->";
    }

    public function getTemplateName()
    {
        return "modular/blog_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 106,  187 => 105,  179 => 100,  168 => 92,  152 => 79,  143 => 72,  137 => 70,  135 => 69,  128 => 64,  125 => 63,  108 => 62,  99 => 55,  87 => 49,  76 => 41,  59 => 27,  50 => 20,  44 => 18,  42 => 17,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid section bg-white\">


        <!-- Entire content -->
        <div class=\"row\">

            <!-- main-blog column -->
            <div class=\"col-md-8 border-right\">

            
                {% for post in header.posts %}
                    <!-- Img -->
                    <div class=\"row\">
                    
                        <!-- Full Col -->
                        <div class=\"col-md-12 blog-image\">
                            {% if page.header.image != '' %}
                                {{ page.media.images[post.image].html() }}
                            {% endif %}
                        </div>
                    </div>

                    <!-- Title -->
                    <div class=\"row\">
                        <!-- Full Col -->
                        <div class=\"col-md-12 padding-top-20\">
                            <h1>{{post.heading}}</h1>
                            <hr class=\"hr-short-red\">
                        </div>
                    </div>

                    <!-- Date and author -->
                    <div class=\"row padding-top-20\">
                        <!-- Full Col -->
                        <div class=\"col-xs-6\">
                                <button class=\"blog-date\">January 29th 2018</button>

                        </div>

                        <div class=\"col-xs-6\">
                                   <p>By: {{post.author}}</p>
                        </div> 
                    </div>

                    <!-- Text -->
                    <div class=\"row padding-top-20\">
                        <!-- Full Col -->
                        <div class=\"col-md-12\">
                            {{post.text}}}
                            <hr class=\"hr-black\">
                        </div>
                    </div>

                {% endfor %}

            </div> <!-- Eof main blog col -->


            <!-- Recent blog posts column -->
            <div class=\"col-md-4\">
                <h1>Recent</h1>
                {% for post in header.posts %}
                    {% if loop.index <= 3 %}
                        <!-- Img -->
                            <div class=\"row\">
                            
                                <!-- Full Col -->
                                <div class=\"col-md-12 blog-image\">
                                    {% if page.header.image != '' %}
                                        {{ page.media.images[post.image].html() }}
                                    {% endif %}
                                </div>
                            </div>

                            <!-- Title -->
                            <div class=\"row\">
                                <!-- Full Col -->
                                <div class=\"col-md-12 padding-top-20\">
                                    <h1>{{post.heading}}</h1>
                                     <hr class=\"hr-short-red\">
                                </div>
                            </div>

                            <!-- Date and author -->
                            <div class=\"row padding-top-20\">
                                 <!-- Full Col -->
                                <div class=\"col-xs-6\">
                                    <button class=\"blog-date\">January 29th 2018</button>
                                </div>

                                <div class=\"col-xs-6\">
                                   <p>By: {{post.author}}</p>
                                </div> 
                            </div>

                            <!-- Text -->
                            <div class=\"row  padding-top-20\">
                                <!-- Full Col -->
                                <div class=\"col-md-12\">
                                    {{post.text}}
                                    <hr class=\"hr-black\">
                                </div>
                            </div>
                        {% endif %}
                {% endfor %}
                </div> <!-- Eof recent posts col -->
            </div>
    
    </div> <!-- Eof entire content -->
</div><!-- Eof container -->", "modular/blog_blog.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\x-corporation\\templates\\modular\\blog_blog.html.twig");
    }
}
