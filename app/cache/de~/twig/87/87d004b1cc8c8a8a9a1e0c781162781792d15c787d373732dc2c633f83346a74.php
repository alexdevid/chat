<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ac565dd9ab67575fe9019c6b356ccddac8d0384779b577dc2bb14c39411495aa extends Twig_Template
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
        $__internal_b41eeec0d11ef08d3eb8b13518212a1e5832345b7296e5845dbe31b6b48c16c1 = $this->env->getExtension("native_profiler");
        $__internal_b41eeec0d11ef08d3eb8b13518212a1e5832345b7296e5845dbe31b6b48c16c1->enter($__internal_b41eeec0d11ef08d3eb8b13518212a1e5832345b7296e5845dbe31b6b48c16c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b41eeec0d11ef08d3eb8b13518212a1e5832345b7296e5845dbe31b6b48c16c1->leave($__internal_b41eeec0d11ef08d3eb8b13518212a1e5832345b7296e5845dbe31b6b48c16c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
