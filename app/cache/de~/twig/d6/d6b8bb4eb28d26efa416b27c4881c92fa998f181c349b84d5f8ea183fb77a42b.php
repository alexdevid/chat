<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d78530600104d51459f09ab281c866fb0e1075c099c846610180c1007f07073f extends Twig_Template
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
        $__internal_cd8944de3f695e318953ef0c69b9bfb7cacd3a6308283864427d590b9015fafc = $this->env->getExtension("native_profiler");
        $__internal_cd8944de3f695e318953ef0c69b9bfb7cacd3a6308283864427d590b9015fafc->enter($__internal_cd8944de3f695e318953ef0c69b9bfb7cacd3a6308283864427d590b9015fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd8944de3f695e318953ef0c69b9bfb7cacd3a6308283864427d590b9015fafc->leave($__internal_cd8944de3f695e318953ef0c69b9bfb7cacd3a6308283864427d590b9015fafc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
