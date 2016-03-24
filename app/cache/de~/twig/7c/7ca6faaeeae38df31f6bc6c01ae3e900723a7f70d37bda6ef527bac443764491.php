<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_287c1af13b302a894b300568ea3e44512c657b54a11c6cf5fb0d74b67b6a45b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6df8e2a13e20a8154aef57fba2b2b5a69e555b715d4c14837442a1d999af6c = $this->env->getExtension("native_profiler");
        $__internal_ef6df8e2a13e20a8154aef57fba2b2b5a69e555b715d4c14837442a1d999af6c->enter($__internal_ef6df8e2a13e20a8154aef57fba2b2b5a69e555b715d4c14837442a1d999af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef6df8e2a13e20a8154aef57fba2b2b5a69e555b715d4c14837442a1d999af6c->leave($__internal_ef6df8e2a13e20a8154aef57fba2b2b5a69e555b715d4c14837442a1d999af6c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ee0d248c8da778d856c879c9ff1a4521164249ed24fdfbcba0a12744fdbdeff = $this->env->getExtension("native_profiler");
        $__internal_8ee0d248c8da778d856c879c9ff1a4521164249ed24fdfbcba0a12744fdbdeff->enter($__internal_8ee0d248c8da778d856c879c9ff1a4521164249ed24fdfbcba0a12744fdbdeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ee0d248c8da778d856c879c9ff1a4521164249ed24fdfbcba0a12744fdbdeff->leave($__internal_8ee0d248c8da778d856c879c9ff1a4521164249ed24fdfbcba0a12744fdbdeff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
