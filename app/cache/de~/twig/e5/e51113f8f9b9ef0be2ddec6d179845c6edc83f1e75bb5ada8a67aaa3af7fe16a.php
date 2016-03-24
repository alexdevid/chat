<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d623db4fcf8cf057be49fc06ffb2b7b6527b217ad1c76a8501dad5a72c7b191f extends Twig_Template
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
        $__internal_3dd6f5d2d98e853b4d1c01c90b005c499e7921e57caa5c2e82b02a9559141bca = $this->env->getExtension("native_profiler");
        $__internal_3dd6f5d2d98e853b4d1c01c90b005c499e7921e57caa5c2e82b02a9559141bca->enter($__internal_3dd6f5d2d98e853b4d1c01c90b005c499e7921e57caa5c2e82b02a9559141bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3dd6f5d2d98e853b4d1c01c90b005c499e7921e57caa5c2e82b02a9559141bca->leave($__internal_3dd6f5d2d98e853b4d1c01c90b005c499e7921e57caa5c2e82b02a9559141bca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
