<?php

/* ::base.html.twig */
class __TwigTemplate_7bb2589387a7fe4ff97b3aa67624227fc36c5ffdf04631e25a5d5461d5bef85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'h2' => array($this, 'block_h2'),
            'h3' => array($this, 'block_h3'),
            'hrefp1' => array($this, 'block_hrefp1'),
            'imgp1' => array($this, 'block_imgp1'),
            'par1' => array($this, 'block_par1'),
            'quote' => array($this, 'block_quote'),
            'quoteAuthor' => array($this, 'block_quoteAuthor'),
            'par2' => array($this, 'block_par2'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7 ]>    <html class=\"ie7 oldie\"> <![endif]-->
<!--[if IE 8 ]>    <html class=\"ie8 oldie\"> <![endif]-->
<!--[if IE 9 ]>    <html class=\"ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<html>
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"wrap\">
\t\t\t";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "\t\t\t
\t\t\t\t<div id=\"content-wrap\">
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "\t\t\t\t\t<!-- main ends -->\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<!-- sidebar starts -->
\t\t\t\t\t<div id=\"sidebar\">\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 83
        $this->displayBlock('sidebar', $context, $blocks);
        // line 119
        echo "\t\t\t\t\t<!-- sidebar ends -->\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- content-wrap ends-->\t
\t\t\t\t</div>
\t\t\t
\t\t\t";
        // line 125
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "\t\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "\t\t</div>
    </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Urban Artist";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" />";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t\t<div id=\"header\">\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<h1 id=\"logo-text\"><a href=\"global-template\" title=\"\">UrbanArtist</a></h1>\t\t
\t\t\t\t\t<p id=\"intro\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam. 
\t\t\t\t\t</p>\t
\t\t\t\t\t
\t\t\t\t\t<div  id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li id=\"current\"><a href=\"global-template\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"style.html\">Style Demo</a></li>
\t\t\t\t\t\t\t<li><a href=\"global-template\">Downloads</a></li>
\t\t\t\t\t\t\t<li><a href=\"global-template\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"global-template\">Support</a></li>
\t\t\t\t\t\t\t<li><a href=\"global-template\">About</a></li>\t\t
\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "\t\t\t\t\t\t<h2><a href=\"global-template\"><";
        $this->displayBlock('h2', $context, $blocks);
        echo "</a></h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>";
        // line 45
        $this->displayBlock('h3', $context, $blocks);
        echo "</h3>
\t\t\t\t\t\t<p><a ";
        // line 46
        $this->displayBlock('hrefp1', $context, $blocks);
        echo "> <img ";
        $this->displayBlock('imgp1', $context, $blocks);
        echo " width=\"100\" height=\"120\"  class=\"float-left\" /></a>
