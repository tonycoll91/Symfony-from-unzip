<?php

/* AntoninoSimpleEmailerBundle:Default:sentEmail.html.twig */
class __TwigTemplate_1bed5896bbdff9cdcf96352a68ad655d5a4f45ea3e614a22e63d6aaa64426517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        echo "<h3>The Email has been sent</h3>";
    }

    public function getTemplateName()
    {
        return "AntoninoSimpleEmailerBundle:Default:sentEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
