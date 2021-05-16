<?php

/* jetimpex783/template/extension/module/jetimpex_footer_links_information.twig */
class __TwigTemplate_df911fbb0ef9d78fbd1e9fc4220cdd55a4d62d083666cf1296656093d542f1be extends Twig_Template
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
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            echo " 
\t<div class=\"block-info\">
\t\t<h3 class=\"box-heading\">";
            // line 3
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h3>
\t\t<ul class=\"box-content list-unstyled\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                echo " 
\t\t\t<li><a href=\"";
                // line 6
                echo $this->getAttribute($context["information"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array(), "array");
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo " \t\t\t
\t\t</ul>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_footer_links_information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  34 => 6,  28 => 5,  24 => 3,  19 => 1,);
    }
}
/* {% if (informations) %} */
/* 	<div class="block-info">*/
/* 		<h3 class="box-heading">{{text_information}}</h3>*/
/* 		<ul class="box-content list-unstyled">*/
/* 			{% for information in informations %} */
/* 			<li><a href="{{ information['href'] }}">{{information['title']}}</a></li>*/
/* 			{% endfor %} 			*/
/* 		</ul>*/
/* 	</div>*/
/* {% endif %}*/
