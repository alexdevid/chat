<?php

/* PropelBundle:Panel:configuration.html.twig */
class __TwigTemplate_4c4f9d994cd752b9f35bfbd56dc885c2592e6a005edb8cb69b62365fae4ecd89 extends Twig_Template
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
        $__internal_7af514c84b2a132daa3e13a052d35a797b956534b5846eadb87421e383a7fae7 = $this->env->getExtension("native_profiler");
        $__internal_7af514c84b2a132daa3e13a052d35a797b956534b5846eadb87421e383a7fae7->enter($__internal_7af514c84b2a132daa3e13a052d35a797b956534b5846eadb87421e383a7fae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PropelBundle:Panel:configuration.html.twig"));

        // line 1
        echo "<h2>Propel configuration</h2>

<table summary=\"Current Propel configuration\">
    <thead>
    </thead>
    <tbody>
        <tr>
            <th>Propel version</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["propel_version"]) ? $context["propel_version"] : $this->getContext($context, "propel_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Default connection</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "runtime", array()), "defaultConnection", array()), "html", null, true);
        echo "</td>
        <tr>
            <th>Logging</th>
            <td>";
        // line 16
        echo (((isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging"))) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </tbody>
</table>

<h2>Propel connections</h2>

<table summary=\"Current Propel connections\">
    <thead>
        <tr>
            <th>Connection name</th>
            <th colspan=\"2\" style=\"text-align: center;\">Configuration parameters</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "database", array()), "connections", array()));
        foreach ($context['_seq'] as $context["name"] => $context["config"]) {
            // line 32
            echo "        <tr>
            <th rowspan=\"5\" style=\"vertical-align: top;\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
            </th>
            <th>Adapter</th>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "adapter", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>DSN</th>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "dsn", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "classname", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Options</th>
            <td>
                <ul>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["config"], "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 52
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </ul>
            </td>
        </tr>
        <tr>
            <th>Attributes</th>
            <td>
                <ul>
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["config"], "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 62
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
</table>
";
        
        $__internal_7af514c84b2a132daa3e13a052d35a797b956534b5846eadb87421e383a7fae7->leave($__internal_7af514c84b2a132daa3e13a052d35a797b956534b5846eadb87421e383a7fae7_prof);

    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 68,  139 => 64,  128 => 62,  124 => 61,  115 => 54,  104 => 52,  100 => 51,  91 => 45,  84 => 41,  77 => 37,  71 => 34,  67 => 32,  63 => 31,  45 => 16,  39 => 13,  32 => 9,  22 => 1,);
    }
}
/* <h2>Propel configuration</h2>*/
/* */
/* <table summary="Current Propel configuration">*/
/*     <thead>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr>*/
/*             <th>Propel version</th>*/
/*             <td>{{ propel_version }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Default connection</th>*/
/*             <td>{{ configuration.runtime.defaultConnection }}</td>*/
/*         <tr>*/
/*             <th>Logging</th>*/
/*             <td>{{ logging ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* <h2>Propel connections</h2>*/
/* */
/* <table summary="Current Propel connections">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Connection name</th>*/
/*             <th colspan="2" style="text-align: center;">Configuration parameters</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for name, config in configuration.database.connections %}*/
/*         <tr>*/
/*             <th rowspan="5" style="vertical-align: top;">*/
/*                 {{ name }}*/
/*             </th>*/
/*             <th>Adapter</th>*/
/*             <td>{{ config.adapter }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>DSN</th>*/
/*             <td>{{ config.dsn }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Class</th>*/
/*             <td>{{ config.classname }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Options</th>*/
/*             <td>*/
/*                 <ul>*/
/*                     {% for key, value in config.options %}*/
/*                     <li>{{ key }} : {{ value }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Attributes</th>*/
/*             <td>*/
/*                 <ul>*/
/*                     {% for key, value in config.attributes %}*/
/*                     <li>{{ key }} : {{ value }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
