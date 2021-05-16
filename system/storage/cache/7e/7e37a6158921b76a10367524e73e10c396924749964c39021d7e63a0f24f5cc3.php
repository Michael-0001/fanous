<?php

/* jetimpex783/template/extension/module/jetimpex_megamenu.twig */
class __TwigTemplate_35560b6e695ff458953701461521428a49ac21335aa7aada12b2f686fa64020a extends Twig_Template
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
        if ((isset($context["menu_items"]) ? $context["menu_items"] : null)) {
            // line 2
            echo "\t<div class=\"megamenu\">
\t\t<ul class=\"sf-menu\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu_items"]) ? $context["menu_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
                // line 5
                echo "\t\t\t\t<li";
                echo (( !twig_test_empty($this->getAttribute($context["menu_item"], "mega", array(), "array"))) ? ((("class=\"" . $this->getAttribute($context["menu_item"], "mega", array(), "array")) . "\"")) : (""));
                echo ">";
                // line 6
                if (twig_test_empty($this->getAttribute($context["menu_item"], "href", array(), "array"))) {
                    // line 7
                    echo "\t\t\t\t\t\t<span>";
                    echo $this->getAttribute($context["menu_item"], "name", array(), "array");
                    echo "</span>";
                } else {
                    // line 9
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["menu_item"], "href", array(), "array");
                    echo "\" data-letters=\"";
                    echo $this->getAttribute($context["menu_item"], "name", array(), "array");
                    echo "\"><span>";
                    echo $this->getAttribute($context["menu_item"], "name", array(), "array");
                    echo "</span></a>";
                }
                // line 11
                if ( !twig_test_empty($this->getAttribute($context["menu_item"], "multi", array(), "array"))) {
                    // line 12
                    echo $this->getAttribute($context["menu_item"], "multi", array(), "array");
                } elseif ( !twig_test_empty($this->getAttribute(                // line 13
$context["menu_item"], "mega", array(), "array"))) {
                    // line 14
                    echo "\t\t\t\t\t\t<ul class=\"sf-mega\"";
                    echo (( !twig_test_empty($this->getAttribute($context["menu_item"], "background", array(), "array"))) ? ((("style=\"background-image: url(" . $this->getAttribute($context["menu_item"], "background", array(), "array")) . ");\"")) : (""));
                    echo ">";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["menu_item"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 16
                        $context["column"] = $this->getAttribute($this->getAttribute($context["menu_item"], "column", array(), "array"), $this->getAttribute($context["loop"], "index0", array()), array(), "array");
                        // line 17
                        if (((($this->getAttribute($context["loop"], "index0", array()) % $this->getAttribute($context["menu_item"], "per-row", array(), "array")) == 0) && ($this->getAttribute($context["loop"], "index0", array()) != 0))) {
                            // line 18
                            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"sf-mega_row\">";
                        } elseif (($this->getAttribute(                        // line 20
$context["loop"], "index0", array()) == 0)) {
                            // line 21
                            echo "\t\t\t\t\t\t\t\t<li class=\"sf-mega_row\">";
                        }
                        // line 23
                        echo "\t\t\t\t\t\t\t\t<li class=\"sf-mega_li\" style=\"width:";
                        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "width", array(), "array");
                        echo "\">
\t\t\t\t\t\t\t\t<div class=\"sf-mega_section\">";
                        // line 25
                        if ( !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "custom_category", array(), "array"))) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"submenu_category_title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 27
                            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "custom_category_href", array(), "array");
                            echo "\">";
                            // line 28
                            echo $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "custom_category", array(), "array"), "name", array(), "array");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>";
                        }
                        // line 32
                        if ( !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "module", array(), "array"))) {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"megamenu_module\">";
                            // line 34
                            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "module", array(), "array");
                            echo "
\t\t\t\t\t\t\t\t\t\t</div>";
                        }
                        // line 37
                        if ( !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "list", array(), "array"))) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t<ul>";
                            // line 39
                            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "list", array(), "array");
                            echo "
\t\t\t\t\t\t\t\t\t\t</ul>";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t</div>";
                        // line 43
                        if (($this->getAttribute($context["loop"], "index0", array()) == twig_length_filter($this->env, $this->getAttribute($context["menu_item"], "column", array(), "array")))) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t</li>";
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "\t\t\t\t\t\t</ul>";
                }
                // line 49
                echo "\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t</ul>
