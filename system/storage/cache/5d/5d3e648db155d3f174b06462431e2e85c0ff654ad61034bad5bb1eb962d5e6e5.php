<?php

/* jetimpex783/template/extension/module/featured.twig */
class __TwigTemplate_5e5c8d709635d88f7193631ebfec152849f2f3dc2b2760aabcf86fd50c825f25 extends Twig_Template
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
        echo "<div class=\"box featured\">
\t<div class=\"box-heading\">
\t\t<h4>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
\t</div>
\t<div class=\"row\">";
        // line 6
        $context["option_index"] = 2000;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "\t\t\t<div class=\"product-layout col-lg-4 col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t<div class=\"product-thumb transition";
            // line 9
            if (($this->getAttribute($context["product"], "options", array()) && (twig_length_filter($this->env, $this->getAttribute($context["product"], "options", array())) <= 3))) {
                echo "options";
            }
            echo "\">";
            // line 10
            if (($this->getAttribute($context["product"], "options", array()) && (twig_length_filter($this->env, $this->getAttribute($context["product"], "options", array())) <= 3))) {
                // line 11
                echo "\t\t\t\t\t\t<div class=\"product-option-wrap\">
\t\t\t\t\t\t\t<div class=\"product-options form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t<a class=\"ajax-overlay_close\" href='#'></a>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_id\" value=\"";
                // line 15
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" class=\"form-control hidden\"/>
\t\t\t\t\t\t\t\t\t<h3>";
                // line 16
                echo (isset($context["text_option"]) ? $context["text_option"] : null);
                echo "</h3>";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 18
                    if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 20
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        // line 21
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 23
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 24
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>";
                        // line 25
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            // line 27
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 28
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")";
                            }
                            // line 30
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 35
                    if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 37
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 38
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 40
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            // line 42
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" />";
                            // line 43
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                // line 44
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                }
                                echo "\" class=\"img-thumbnail\" />";
                            }
                            // line 46
                            echo $this->getAttribute($context["option_value"], "name", array());
                            // line 47
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 48
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")";
                            }
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 56
                    if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 58
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 59
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                            // line 63
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" />";
                            // line 64
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                // line 65
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                }
                                echo "\" class=\"img-thumbnail\" />";
                            }
                            // line 67
                            echo $this->getAttribute($context["option_value"], "name", array());
                            // line 68
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 69
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")";
                            }
                            // line 71
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 77
                    if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 79
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        // line 80
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 82
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 85
                    if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 87
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                        // line 88
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\">";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 91
                    if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 93
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                        // line 94
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i>";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        // line 95
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 98
                    if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 100
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 102
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 109
                    if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 111
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 113
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 120
                    if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 122
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 124
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                        echo (($this->getAttribute($context["option"], "product_option_id", array()) . (isset($context["module"]) ? $context["module"] : null)) . (isset($context["option_index"]) ? $context["option_index"] : null));
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-primary\" onclick=\"cart.addPopup(\$(this),";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ");\"><i class=\"fa fa-shopping-cart\"></i> <span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
            }
            // line 136
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a class=\"lazy\" href=\"";
            // line 139
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" style=\"padding-bottom:";
            echo ((($this->getAttribute($context["product"], "img-height", array(), "array") / $this->getAttribute($context["product"], "img-width", array(), "array")) * 100) . "%");
            echo "\">";
            // line 140
            if ($this->getAttribute($context["product"], "additional_thumb", array())) {
                // line 141
                echo "\t\t\t\t\t\t\t\t<img width=\"";
                echo $this->getAttribute($context["product"], "img-width", array(), "array");
                echo "\" height=\"";
                echo $this->getAttribute($context["product"], "img-height", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" class=\"img-primary\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" src=\"#\"/>
\t\t\t\t\t\t\t\t<img width=\"";
                // line 142
                echo $this->getAttribute($context["product"], "img-width", array(), "array");
                echo "\" height=\"";
                echo $this->getAttribute($context["product"], "img-height", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" class=\"img-secondary\" data-src=\"";
                echo $this->getAttribute($context["product"], "additional_thumb", array(), "array");
                echo "\" src=\"#\"/>";
            } else {
                // line 144
                echo "\t\t\t\t\t\t\t\t<img width=\"";
                echo $this->getAttribute($context["product"], "img-width", array(), "array");
                echo "\" height=\"";
                echo $this->getAttribute($context["product"], "img-height", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" class=\"img\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" src=\"#\"/>";
            }
            // line 146
            echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"img-button-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-icon\" data-toggle=\"tooltip\" title=\"";
            // line 148
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-icon\" data-toggle=\"tooltip\" title=\"";
            // line 149
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t</div>";
            // line 151
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 152
                echo "\t\t\t\t\t\t\t<div class=\"rating\">";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 154
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"material-design-bookmark45\"></i></span>";
                    } else {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"material-design-mark1 star\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "\t\t\t\t\t\t\t</div>";
            }
            // line 162
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 163
                if ( !$this->getAttribute($context["product"], "special", array())) {
                } else {
                    // line 165
                    if ((isset($context["label_sale"]) ? $context["label_sale"] : null)) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"sale\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 167
                        echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t</div>";
                    }
                    // line 170
                    if ((isset($context["label_discount"]) ? $context["label_discount"] : null)) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"discount\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 172
                        echo $this->getAttribute($context["product"], "label_discount", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</div>";
                    }
                }
            }
            // line 177
            if ($this->getAttribute($context["product"], "label_new", array())) {
                // line 178
                echo "\t\t\t\t\t\t\t<div class=\"new-pr\"><span>";
                echo (isset($context["text_new"]) ? $context["text_new"] : null);
                echo "</span></div>";
            }
            // line 180
            echo "\t\t\t\t\t</div>";
            // line 181
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 182
                echo "\t\t\t\t\t\t<span class=\"price\">";
                // line 183
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 184
                    echo $this->getAttribute($context["product"], "price", array());
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                }
                // line 188
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>";
                }
                // line 191
                echo "\t\t\t\t\t\t</span>";
            }
            // line 193
            echo "\t\t\t\t\t<div class=\"name\"><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>
