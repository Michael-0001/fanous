<?php

/* jetimpex783/template/common/currency.twig */
class __TwigTemplate_a41f0e237448f196e65bfd3e83e2d44fcfc04e3cdf2e53113a517bf23fbe9446 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "\t<div class=\"box-currency\">
\t\t<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t\t\t<div class=\"btn-group toggle-wrap\">
\t\t\t\t<span class=\"toggle\">";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                if (($this->getAttribute($context["currency"], "symbol_left", array(), "array") && ($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 8
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                } elseif (($this->getAttribute(                // line 9
$context["currency"], "symbol_right", array(), "array") && ($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 10
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t<span class=\"hidden\">";
            // line 13
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span>
\t\t\t\t</span>
\t\t\t\t<ul class=\"toggle_cont\">";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 17
                if ($this->getAttribute($context["currency"], "symbol_left", array(), "array")) {
                    // line 18
                    if (($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<button class=\"currency-select selected\" type=\"button\" name=\"";
                        // line 20
                        echo $this->getAttribute($context["currency"], "code", array(), "array");
                        echo "\">";
                        // line 21
                        echo $this->getAttribute($context["currency"], "symbol_left", array(), "array");
                        // line 22
                        echo $this->getAttribute($context["currency"], "title", array(), "array");
                        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>";
                    } else {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<button class=\"currency-select\" type=\"button\" name=\"";
                        // line 27
                        echo $this->getAttribute($context["currency"], "code", array(), "array");
                        echo "\">";
                        // line 28
                        echo $this->getAttribute($context["currency"], "symbol_left", array(), "array");
                        // line 29
                        echo $this->getAttribute($context["currency"], "title", array(), "array");
                        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>";
                    }
                } else {
                    // line 34
                    if (($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<button class=\"currency-select selected\" type=\"button\" name=\"";
                        // line 36
                        echo $this->getAttribute($context["currency"], "code", array(), "array");
                        echo "\">";
                        // line 37
                        echo $this->getAttribute($context["currency"], "symbol_right", array(), "array");
                        // line 38
                        echo $this->getAttribute($context["currency"], "title", array(), "array");
                        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>";
                    } else {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<button class=\"currency-select\" type=\"button\" name=\"";
                        // line 43
                        echo $this->getAttribute($context["currency"], "code", array(), "array");
                        echo "\">";
                        // line 44
                        echo $this->getAttribute($context["currency"], "symbol_right", array(), "array");
                        // line 45
                        echo $this->getAttribute($context["currency"], "title", array(), "array");
                        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 54
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
\t\t</form>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  126 => 51,  115 => 45,  113 => 44,  110 => 43,  107 => 42,  101 => 38,  99 => 37,  96 => 36,  93 => 35,  91 => 34,  84 => 29,  82 => 28,  79 => 27,  76 => 26,  70 => 22,  68 => 21,  65 => 20,  62 => 19,  60 => 18,  58 => 17,  54 => 16,  49 => 13,  46 => 12,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* 	<div class="box-currency">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/* 			<div class="btn-group toggle-wrap">*/
/* 				<span class="toggle">*/
/* 					{% for currency in currencies %}*/
/* 						{% if (currency['symbol_left'] and currency['code'] == code) %}							*/
/* 							{{ currency['code'] }}*/
/* 						{% elseif (currency['symbol_right'] and currency['code'] == code) %}							*/
/* 							{{ currency['code'] }}*/
/* 						{% endif %}*/
/* 					{% endfor %}<i class="fa fa-angle-down"></i>*/
/* 					<span class="hidden">{{ text_currency }}</span>*/
/* 				</span>*/
/* 				<ul class="toggle_cont">*/
/* 					{% for currency in currencies %}*/
/* 						{% if (currency['symbol_left']) %}*/
/* 							{% if (currency['code'] == code) %}*/
/* 								<li>*/
/* 									<button class="currency-select selected" type="button" name="{{ currency['code'] }}">*/
/* 										{{ currency['symbol_left'] }}*/
/* 										{{ currency['title'] }}*/
/* 									</button>*/
/* 								</li>*/
/* 							{% else %}*/
/* 								<li>*/
/* 									<button class="currency-select" type="button" name="{{ currency['code'] }}">*/
/* 										{{ currency['symbol_left'] }}*/
/* 										{{ currency['title'] }}*/
/* 									</button>*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% else %}*/
/* 							{% if (currency['code'] == code) %}*/
/* 								<li>*/
/* 									<button class="currency-select selected" type="button" name="{{ currency['code'] }}">*/
/* 										{{ currency['symbol_right'] }}*/
/* 										{{ currency['title'] }}*/
/* 									</button>*/
/* 								</li>*/
/* 							{% else %}*/
/* 								<li>*/
/* 									<button class="currency-select" type="button" name="{{ currency['code'] }}">*/
/* 										{{ currency['symbol_right'] }}*/
/* 										{{ currency['title'] }}*/
/* 									</button>*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<input type="hidden" name="code" value="" />*/
/* 			<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* 		</form>*/
/* 	</div>*/
/* {% endif %}*/
