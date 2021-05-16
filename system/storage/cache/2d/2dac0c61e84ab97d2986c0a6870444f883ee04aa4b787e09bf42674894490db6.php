<?php

/* jetimpex783/template/common/header.twig */
class __TwigTemplate_aa928b634e942ddf5b27c1626e4f4331daf113b548d714328e228314f06470a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->";
        // line 7
        if (((isset($context["page_direction"]) ? $context["page_direction"] : null) == "rtl")) {
            $context["direction"] = "rtl";
        }
        // line 8
        echo "\t<html dir=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"";
        echo (((isset($context["responsive"]) ? $context["responsive"] : null)) ? ((((isset($context["mobile"]) ? $context["mobile"] : null) - (isset($context["responsive"]) ? $context["responsive"] : null)) - (isset($context["off"]) ? $context["off"] : null))) : (""));
        echo "\">
\t<!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
\t\t<base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 21
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 22
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["add_this_meta"]) ? $context["add_this_meta"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 26
            echo "\t\t\t<meta property=\"og:";
            echo $this->getAttribute($context["meta"], "property", array());
            echo "\" content=\"";
            echo $this->getAttribute($context["meta"], "content", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t<link href=\"//fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic\" rel=\"stylesheet\">
\t\t<link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/";
        // line 32
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/stylesheet/material-design.css\" rel=\"stylesheet\">";
        // line 34
        echo "
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />";
        // line 37
        echo "\t\t<link href=\"catalog/view/theme/";
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/stylesheet/photoswipe.css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/";
        // line 38
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/";
        // line 39
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/js/fancybox/jquery.fancybox.css\" rel=\"stylesheet\">";
        // line 42
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 43
            echo "\t\t\t<link href=\"catalog/view/theme/";
            echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
            echo "/stylesheet/bootstrap-rtl.css\" rel=\"stylesheet\">
\t\t\t<link href=\"catalog/view/theme/";
            // line 44
            echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
            echo "/stylesheet/rtl.css\" rel=\"stylesheet\">";
        }
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 48
            echo "\t\t\t<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 52
            echo "\t\t\t<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 59
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        if ((isset($context["color_scheme_link"]) ? $context["color_scheme_link"] : null)) {
            echo " 
\t\t\t<link id=\"color_scheme\" href=\"";
            // line 63
            echo (isset($context["color_scheme_link"]) ? $context["color_scheme_link"] : null);
            echo "\" rel=\"stylesheet\">";
        }
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 67
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t</head>
\t<body>
\t\t<p id=\"gl_path\" class=\"hidden\">";
        // line 71
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "</p>
\t\t<div id=\"page\">
\t\t\t<div class=\"ie-warning\">
\t\t\t\t<a href=\"//windows.microsoft.com/en-us/internet-explorer/download-ie\">
\t\t\t\t\t<img src=\"catalog/view/theme/";
        // line 75
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/image/warning_bar_0000_us.jpg\" height=\"75\" width=\"1170\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"demo-border\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a href=\"https://www.templatemonster.com/opencart-templates/auto-parts-responsive-opencart-template-65320.html\" class=\"demo-img\"><img src=\"image/catalog/demo/Auto Point.jpg\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<nav id=\"top\">
\t\t\t

\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div id=\"logo\">";
        // line 90
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 91
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 92
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 96
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a>
\t\t\t\t\t\t\t</h1>";
        }
        // line 99
        echo "\t\t\t\t\t</div>";
        // line 100
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t<div id=\"top-links\" class=\"nav pull-right\">
\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t<li class=\"toggle-wrap\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" class=\"toggle\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<ul class=\"toggle_cont toggle_cont__right\">";
        // line 106
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 108
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 109
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total2\" title=\"";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 111
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 112
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 113
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>";
        } else {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 116
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>";
        }
        // line 117
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>";
        // line 120
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 121
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>";
        }
        // line 124
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>";
        // line 125
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 126
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<header>
\t\t\t\t<div class=\"stuck-menu\">";
        // line 133
        echo "\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 136
        if ((isset($context["navigation"]) ? $context["navigation"] : null)) {
            // line 137
            echo "\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"navigation\">";
            // line 139
            echo (isset($context["navigation"]) ? $context["navigation"] : null);
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>";
        }
        // line 143
        if ((isset($context["header_top"]) ? $context["header_top"] : null)) {
            // line 144
            echo "\t\t\t\t\t<div class=\"header_modules\">";
            // line 145
            echo (isset($context["header_top"]) ? $context["header_top"] : null);
            echo "
\t\t\t\t\t</div>";
        }
        // line 148
        echo "\t\t\t</header>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 148,  370 => 145,  368 => 144,  366 => 143,  359 => 139,  356 => 137,  354 => 136,  350 => 133,  341 => 126,  337 => 125,  334 => 124,  327 => 123,  320 => 121,  318 => 120,  314 => 117,  308 => 116,  301 => 115,  295 => 113,  289 => 112,  283 => 111,  277 => 110,  269 => 109,  263 => 108,  256 => 107,  254 => 106,  248 => 104,  241 => 100,  239 => 99,  232 => 96,  229 => 95,  220 => 92,  215 => 91,  213 => 90,  196 => 75,  189 => 71,  185 => 69,  179 => 67,  175 => 66,  171 => 63,  167 => 62,  159 => 59,  155 => 58,  151 => 54,  141 => 52,  137 => 51,  125 => 48,  121 => 47,  117 => 44,  112 => 43,  110 => 42,  107 => 39,  103 => 38,  98 => 37,  95 => 34,  92 => 32,  88 => 30,  78 => 26,  74 => 25,  69 => 22,  67 => 21,  62 => 18,  60 => 17,  57 => 15,  53 => 14,  39 => 8,  35 => 7,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* */
