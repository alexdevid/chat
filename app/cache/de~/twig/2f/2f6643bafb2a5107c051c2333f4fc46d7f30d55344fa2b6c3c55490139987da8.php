<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_50c35667a0351abb3ad60b84ff58b52b5ebbca687f4a6a0cf9acb75f7b856b13 extends Twig_Template
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
        $__internal_c9c42dd48e76cef1379817d7e9455369306738947a680fcef83e3f7734eed7ff = $this->env->getExtension("native_profiler");
        $__internal_c9c42dd48e76cef1379817d7e9455369306738947a680fcef83e3f7734eed7ff->enter($__internal_c9c42dd48e76cef1379817d7e9455369306738947a680fcef83e3f7734eed7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:steps.html.twig"));

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($context["i"] == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($context["i"] != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        
        $__internal_c9c42dd48e76cef1379817d7e9455369306738947a680fcef83e3f7734eed7ff->leave($__internal_c9c42dd48e76cef1379817d7e9455369306738947a680fcef83e3f7734eed7ff_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="symfony-block-steps">*/
/*     {% for i in 1..count %}*/
/* */
/*       {% if i == index + 1 %}*/
/*           <span class="selected">Step {{ i }}</span>*/
/*       {% else %}*/
/*           <span>Step {{ i }}</span>*/
/*       {% endif %}*/
/* */
/*       {% if i != count %}*/
/*         &gt;*/
/*       {% endif %}*/
/*     {% endfor %}*/
/* </div>*/
/* */
