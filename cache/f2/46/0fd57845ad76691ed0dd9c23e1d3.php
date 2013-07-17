<?php

/* layout/layout.twig */
class __TwigTemplate_f2460fd57845ad76691ed0dd9c23e1d3 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"en-US\">
<head>
</head>
<body>
<div class=\"container\">
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</div>
</body>
</html>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 10,  20 => 2,  31 => 3,  28 => 8,);
    }
}
