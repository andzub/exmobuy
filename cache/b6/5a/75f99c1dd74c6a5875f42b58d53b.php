<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo " Exmobuy ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"col-sm-3\">
    <div class=\"left-sidebar\">
        <h2>Категории</h2>
        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-products-->
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_cat"]) {
            // line 11
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-parent=\"#accordian\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_cat"]) ? $context["product_cat"] : null), "url"), "html", null, true);
            echo "\">
                            <!-- <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span> -->
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_cat"]) ? $context["product_cat"] : null), "name"), "html", null, true);
            echo "
                        </a>
                    </h4>
                </div>
                <!-- <div id=\"sportswear\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        <ul>
                            <li><a href=\"#\">Nike </a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "        </div><!--/category-products-->

        <div class=\"brands_products\"><!--brands_products-->
            <!-- <h2>Brands</h2>
            <div class=\"brands-name\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
                    <li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
                </ul>
            </div> -->
        </div><!--/brands_products-->
        
        <div class=\"price-range\"><!--price-range-->
            <h2>Диапазон цен</h2>
            <div class=\"well text-center\">
                <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"20000\" data-slider-step=\"100\" data-slider-value=\"[2000,6000]\" id=\"sl2\" ><br />
                <b class=\"pull-left\">0 грн</b> <b class=\"pull-right\">20 000 грн</b>
            </div>
        </div><!--/price-range-->

    </div>
</div>

<div class=\"col-sm-9 padding-right\">
    <div class=\"features_items\"><!--features_items-->
        <h2 class=\"title text-center\">Популярые товары</h2>

        ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "        <div class=\"col-sm-4\">
            <div class=\"product-image-wrapper\"><!--product-->
                <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"/files/uploads/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\" />
                            <h2>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн</h2>
                            <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Добавить в корзину</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <p>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</p>
                                <h2>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн</h2>
                                <p>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Добавить в корзину</a>
                            </div>
                        </div>
                </div>
                <div class=\"choose\">
                    <ul class=\"nav nav-pills nav-justified\">
                        <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Избранное</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Сравнить</a></li>
                    </ul>
                </div>
            </div><!--/product-->    
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "
    </div><!--features_items-->
    
    <div class=\"category-tab\"><!--category-tab-->
        <!-- <div class=\"col-sm-12\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
                <li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
                <li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
                <li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
                <li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
            </ul>
        </div>
        <div class=\"tab-content\">
            <div class=\"tab-pane fade active in\" id=\"tshirt\" >
                <div class=\"col-sm-3\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <img src=\"/theme/assets/images/home/gallery1.jpg\" alt=\"\" />
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"tab-pane fade\" id=\"blazers\" >
                <div class=\"col-sm-3\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <img src=\"/theme/assets/images/home/gallery4.jpg\" alt=\"\" />
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"tab-pane fade\" id=\"sunglass\" >
                <div class=\"col-sm-3\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <img src=\"/theme/assets/images/home/gallery3.jpg\" alt=\"\" />
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"tab-pane fade\" id=\"kids\" >
                <div class=\"col-sm-3\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <img src=\"/theme/assets/images/home/gallery1.jpg\" alt=\"\" />
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"tab-pane fade\" id=\"poloshirt\" >
                <div class=\"col-sm-3\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <img src=\"/theme/assets/images/home/gallery2.jpg\" alt=\"\" />
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div><!--/category-tab-->
    
    <div class=\"recommended_items\"><!--recommended_items-->
        <!-- <h2 class=\"title text-center\">Рекомендуемые товары</h2>
        
        <div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">\t
                    <div class=\"col-sm-4\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"/theme/assets/images/home/recommend1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">\t
                    <div class=\"col-sm-4\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"/theme/assets/images/home/recommend1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\"></i>
                </a>
                <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\"></i>
                </a>\t\t\t
        </div> -->
    </div><!--/recommended_items-->
        
</div>

";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 89,  146 => 75,  142 => 74,  138 => 73,  130 => 68,  126 => 67,  122 => 66,  116 => 62,  112 => 61,  78 => 29,  59 => 16,  54 => 14,  49 => 11,  45 => 10,  38 => 5,  35 => 4,  29 => 2,);
    }
}
