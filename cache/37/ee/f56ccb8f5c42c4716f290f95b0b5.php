<?php

/* include/header.html */
class __TwigTemplate_37eef56ccb8f5c42c4716f290f95b0b5 extends Twig_Template
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
        echo "<!-- <div class=\"headerTop__container\">

    <div class=\"headerTop\">
        <h1 class=\"headerTop__logoName\">
            <a href=\"/\">Exmobuy</a>
        </h1>

        <form id=\"headerTop__search\" name=\"search\" method=\"post\" action=\"Search.php\">
            <input type=\"search\" name=\"query\" placeholder=\"Поиск\">
            <button type=\"submit\">Найти</button>
        </form>

        <div class=\"headerTop__cart\">
            <a href=\"korzina\">
                <i class=\"fa fa-shopping-cart fa-2x\" aria-hidden=\"true\"></i>
            </a>
        </div>

        <div class=\"headerTop__loginAuth-box\">
            <a href=\"vhod\" class=\"headerTop__login-btn\">Вход</a>
            <a href=\"registracia\" class=\"headerTop__auth-btn\">Регистация</a>
        </div>
    </div>
    
</div>

<div class=\"headerBottom\">
    <nav class=\"headerBottom__menu\">
        <ul>
            <li>
                <a href=\"o-magazine\">О магазине</a>
            </li>
            <li>
                <a href=\"prodykcia\">Продукция</a>
            </li>
            <li>
                <a href=\"dostavka-i-oplata\">Доставка и оплата</a>
            </li>
            <li>
                <a href=\"contactu\">Контакты</a>
            </li>
        </ul>
    </nav>
</div> -->
<div class=\"header_top\"><!--header_top-->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"contactinfo\">
                    <ul class=\"nav nav-pills\">
                        <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +380 98 751 13 01</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@exmobuy.com</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"social-icons pull-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header_top-->

<div class=\"header-middle\"><!--header-middle-->
    <div class=\"container\">
        <div class=\"logo-menu-row row\">
            <div class=\"logo col-sm-4\">
                <div class=\"logo pull-left\">
                    <h1><a href=\"/\">Exmobuy</a></h1>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"shop-menu pull-right\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\"><i class=\"fa fa-star\"></i> Избранное</a></li>
                        <li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Проверка заказа</a></li>
                        <li><a href=\"korzina\"><i class=\"fa fa-shopping-cart\"></i> Корзина</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-user\"></i> Аккаунт</a></li>
                        <li><a href=\"login.html\"><i class=\"fa fa-lock\"></i> Логин</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class=\"header-bottom\"><!--header-bottom-->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-9\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"mainmenu pull-left\">
                    <ul class=\"nav navbar-nav collapse navbar-collapse\">
                        <li><a href=\"index.html\" class=\"active\">Главная</a></li>
                        <li class=\"dropdown\"><a href=\"#\">Магазин<i class=\"fa fa-angle-down\"></i></a>
                            <ul role=\"menu\" class=\"sub-menu\">
                                <li><a href=\"shop.html\">Товары</a></li>
                                <li><a href=\"product-details.html\">Товары детальнее</a></li> 
                                <li><a href=\"checkout.html\">Проверить заказ</a></li> 
                                <li><a href=\"cart.html\">Корзина</a></li> 
                                <li><a href=\"login.html\">Логин</a></li> 
                            </ul>
                        </li> 
                        <li class=\"dropdown\"><a href=\"#\">Блог<i class=\"fa fa-angle-down\"></i></a>
                            <ul role=\"menu\" class=\"sub-menu\">
                                <li><a href=\"blog.html\">Блог лист</a></li>
                                <li><a href=\"blog-single.html\">Блог один</a></li>
                            </ul>
                        </li> 
                        <li><a href=\"contact-us.html\">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"search_box pull-right\">
                    <input type=\"text\" placeholder=\"Search\"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->";
    }

    public function getTemplateName()
    {
        return "include/header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
