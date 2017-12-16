<?php

/* sign_up.html */
class __TwigTemplate_dbed3ec41679306a800436f03fcfd80d extends Twig_Template
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
        echo " EX | Регистрация ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1 class=\"page-title\">Регистрация</h1>
    <form id=\"login-form\" action=\"login/run\" method=\"post\">
        <label>Имя</label>
        <input type=\"text\" name=\"first_name\">
        <label>Фамилия</label>
        <input type=\"text\" name=\"last_name\">
        <label>Телефон</label>
        <input type=\"tel\" name=\"phone\">
        <label>Пароль</label>
        <input type=\"pass\" name=\"password1\">
        <label>Введите пароль повтороно</label>
        <input type=\"pass\" name=\"password2\">
        <input type=\"submit\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "sign_up.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
