<?php

/* jetimpex783/template/common/search.twig */
class __TwigTemplate_4246d8e14ed1e081bbe91dad6723580bb674049042fdf62a8b2cb3bef57f22c9 extends Twig_Template
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
        echo "<div id=\"search\" class=\"search\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"\"/>
\t<button type=\"button\" class=\"button-search\"><i class=\"fa fa-search\"></i></button>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="search">*/
/* 	<input type="text" name="search" value="{{search}}" placeholder=""/>*/
/* 	<button type="button" class="button-search"><i class="fa fa-search"></i></button>*/
/* </div>*/
