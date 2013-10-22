<?php

/* BonesYummBundle:Page:about.html.twig */
class __TwigTemplate_f82ef7cec34c30590a07a34e83c777855f853d4470e47cd8fee2ae63a28b304b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BonesYummBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BonesYummBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<header>
\t\t<h1>About Meat on your Bones</h1>
\t\t<article>
\t\t\t<p>Recipe scraping site.
\t\t\t</p>
\t\t</article>
\t</header>
";
    }

    public function getTemplateName()
    {
        return "BonesYummBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,);
    }
}
