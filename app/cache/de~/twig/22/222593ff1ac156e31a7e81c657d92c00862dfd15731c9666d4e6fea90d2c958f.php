<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d479229fcf8ea55116628efc45160f53c78b3b1c0d070a0f2fabc9f86e25219a extends Twig_Template
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
        $__internal_d6a94b29fa1a35ce09ea66e648247213c9d77c0a0694d4154b6d51829eb33527 = $this->env->getExtension("native_profiler");
        $__internal_d6a94b29fa1a35ce09ea66e648247213c9d77c0a0694d4154b6d51829eb33527->enter($__internal_d6a94b29fa1a35ce09ea66e648247213c9d77c0a0694d4154b6d51829eb33527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d6a94b29fa1a35ce09ea66e648247213c9d77c0a0694d4154b6d51829eb33527->leave($__internal_d6a94b29fa1a35ce09ea66e648247213c9d77c0a0694d4154b6d51829eb33527_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
