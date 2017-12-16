<?php

/* sign_in.html */
class __TwigTemplate_52e4a258656fd238765d933c7281d8c6 extends Twig_Template
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

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo " Ex | Вход ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1 class=\"page-title\">Вход на сайт</h1>

<form id=\"login-form\" action=\"login/run\" method=\"post\">
    <label>Логин</label>
    <input type=\"text\" name=\"login\">
    <label>Пароль</label>
    <input type=\"pass\" name=\"password\">
    <input type=\"submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "sign_in.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
