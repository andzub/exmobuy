<?php

/* edit_product.html */
class __TwigTemplate_90ec42356507c26bed788d3574d17841 extends Twig_Template
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
        echo "<h1>Редактирование товара</h1>
<div class=\"productForm__box\">
    <form class=\"producForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"name\">Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Цена</label>
            <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Описание</label>
            <textarea class=\"form-control\" type=\"text\" name=\"description\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Картинка ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "</label>
            <input class=\"form-control file\" type=\"file\" name=\"image\" value=\"../files/uploads/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"visible\">Видимость</label>
            <input class=\"\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
        echo "\">
        </div>
        <input class=\"product-btn\" type=\"submit\" name=\"save\" value=\"Сохранить\">
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "edit_product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  75 => 26,  71 => 25,  63 => 22,  56 => 18,  49 => 14,  42 => 10,  36 => 7,  31 => 4,  28 => 3,);
    }
}
