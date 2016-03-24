<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_776fb38458e4678e5ed74453df4cc8074044f2de13780f3e7f0342ee3f6774b7 extends Twig_Template
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
        $__internal_14d91cd43e82b248ac538f3794ececb068bff1a726df6d828c7032e8c6278186 = $this->env->getExtension("native_profiler");
        $__internal_14d91cd43e82b248ac538f3794ececb068bff1a726df6d828c7032e8c6278186->enter($__internal_14d91cd43e82b248ac538f3794ececb068bff1a726df6d828c7032e8c6278186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_14d91cd43e82b248ac538f3794ececb068bff1a726df6d828c7032e8c6278186->leave($__internal_14d91cd43e82b248ac538f3794ececb068bff1a726df6d828c7032e8c6278186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
