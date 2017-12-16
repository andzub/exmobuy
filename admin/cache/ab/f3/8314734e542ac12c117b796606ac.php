<?php

/* category.html */
class __TwigTemplate_abf38314734e542ac12c117b796606ac extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"productForm__box\">
    <form class=\"producForm\" action=\"\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"name\">Название категории</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_category"]) ? $context["product_category"] : null), "name"), "html", null, true);
        echo "\">
            <label for=\"url\">URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product_category"]) ? $context["product_category"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <input type=\"submit\" name=\"save\" value=\"Сохранить\">
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  31 => 4,  28 => 3,);
    }
}
