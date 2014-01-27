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
\t\t\t";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 157
        echo "\t\t\t
\t\t\t";
        // line 158
        $this->displayBlock('footer', $context, $blocks);
        // line 178
        echo "\t\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
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

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t\t<div id=\"content-wrap\">
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h2><a href=\"global-template\">Lorem Ipsum Dolor Sit Amet</a></h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Aliquam Risus Justo</h3>
\t\t\t\t\t\t<p><a href=\"http://getfirefox.com/\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/firefox-gray.jpg"), "html", null, true);
        echo "\" width=\"100\" height=\"120\" alt=\"firefox\" class=\"float-left\" /></a>
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
\t\t\t\t\t\tposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
\t\t\t\t\t\todio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra 
\t\t\t\t\t\tcondimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. 
\t\t\t\t\t\tIn tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
\t\t\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
\t\t\t\t\t\tposuere nunc justo tempus leo. \t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t<p>To be yourself in a world that is constantly trying to 
\t\t\t\t\t\tmake you something else is the greatest accomplishment.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"align-right\"> - Ralph Waldo Emerson</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\tVestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
\t\t\t\t\t\tpellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
\t\t\t\t\t\tNunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
\t\t\t\t\t\tMorbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
\t\t\t\t\t\ta pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue. 
\t\t\t\t\t\tPraesent sed nibh. Vestibulum bibendum enim ut nisi fringilla accumsan. 
\t\t\t\t\t\tNullam dapibus fermentum nulla. Phasellus in orci vel justo facilisis iaculis. 
\t\t\t\t\t\tQuisque facilisis ornare felis. Curabitur nunc libero, dapibus vel, commodo nec, 
\t\t\t\t\t\tsemper a, massa. Suspendisse potenti. Morbi a nisl. Nunc euismod elit non lectus. \t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- main ends -->\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<!-- sidebar starts -->
\t\t\t\t\t<div id=\"sidebar\">\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 84
        $this->displayBlock('sidebar', $context, $blocks);
        // line 151
        echo "\t\t\t\t\t<!-- sidebar ends -->\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- content-wrap ends-->\t
\t\t\t\t</div>
\t\t\t";
    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        // line 85
        echo "\t\t\t\t\t\t<h3>About</h3>\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"http://getfirefox.com/\"><img src=\"";
        // line 88
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
        // line 99
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
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Sponsors</h3>
\t\t\t\t\t\t<ul class=\"sidemenu\">
\t\t\t\t\t\t<li><a href=\"http://themeforest.net?ref=ealigam\" title=\"Themeforest\">Themeforest <br />
\t\t\t\t\t\t   <span>Site Templates, Web &amp; CMS Themes</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"http://www.4templates.com/?go=228858961\" title=\"4Templates\">4Templates <br />
\t\t\t\t\t\t   <span>Low Cost High-Quality Templates</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"http://store.templatemonster.com?aff=ealigam\" title=\"Templatemonster\">TemplateMonster <br />
\t\t\t\t\t\t   <span>Delivering the Best Templates on the Net!</span>
\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t<li><a href=\"http://graphicriver.net?ref=ealigam\" title=\"Graphic River\">Graphic River <br />
\t\t\t\t\t\t   <span>Awesome Stock Graphics</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"http://www.dreamhost.com/r.cgi?287326|SSHOUT\" title=\"Dremahost\">Dreamhost <br />
\t\t\t\t\t\t   <span>Premium Webhosting. Use the promocode <strong>sshout</strong> and save <strong>50 USD</strong>.</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Wise Words</h3>
\t\t\t\t\t\t<p>&quot;To be yourself in a world that is constantly trying to make you 
\t\t\t\t\t\t  something else is the greatest accomplishment.&quot; </p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"align-right\">- Ralph Waldo Emerson</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Support Styleshout</h3>
\t\t\t\t\t\t<p>If you are interested in supporting my work and would like to contribute, you are
\t\t\t\t\t\twelcome to make a small donation through the 
\t\t\t\t\t\t<a href=\"http://www.styleshout.com/\">donate link</a> on my website - it will 
\t\t\t\t\t\tbe a great help and will surely be appreciated.</p>\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
    }

    // line 158
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

    // line 178
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
        return array (  280 => 178,  255 => 158,  199 => 99,  185 => 88,  180 => 85,  177 => 84,  168 => 151,  166 => 84,  126 => 47,  118 => 41,  115 => 40,  92 => 19,  89 => 18,  81 => 13,  75 => 12,  68 => 179,  65 => 178,  63 => 158,  60 => 157,  58 => 40,  55 => 39,  53 => 18,  45 => 14,  43 => 13,  39 => 12,  26 => 1,);
    }
}
