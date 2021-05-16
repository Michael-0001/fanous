<?php

/* jetimpex783/template/common/cart.twig */
class __TwigTemplate_1edf68b018fd9bf8dda78428e39039006a657d4093268fda99ec985727002fac extends Twig_Template
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
        echo "<div class=\"box-cart pull-right\">
\t<div id=\"cart\" class=\"cart toggle-wrap\">
\t\t<button type=\"button\" data-loading-text=\"";
        // line 3
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"toggle\">
\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t<strong>";
        // line 5
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</strong>
\t\t\t<span id=\"cart-total\" class=\"cart-total\">";
        // line 6
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span>";
        // line 7
        if (array_key_exists("text_items2", $context)) {
            // line 8
            echo "\t\t\t\t<span id=\"cart-total2\" class=\"cart-total2\">";
            echo (isset($context["text_items2"]) ? $context["text_items2"] : null);
            echo "</span>";
        }
        // line 10
        echo "\t\t</button>
\t\t<ul class=\"pull-right toggle_cont\">";
        // line 12
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"fl-left\">";
                // line 15
                if ($this->getAttribute($context["product"], "thumb", array(), "array")) {
                    // line 16
                    echo "\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 17
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 18
                    echo $this->getAttribute($context["product"], "thumb", array(), "array");
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>";
                }
                // line 22
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t<a href=\"";
                // line 25
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>&#215;";
                // line 27
                echo $this->getAttribute($context["product"], "quantity", array(), "array");
                echo "<span class=\"price-cart\">";
                echo $this->getAttribute($context["product"], "total", array(), "array");
                echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<button data-action=\"show\" type=\"button\" class=\"btn-remove\">
\t\t\t\t\t\t\t<i class=\"material-design-close47\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"btn-remove-wrap\">
\t\t\t\t\t\t\t<div class=\"btn-remove__cnt\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.removeAndSave('";
                // line 35
                echo $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["product"], "href", array()), "product_id="), 1, array(), "array");
                echo "', '";
                echo $this->getAttribute($context["product"], "cart_id", array(), "array");
                echo "');\"  class=\"link\"><i class=\"material-design-favorite21\"></i></button>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.remove('";
                // line 36
                echo $this->getAttribute($context["product"], "cart_id", array(), "array");
                echo "');\" class=\"link\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-action=\"cancel\" class=\"link\">
\t\t\t\t\t\t\t\t\t<i class=\"material-design-close47\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 46
                echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"fl-left\"></div>
\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t<div class=\"name\">";
                // line 49
                echo $this->getAttribute($context["voucher"], "description", array(), "array");
                echo "</div>
\t\t\t\t\t\t<div>x&nbsp;1<span class=\"price-cart\">";
                // line 50
                echo $this->getAttribute($context["voucher"], "amount", array(), "array");
                echo "</span></div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"text-center text-danger\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 53
                echo $this->getAttribute($context["voucher"], "key", array(), "array");
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn-remove\" >
\t\t\t\t\t\t\t<i class=\"material-design-close47\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t<li>
\t\t\t\t<div class=\"total\">";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 62
                echo "\t\t\t\t\t\t<div class=\"t-row\">
\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t<b>";
                // line 64
                echo $this->getAttribute($context["total"], "title", array(), "array");
                echo "</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">";
                // line 67
                echo $this->getAttribute($context["total"], "text", array(), "array");
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-l\" href=\"";
            // line 75
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
\t\t\t\t\t<a class=\"btn-primary btn-r\" href=\"";
            // line 76
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</li>";
        } else {
            // line 80
            echo "\t\t\t<li>
\t\t\t\t<p class=\"text-center\">";
            // line 81
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t</li>";
        }
        // line 84
        echo "\t</ul>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  198 => 81,  195 => 80,  187 => 76,  181 => 75,  175 => 71,  166 => 67,  161 => 64,  157 => 62,  153 => 61,  150 => 59,  137 => 53,  131 => 50,  127 => 49,  122 => 46,  118 => 45,  104 => 36,  98 => 35,  85 => 27,  78 => 25,  73 => 22,  63 => 18,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  47 => 13,  45 => 12,  42 => 10,  37 => 8,  35 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="box-cart pull-right">*/
