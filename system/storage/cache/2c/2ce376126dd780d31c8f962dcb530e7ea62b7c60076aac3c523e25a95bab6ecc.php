<?php

/* jetimpex783/template/extension/module/jetimpex_color_switcher.twig */
class __TwigTemplate_8e181073d1fda8b773404764156be1efc328d2d706ecd8200726ddb29beeb67c extends Twig_Template
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
        echo "<div id=\"style_switcher\">
\t<div class=\"toggler\"></div>
\t<p>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</p>
\t<ul id=\"color-box\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["color_schemes"]) ? $context["color_schemes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color_scheme"]) {
            // line 6
            if (($this->getAttribute($context["color_scheme"], "scheme", array(), "array") == (isset($context["active_color_scheme"]) ? $context["active_color_scheme"] : null))) {
                // line 7
                echo "\t\t\t\t<li class=\"active\"><div class=\"color_scheme";
                echo $this->getAttribute($context["color_scheme"], "scheme", array(), "array");
                echo "\" data-scheme=\"";
                echo $this->getAttribute($context["color_scheme"], "scheme", array(), "array");
                echo "\">&nbsp;</div></li>";
            } else {
                // line 9
                echo "\t\t\t\t<li><div class=\"color_scheme";
                echo $this->getAttribute($context["color_scheme"], "scheme", array(), "array");
                echo "\" data-scheme=\"";
                echo $this->getAttribute($context["color_scheme"], "scheme", array(), "array");
                echo "\">&nbsp;</div></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color_scheme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_color_switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  40 => 9,  33 => 7,  31 => 6,  27 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div id="style_switcher">*/
/* 	<div class="toggler"></div>*/
/* 	<p>{{ title }}</p>*/
/* 	<ul id="color-box">*/
/* 		{% for color_scheme in color_schemes %}*/
/* 			{% if (color_scheme['scheme'] == active_color_scheme) %}*/
/* 				<li class="active"><div class="color_scheme {{ color_scheme['scheme'] }}" data-scheme="{{ color_scheme['scheme'] }}">&nbsp;</div></li>*/
/* 			{% else %}*/
/* 				<li><div class="color_scheme {{ color_scheme['scheme'] }}" data-scheme="{{ color_scheme['scheme'] }}">&nbsp;</div></li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* </div>*/
/* */
