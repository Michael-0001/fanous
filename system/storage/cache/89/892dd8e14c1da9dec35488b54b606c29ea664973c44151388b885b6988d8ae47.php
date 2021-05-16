<?php

/* jetimpex783/template/extension/module/jetimpex_category.twig */
class __TwigTemplate_241ef28b53aca6126612f4a28f60301b3e0211a8efff940fa583c09f4fb8a41f extends Twig_Template
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
        echo "<div class=\"box category\">
\t
\t<div class=\"box-content\">
\t\t<div class=\"box-category\"> 
\t\t\t<ul class=\"list-unstyled category_menu\">";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            if ($this->getAttribute($context["category"], "children", array(), "array")) {
                echo " 
\t\t\t\t<li class=\"parent\">\t\t\t\t
\t\t\t\t\t<a href=\"";
                // line 9
                echo $this->getAttribute($context["category"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array(), "array");
                echo "</a>\t\t\t\t\t
\t\t\t\t\t<ul class=\"list-unstyled\">";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["category"], "children", array(), "array"), 0, twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array(), "array"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 12
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo $this->getAttribute($context["children"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["children"], "name", array(), "array");
                    echo "</a>";
                    // line 14
                    if ($this->getAttribute($context["children"], "subchildren", array(), "array")) {
                        echo " 
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children"], "subchildren", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                            echo " 
\t\t\t\t\t\t\t\t<li><a href=\"";
                            // line 17
                            echo $this->getAttribute($context["subchild"], "href", array(), "array");
                            echo "\"> -";
                            echo $this->getAttribute($context["subchild"], "name", array(), "array");
                            echo "</a></li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo " 
\t\t\t\t\t\t\t</ul>";
                    }
                    // line 20
                    echo " 
\t\t\t\t\t\t</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo " 
\t\t\t\t\t</ul>
\t\t\t\t</li>";
            } else {
                // line 25
                echo " 
\t\t\t\t<li><a href=\"";
                // line 26
                echo $this->getAttribute($context["category"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array(), "array");
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<script>
\t;(function (\$) {
\t\t\$(window).load(function () {
\t\t\tvar o = \$('.category_menu');
\t\t\to.find('li li li a').each(function () {
\t\t\t\tif (\$(location).attr('href').indexOf(\$(this).attr('href')) >= 0){
\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t});
\t\t\tif (jQuery('.category_menu li a').hasClass('active')) { } else {\t\t\t\t
\t\t\t\to.find('li li a').each(function () {
\t\t\t\t\tif (\$(location).attr('href').indexOf(\$(this).attr('href')) >= 0){
\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\tif (jQuery('.category_menu li a').hasClass('active')) { } else {\t\t\t\t
\t\t\t\to.find('li a').each(function () {
\t\t\t\t\tif (\$(location).attr('href').indexOf(\$(this).attr('href')) >= 0){
\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\t
\t\t\tjQuery('.category_menu').find('li.parent').prepend('<i class=\"fa fa-caret-down\"></i>');
\t\t\tjQuery('.category_menu').find('a.active').closest('li.parent').find('> ul').slideToggle().closest('li.parent').find('>i').removeClass('fa-caret-down').addClass('fa-caret-up');
\t\t\tjQuery('.category_menu li.parent i').on(\"click\", function(){
\t\t\t\tif (jQuery(this).hasClass('fa-caret-up')) { 
\t\t\t\t\tjQuery(this).removeClass('fa-caret-up').addClass('fa-caret-down').parent('li.parent').find('> ul').slideToggle(); }  else {
\t\t\t\tjQuery(this).removeClass('fa-caret-down').addClass('fa-caret-up').parent('li.parent').find('> ul').slideToggle();
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t});\t\t
\t})(jQuery);
</script>

";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  90 => 26,  87 => 25,  82 => 22,  75 => 20,  71 => 18,  62 => 17,  56 => 16,  52 => 14,  47 => 13,  44 => 12,  40 => 11,  34 => 9,  29 => 7,  25 => 6,  19 => 1,);
    }
}
/* <div class="box category">*/
/* 	*/
/* 	<div class="box-content">*/
/* 		<div class="box-category"> */
/* 			<ul class="list-unstyled category_menu"> */
/* 				{% for category in categories %} */
/* 				{% if (category['children']) %} */
/* 				<li class="parent">				*/
/* 					<a href="{{ category['href'] }}">{{ category['name'] }}</a>					*/
/* 					<ul class="list-unstyled">*/
/* 						{% for children in category['children']|slice(0, category['children']|length) %}*/
/* 						<li>*/
/* 							<a href="{{ children['href'] }}">{{ children['name'] }}</a>*/
/* 							{% if (children['subchildren']) %} */
/* 							<ul class="list-unstyled">*/
/* 								{% for subchild in children['subchildren'] %} */
/* 								<li><a href="{{ subchild['href'] }}"> - {{ subchild['name'] }}</a></li>*/
/* 								{% endfor %} */
/* 							</ul>*/
/* 							{% endif %} */
/* 						</li>					*/
/* 					{% endfor %} */
/* 					</ul>*/
/* 				</li>*/
/* 				{% else %} */
/* 				<li><a href="{{ category['href'] }}">{{ category['name'] }}</a></li>*/
/* 				{% endif %} */
/* 				*/
/* 				{% endfor %} */
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script>*/
/* 	;(function ($) {*/
/* 		$(window).load(function () {*/
/* 			var o = $('.category_menu');*/
/* 			o.find('li li li a').each(function () {*/
/* 				if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){*/
/* 					$(this).addClass('active');*/
/* 					return;*/
/* 				}*/
/* 			});*/
/* 			if (jQuery('.category_menu li a').hasClass('active')) { } else {				*/
/* 				o.find('li li a').each(function () {*/
/* 					if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){*/
/* 						$(this).addClass('active');*/
/* 						return;*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 			if (jQuery('.category_menu li a').hasClass('active')) { } else {				*/
/* 				o.find('li a').each(function () {*/
/* 					if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){*/
/* 						$(this).addClass('active');*/
/* 						return;*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 			*/
/* 			jQuery('.category_menu').find('li.parent').prepend('<i class="fa fa-caret-down"></i>');*/
/* 			jQuery('.category_menu').find('a.active').closest('li.parent').find('> ul').slideToggle().closest('li.parent').find('>i').removeClass('fa-caret-down').addClass('fa-caret-up');*/
/* 			jQuery('.category_menu li.parent i').on("click", function(){*/
/* 				if (jQuery(this).hasClass('fa-caret-up')) { */
/* 					jQuery(this).removeClass('fa-caret-up').addClass('fa-caret-down').parent('li.parent').find('> ul').slideToggle(); }  else {*/
/* 				jQuery(this).removeClass('fa-caret-down').addClass('fa-caret-up').parent('li.parent').find('> ul').slideToggle();*/
/* 				}*/
/* 			});*/
/* 			*/
/* 		});		*/
/* 	})(jQuery);*/
/* </script>*/
/* */
/* */
