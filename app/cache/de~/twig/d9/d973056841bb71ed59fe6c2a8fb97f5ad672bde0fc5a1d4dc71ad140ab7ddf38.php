<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b86304af95254273aa49e19df0a60938780ef32ae8a2fc24b3d8ec5ee15ddd8f extends Twig_Template
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
        $__internal_4ce3105ce5218aa3123c27b466c8e3ad58432f3745d102220744c48214900d0d = $this->env->getExtension("native_profiler");
        $__internal_4ce3105ce5218aa3123c27b466c8e3ad58432f3745d102220744c48214900d0d->enter($__internal_4ce3105ce5218aa3123c27b466c8e3ad58432f3745d102220744c48214900d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4ce3105ce5218aa3123c27b466c8e3ad58432f3745d102220744c48214900d0d->leave($__internal_4ce3105ce5218aa3123c27b466c8e3ad58432f3745d102220744c48214900d0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
