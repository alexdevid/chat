<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9b9ac7258ff0bdbb1253b3ccefb0e61534f6ed458e0d0701ceda8a13007b5082 extends Twig_Template
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
        $__internal_b06acc236b6093362e296b3b1fefcef10e7d871984b3c03b6114e07e54072ded = $this->env->getExtension("native_profiler");
        $__internal_b06acc236b6093362e296b3b1fefcef10e7d871984b3c03b6114e07e54072ded->enter($__internal_b06acc236b6093362e296b3b1fefcef10e7d871984b3c03b6114e07e54072ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b06acc236b6093362e296b3b1fefcef10e7d871984b3c03b6114e07e54072ded->leave($__internal_b06acc236b6093362e296b3b1fefcef10e7d871984b3c03b6114e07e54072ded_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
