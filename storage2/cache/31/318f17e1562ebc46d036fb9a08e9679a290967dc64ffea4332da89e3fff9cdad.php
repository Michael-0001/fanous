<?php

/* jetimpex783/template/common/footer.twig */
class __TwigTemplate_8c7e0c024a055c9b140b62184b92b4330dd0ba9d406d469756ce902e64b9a7a5 extends Twig_Template
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
        echo "<div class=\"demo-footer-img\">
\t<div class=\"container\">
\t\t<a href=\"https://www.templatemonster.com/opencart-templates/auto-parts-responsive-opencart-template-65320.html\" class=\"demo-img\"><img src=\"image/catalog/demo/Auto Point_big.jpg\" alt=\"\"></a>
\t</div>
</div>


<footer>
\t<div class=\"container\">";
        // line 11
        if ((isset($context["footer_2"]) ? $context["footer_2"] : null)) {
            // line 12
            echo "\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules\">";
            echo (isset($context["footer_2"]) ? $context["footer_2"] : null);
            echo "</div>";
        }
        // line 14
        if ((isset($context["footer_3"]) ? $context["footer_3"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules\">";
            echo (isset($context["footer_3"]) ? $context["footer_3"] : null);
            echo "</div>";
        }
        // line 17
        if ((isset($context["footer_4"]) ? $context["footer_4"] : null)) {
            // line 18
            echo "\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules\">";
            echo (isset($context["footer_4"]) ? $context["footer_4"] : null);
            echo "</div>";
        }
        // line 19
        echo "\t\t
\t</div>
\t<div class=\"copyright\"><div class=\"container\">";
        // line 21
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo ". Design by <a href=\"https://zemez.io\"> Zemez</a></div></div><!-- [[%FOOTER_LINK]] -->
</footer>
<div class=\"ajax-overlay\"></div>
<div class=\"ajax-quickview-overlay\">
\t<span class=\"ajax-quickview-overlay__preloader\"></span>
</div>";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "<script src=\"catalog/view/theme/";
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/js/device.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 31
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/js/livesearch.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 32
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/js/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 33
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/js/script.js\" type=\"text/javascript\"></script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  83 => 32,  79 => 31,  74 => 30,  66 => 28,  62 => 27,  54 => 21,  50 => 19,  45 => 18,  43 => 17,  38 => 15,  36 => 14,  31 => 12,  29 => 11,  19 => 1,);
    }
}
/* <div class="demo-footer-img">*/
/* 	<div class="container">*/
/* 		<a href="https://www.templatemonster.com/opencart-templates/auto-parts-responsive-opencart-template-65320.html" class="demo-img"><img src="image/catalog/demo/Auto Point_big.jpg" alt=""></a>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <footer>*/
/* 	<div class="container">		*/
/* */
/* 		{% if footer_2 %}*/
/* 			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules">{{footer_2}}</div>*/
/* 		{% endif %}*/
/* 		{% if footer_3 %}*/
/* 			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules">{{footer_3}}</div>*/
/* 		{% endif %}*/
/* 		{% if footer_4 %}*/
/* 			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer_modules">{{footer_4}}</div>*/
/* 		{% endif %}		*/
/* 	</div>*/
/* 	<div class="copyright"><div class="container">{{ powered }}. Design by <a href="https://zemez.io"> Zemez</a></div></div><!-- [[%FOOTER_LINK]] -->*/
/* </footer>*/
/* <div class="ajax-overlay"></div>*/
/* <div class="ajax-quickview-overlay">*/
/* 	<span class="ajax-quickview-overlay__preloader"></span>*/
/* </div>*/
/* {% for script in scripts %}*/
/* 	<script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/{{ theme_path }}/js/device.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/{{ theme_path }}/js/livesearch.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/{{ theme_path }}/js/common.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/{{ theme_path }}/js/script.js" type="text/javascript"></script>*/
/* </div>*/
/* </body>*/
/* </html>*/
