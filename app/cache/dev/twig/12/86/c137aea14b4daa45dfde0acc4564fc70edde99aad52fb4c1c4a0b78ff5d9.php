<?php

/* ::base.html.twig */
class __TwigTemplate_1286c137aea14b4daa45dfde0acc4564fc70edde99aad52fb4c1c4a0b78ff5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Meat on your Bones</title>
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t</head>
\t<body>
\t\t<section id=\"wrapper\">
\t\t\t<header id=\"header\">
\t\t\t\t<div class=\"top\">
\t\t\t\t\t";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 29
        echo "\t\t\t\t</div>
\t\t\t\t<hgroup>
\t\t\t\t\t<h2>";
        // line 31
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
\t\t\t\t\t<h3>";
        // line 32
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
\t\t\t\t</hgroup>
\t\t\t</header>
\t\t\t<section class=\"main-col\">
\t\t\t\t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t\t</section>
\t\t\t<aside class=\"sidebar\">
\t\t\t\t";
        // line 39
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "\t\t\t</aside>

\t\t\t<div id=\"footer\">
\t\t\t\t";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "\t\t\t</div>
\t\t</section>

\t\t";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Meat on your Bones";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
\t\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ul class=\"navigation\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("bones_yumm_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("bones_yumm_about");
        echo "\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("bones_yumm_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t";
    }

    // line 31
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("bones_yumm_homepage");
        echo "\">Meat on your Bones</a>";
    }

    // line 32
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("bones_yumm_homepage");
        echo "\">tiny blog in Symphony</a>";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t\t\tSymphony2
\t\t\t\t";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 49,  168 => 44,  165 => 43,  160 => 39,  155 => 36,  147 => 32,  139 => 31,  131 => 25,  127 => 24,  123 => 23,  119 => 21,  116 => 20,  110 => 12,  107 => 11,  104 => 10,  98 => 6,  93 => 50,  91 => 49,  86 => 46,  84 => 43,  79 => 40,  77 => 39,  73 => 37,  71 => 36,  64 => 32,  60 => 31,  56 => 29,  54 => 20,  44 => 14,  42 => 10,  35 => 6,  28 => 1,);
    }
}