\t\t\t\t\t<p class=\"description\">";
            // line 194
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
\t\t\t\t\t<div class=\"button-group\">\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn-primary\"";
            // line 196
            if ((twig_length_filter($this->env, $this->getAttribute($context["product"], "options", array())) > 3)) {
                echo " onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"";
            } else {
                echo " onclick=\"ajaxAdd(\$(this),";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ");\"";
            }
            echo "> <i class=\"fa fa-shopping-cart\"></i> <span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span> </button>
\t\t\t\t\t\t<button class=\"btn quickview\" type=\"button\" data-rel=\"details\" data-product=\"";
            // line 197
            echo $this->getAttribute($context["product"], "product_id", array(), "array");
            echo "\">";
            echo (isset($context["text_quick"]) ? $context["text_quick"] : null);
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>";
            // line 201
            $context["option_index"] = ((isset($context["option_index"]) ? $context["option_index"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "jetimpex783/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 203,  609 => 201,  601 => 197,  587 => 196,  582 => 194,  575 => 193,  572 => 191,  566 => 189,  564 => 188,  557 => 186,  554 => 184,  552 => 183,  550 => 182,  548 => 181,  546 => 180,  541 => 178,  539 => 177,  532 => 172,  529 => 171,  527 => 170,  522 => 167,  519 => 166,  517 => 165,  514 => 163,  512 => 162,  509 => 160,  502 => 157,  499 => 155,  497 => 154,  493 => 153,  491 => 152,  489 => 151,  483 => 149,  477 => 148,  473 => 146,  460 => 144,  448 => 142,  435 => 141,  433 => 140,  428 => 139,  423 => 136,  413 => 132,  396 => 124,  389 => 122,  382 => 121,  380 => 120,  367 => 113,  360 => 111,  353 => 110,  351 => 109,  338 => 102,  331 => 100,  324 => 99,  322 => 98,  315 => 95,  307 => 94,  303 => 93,  296 => 92,  294 => 91,  283 => 88,  277 => 87,  270 => 86,  268 => 85,  257 => 82,  252 => 80,  249 => 79,  242 => 78,  240 => 77,  236 => 74,  229 => 71,  223 => 69,  221 => 68,  219 => 67,  208 => 65,  206 => 64,  201 => 63,  197 => 61,  193 => 60,  190 => 59,  186 => 58,  179 => 57,  177 => 56,  173 => 53,  166 => 50,  160 => 48,  158 => 47,  156 => 46,  145 => 44,  143 => 43,  138 => 42,  134 => 40,  130 => 39,  127 => 38,  123 => 37,  116 => 36,  114 => 35,  110 => 32,  104 => 30,  98 => 28,  96 => 27,  91 => 26,  87 => 25,  84 => 24,  78 => 23,  73 => 21,  70 => 20,  63 => 19,  61 => 18,  57 => 17,  54 => 16,  50 => 15,  44 => 11,  42 => 10,  37 => 9,  34 => 8,  30 => 7,  28 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="box featured">*/
/* 	<div class="box-heading">*/
/* 		<h4>{{ heading_title }}</h4>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		{%set option_index = 2000 %}*/
/* 		{% for product in products %}*/
/* 			<div class="product-layout col-lg-4 col-md-4 col-sm-4 col-xs-12">*/
/* 				<div class="product-thumb transition {% if product.options and product.options|length <= 3 %} {{ 'options' }} {% endif %}">*/
/* 					{% if product.options and product.options|length <= 3 %}*/
/* 						<div class="product-option-wrap">*/
/* 							<div class="product-options form-horizontal">*/
/* 								<div class="options">*/
/* 									<a class="ajax-overlay_close" href='#'></a>*/
/* 									<input type="text" name="product_id" value="{{ product.product_id }}" class="form-control hidden"/>*/
/* 									<h3>{{ text_option }}</h3>*/
/* 									{% for option in product.options %}*/
/* 										{% if option.type == 'select' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">*/
/* 													{{ option.name }}*/
/* 												</label>*/
/* 												<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control">*/
/* 													<option value="">{{ text_select }}</option>*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/* 															{% if option_value.price %}*/
/* 																({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 															{% endif %}*/
/* 														</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'radio' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label">{{ option.name }}</label>*/
/* 												<div id="input-option{{ option.product_option_id ~ module ~ option_index }}">*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<div class="radio">*/
/* 															<label>*/
/* 																<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/* 																{% if option_value.image %}*/
/* 																	<img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" />*/
/* 																{% endif %}*/
/* 																{{ option_value.name }}*/
/* 																{% if option_value.price %}*/
/* 																	({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 																{% endif %}*/
/* 															</label>*/
/* 														</div>*/
/* 													{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'checkbox' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label">{{ option.name }}</label>*/
/* 												<div id="input-option{{ option.product_option_id ~ module ~ option_index }}">*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<div class="checkbox">*/
/* 															<label>*/
/* 																<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/* 																{% if option_value.image %}*/
/* 																	<img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" />*/
/* 																{% endif %}*/
/* 																{{ option_value.name }}*/
/* 																{% if option_value.price %}*/
/* 																	({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 																{% endif %}*/
/* 															</label>*/
/* 														</div>*/
/* 													{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'text' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">*/
/* 													{{ option.name }}*/
/* 												</label>*/
/* 												<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control" />*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'textarea' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">{{ option.name }}</label>*/
/* 												<textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control">{{ option.value }}</textarea>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'file' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label">{{ option.name }}</label>*/
/* 												<button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 												<input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id ~ module ~ option_index }}" />*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'date' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">{{ option.name }}</label>*/
/* 												<div class="input-group date">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control" />*/
/* 													<span class="input-group-btn">*/
/* 														<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/* 													</span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'datetime' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">{{ option.name }}</label>*/
/* 												<div class="input-group datetime">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control" />*/
/* 													<span class="input-group-btn">*/
/* 														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 													</span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'time' %}*/
/* 											<div class="form-group{% if option.required %} required {% endif %}">*/
/* 												<label class="control-label" for="input-option{{ option.product_option_id ~ module ~ option_index }}">{{ option.name }}</label>*/
/* 												<div class="input-group time">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id ~ module ~ option_index }}" class="form-control" />*/
/* 													<span class="input-group-btn">*/
/* 														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 													</span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 									<button type="button" class="btn-primary" onclick="cart.addPopup($(this), {{ product.product_id }});"><i class="fa fa-shopping-cart"></i> <span>{{ button_cart }}</span></button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}					*/
/* 					*/
/* 					<div class="image">*/
/* 						<a class="lazy" href="{{ product.href }}" style="padding-bottom: {{ product['img-height'] / product['img-width'] * 100 ~ '%' }}">*/
/* 							{% if product.additional_thumb %}*/
/* 								<img width="{{ product['img-width'] }}" height="{{ product['img-height'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" class="img-primary" data-src="{{ product['thumb'] }}" src="#"/>*/
/* 								<img width="{{ product['img-width'] }}" height="{{ product['img-height'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" class="img-secondary" data-src="{{ product['additional_thumb'] }}" src="#"/>*/
/* 							{% else %}*/
/* 								<img width="{{ product['img-width'] }}" height="{{ product['img-height'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" class="img" data-src="{{ product['thumb'] }}" src="#"/>*/
/* 							{% endif %}*/
/* 						</a>*/
/* 						<div class="img-button-group">							*/
/* 							<button type="button" class="btn-icon" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 							<button type="button" class="btn-icon" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 						</div>*/
/* 						{% if product.rating %}*/
/* 							<div class="rating">*/
/* 								{% for i in 1..5 %}*/
/* 									{% if product.rating < i %}*/
/* 										<span class="fa fa-stack"><i class="material-design-bookmark45"></i></span>*/
/* 									{% else %}*/
/* 										<span class="fa fa-stack"><i class="material-design-mark1 star"></i></span>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if product.price %}							*/
/* 							{% if not product.special %}							*/
/* 							{% else %}								*/
/* 								{% if (label_sale) %}*/
/* 									<div class="sale">*/
/* 										<span>{{ text_sale }}</span>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if (label_discount) %}*/
/* 									<div class="discount">*/
/* 										<span>{{ product.label_discount }}</span>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 						{% if (product.label_new) %}*/
/* 							<div class="new-pr"><span>{{ text_new }}</span></div>*/
/* 						{% endif %}*/
/* 					</div>					*/
/* 					{% if product.price %}*/
/* 						<span class="price">*/
/* 							{% if not product.special %}*/
/* 								{{ product.price }}*/
/* 							{% else %}*/
/* 								<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 							{% endif %}*/
/* 							{% if product.tax %}*/
/* 								<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 							{% endif %}*/
/* 						</span>*/
/* 					{% endif %}*/
/* 					<div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/* 					<p class="description">{{ product.description }}</p>*/
/* 					<div class="button-group">	*/
/* 						<button type="button" class="btn-primary" {% if (product.options|length > 3) %} onclick="cart.add('{{ product.product_id }}');" {% else %} onclick="ajaxAdd($(this),{{ product.product_id }});" {% endif %}> <i class="fa fa-shopping-cart"></i> <span>{{ button_cart }}</span> </button>*/
/* 						<button class="btn quickview" type="button" data-rel="details" data-product="{{ product['product_id'] }}">{{ text_quick }}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{%set option_index = option_index + 1 %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
