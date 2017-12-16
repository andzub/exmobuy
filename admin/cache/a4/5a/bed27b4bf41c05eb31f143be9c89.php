<?php

/* product.html */
class __TwigTemplate_a45abed27b4bf41c05eb31f143be9c89 extends Twig_Template
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
        echo "<h1>Добавление товара</h1>
<div class=\"productForm__box\">
    <form class=\"producForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">

        <h3>Выберите категорию товара</h3>
        <select name=\"category_id\" id=\"select-category\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id"), "html", null, true);
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </select>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"name\">Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Цена</label>
            <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Описание</label>
            <textarea class=\"form-control\" type=\"text\" name=\"description\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Картинка</label>
            <input class=\"form-control file\" type=\"file\" name=\"image\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"visible\">Видимость</label>
            <input class=\"\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 40
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
        return "product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  95 => 36,  88 => 32,  81 => 28,  74 => 24,  67 => 20,  61 => 17,  57 => 15,  48 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
