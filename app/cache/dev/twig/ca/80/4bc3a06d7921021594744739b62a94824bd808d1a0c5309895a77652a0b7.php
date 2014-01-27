<?php

/* SouthhillsOurFirstBundle:Default:index.html.twig */
class __TwigTemplate_ca804bc3a06d7921021594744739b62a94824bd808d1a0c5309895a77652a0b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_reverse_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo " is speaking!
";
    }

    public function getTemplateName()
    {
        return "SouthhillsOurFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
