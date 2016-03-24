<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_99694d90e74013468fd6a2a724385e6a4a1409c0ae6dac645d79065452d4bfb2 extends Twig_Template
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
        $__internal_cf403630c2f9a2abc9629a35c92599a3f838a55d8c5afcf6d3830ec90bfefaf5 = $this->env->getExtension("native_profiler");
        $__internal_cf403630c2f9a2abc9629a35c92599a3f838a55d8c5afcf6d3830ec90bfefaf5->enter($__internal_cf403630c2f9a2abc9629a35c92599a3f838a55d8c5afcf6d3830ec90bfefaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cf403630c2f9a2abc9629a35c92599a3f838a55d8c5afcf6d3830ec90bfefaf5->leave($__internal_cf403630c2f9a2abc9629a35c92599a3f838a55d8c5afcf6d3830ec90bfefaf5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
