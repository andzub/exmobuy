<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Home | Exmobuy</title>
    <link href=\"/theme/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/theme/assets/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"/theme/assets/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"/theme/assets/css/price-range.css\" rel=\"stylesheet\">
    <link href=\"/theme/assets/css/animate.css\" rel=\"stylesheet\">
\t<link href=\"/theme/assets/css/main.css\" rel=\"stylesheet\">
\t<link href=\"/theme/assets/css/responsive.css\" rel=\"stylesheet\">     
    <link rel=\"shortcut icon\" href=\"/theme/assets/images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/theme/assets/images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"/theme/assets/images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/theme/assets/images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/theme/assets/images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->

<body>
\t<header id=\"header\"><!--header-->
\t\t";
        // line 25
        $this->env->loadTemplate("include/header.html")->display($context);
        // line 26
        echo "\t</header><!--/header-->

\t<section id=\"slider\"><!--slider-->
        <!-- <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
                            <li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
                        </ol>
                        
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <div class=\"col-sm-6\">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                                </div>
                                <div class=\"col-sm-6\">
                                    <img src=\"/theme/assets/images/home/girl1.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                    <img src=\"/theme/assets/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-sm-6\">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                                </div>
                                <div class=\"col-sm-6\">
                                    <img src=\"/theme/assets/images/home/girl2.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                    <img src=\"/theme/assets/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                                </div>
                            </div>
                            
                            <div class=\"item\">
                                <div class=\"col-sm-6\">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                                </div>
                                <div class=\"col-sm-6\">
                                    <img src=\"/theme/assets/images/home/girl3.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                    <img src=\"/theme/assets/images/home/pricing.png\" class=\"pricing\" alt=\"\" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\"></i>
                        </a>
                        <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div> -->
    </section><!--/slider-->
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<footer id=\"footer\"><!--Footer-->
\t\t";
        // line 102
        $this->env->loadTemplate("include/footer.html")->display($context);
        // line 103
        echo "\t</footer><!--/Footer-->
\t
    <script src=\"/theme/assets/js/jquery.js\"></script>
\t<script src=\"/theme/assets/js/bootstrap.min.js\"></script>
\t<!-- <script src=\"/theme/assets/js/jquery.scrollUp.min.js\"></script> -->
\t<script src=\"/theme/assets/js/price-range.js\"></script>
    <script src=\"/theme/assets/js/jquery.prettyPhoto.js\"></script>
    <script src=\"/theme/assets/js/main.js\"></script>
</body>
</html>";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 96,  131 => 103,  129 => 102,  122 => 97,  120 => 96,  48 => 26,  46 => 25,  20 => 1,  213 => 170,  186 => 148,  182 => 147,  38 => 5,  35 => 4,  29 => 2,);
    }
}
