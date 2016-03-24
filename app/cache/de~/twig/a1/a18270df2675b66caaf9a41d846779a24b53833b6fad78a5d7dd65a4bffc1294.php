<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9337d4a26b9ce49680e39cc32caa9e6ec63e65af9139d6ea8e8c197e6b8e170c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_127b4e2a292fda5668972dc06d4021f2901fe4e71b48d5536efec59bbeb4a279 = $this->env->getExtension("native_profiler");
        $__internal_127b4e2a292fda5668972dc06d4021f2901fe4e71b48d5536efec59bbeb4a279->enter($__internal_127b4e2a292fda5668972dc06d4021f2901fe4e71b48d5536efec59bbeb4a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127b4e2a292fda5668972dc06d4021f2901fe4e71b48d5536efec59bbeb4a279->leave($__internal_127b4e2a292fda5668972dc06d4021f2901fe4e71b48d5536efec59bbeb4a279_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fe730086abecad24caa1a1a5f6252929f126ffdaacc5c644a510430915e050f = $this->env->getExtension("native_profiler");
        $__internal_3fe730086abecad24caa1a1a5f6252929f126ffdaacc5c644a510430915e050f->enter($__internal_3fe730086abecad24caa1a1a5f6252929f126ffdaacc5c644a510430915e050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fe730086abecad24caa1a1a5f6252929f126ffdaacc5c644a510430915e050f->leave($__internal_3fe730086abecad24caa1a1a5f6252929f126ffdaacc5c644a510430915e050f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44b54a648515a5bf169210ccc44bac6b8fc0f5c651bd2d5823f89d6543014291 = $this->env->getExtension("native_profiler");
        $__internal_44b54a648515a5bf169210ccc44bac6b8fc0f5c651bd2d5823f89d6543014291->enter($__internal_44b54a648515a5bf169210ccc44bac6b8fc0f5c651bd2d5823f89d6543014291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44b54a648515a5bf169210ccc44bac6b8fc0f5c651bd2d5823f89d6543014291->leave($__internal_44b54a648515a5bf169210ccc44bac6b8fc0f5c651bd2d5823f89d6543014291_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_865e8fbe016fa3f9f9bceab87d358c65aed5d33df540c4b381437170a850f49e = $this->env->getExtension("native_profiler");
        $__internal_865e8fbe016fa3f9f9bceab87d358c65aed5d33df540c4b381437170a850f49e->enter($__internal_865e8fbe016fa3f9f9bceab87d358c65aed5d33df540c4b381437170a850f49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_865e8fbe016fa3f9f9bceab87d358c65aed5d33df540c4b381437170a850f49e->leave($__internal_865e8fbe016fa3f9f9bceab87d358c65aed5d33df540c4b381437170a850f49e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