/* 	<div id="cart" class="cart toggle-wrap">*/
/* 		<button type="button" data-loading-text="{{ text_loading }}" class="toggle">*/
/* 			<i class="fa fa-shopping-cart"></i>*/
/* 			<strong>{{ text_shopping_cart }}</strong>*/
/* 			<span id="cart-total" class="cart-total">{{ text_items }}</span>*/
/* 			{% if (text_items2 is defined) %}*/
/* 				<span id="cart-total2" class="cart-total2">{{ text_items2 }}</span>*/
/* 			{% endif %}*/
/* 		</button>*/
/* 		<ul class="pull-right toggle_cont">*/
/* 			{% if (products or vouchers) %}*/
/* 				{% for product in products %}*/
/* 					<li>*/
/* 						<div class="fl-left">{% if (product['thumb']) %}*/
/* 							<div class="image">*/
/* 								<a href="{{ product['href'] }}">*/
/* 									<img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" class="img-thumbnail" />*/
/* 								</a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="fl-right">*/
/* 						<div class="name">*/
/* 							<a href="{{ product['href'] }}">{{ product['name'] }}</a>*/
/* 						</div>*/
/* 						<div>&#215; {{ product['quantity'] }}<span class="price-cart">{{ product['total'] }}</span></div>*/
/* 					</div>*/
/* 					<div class="text-center">*/
/* 						<button data-action="show" type="button" class="btn-remove">*/
/* 							<i class="material-design-close47"></i>*/
/* 						</button>*/
/* 						<div class="btn-remove-wrap">*/
/* 							<div class="btn-remove__cnt">*/
/* 								<button type="button" onclick="cart.removeAndSave('{{ product.href|split('product_id=')[1] }}', '{{ product['cart_id'] }}');"  class="link"><i class="material-design-favorite21"></i></button>*/
/* 								<button type="button" onclick="cart.remove('{{ product['cart_id'] }}');" class="link"><i class="fa fa-trash-o"></i></button>*/
/* 								<button type="button" data-action="cancel" class="link">*/
/* 									<i class="material-design-close47"></i>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 			{% for voucher in vouchers %}*/
/* 				<li>*/
/* 					<div class="fl-left"></div>*/
/* 					<div class="fl-right">*/
/* 						<div class="name">{{ voucher['description'] }}</div>*/
/* 						<div>x&nbsp;1<span class="price-cart">{{ voucher['amount'] }}</span></div>*/
/* 					</div>					*/
/* 					<div class="text-center text-danger">*/
/* 						<button type="button" onclick="voucher.remove('{{ voucher['key'] }}');" title="{{ button_remove }}" class="btn-remove" >*/
/* 							<i class="material-design-close47"></i>*/
/* 						</button>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 			<li>*/
/* 				<div class="total">*/
/* 					{% for total in totals %}*/
/* 						<div class="t-row">*/
/* 							<div class="text-left">*/
/* 								<b>{{ total['title'] }}</b>*/
/* 							</div>*/
/* 							<div class="text-right">*/
/* 								{{ total['text'] }}*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</li>*/
/* 			<li>*/
/* 				<div class="text-center">*/
/* 					<a class="btn btn-l" href="{{ cart }}">{{ text_cart }}</a>*/
/* 					<a class="btn-primary btn-r" href="{{ checkout }}">{{ text_checkout }}</a>*/
/* 				</div>*/
/* 			</li>*/
/* 		{% else %}*/
/* 			<li>*/
/* 				<p class="text-center">{{ text_empty }}</p>*/
/* 			</li>*/
/* 		{% endif %}*/
/* 	</ul>*/
/* </div>*/
/* </div>*/
