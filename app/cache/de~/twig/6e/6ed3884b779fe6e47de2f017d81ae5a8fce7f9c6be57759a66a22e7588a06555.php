<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bd0d910ab1af8a6b2659a1a7a10fbdee40a8762a5e138df2d4efa966e6159ff0 extends Twig_Template
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
        $__internal_5b860b769d761ab983f0c76451e7582e72d4bf5b870c4cc35f747ed2c45245b7 = $this->env->getExtension("native_profiler");
        $__internal_5b860b769d761ab983f0c76451e7582e72d4bf5b870c4cc35f747ed2c45245b7->enter($__internal_5b860b769d761ab983f0c76451e7582e72d4bf5b870c4cc35f747ed2c45245b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5b860b769d761ab983f0c76451e7582e72d4bf5b870c4cc35f747ed2c45245b7->leave($__internal_5b860b769d761ab983f0c76451e7582e72d4bf5b870c4cc35f747ed2c45245b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
