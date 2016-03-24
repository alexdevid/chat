<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a3e56efc3f2d383d1e876e09d00e456b0601c09f765f96cd7e6396ff0b8861be extends Twig_Template
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
        $__internal_81ee497a3d9eb24720a95a4119a1d554d97df3dbea21655a90243fc15f19702d = $this->env->getExtension("native_profiler");
        $__internal_81ee497a3d9eb24720a95a4119a1d554d97df3dbea21655a90243fc15f19702d->enter($__internal_81ee497a3d9eb24720a95a4119a1d554d97df3dbea21655a90243fc15f19702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81ee497a3d9eb24720a95a4119a1d554d97df3dbea21655a90243fc15f19702d->leave($__internal_81ee497a3d9eb24720a95a4119a1d554d97df3dbea21655a90243fc15f19702d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
