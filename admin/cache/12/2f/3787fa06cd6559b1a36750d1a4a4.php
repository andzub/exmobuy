<?php

/* edit_categories.html */
class __TwigTemplate_122f3787fa06cd6559b1a36750d1a4a4 extends Twig_Template
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
        echo "<h1>Редактирование категории</h1>
    <form class=\"form-edit-cat\" action=\"\" method=\"post\">
        <input type=\"hidden\" name=\"category_id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id"), "html", null, true);
        echo "\">
        <input type=\"text\" name=\"name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "\">
        <div class=\"form-edit-btn\">
            <input type=\"submit\" name=\"change\" value=\"Изменить\">
            <input type=\"submit\" name=\"delete\" value=\"Удалить\">
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "edit_categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
