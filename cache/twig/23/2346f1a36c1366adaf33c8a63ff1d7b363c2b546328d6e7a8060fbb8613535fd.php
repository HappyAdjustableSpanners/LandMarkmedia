<?php

/* modular/contact_contact.html.twig */
class __TwigTemplate_4391a977478fe4fc8154a51fb6f2afa71e22e54c4f803a783feceb7c28cf7843 extends Twig_Template
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
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?key=";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "api_key", array());
        echo "\"></script>
<div class=\"container bg-white\"> 

    <!-- First row -->
    <div class=\"row margin-top-50 margin-bottom-20\">
        <div class=\"col-md-6\">
            <h1>Contact Form</h1>
            
        </div> <!-- Eof col -->
        <div class=\"col-md-6\">
            <h1>Google Map</h1>
        </div> <!-- Eof col -->
    </div> <!-- Eof row -->

    <!-- Second row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Lorum el ipsum sit amet, consectetur</p>
        </div> <!-- Eof col -->
        <div class=\"col-md-6\">
             <div id=\"googleMap\">
                <script>
                    jQuery(function (\$) {
                        'use strict';

                        (function () {

                            if (\$('#googleMap').length > 0) {

                                var \$latitude = ";
        // line 30
        echo ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "latitude", array()) + 0);
        echo ",
                                    \$longitude = ";
        // line 31
        echo ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "longitude", array()) + 0);
        echo ",
                                    \$map_zoom = ";
        // line 32
        echo ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "zoom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "zoom", array()), "10")) : ("10")) + 0);
        echo ";

                                //google map custom marker icon
                                var \$marker_url = \"";
        // line 35
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "marker", array()), array(), "array"), "url", array());
        echo "\";

                                //we define here the style of the map
                                var style = [{
                                    \"stylers\": [{
                                        \"hue\": \"#000\"
                                    }, {
                                        \"saturation\": -100
                                    }, {
                                        \"gamma\": 2.15
                                    }, {
                                        \"lightness\": 12
                                    }]
                                }];

                                //set google map options
                                var map_options = {
                                    center: new google.maps.LatLng(\$latitude, \$longitude),
                                    zoom: \$map_zoom,
                                    panControl: false,
                                    zoomControl: false,
                                    mapTypeControl: false,
                                    streetViewControl: false,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    scrollwheel: false,
                                    styles: style,
                                }
                                //initialize the map
                                var map = new google.maps.Map(document.getElementById('googleMap'), map_options);
                                //add a custom marker to the map
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(\$latitude, \$longitude),
                                    map: map,
                                    visible: true,
                                    icon: \$marker_url
                                });
                            }
                        }());
                    });
                    </script>
             </div> <!-- Eof Gmaps -->
        </div> <!-- Eof col -->
    </div> <!-- Eof row -->

</div> <!-- Eof container -->";
    }

    public function getTemplateName()
    {
        return "modular/contact_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 35,  60 => 32,  56 => 31,  52 => 30,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://maps.googleapis.com/maps/api/js?key={{ page.header.api_key }}\"></script>
<div class=\"container bg-white\"> 

    <!-- First row -->
    <div class=\"row margin-top-50 margin-bottom-20\">
        <div class=\"col-md-6\">
            <h1>Contact Form</h1>
            
        </div> <!-- Eof col -->
        <div class=\"col-md-6\">
            <h1>Google Map</h1>
        </div> <!-- Eof col -->
    </div> <!-- Eof row -->

    <!-- Second row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Lorum el ipsum sit amet, consectetur</p>
        </div> <!-- Eof col -->
        <div class=\"col-md-6\">
             <div id=\"googleMap\">
                <script>
                    jQuery(function (\$) {
                        'use strict';

                        (function () {

                            if (\$('#googleMap').length > 0) {

                                var \$latitude = {{ page.header.latitude + 0 }},
                                    \$longitude = {{ page.header.longitude + 0 }},
                                    \$map_zoom = {{ page.header.zoom|default('10') + 0 }};

                                //google map custom marker icon
                                var \$marker_url = \"{{ page.media.images[page.header.marker].url}}\";

                                //we define here the style of the map
                                var style = [{
                                    \"stylers\": [{
                                        \"hue\": \"#000\"
                                    }, {
                                        \"saturation\": -100
                                    }, {
                                        \"gamma\": 2.15
                                    }, {
                                        \"lightness\": 12
                                    }]
                                }];

                                //set google map options
                                var map_options = {
                                    center: new google.maps.LatLng(\$latitude, \$longitude),
                                    zoom: \$map_zoom,
                                    panControl: false,
                                    zoomControl: false,
                                    mapTypeControl: false,
                                    streetViewControl: false,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    scrollwheel: false,
                                    styles: style,
                                }
                                //initialize the map
                                var map = new google.maps.Map(document.getElementById('googleMap'), map_options);
                                //add a custom marker to the map
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(\$latitude, \$longitude),
                                    map: map,
                                    visible: true,
                                    icon: \$marker_url
                                });
                            }
                        }());
                    });
                    </script>
             </div> <!-- Eof Gmaps -->
        </div> <!-- Eof col -->
    </div> <!-- Eof row -->

</div> <!-- Eof container -->", "modular/contact_contact.html.twig", "C:\\wamp64\\www\\LandMarkmedia\\user\\themes\\x-corporation\\templates\\modular\\contact_contact.html.twig");
    }
}
