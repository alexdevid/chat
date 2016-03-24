<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_44197375fca176a03b653d960a2b0f8e20be158549db23d4f0dca93fd28f09a9 extends Twig_Template
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
        $__internal_cec8f8671f508ee9310131896ae973eb4a65f2de8b05696afbf64732ee38124e = $this->env->getExtension("native_profiler");
        $__internal_cec8f8671f508ee9310131896ae973eb4a65f2de8b05696afbf64732ee38124e->enter($__internal_cec8f8671f508ee9310131896ae973eb4a65f2de8b05696afbf64732ee38124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cec8f8671f508ee9310131896ae973eb4a65f2de8b05696afbf64732ee38124e->leave($__internal_cec8f8671f508ee9310131896ae973eb4a65f2de8b05696afbf64732ee38124e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
