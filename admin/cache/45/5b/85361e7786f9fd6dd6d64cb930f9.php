<?php

/* catalog.html */
class __TwigTemplate_455b85361e7786f9fd6dd6d64cb930f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Каталог</h1>
<div class=\"catalogAdd__box\">
    <a href=\"/admin/product/\">Добавить товар</a>
    <a href=\"/admin/categories/\">Добавить категорию</a>
</div>
<div class=\"category-wrap\">
    <div class=\"left-sidebar\"><!--left sidebar-->
        <h2>Категории</h2>
        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-products-->
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_cat"]) {
            // line 14
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"\">
                            <!-- <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span> -->
                        </a>
                        <form action=\"/admin/edit-categories/\" method=\"post\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_cat"]) ? $context["product_cat"] : null), "category_id"), "html", null, true);
            echo "\">
                            <input type=\"submit\" name=\"edit\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_cat"]) ? $context["product_cat"] : null), "name"), "html", null, true);
            echo "\">
                        </form>
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
        // line 35
        echo "        </div><!--/category-products-->
    </div><!--/left sidebar-->
    <div class=\"preview-wrap\">
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "            <ul class=\"preview-box\">
                <li><img src=\"/files/uploads/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\"></li>
                <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</li>
                <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</li>   
                <li>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</li>
                <li> 
                    <form action=\"\" method=\"POST\">
                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id"), "html", null, true);
            echo "\">
                        <div class=\"delete-update-btn\">
                            <input type=\"submit\" name=\"delete\" value=\"Удалить\">
                        </div>
                    </form>
                    <form action=\"/admin/edit-product/\" method=\"POST\">
                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id"), "html", null, true);
            echo "\">
                        <div class=\"delete-update-btn\">
                            <input type=\"submit\" name=\"edit\" value=\"Редактировать\">
                        </div>
                    </form>
                </li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  117 => 52,  108 => 46,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  87 => 39,  83 => 38,  78 => 35,  59 => 22,  55 => 21,  46 => 14,  42 => 13,  31 => 4,  28 => 3,);
    }
}
