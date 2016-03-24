<?php

/* PropelBundle:Panel:explain.html.twig */
class __TwigTemplate_57b1b3e7f429efc5dcc5c94c3c5ef05384a0468d09302abe7b9c53e1a4959c31 extends Twig_Template
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
        $__internal_9fae3ac38b431a530c300b987b4bf353e662c1235b8d62e78f7659294dc75256 = $this->env->getExtension("native_profiler");
        $__internal_9fae3ac38b431a530c300b987b4bf353e662c1235b8d62e78f7659294dc75256->enter($__internal_9fae3ac38b431a530c300b987b4bf353e662c1235b8d62e78f7659294dc75256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PropelBundle:Panel:explain.html.twig"));

        // line 1
        echo "<h2>Explanation</h2>

<table>
    <tr>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 6
            echo "            <th>";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "    <tr>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "            <td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
        
        $__internal_9fae3ac38b431a530c300b987b4bf353e662c1235b8d62e78f7659294dc75256->leave($__internal_9fae3ac38b431a530c300b987b4bf353e662c1235b8d62e78f7659294dc75256_prof);

    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  64 => 14,  55 => 12,  51 => 11,  48 => 10,  44 => 9,  41 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <h2>Explanation</h2>*/
/* */
/* <table>*/
/*     <tr>*/
/*         {% for label in data[0]|keys %}*/
/*             <th>{{ label }}</th>*/
/*         {% endfor %}*/
/*     </tr>*/
/*     {% for row in data %}*/
/*     <tr>*/
/*         {% for item in row %}*/
/*             <td>{{ item }}</td>*/
/*         {% endfor %}*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
