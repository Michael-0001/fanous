<?php

/* jetimpex783/template/extension/module/jetimpex_footer_links_account.twig */
class __TwigTemplate_20cdfedf11e009e8d0cc1337a03da67ed89b78f8e347e7f93876302dcb5e8bf0 extends Twig_Template
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
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span></h3>
\t<ul class=\"box-content list-unstyled\">";
        // line 4
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
\t\t\t<li><a href=\"";
            // line 5
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>";
        } else {
            // line 6
            echo " 
\t\t\t<li><a href=\"";
            // line 7
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>";
        }
        // line 8
        echo " 
\t\t<li><a href=\"";
        // line 9
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t<li><a href=\"";
        // line 10
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>\t\t
\t\t<li><a href=\"";
        // line 11
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_footer_links_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  54 => 10,  48 => 9,  45 => 8,  39 => 7,  36 => 6,  30 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="">*/
/* 	<h3 class="box-heading"><span>{{text_account}}</span></h3>*/
/* 	<ul class="box-content list-unstyled">*/
/* 		{% if (logged) %} */
/* 			<li><a href="{{ account }}">{{text_account}}</a></li>*/
/* 		{% else %} */
/* 			<li><a href="{{ login }}">{{text_login}}</a></li>*/
/* 		{% endif %} */
/* 		<li><a href="{{ order }}">{{text_order}}</a></li>*/
/* 		<li><a href="{{ voucher }}">{{text_voucher}}</a></li>		*/
/* 		<li><a href="{{ return }}">{{text_return}}</a></li>*/
/* 		*/
/* 	</ul>*/
/* </div>*/
