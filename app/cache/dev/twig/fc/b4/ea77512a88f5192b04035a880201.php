<?php

/* BurgeapAdminBundle:Admin:menu.html.twig */
class __TwigTemplate_fcb4ea77512a88f5192b04035a880201 extends Twig_Template
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
        // line 2
        echo "
<ul>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["id"] => $context["titre"]) {
            // line 5
            echo "        <li><a href=\"";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "titre"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['titre'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "BurgeapAdminBundle:Admin:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  25 => 5,  17 => 2,  132 => 61,  129 => 60,  126 => 59,  122 => 50,  119 => 49,  113 => 9,  108 => 8,  105 => 7,  99 => 6,  94 => 63,  92 => 59,  82 => 51,  80 => 49,  76 => 47,  74 => 46,  70 => 44,  67 => 43,  33 => 11,  31 => 7,  27 => 6,  21 => 4,);
    }
}
