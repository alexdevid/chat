<?php

/* AppBundle::chat.html.twig */
class __TwigTemplate_811b9ced028d0470a3d76788a161d94fd9f2056f974c88bac8e4c9ecdd2e06da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::chat.html.twig", 1);
        $this->blocks = array(
            'Body' => array($this, 'block_Body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ba497e9773e986cdbff58820e81fdf435fc2497dd4841d381d68aabe3505fcf = $this->env->getExtension("native_profiler");
        $__internal_6ba497e9773e986cdbff58820e81fdf435fc2497dd4841d381d68aabe3505fcf->enter($__internal_6ba497e9773e986cdbff58820e81fdf435fc2497dd4841d381d68aabe3505fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ba497e9773e986cdbff58820e81fdf435fc2497dd4841d381d68aabe3505fcf->leave($__internal_6ba497e9773e986cdbff58820e81fdf435fc2497dd4841d381d68aabe3505fcf_prof);

    }

    // line 2
    public function block_Body($context, array $blocks = array())
    {
        $__internal_f6e617ac92bc432f3e53514700a22fc6be244cd489b1473dfe1074f764217c2f = $this->env->getExtension("native_profiler");
        $__internal_f6e617ac92bc432f3e53514700a22fc6be244cd489b1473dfe1074f764217c2f->enter($__internal_f6e617ac92bc432f3e53514700a22fc6be244cd489b1473dfe1074f764217c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9 chat\">

            </div>
            <div class=\"col-md-3 users\">
                <ul>
                    <li>
                        <i class=\"fa fa-user text-green\"></i> <a href=\"#\">%username%</a>
                    </li>
                    <li>
                        <i class=\"fa fa-user text-green\"></i> <a href=\"#\">%username%</a>
                    </li>
                    <li>
                        <i class=\"fa fa-user text-green\"></i> <a href=\"#\">%username%</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_f6e617ac92bc432f3e53514700a22fc6be244cd489b1473dfe1074f764217c2f->leave($__internal_f6e617ac92bc432f3e53514700a22fc6be244cd489b1473dfe1074f764217c2f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::layout.html.twig' %}*/
/* {% block Body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-9 chat">*/
/* */
/*             </div>*/
/*             <div class="col-md-3 users">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <i class="fa fa-user text-green"></i> <a href="#">%username%</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <i class="fa fa-user text-green"></i> <a href="#">%username%</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <i class="fa fa-user text-green"></i> <a href="#">%username%</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
