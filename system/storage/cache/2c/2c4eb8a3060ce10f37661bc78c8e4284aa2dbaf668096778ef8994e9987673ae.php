<?php

/* jetimpex783/template/extension/module/jetimpex_slideshow.twig */
class __TwigTemplate_1b5fc9836f0ec6518dc3cd42d98d67ec5b10303068dca79bb1e9ba2a60331f65 extends Twig_Template
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
        echo "<div class=\"swiper-container swiper-slider\" data-loop=\"";
        echo (isset($context["loop"]) ? $context["loop"] : null);
        echo "\" data-autoplay=\"";
        echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
        echo "\" data-height=\"";
        echo ((isset($context["height"]) ? $context["height"] : null) . "px");
        echo "\" data-min-height=\"";
        echo ((isset($context["min_height"]) ? $context["min_height"] : null) . "px");
        echo "\" data-slide-effect=\"";
        echo (isset($context["effect"]) ? $context["effect"] : null);
        echo "\"
data-slide-speed=\"";
        // line 2
        echo ((isset($context["speed"]) ? $context["speed"] : null) . "ms");
        echo "\" data-keyboard=\"";
        echo (isset($context["keyboard_control"]) ? $context["keyboard_control"] : null);
        echo "\" data-mousewheel=\"";
        echo (isset($context["mousewheel_control"]) ? $context["mousewheel_control"] : null);
        echo "\"
data-mousewheel-release=\"";
        // line 3
        echo (isset($context["mousewheel_release_on_edges"]) ? $context["mousewheel_release_on_edges"] : null);
        echo "\" style=\"height:";
        echo ((isset($context["height"]) ? $context["height"] : null) . "px;");
        echo "\">

