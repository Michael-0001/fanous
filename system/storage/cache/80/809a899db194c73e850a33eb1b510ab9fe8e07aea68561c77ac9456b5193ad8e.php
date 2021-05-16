<?php

/* jetimpex783/template/common/home.twig */
class __TwigTemplate_2e6c41ec4dec726c6bc9c23632dc392db8e1058cd01b7b75b85af4e361b51f63 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        // line 2
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 3
            echo "\t<section class=\"top\">";
            echo (isset($context["top"]) ? $context["top"] : null);
            echo "</section>";
        }
        // line 5
        echo "<div id=\"common-home\" class=\"container\">
\t<div class=\"row\">";
        // line 6
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 7
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            $context["class"] = "col-sm-6";
        } elseif ((        // line 9
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            $context["class"] = "col-sm-9";
        } else {
            // line 12
            $context["class"] = "col-sm-12";
        }
        // line 14
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        // line 15
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>";
        // line 17
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>";
        // line 20
        if ((isset($context["bottom"]) ? $context["bottom"] : null)) {
            // line 21
            echo "\t<section class=\"bottom\">";
            echo (isset($context["bottom"]) ? $context["bottom"] : null);
            echo "</section>";
        }
        // line 23
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  61 => 21,  59 => 20,  54 => 17,  49 => 15,  45 => 14,  42 => 12,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  28 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% if top %}*/
/* 	<section class="top">{{ top }}</section>*/
/* {% endif %}*/
/* <div id="common-home" class="container">*/
/* 	<div class="row">{{ column_left }}*/
/* 		{% if column_left and column_right %}*/
/* 			{%set class = 'col-sm-6' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{%set class = 'col-sm-9' %}*/
/* 		{% else %}*/
/* 			{%set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {% if bottom %}*/
/* 	<section class="bottom">{{ bottom }}</section>*/
/* {% endif %}*/
/* {{ footer }}*/
