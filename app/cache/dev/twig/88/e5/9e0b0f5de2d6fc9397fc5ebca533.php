<?php

/* BurgeapAdminBundle::layout.html.twig */
class __TwigTemplate_88e59e0b0f5de2d6fc9397fc5ebca533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'burgeapadmin_body' => array($this, 'block_burgeapadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - AdminBundle";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('burgeapadmin_body', $context, $blocks);
    }

    public function block_burgeapadmin_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BurgeapAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  38 => 4,  35 => 3,  28 => 2,);
    }
}
