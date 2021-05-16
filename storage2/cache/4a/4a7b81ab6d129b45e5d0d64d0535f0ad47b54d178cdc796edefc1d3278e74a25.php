<?php

/* jetimpex783/template/extension/module/jetimpex_footer_links_contact.twig */
class __TwigTemplate_747e199ba94be44ac3fe64d80155f2d7105776eef830f79db5b035a9e3e2271f extends Twig_Template
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
        echo "<div class=\"\">
\t<h3 class=\"box-heading\"><span>";
        // line 2
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</span></h3>
\t<div class=\"box-content footer_box\">
\t\t<address>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li class=\"footer-invert\"><a href=\"//www.google.com/maps/";
        // line 6
        echo (((isset($context["geocode"]) ? $context["geocode"] : null)) ? (("?q=" . twig_replace_filter((isset($context["geocode"]) ? $context["geocode"] : null), array(" " => "+")))) : (null));
        echo "\" target=\"_blank\">";
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</a></li>\t\t\t\t
\t\t\t\t<li class=\"footer-invert\">";
        // line 7
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "<a href=\"callto:";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</a></li>
\t\t\t\t<li>";
        // line 8
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "<a href=\"mailto:";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></li>
\t\t\t</ul>
\t\t</address>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_footer_links_contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  35 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="">*/
/* 	<h3 class="box-heading"><span>{{text_contact}}</span></h3>*/
/* 	<div class="box-content footer_box">*/
/* 		<address>*/
/* 			<ul class="list-unstyled">*/
/* 				<li class="footer-invert"><a href="//www.google.com/maps/{{ geocode ? '?q=' ~ geocode|replace({' ' : '+'}) : null }}" target="_blank">{{address}}</a></li>				*/
/* 				<li class="footer-invert">{{ text_telephone }}<a href="callto:{{ telephone }}">{{telephone}}</a></li>*/
/* 				<li>{{ text_email }}<a href="mailto:{{ email }}">{{email}}</a></li>*/
/* 			</ul>*/
/* 		</address>*/
/* 	</div>*/
/* </div>*/
