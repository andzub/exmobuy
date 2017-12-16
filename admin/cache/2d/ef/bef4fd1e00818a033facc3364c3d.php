<?php

/* index.html */
class __TwigTemplate_2defbef4fd1e00818a033facc3364c3d extends Twig_Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"/admin/theme/assets/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"/admin/theme/assets/css/style.css\">
    <title>Document</title>
</head>
<body>
    <header id=\"header\">
        <nav class=\"headerMenu\">
            <ul>
                <li><a href=\"/admin/\">Главная</a></li>
                <li><a href=\"/admin/catalog/\">Каталог</a></li>
                <li><a href=\"/admin/pages/\">Старницы</a></li>
            </ul>
        </nav>
    </header>
    <div id=\"content\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "    </div>
</body>
</html>";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  45 => 23,  43 => 22,  20 => 1,);
    }
}
