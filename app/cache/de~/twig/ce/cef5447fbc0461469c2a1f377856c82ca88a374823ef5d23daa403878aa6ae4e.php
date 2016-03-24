<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5c8e7dbe57bd94b619c24a698bbb4a960803b3a5c98f8fae2a1d1d77ea8d2712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5593087faa659518d2e29dd3f2c25246efeeaefd0f9ab1302bf25230813aa3 = $this->env->getExtension("native_profiler");
        $__internal_ad5593087faa659518d2e29dd3f2c25246efeeaefd0f9ab1302bf25230813aa3->enter($__internal_ad5593087faa659518d2e29dd3f2c25246efeeaefd0f9ab1302bf25230813aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5593087faa659518d2e29dd3f2c25246efeeaefd0f9ab1302bf25230813aa3->leave($__internal_ad5593087faa659518d2e29dd3f2c25246efeeaefd0f9ab1302bf25230813aa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7281e02aacc6c77237887d29851c3dab2a454640b522154b42725e5f3de5e452 = $this->env->getExtension("native_profiler");
        $__internal_7281e02aacc6c77237887d29851c3dab2a454640b522154b42725e5f3de5e452->enter($__internal_7281e02aacc6c77237887d29851c3dab2a454640b522154b42725e5f3de5e452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7281e02aacc6c77237887d29851c3dab2a454640b522154b42725e5f3de5e452->leave($__internal_7281e02aacc6c77237887d29851c3dab2a454640b522154b42725e5f3de5e452_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e05a7531f353f2d933a65c95ef6c184e37783693afb8493351a76ff57b2aaaab = $this->env->getExtension("native_profiler");
        $__internal_e05a7531f353f2d933a65c95ef6c184e37783693afb8493351a76ff57b2aaaab->enter($__internal_e05a7531f353f2d933a65c95ef6c184e37783693afb8493351a76ff57b2aaaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e05a7531f353f2d933a65c95ef6c184e37783693afb8493351a76ff57b2aaaab->leave($__internal_e05a7531f353f2d933a65c95ef6c184e37783693afb8493351a76ff57b2aaaab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a42e09a0cbc155182d5ac94439fbcb67c565021ce31e2ba290658e8f09b074e7 = $this->env->getExtension("native_profiler");
        $__internal_a42e09a0cbc155182d5ac94439fbcb67c565021ce31e2ba290658e8f09b074e7->enter($__internal_a42e09a0cbc155182d5ac94439fbcb67c565021ce31e2ba290658e8f09b074e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_a42e09a0cbc155182d5ac94439fbcb67c565021ce31e2ba290658e8f09b074e7->leave($__internal_a42e09a0cbc155182d5ac94439fbcb67c565021ce31e2ba290658e8f09b074e7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab9a61a62e9a7b75fc14a90164cc04a9607db6ca01e88c75b2fb07b06f09bd58 = $this->env->getExtension("native_profiler");
        $__internal_ab9a61a62e9a7b75fc14a90164cc04a9607db6ca01e88c75b2fb07b06f09bd58->enter($__internal_ab9a61a62e9a7b75fc14a90164cc04a9607db6ca01e88c75b2fb07b06f09bd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ab9a61a62e9a7b75fc14a90164cc04a9607db6ca01e88c75b2fb07b06f09bd58->leave($__internal_ab9a61a62e9a7b75fc14a90164cc04a9607db6ca01e88c75b2fb07b06f09bd58_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