<div class=\"swiper-wrapper\">";
        // line 6
        if ((array_key_exists("slides", $context) && (isset($context["slides"]) ? $context["slides"] : null))) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 8
                if ($this->getAttribute($context["slide"], "slide_type", array(), "array")) {
                    // line 9
                    echo "\t\t\t\t<div class=\"swiper-slide";
                    echo $this->getAttribute($context["slide"], "title", array(), "array");
                    echo "vide\" data-vide-bg=\"";
                    echo $this->getAttribute($context["slide"], "video", array(), "array");
                    echo "\"
\t\t\t\tdata-vide-options=\"playbackRate:";
                    // line 10
                    echo $this->getAttribute($context["slide"], "video_playback_rate", array(), "array");
                    echo ", autoplay:";
                    echo $this->getAttribute($context["slide"], "video_autoplay", array(), "array");
                    echo ",
\t\t\t\tloop:";
                    // line 11
                    echo $this->getAttribute($context["slide"], "video_loop", array(), "array");
                    echo ",";
                    echo (($this->getAttribute($context["slide"], "video_muted", array(), "array")) ? ("") : ((("volume: " . $this->getAttribute($context["slide"], "video_volume", array(), "array")) . ",")));
                    echo "
\t\t\t\tmuted:";
                    // line 12
                    echo $this->getAttribute($context["slide"], "video_muted", array(), "array");
                    echo "\">";
                    // line 13
                    if ($this->getAttribute($context["slide"], "link", array(), "array")) {
                        // line 14
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["slide"], "link", array(), "array");
                        echo "\" class=\"swiper-slide__link\">
\t\t\t\t\t\t<div class=\"slide-desc\">";
                        // line 15
                        echo $this->getAttribute($context["slide"], "description", array(), "array");
                        echo "</div>
\t\t\t\t\t</a>";
                    } else {
                        // line 18
                        echo "\t\t\t\t\t<div class=\"slide-desc\">";
                        echo $this->getAttribute($context["slide"], "description", array(), "array");
                        echo "</div>";
                    }
                    // line 20
                    echo "\t\t\t</div>";
                } else {
                    // line 23
                    echo "
\t\t\t<div class=\"swiper-slide";
                    // line 24
                    echo $this->getAttribute($context["slide"], "title", array(), "array");
                    echo "\" data-slide-bg=\"";
                    echo $this->getAttribute($context["slide"], "image", array(), "array");
                    echo "\">";
                    // line 25
                    if ($this->getAttribute($context["slide"], "link", array(), "array")) {
                        // line 26
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["slide"], "link", array(), "array");
                        echo "\" class=\"swiper-slide__link\">
\t\t\t\t\t\t<div class=\"slide-desc\">";
                        // line 27
                        echo $this->getAttribute($context["slide"], "description", array(), "array");
                        echo "</div>
\t\t\t\t\t</a>";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t<div class=\"slide-desc\">";
                        echo $this->getAttribute($context["slide"], "description", array(), "array");
                        echo "</div>";
                    }
                    // line 32
                    echo "\t\t\t</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 37
        echo "</div>";
        // line 39
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 40
            echo "\t<div class=\"swiper-pagination\" data-index-bullet=\"";
            echo (isset($context["pagination_bullet_render"]) ? $context["pagination_bullet_render"] : null);
            echo "\" data-clickable=\"";
            echo (isset($context["pagination_clickable"]) ? $context["pagination_clickable"] : null);
            echo "\"></div>";
        }
        // line 43
        if ((isset($context["next_button"]) ? $context["next_button"] : null)) {
            // line 44
            echo "\t<div class=\"swiper-button-next\"></div>";
        }
        // line 47
        if ((isset($context["prev_button"]) ? $context["prev_button"] : null)) {
            // line 48
            echo "\t<div class=\"swiper-button-prev\"></div>";
        }
        // line 51
        if (((isset($context["scrollbar"]) ? $context["scrollbar"] : null) && ((isset($context["loop"]) ? $context["loop"] : null) == "false"))) {
            // line 52
            echo "\t<div class=\"swiper-scrollbar\" data-draggable=\"";
            echo (isset($context["scrollbar_draggable"]) ? $context["scrollbar_draggable"] : null);
            echo "\"></div>";
        }
        // line 54
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/jetimpex_slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  153 => 52,  151 => 51,  148 => 48,  146 => 47,  143 => 44,  141 => 43,  134 => 40,  132 => 39,  130 => 37,  122 => 32,  117 => 30,  112 => 27,  107 => 26,  105 => 25,  100 => 24,  97 => 23,  94 => 20,  89 => 18,  84 => 15,  79 => 14,  77 => 13,  74 => 12,  68 => 11,  62 => 10,  55 => 9,  53 => 8,  49 => 7,  47 => 6,  40 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div class="swiper-container swiper-slider" data-loop="{{ loop }}" data-autoplay="{{ autoplay }}" data-height="{{ height ~ 'px' }}" data-min-height="{{ min_height ~ 'px' }}" data-slide-effect="{{ effect }}"*/
/* data-slide-speed="{{ speed ~ 'ms' }}" data-keyboard="{{ keyboard_control }}" data-mousewheel="{{ mousewheel_control }}"*/
/* data-mousewheel-release="{{ mousewheel_release_on_edges }}" style="height: {{ height ~ 'px;' }}">*/
/* */
/* <div class="swiper-wrapper">*/
/* 	{% if (slides is defined and slides) %}*/
/* 		{% for slide in slides %}*/
/* 			{% if (slide['slide_type']) %}*/
/* 				<div class="swiper-slide {{ slide['title'] }}vide" data-vide-bg="{{ slide['video'] }}"*/
/* 				data-vide-options="playbackRate: {{ slide['video_playback_rate'] }}, autoplay: {{ slide['video_autoplay'] }},*/
/* 				loop: {{ slide['video_loop'] }}, {{ slide['video_muted'] ? '' : 'volume: ' ~ slide['video_volume'] ~ ',' }}*/
/* 				muted: {{ slide['video_muted'] }}">*/
/* 				{% if (slide['link']) %}*/
/* 					<a href="{{ slide['link'] }}" class="swiper-slide__link">*/
/* 						<div class="slide-desc">{{ slide['description'] }}</div>*/
/* 					</a>*/
/* 				{% else %}*/
/* 					<div class="slide-desc">{{ slide['description'] }}</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div class="swiper-slide {{ slide['title'] }}" data-slide-bg="{{ slide['image'] }}">*/
/* 				{% if (slide['link']) %}*/
/* 					<a href="{{ slide['link'] }}" class="swiper-slide__link">*/
/* 						<div class="slide-desc">{{ slide['description'] }}</div>*/
/* 					</a>*/
/* 				{% else %}*/
/* 					<div class="slide-desc">{{ slide['description'] }}</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* */
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* </div>*/
/* */
/* {% if (pagination) %}*/
/* 	<div class="swiper-pagination" data-index-bullet="{{ pagination_bullet_render }}" data-clickable="{{ pagination_clickable }}"></div>*/
/* {% endif %}*/
/* */
/* {% if (next_button) %}*/
/* 	<div class="swiper-button-next"></div>*/
/* {% endif %}*/
/* */
/* {% if (prev_button) %}*/
/* 	<div class="swiper-button-prev"></div>*/
/* {% endif %}*/
/* */
/* {% if (scrollbar and loop == "false") %}*/
/* 	<div class="swiper-scrollbar" data-draggable="{{ scrollbar_draggable }}"></div>*/
/* {% endif %}*/
/* </div>*/
