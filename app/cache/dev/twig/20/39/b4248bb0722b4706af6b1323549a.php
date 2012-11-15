<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2039b4248bb0722b4706af6b1323549a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  113 => 48,  111 => 47,  107 => 45,  104 => 42,  99 => 33,  91 => 8,  88 => 7,  82 => 6,  77 => 50,  75 => 42,  66 => 35,  64 => 33,  60 => 31,  58 => 30,  54 => 28,  51 => 27,  33 => 11,  21 => 2,  44 => 8,  31 => 7,  28 => 2,  40 => 8,  37 => 5,  30 => 4,  27 => 3,);
    }
}
