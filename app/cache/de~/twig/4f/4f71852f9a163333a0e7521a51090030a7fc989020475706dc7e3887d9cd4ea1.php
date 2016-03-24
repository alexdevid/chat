<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bdf64a824e663417dd2313d0a8018e9981466c4a41c28025411df62074b942f5 extends Twig_Template
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
        $__internal_f247ac25b0de1006c06bd45b3aea4bed063adf6d2215240257e49141ad910eea = $this->env->getExtension("native_profiler");
        $__internal_f247ac25b0de1006c06bd45b3aea4bed063adf6d2215240257e49141ad910eea->enter($__internal_f247ac25b0de1006c06bd45b3aea4bed063adf6d2215240257e49141ad910eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f247ac25b0de1006c06bd45b3aea4bed063adf6d2215240257e49141ad910eea->leave($__internal_f247ac25b0de1006c06bd45b3aea4bed063adf6d2215240257e49141ad910eea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