\t\t\t\t\t\t";
        // line 47
        $this->displayBlock('par1', $context, $blocks);
        // line 54
        echo "\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t<p>";
        // line 58
        $this->displayBlock('quote', $context, $blocks);
        // line 60
        echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"align-right\"> - ";
        // line 62
        $this->displayBlock('quoteAuthor', $context, $blocks);
        echo "</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t\t<p>";
        // line 65
        $this->displayBlock('par2', $context, $blocks);
        // line 74
        echo "\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t";
    }

    // line 43
    public function block_h2($context, array $blocks = array())
    {
        echo "Lorem Ipsum Dolor Sit Amet";
    }

    // line 45
    public function block_h3($context, array $blocks = array())
    {
        echo "Aliquam Risus Justo";
    }

    // line 46
    public function block_hrefp1($context, array $blocks = array())
    {
        echo "href=\"http://getfirefox.com/\"";
    }

    public function block_imgp1($context, array $blocks = array())
    {
        echo "src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/firefox-gray.jpg"), "html", null, true);
        echo "\" alt=\"firefox\"";
    }

    // line 47
    public function block_par1($context, array $blocks = array())
    {
        echo "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
\t\t\t\t\t\tposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
\t\t\t\t\t\todio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra 
\t\t\t\t\t\tcondimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. 
\t\t\t\t\t\tIn tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
\t\t\t\t\t\tposuere nunc justo tempus leo.";
    }

    // line 58
    public function block_quote($context, array $blocks = array())
    {
        echo "To be yourself in a world that is constantly trying to 
\t\t\t\t\t\tmake you something else is the greatest accomplishment.";
    }

    // line 62
    public function block_quoteAuthor($context, array $blocks = array())
    {
        echo "Ralph Waldo Emerson";
    }

    // line 65
    public function block_par2($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\t\tVestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
\t\t\t\t\t\tpellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
\t\t\t\t\t\tNunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
\t\t\t\t\t\tMorbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
\t\t\t\t\t\ta pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue. 
\t\t\t\t\t\tPraesent sed nibh. Vestibulum bibendum enim ut nisi fringilla accumsan. 
\t\t\t\t\t\tNullam dapibus fermentum nulla. Phasellus in orci vel justo facilisis iaculis. 
\t\t\t\t\t\tQuisque facilisis ornare felis. Curabitur nunc libero, dapibus vel, commodo nec, 
\t\t\t\t\t\tsemper a, massa. Suspendisse potenti. Morbi a nisl. Nunc euismod elit non lectus. ";
    }

    // line 83
    public function block_sidebar($context, array $blocks = array())
    {
        // line 84
        echo "\t\t\t\t\t\t<h3>About</h3>\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"http://getfirefox.com/\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb.jpg"), "html", null, true);
        echo "\" width=\"40\" height=\"40\" alt=\"firefox\" class=\"float-left\" /></a>
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
\t\t\t\t\t\tposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
\t\t\t\t\t\todio, ac blandit ante orci ut diam.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<form id=\"quick-search\" action=\"global-template\" method=\"get\" >
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<label for=\"qsearch\">Search:</label>
\t\t\t\t\t\t<input class=\"tbox\" id=\"qsearch\" type=\"text\" name=\"qsearch\" value=\"Search this site...\" title=\"Start typing and hit ENTER\" />
\t\t\t\t\t\t<input class=\"btn\" alt=\"Search\" type=\"image\" name=\"searchsubmit\" title=\"Search\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/search.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t\t</form>\t
\t\t\t\t\t
\t\t\t\t\t\t<h3>Sidebar Menu</h3>
\t\t\t\t\t\t<ul class=\"sidemenu\">\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"global-template\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"global-template#TemplateInfo\">TemplateInfo</a></li>
\t\t\t\t\t\t\t<li><a href=\"style.html\">Style Demo</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://themeforest.net?ref=ealigam\" title=\"Web Templates\">Web Templates</a></li>
\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Links</h3>
\t\t\t\t\t\t<ul class=\"sidemenu\">
\t\t\t\t\t\t\t<li><a href=\"http://www.psdtuts.com/\">PSDTuts</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://www.alistapart.com\">Alistapart</a></li>\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"http://www.cssremix.com\">CSS Remix</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://www.cssmania.com/\">CSS Mania</a></li>\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
    }

    // line 125
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t\t\t<!-- footer starts here -->
\t\t\t\t<div id=\"footer\">
\t\t\t\t
\t\t\t\t\t<div id=\"footer-left\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t&copy; copyright info here\t&nbsp;
\t\t\t\t\t\tDesign by <a href=\"http://www.styleshout.com/\">styleshout</a> &nbsp;
\t\t\t\t\t\t</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"footer-right\">
\t\t\t\t\t\t<p class=\"align-right\">
\t\t\t\t\t\t<a href=\"global-template\">Home</a> | <a href=\"global-template\">Sitemap</a> | <a href=\"global-template\" class=\"rssfeed\">RSS Feed</a> 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- footer ends here -->
\t\t\t";
    }

    // line 145
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
        return array (  325 => 145,  300 => 125,  275 => 98,  261 => 87,  256 => 84,  253 => 83,  241 => 66,  238 => 65,  232 => 62,  225 => 58,  212 => 47,  199 => 46,  193 => 45,  187 => 43,  181 => 74,  179 => 65,  173 => 62,  169 => 60,  167 => 58,  161 => 54,  159 => 47,  153 => 46,  149 => 45,  143 => 43,  140 => 42,  117 => 19,  114 => 18,  106 => 13,  100 => 12,  93 => 146,  90 => 145,  88 => 125,  80 => 119,  78 => 83,  70 => 77,  68 => 42,  63 => 39,  61 => 18,  53 => 14,  51 => 13,  47 => 12,  34 => 1,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  38 => 4,  33 => 3,);
    }
}
