<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_68c5739565d16ea1ac00a2952e23a91edf0eb313a1f0d161acb693f45cb6fdc1 extends Twig_Template
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
        $__internal_aa90b45162f1485c6bf39212ef4ebfca5d8a06e7b96b6bcab5be851156c5d663 = $this->env->getExtension("native_profiler");
        $__internal_aa90b45162f1485c6bf39212ef4ebfca5d8a06e7b96b6bcab5be851156c5d663->enter($__internal_aa90b45162f1485c6bf39212ef4ebfca5d8a06e7b96b6bcab5be851156c5d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aa90b45162f1485c6bf39212ef4ebfca5d8a06e7b96b6bcab5be851156c5d663->leave($__internal_aa90b45162f1485c6bf39212ef4ebfca5d8a06e7b96b6bcab5be851156c5d663_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
