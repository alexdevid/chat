<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b79946051bd606463d3e56689437d39137f5bd44fb343626955dc873c89373d6 extends Twig_Template
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
        $__internal_5cda5a81c0d59fab8ce2c54eb96426e95b6b7d5e42d7aa4cb551fd44e81c0d82 = $this->env->getExtension("native_profiler");
        $__internal_5cda5a81c0d59fab8ce2c54eb96426e95b6b7d5e42d7aa4cb551fd44e81c0d82->enter($__internal_5cda5a81c0d59fab8ce2c54eb96426e95b6b7d5e42d7aa4cb551fd44e81c0d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5cda5a81c0d59fab8ce2c54eb96426e95b6b7d5e42d7aa4cb551fd44e81c0d82->leave($__internal_5cda5a81c0d59fab8ce2c54eb96426e95b6b7d5e42d7aa4cb551fd44e81c0d82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