/* {% if page_direction == 'rtl' %} {% set direction = 'rtl' %} {% endif %}*/
/* 	<html dir="{{ direction }}" lang="{{ lang }}" class="{{ responsive ? mobile-responsive-off : '' }}">*/
/* 	<!--<![endif]-->*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<title>{{ title }}</title>*/
/* 		<base href="{{ base }}" />*/
/* */
/* 		{% if description %}*/
/* 			<meta name="description" content="{{ description }}" />*/
/* 		{% endif %}*/
/* */
/* 		{% if keywords %}*/
/* 			<meta name="keywords" content="{{ keywords }}" />*/
/* 		{% endif %}*/
/* */
/* 		{% for meta in add_this_meta %}*/
/* 			<meta property="og:{{ meta.property }}" content="{{ meta.content }}" />*/
/* 		{% endfor %}*/
/* */
/* 		{# fonts #}*/
/* 		<link href="//fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">*/
/* 		<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">*/
/* 		<link href="catalog/view/theme/{{ theme_path }}/stylesheet/material-design.css" rel="stylesheet">*/
/* 		{# end fonts #}*/
/* */
/* 		<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* 		{# styles #}*/
/* 		<link href="catalog/view/theme/{{ theme_path }}/stylesheet/photoswipe.css" rel="stylesheet">*/
/* 		<link href="catalog/view/theme/{{ theme_path }}/stylesheet/stylesheet.css" rel="stylesheet">*/
/* 		<link href="catalog/view/theme/{{ theme_path }}/js/fancybox/jquery.fancybox.css" rel="stylesheet">*/
/* 		{# end styles #}*/
/* 		{# rtl #}*/
/* 		{% if direction == 'rtl' %}*/
/* 			<link href="catalog/view/theme/{{ theme_path }}/stylesheet/bootstrap-rtl.css" rel="stylesheet">*/
/* 			<link href="catalog/view/theme/{{ theme_path }}/stylesheet/rtl.css" rel="stylesheet">*/
/* 		{% endif %}*/
/* 		{# end rtl #}*/
/* 		{% for style in styles %}*/
/* 			<link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* 		{% endfor %}*/
/* */
/* 		{% for link in links %}*/
/* 			<link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* 		{% endfor %}*/
/* */
/* 		<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* 		<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* */
/* 		{% for script in scripts %}*/
/* 			<script src="{{ script }}" type="text/javascript"></script>*/
/* 		{% endfor %}*/
/* */
/* 		{% if color_scheme_link %} */
/* 			<link id="color_scheme" href="{{color_scheme_link}}" rel="stylesheet">*/
/* 		{% endif %}*/
/* */
/* 		{% for analytic in analytics %}*/
/* 			{{ analytic }}*/
/* 		{% endfor %}*/
/* 	</head>*/
/* 	<body>*/
/* 		<p id="gl_path" class="hidden">{{ theme_path }}</p>*/
/* 		<div id="page">*/
/* 			<div class="ie-warning">*/
/* 				<a href="//windows.microsoft.com/en-us/internet-explorer/download-ie">*/
/* 					<img src="catalog/view/theme/{{ theme_path }}/image/warning_bar_0000_us.jpg" height="75" width="1170" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="demo-border">*/
/* 				<div class="container">*/
/* 						<a href="https://www.templatemonster.com/opencart-templates/auto-parts-responsive-opencart-template-65320.html" class="demo-img"><img src="image/catalog/demo/Auto Point.jpg" alt=""></a>*/
/* 				</div>*/
/* 				</div>*/
/* 			<nav id="top">*/
/* 			*/
/* */
/* 				<div class="container">*/
/* 				*/
/* 					*/
/* 					<div id="logo">*/
/* 						{% if logo %}*/
/* 							<a href="{{ home }}">*/
/* 								<img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" />*/
/* 							</a>*/
/* 						{% else %}*/
/* 							<h1>*/
/* 								<a href="{{ home }}">{{ name }}</a>*/
/* 							</h1>*/
/* 						{% endif %}*/
/* 					</div>				*/
/* 					{{ cart }}*/
/* 					<div id="top-links" class="nav pull-right">*/
/* 						<ul class="list-inline">*/
/* 							<li class="toggle-wrap">*/
/* 								<a href="{{ account }}" class="toggle">{{ text_account }}</a>*/
/* 								<ul class="toggle_cont toggle_cont__right">*/
/* 									{% if logged %}*/
/* 										<li><a href="{{account}}">{{ text_account }}</a></li>*/
/* 										<li><a href="{{wishlist}}" id="wishlist-total">{{ text_wishlist }}</a></li>*/
/* 										<li><a href="{{compare}}" id="compare-total2" title="{{ text_compare }}">{{ text_compare }}</a></li>*/
/* 										<li><a href="{{order}}">{{ text_order }}</a></li>*/
/* 										<li><a href="{{transaction}}">{{ text_transaction }}</a></li>*/
/* 										<li><a href="{{download}}">{{ text_download }}</a></li>*/
/* 										<li><a href="{{logout}}">{{ text_logout }}</a></li>*/
/* 									{% else %}*/
/* 										<li><a href="{{register}}">{{ text_register }}</a></li>*/
/* 										<li><a href="{{login}}">{{ text_login }}</a></li>*/
/* 									{% endif %}								*/
/* 								</ul>*/
/* 							</li>*/
/* 							{% if logged %}*/
/* 								<li><a href="{{logout}}">{{ text_logout }}</a></li>*/
/* 							{% else %}*/
/* 								<li><a href="{{login}}">{{ text_login }}</a></li>*/
/* 							{% endif %}						*/
/* 							<li>{{ language }}</li>*/
/* 							<li>{{ currency }}</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</nav>*/
/* 			<header>*/
/* 				<div class="stuck-menu"> {# id="stuck" #}*/
/* 					<div class="container">*/
/* 					</div>*/
/* 				</div>*/
/* 				{% if navigation %}*/
/* 					<div class="container">*/
/* 						<div class="navigation">*/
/* 							{{ navigation }}{{ search }}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if header_top %}*/
/* 					<div class="header_modules">*/
/* 						{{ header_top }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</header>*/
/* 			{# {{ menu }} #}*/
/* */
