<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5d0d140b9f066134a8bfc0148448cbfd94efee8509a74df075cd46353ed315d2 extends Twig_Template
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
        $__internal_7a3f6c58ae967c9ad713c0ca1c11e604c44bc5c753548dcfc3f5a2cda2fa673c = $this->env->getExtension("native_profiler");
        $__internal_7a3f6c58ae967c9ad713c0ca1c11e604c44bc5c753548dcfc3f5a2cda2fa673c->enter($__internal_7a3f6c58ae967c9ad713c0ca1c11e604c44bc5c753548dcfc3f5a2cda2fa673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a3f6c58ae967c9ad713c0ca1c11e604c44bc5c753548dcfc3f5a2cda2fa673c->leave($__internal_7a3f6c58ae967c9ad713c0ca1c11e604c44bc5c753548dcfc3f5a2cda2fa673c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
