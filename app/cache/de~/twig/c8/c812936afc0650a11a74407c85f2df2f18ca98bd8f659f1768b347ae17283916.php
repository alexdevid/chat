<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_33ac4081673d6993213686f24fa1a35d4775f492a11945e738778d24f5841c44 extends Twig_Template
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
        $__internal_ee1c8e0dd692ab6d14e1e85f308ada3f81e6c7b6f9c314001658d8977cbbd1ad = $this->env->getExtension("native_profiler");
        $__internal_ee1c8e0dd692ab6d14e1e85f308ada3f81e6c7b6f9c314001658d8977cbbd1ad->enter($__internal_ee1c8e0dd692ab6d14e1e85f308ada3f81e6c7b6f9c314001658d8977cbbd1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ee1c8e0dd692ab6d14e1e85f308ada3f81e6c7b6f9c314001658d8977cbbd1ad->leave($__internal_ee1c8e0dd692ab6d14e1e85f308ada3f81e6c7b6f9c314001658d8977cbbd1ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
