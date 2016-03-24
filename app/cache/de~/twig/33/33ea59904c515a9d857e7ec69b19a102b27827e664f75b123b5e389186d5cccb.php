<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_be26a4aa07eca50f056d27cfa7b6013242fa70b1d112b0e0b70542c7399809a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9222a06e1c4e70bfae7df59983ac4d57bc645293b4c0ee769806783af30b1c12 = $this->env->getExtension("native_profiler");
        $__internal_9222a06e1c4e70bfae7df59983ac4d57bc645293b4c0ee769806783af30b1c12->enter($__internal_9222a06e1c4e70bfae7df59983ac4d57bc645293b4c0ee769806783af30b1c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9222a06e1c4e70bfae7df59983ac4d57bc645293b4c0ee769806783af30b1c12->leave($__internal_9222a06e1c4e70bfae7df59983ac4d57bc645293b4c0ee769806783af30b1c12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ed2e6ce630fbcc5eb74c8c98a9cf5d08a4c22e7c4eac43bdcfcf524484b3030 = $this->env->getExtension("native_profiler");
        $__internal_1ed2e6ce630fbcc5eb74c8c98a9cf5d08a4c22e7c4eac43bdcfcf524484b3030->enter($__internal_1ed2e6ce630fbcc5eb74c8c98a9cf5d08a4c22e7c4eac43bdcfcf524484b3030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1ed2e6ce630fbcc5eb74c8c98a9cf5d08a4c22e7c4eac43bdcfcf524484b3030->leave($__internal_1ed2e6ce630fbcc5eb74c8c98a9cf5d08a4c22e7c4eac43bdcfcf524484b3030_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cffc2eb199e8a27a5a2e7708b1abcc46bdcd402e231dda185bec6b4512c91fa2 = $this->env->getExtension("native_profiler");
        $__internal_cffc2eb199e8a27a5a2e7708b1abcc46bdcd402e231dda185bec6b4512c91fa2->enter($__internal_cffc2eb199e8a27a5a2e7708b1abcc46bdcd402e231dda185bec6b4512c91fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cffc2eb199e8a27a5a2e7708b1abcc46bdcd402e231dda185bec6b4512c91fa2->leave($__internal_cffc2eb199e8a27a5a2e7708b1abcc46bdcd402e231dda185bec6b4512c91fa2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