\t</div>
<script>
\t;(function (\$) {
\t\t\$(document).ready(function(){
\t\t\tvar o = \$('.sf-menu');
\t\t\to.superfish();
\t\t\to.find('li a').each(function () {
\t\t\t\tif (\$(location).attr('href').indexOf(\$(this).attr('href')) >= 0){
\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t});
\t\t\tif (o.parents('aside').length){
\t\t\t\tvar width = \$('.container').outerWidth() - \$('aside').outerWidth();
\t\t\t\to.find('.sf-mega').each(function () {
\t\t\t\t\t\$(this).width(width);
\t\t\t\t})
\t\t\t}\t\t\t
\t\t});
\t})(jQuery);
</script>";
        }
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  146 => 49,  143 => 47,  128 => 44,  126 => 43,  124 => 42,  119 => 39,  117 => 38,  115 => 37,  110 => 34,  108 => 33,  106 => 32,  100 => 28,  97 => 27,  94 => 26,  92 => 25,  87 => 23,  84 => 21,  82 => 20,  79 => 18,  77 => 17,  75 => 16,  58 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  39 => 9,  34 => 7,  32 => 6,  28 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if (menu_items) %}*/
/* 	<div class="megamenu">*/
/* 		<ul class="sf-menu">*/
/* 			{% for menu_item in menu_items %}*/
/* 				<li {{ menu_item['mega'] is not empty ? 'class="' ~ menu_item['mega'] ~ '"' : '' }}>*/
/* 					{% if (menu_item['href'] is empty) %}*/
/* 						<span>{{ menu_item['name'] }}</span>*/
/* 					{% else %}*/
/* 						<a href="{{ menu_item['href'] }}" data-letters="{{ menu_item['name'] }}"><span>{{ menu_item['name'] }}</span></a>*/
/* 					{% endif %}*/
/* 					{% if (menu_item['multi'] is not empty) %}*/
/* 						{{ menu_item['multi'] }}*/
/* 					{% elseif (menu_item['mega'] is not empty) %}*/
/* 						<ul class="sf-mega" {{ menu_item['background'] is not empty ? 'style="background-image: url(' ~ menu_item['background'] ~ ');"' : '' }}>*/
/* 							{% for item in menu_item %}*/
/* 								{%set column = menu_item['column'][loop.index0] %}*/
/* 								{% if (loop.index0 % menu_item['per-row'] == 0 and loop.index0 != 0) %}*/
/* 								</li>*/
/* 								<li class="sf-mega_row">*/
/* 							{% elseif (loop.index0 == 0) %}*/
/* 								<li class="sf-mega_row">*/
/* 							{% endif %}*/
/* 								<li class="sf-mega_li" style="width: {{ column['width'] }}">*/
/* 								<div class="sf-mega_section">*/
/* 									{% if (column['custom_category'] is not empty) %}*/
/* 										<div class="submenu_category_title">*/
/* 											<a href="{{ column['custom_category_href'] }}">*/
/* 												{{ column['custom_category']['name'] }}*/
/* 											</a>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if (column['module'] is not empty) %}*/
/* 										<div class="megamenu_module">*/
/* 											{{ column['module'] }}*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if (column['list'] is not empty) %}*/
/* 										<ul>*/
/* 											{{ column['list'] }}*/
/* 										</ul>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% if (loop.index0 == menu_item['column']|length) %}*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 						</ul>*/
/* 					{% endif %}*/
/* 				</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* <script>*/
/* 	;(function ($) {*/
/* 		$(document).ready(function(){*/
/* 			var o = $('.sf-menu');*/
/* 			o.superfish();*/
/* 			o.find('li a').each(function () {*/
/* 				if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){*/
/* 					$(this).addClass('active');*/
/* 					return;*/
/* 				}*/
/* 			});*/
/* 			if (o.parents('aside').length){*/
/* 				var width = $('.container').outerWidth() - $('aside').outerWidth();*/
/* 				o.find('.sf-mega').each(function () {*/
/* 					$(this).width(width);*/
/* 				})*/
/* 			}			*/
/* 		});*/
/* 	})(jQuery);*/
/* </script>*/
/* {% endif %}*/
