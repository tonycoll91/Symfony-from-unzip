<?php

/* SouthhillsOurFirstBundle:Default:testGlobalTemplate.html.twig */
class __TwigTemplate_7a5f73d429048e1a3fbf6d172195af7a4aab2b6093bc5ba706badf68b12f9dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    This could be a dynamic title.
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    Hello Antonino!
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "    <h1>This is the new header</h1>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "    This is my custom footer for the testGlobalTemplate action.
";
    }

    public function getTemplateName()
    {
        return "SouthhillsOurFirstBundle:Default:testGlobalTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  55 => 15,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
