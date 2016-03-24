<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_83e15cd1e7e609678e84436a7152deab83d8fcaaf688d499e943307bce41d3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_436ffc093e0012769e74a3ccdb2718ff9972ddfe21007631c3979565e97483f7 = $this->env->getExtension("native_profiler");
        $__internal_436ffc093e0012769e74a3ccdb2718ff9972ddfe21007631c3979565e97483f7->enter($__internal_436ffc093e0012769e74a3ccdb2718ff9972ddfe21007631c3979565e97483f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436ffc093e0012769e74a3ccdb2718ff9972ddfe21007631c3979565e97483f7->leave($__internal_436ffc093e0012769e74a3ccdb2718ff9972ddfe21007631c3979565e97483f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6eb18839a5a35f9dc87721b5a3e740359059171985ab1b13c8cc10e043b44111 = $this->env->getExtension("native_profiler");
        $__internal_6eb18839a5a35f9dc87721b5a3e740359059171985ab1b13c8cc10e043b44111->enter($__internal_6eb18839a5a35f9dc87721b5a3e740359059171985ab1b13c8cc10e043b44111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6eb18839a5a35f9dc87721b5a3e740359059171985ab1b13c8cc10e043b44111->leave($__internal_6eb18839a5a35f9dc87721b5a3e740359059171985ab1b13c8cc10e043b44111_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1e687206b659cf2eba551faf9cb19b2157aff502532dcf5d2b20cc958bf7851 = $this->env->getExtension("native_profiler");
        $__internal_e1e687206b659cf2eba551faf9cb19b2157aff502532dcf5d2b20cc958bf7851->enter($__internal_e1e687206b659cf2eba551faf9cb19b2157aff502532dcf5d2b20cc958bf7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1e687206b659cf2eba551faf9cb19b2157aff502532dcf5d2b20cc958bf7851->leave($__internal_e1e687206b659cf2eba551faf9cb19b2157aff502532dcf5d2b20cc958bf7851_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b548774c429850f9a6703067cab8f0e73a2952a060bed9c50e48dcbf33d9b71 = $this->env->getExtension("native_profiler");
        $__internal_1b548774c429850f9a6703067cab8f0e73a2952a060bed9c50e48dcbf33d9b71->enter($__internal_1b548774c429850f9a6703067cab8f0e73a2952a060bed9c50e48dcbf33d9b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1b548774c429850f9a6703067cab8f0e73a2952a060bed9c50e48dcbf33d9b71->leave($__internal_1b548774c429850f9a6703067cab8f0e73a2952a060bed9c50e48dcbf33d9b71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
