<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_01f935bfaf80f30ff6757acead2bc8033306c21af339af8a7647238f154cd677 extends Twig_Template
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
        $__internal_ed2769d5b24da8abc250fb1f700ac66b8fc1421b17ab509bc9347e95db3465d4 = $this->env->getExtension("native_profiler");
        $__internal_ed2769d5b24da8abc250fb1f700ac66b8fc1421b17ab509bc9347e95db3465d4->enter($__internal_ed2769d5b24da8abc250fb1f700ac66b8fc1421b17ab509bc9347e95db3465d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed2769d5b24da8abc250fb1f700ac66b8fc1421b17ab509bc9347e95db3465d4->leave($__internal_ed2769d5b24da8abc250fb1f700ac66b8fc1421b17ab509bc9347e95db3465d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
