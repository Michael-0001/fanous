<?php

/* jetimpex783/template/extension/module/jetimpex_layout_builder.twig */
class __TwigTemplate_6c49b02a6eb49653f6a900a382b5e9a54093506ca3049fb2fc616e919012b8eb extends Twig_Template
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
        $context["rowsBefore"] = twig_constant("false");
        $context["rowFlag"] = twig_constant("false");
        // line 3
        if ( !array_key_exists("rows", $context)) {
            // line 4
            echo "\t<div";
            echo (((isset($context["id"]) ? $context["id"] : null)) ? ((("id=\"" . (isset($context["id"]) ? $context["id"] : null)) . "\"")) : (""));
            echo " class=\"homebuilder clearfix";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">";
            // line 5
            if (((isset($context["rowsBefore"]) ? $context["rowsBefore"] : null) == twig_constant("true"))) {
                // line 6
                $context["level"] = 1;
            } else {
                // line 8
                $context["rows"] = (isset($context["layouts"]) ? $context["layouts"] : null);
                // line 9
                $context["level"] = 1;
            }
        }
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["lkey"] => $context["row"]) {
            // line 14
            if ((($this->getAttribute($context["row"], "level", array()) > 1) && ($this->getAttribute($context["row"], "fullwidth", array()) == "1"))) {
                // line 16
                $context["level"] = 1;
                // line 17
                $context["rowsBefore"] = twig_constant("true");
                // line 18
                $context["rows"] = $context["row"];
            }
            // line 20
            if ((((isset($context["rowsBefore"]) ? $context["rowsBefore"] : null) == twig_constant("true")) && ((isset($context["rowFlag"]) ? $context["rowFlag"] : null) == twig_constant("false")))) {
                // line 21
                echo "</div></div>";
                // line 22
                $context["rowFlag"] = twig_constant("true");
            }
            // line 24
            if (($this->getAttribute($context["row"], "level", array()) == 1)) {
                // line 25
                echo "\t\t\t<div class=\"tm-container";
                if (($this->getAttribute($context["row"], "fullwidth", array()) == "0")) {
                    echo "container";
                }
                echo "\"";
                echo $this->getAttribute($context["row"], "attrs", array());
                echo ">
\t\t\t\t<div class=\"tm-inner\">";
            }
            // line 27
            echo " 
\t\t\t\t<div class=\"row row-level-";
            // line 28
            echo $this->getAttribute($context["row"], "level", array());
            echo $this->getAttribute($context["row"], "sfxcls", array());
            echo "\">
\t\t\t\t\t<div class=\"row-inner";
            // line 29
            echo $this->getAttribute($context["row"], "cls", array());
            echo " clearfix\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cols", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 31
                echo "\t\t\t\t\t\t\t<div class=\"col-lg-";
                echo $this->getAttribute($context["col"], "lgcol", array());
                echo " col-md-";
                echo $this->getAttribute($context["col"], "mdcol", array());
                echo " col-sm-";
                echo $this->getAttribute($context["col"], "smcol", array());
                echo " col-xs-";
                echo $this->getAttribute($context["col"], "xscol", array());
                echo $this->getAttribute($context["col"], "sfxcls", array());
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-inner";
                // line 32
                echo $this->getAttribute($context["col"], "cls", array());
                echo "\">";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["col"], "widgets", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 34
                    if ($this->getAttribute($context["widget"], "content", array(), "any", true, true)) {
                        // line 35
                        echo $this->getAttribute($context["widget"], "content", array());
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                if (($this->getAttribute($context["col"], "rows", array(), "any", true, true) && $this->getAttribute($context["col"], "rows", array()))) {
                    // line 39
                    $context["rows"] = $this->getAttribute($context["col"], "rows", array());
                    // line 40
                    $context["level"] = ((isset($context["level"]) ? $context["level"] : null) + 1);
                    // line 41
                    $this->loadTemplate(((isset($context["DIR_TEMPLATE"]) ? $context["DIR_TEMPLATE"] : null) . (isset($context["template"]) ? $context["template"] : null)), "jetimpex783/template/extension/module/jetimpex_layout_builder.twig", 41)->display($context);
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>";
            // line 48
            if (($this->getAttribute($context["row"], "level", array()) == 1)) {
                // line 49
                echo "\t\t\t\t</div>
\t\t\t</div>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lkey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        if (((isset($context["level"]) ? $context["level"] : null) == 1)) {
            // line 54
            echo "\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_layout_builder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  187 => 53,  171 => 49,  169 => 48,  166 => 46,  151 => 43,  148 => 41,  146 => 40,  144 => 39,  142 => 38,  135 => 35,  133 => 34,  129 => 33,  126 => 32,  114 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  76 => 25,  74 => 24,  71 => 22,  69 => 21,  67 => 20,  64 => 18,  62 => 17,  60 => 16,  58 => 14,  41 => 12,  37 => 9,  35 => 8,  32 => 6,  30 => 5,  24 => 4,  22 => 3,  19 => 1,);
    }
}
/* {%set rowsBefore = constant('false') %}{%set rowFlag = constant('false') %}*/
/* */
/* {% if ( rows is not defined ) %}*/
/* 	<div {{ id ? 'id="' ~ id ~ '"' : '' }} class="homebuilder clearfix {{ class }}">*/
/* 		{% if (rowsBefore == constant('true')) %}*/
/* 			{%set level = 1 %}*/
/* 		{% else %}*/
/* 			{%set rows = layouts %}*/
/* 			{%set level = 1 %}*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* 	{% for lkey, row in rows %}*/
/* 		{# {%set row.level = level %} #}*/
/* 		{% if ( row.level > 1 and row.fullwidth == '1' ) %}*/
/* 			{# {%set row.level = 1 %} #}*/
/* 			{%set level = 1 %}*/
/* 			{%set rowsBefore = constant('true') %}*/
/* 			{%set rows = row %}*/
/* 		{% endif %}*/
/* 		{% if ( rowsBefore == constant('true') and rowFlag == constant('false') ) %}*/
/* 			{{ "</div></div>" }}*/
/* 			{%set rowFlag = constant('true') %}*/
/* 		{% endif %}*/
/* 		{% if ( row.level == 1 ) %}*/
/* 			<div class="tm-container {% if (row.fullwidth == '0') %}{{ "container" }} {% endif %}" {{ row.attrs }}>*/
/* 				<div class="tm-inner">*/
/* 				{% endif %} */
/* 				<div class="row row-level-{{ row.level }} {{ row.sfxcls }}">*/
/* 					<div class="row-inner {{ row.cls }} clearfix">*/
/* 						{% for col in row.cols %}*/
/* 							<div class="col-lg-{{ col.lgcol }} col-md-{{ col.mdcol }} col-sm-{{ col.smcol }} col-xs-{{ col.xscol }} {{ col.sfxcls }}">*/
/* 								<div class="col-inner {{ col.cls }}">*/
/* 									{% for widget in col.widgets %}*/
/* 										{% if ( widget.content is defined ) %}*/
/* 											{{ widget.content }}*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 									{% if ( col.rows is defined and col.rows ) %}*/
/* 										{%set rows = col.rows %}*/
/* 										{%set level = level + 1 %}*/
/* 										{% include DIR_TEMPLATE ~ template %}*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				{% if ( row.level == 1 ) %}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% if ( level == 1 ) %}*/
/* 	</div>*/
/* {% endif %}*/
