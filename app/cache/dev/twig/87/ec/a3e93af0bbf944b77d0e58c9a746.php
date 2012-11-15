<?php

/* BurgeapAdminBundle:Admin:projects.html.twig */
class __TwigTemplate_87eca3e93af0bbf944b77d0e58c9a746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BurgeapAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'burgeapadmin_body' => array($this, 'block_burgeapadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BurgeapAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Tous les projets - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_burgeapadmin_body($context, array $blocks = array())
    {
        // line 7
        echo "<h2>Tous les projets</h2>
";
    }

    public function getTemplateName()
    {
        return "BurgeapAdminBundle:Admin:projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  30 => 4,  27 => 3,);
    }
}
