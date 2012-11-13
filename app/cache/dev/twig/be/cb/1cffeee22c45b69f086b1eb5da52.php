<?php

/* BurgeapAdminBundle:Default:index.html.twig */
class __TwigTemplate_becb1cffeee22c45b69f086b1eb5da52 extends Twig_Template
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
        echo "<html>
    <body>
        Page d'acceuil du module admin ! Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BurgeapAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  17 => 1,);
    }
}
