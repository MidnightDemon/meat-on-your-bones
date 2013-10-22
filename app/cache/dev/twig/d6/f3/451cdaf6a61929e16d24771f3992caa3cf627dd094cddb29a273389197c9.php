<?php

/* BonesYummBundle:Default:index.html.twig */
class __TwigTemplate_d6f3451cdaf6a61929e16d24771f3992caa3cf627dd094cddb29a273389197c9 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! How are you?
";
    }

    public function getTemplateName()
    {
        return "BonesYummBundle:Default:index.html.twig";
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
