<?php

/* jetimpex783/template/extension/module/banner.twig */
class __TwigTemplate_2ba2fb76c291fbbe5b0cd72ff1bf411c937ff6e13f56ed699b023184c510f616 extends Twig_Template
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
        echo "<div id=\"banner";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banners row\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            if ($this->getAttribute($context["banner"], "link", array(), "array")) {
                echo " 
\t<div class=\"col-sm-6";
                // line 4
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\">
\t\t<div class=\"banner-box\">\t\t
\t\t\t<img src=\"";
                // line 6
                echo $this->getAttribute($context["banner"], "image", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\" class=\"img-responsive\" />
\t\t\t<a class=\"clearfix link\" href=\"";
                // line 7
                echo $this->getAttribute($context["banner"], "link", array(), "array");
                echo "\"></a>";
                // line 8
                if ($this->getAttribute($context["banner"], "description", array(), "array")) {
                    echo " 
\t\t\t\t<div class=\"s-desc\">";
                    // line 9
                    echo $this->getAttribute($context["banner"], "description", array(), "array");
                    echo "</div>";
                }
                // line 10
                echo " 
\t\t</div>
\t</div>";
            } else {
                // line 14
                echo "\t<div class=\"col-sm-6";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\">
\t\t<div class=\"banner-box\">
\t\t\t<img src=\"";
                // line 16
                echo $this->getAttribute($context["banner"], "image", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\" class=\"img-responsive\" />";
                // line 17
                if ($this->getAttribute($context["banner"], "description", array(), "array")) {
                    echo " 
\t\t\t\t<div class=\"s-desc\">";
                    // line 18
                    echo $this->getAttribute($context["banner"], "description", array(), "array");
                    echo "</div>";
                }
                // line 19
                echo " 
\t\t</div>
\t</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  77 => 19,  73 => 18,  69 => 17,  64 => 16,  58 => 14,  53 => 10,  49 => 9,  45 => 8,  42 => 7,  36 => 6,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* <div id="banner{{ module }}" class="banners row">*/
/* 	{% for banner in banners %} */
/* 	{% if (banner['link']) %} */
/* 	<div class="col-sm-6 {{ banner['title'] }}">*/
/* 		<div class="banner-box">		*/
/* 			<img src="{{ banner['image'] }}" alt="{{ banner['title'] }}" class="img-responsive" />*/
/* 			<a class="clearfix link" href="{{ banner['link'] }}"></a>*/
/* 			{% if (banner['description']) %} */
/* 				<div class="s-desc">{{ banner['description'] }}</div>*/
/* 			{% endif %} */
/* 		</div>*/
/* 	</div>*/
/* 	{% else %}*/
/* 	<div class="col-sm-6 {{ banner['title'] }}">*/
/* 		<div class="banner-box">*/
/* 			<img src="{{ banner['image'] }}" alt="{{ banner['title'] }}" class="img-responsive" />			*/
/* 			{% if (banner['description']) %} */
/* 				<div class="s-desc">{{ banner['description'] }}</div>*/
/* 			{% endif %} */
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* */
