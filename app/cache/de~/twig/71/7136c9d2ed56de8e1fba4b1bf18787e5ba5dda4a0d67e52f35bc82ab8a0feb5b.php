<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_42713da084b11173ea4eae4cb15c7d1de5186948f2b641e20ce150ebdbdcee79 extends Twig_Template
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
        $__internal_608d1c0853ddad4832308d57b4729ea63206187d566ee31adaf50cc642455a57 = $this->env->getExtension("native_profiler");
        $__internal_608d1c0853ddad4832308d57b4729ea63206187d566ee31adaf50cc642455a57->enter($__internal_608d1c0853ddad4832308d57b4729ea63206187d566ee31adaf50cc642455a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_608d1c0853ddad4832308d57b4729ea63206187d566ee31adaf50cc642455a57->leave($__internal_608d1c0853ddad4832308d57b4729ea63206187d566ee31adaf50cc642455a57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
