<?php

/* ::layout.html.twig */
class __TwigTemplate_d7781a0fdbc12ffe296034fab76968ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        
        <div class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">
                            <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("burgeap_admin_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("burgeap_admin_all_projects"), "html", null, true);
        echo "\">Tous les projets</a></li>
                            <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("burgeap_admin_current_projects"), "html", null, true);
        echo "\">Projets en cours</a></li>
                            <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("burgeap_admin_deadlines"), "html", null, true);
        echo "\">Echéances</a></li>
                            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("burgeap_admin_calendar"), "html", null, true);
        echo "\">Calendrier</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav pull-right\">
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"container-fluid\">
            <div id=\"content\" class=\"span9\">
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </div>
        </div>
        
        <!-- Javascript, placed at the end so that the page loads faster -->
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion de projet";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style-admin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  126 => 49,  123 => 48,  119 => 43,  116 => 42,  110 => 9,  105 => 8,  102 => 7,  96 => 6,  91 => 52,  89 => 48,  83 => 44,  81 => 42,  64 => 28,  60 => 27,  56 => 26,  52 => 25,  48 => 24,  33 => 11,  31 => 7,  27 => 6,  21 => 2,);
    }
}
