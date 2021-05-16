<?php

/* jetimpex783/template/common/language.twig */
class __TwigTemplate_9de4d81492940741ac6173880b5081b160c72df5219a3e0623f668f6d9b04df8 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "\t<div class=\"box-language\">
\t\t<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t\t<div class=\"btn-group toggle-wrap\">
\t\t\t\t<span class=\"toggle\">";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                if (($this->getAttribute($context["language"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 8
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t<span class=\"hidden\">";
            // line 11
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</span>
\t\t\t\t</span>
\t\t\t\t<ul class=\"toggle_cont\">";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 15
                if (($this->getAttribute($context["language"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 16
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"language-select selected\" type=\"button\" name=\"";
                    // line 17
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo "\">";
                    // line 18
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo " 
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"language-select\" type=\"button\" name=\"";
                    // line 23
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo "\">";
                    // line 24
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo " 
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 32
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
\t\t</form>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 29,  74 => 24,  71 => 23,  68 => 22,  62 => 18,  59 => 17,  56 => 16,  54 => 15,  50 => 14,  45 => 11,  42 => 10,  35 => 8,  33 => 7,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* 	<div class="box-language">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/* 			<div class="btn-group toggle-wrap">*/
/* 				<span class="toggle">*/
/* 					{% for language in languages %}*/
/* 						{% if (language['code'] == code) %}*/
/* 							{{ language['name'] }} */
/* 						{% endif %}*/
/* 					{% endfor %}<i class="fa fa-angle-down"></i>*/
/* 					<span class="hidden">{{ text_language }}</span>*/
/* 				</span>*/
/* 				<ul class="toggle_cont">*/
/* 					{% for language in languages %}*/
/* 						{% if (language['code'] == code) %}*/
/* 							<li>*/
/* 								<button class="language-select selected" type="button" name="{{ language['code'] }}">*/
/* 									{{ language['name'] }} */
/* 								</button>*/
/* 							</li>*/
/* 						{% else %}*/
/* 							<li>*/
/* 								<button class="language-select" type="button" name="{{ language['code'] }}">*/
/* 									{{ language['name'] }} */
/* 								</button>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<input type="hidden" name="code" value="" />*/
/* 			<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* 		</form>*/
/* 	</div>*/
/* {% endif %}*/
/* */
