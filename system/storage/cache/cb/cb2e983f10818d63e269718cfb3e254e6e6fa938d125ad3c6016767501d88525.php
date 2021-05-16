<?php

/* jetimpex783/template/extension/module/jetimpex_social_list.twig */
class __TwigTemplate_abc6c14bf2e288c0528cba37c99e2ad5db82f19b6e39382181a31c0f18f5a07f extends Twig_Template
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
        echo "<div class=\"module-social\">
\t<div class=\"social-block\">
\t\t<h3 class=\"box-heading\">";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h3>
\t\t<div class=\"box-content\">";
        // line 5
        if ((isset($context["socials"]) ? $context["socials"] : null)) {
            // line 6
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t<ul class=\"social-list list-unstyled\">";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socials"]) ? $context["socials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                echo " 
\t\t\t\t<li><a href=\"";
                // line 9
                echo $this->getAttribute($context["social"], "link", array(), "array");
                echo "\"><i class=\"";
                echo $this->getAttribute($context["social"], "css", array(), "array");
                echo "\"></i>";
                echo $this->getAttribute($context["social"], "name", array(), "array");
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo " 
\t\t\t</ul>";
        }
        // line 12
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_social_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 10,  39 => 9,  33 => 8,  29 => 6,  27 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="module-social">*/
/* 	<div class="social-block">*/
/* 		<h3 class="box-heading">{{title}}</h3>*/
/* 		<div class="box-content">			*/
/* 			{% if (socials) %} */
/* 			{{description}}*/
/* 			<ul class="social-list list-unstyled">*/
/* 				{% for social in socials %} */
/* 				<li><a href="{{ social['link'] }}"><i class="{{ social['css'] }}"></i> {{social['name']}}</a></li>*/
/* 				{% endfor %} */
/* 			</ul>{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
