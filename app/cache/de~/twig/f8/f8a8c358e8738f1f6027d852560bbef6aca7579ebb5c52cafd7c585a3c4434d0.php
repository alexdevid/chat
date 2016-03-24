<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c933a99cd90849d421bd1f295bd82ded984bdff4ded6124845de8d4d8a1d7978 extends Twig_Template
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
        $__internal_1fded1b353da8fb74999bd618d4468a7eae9230ea200f5749c7e835508e0f8ce = $this->env->getExtension("native_profiler");
        $__internal_1fded1b353da8fb74999bd618d4468a7eae9230ea200f5749c7e835508e0f8ce->enter($__internal_1fded1b353da8fb74999bd618d4468a7eae9230ea200f5749c7e835508e0f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1fded1b353da8fb74999bd618d4468a7eae9230ea200f5749c7e835508e0f8ce->leave($__internal_1fded1b353da8fb74999bd618d4468a7eae9230ea200f5749c7e835508e0f8ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
