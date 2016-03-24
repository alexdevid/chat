<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_32f85fd3fad03d8f527d40012f48801ad29b5ff82760330caeca077e0fb9d06a extends Twig_Template
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
        $__internal_ddcdf825b48a21953c4f205fd2015efca8c0d90e312d72103c5af9a4e58bb47e = $this->env->getExtension("native_profiler");
        $__internal_ddcdf825b48a21953c4f205fd2015efca8c0d90e312d72103c5af9a4e58bb47e->enter($__internal_ddcdf825b48a21953c4f205fd2015efca8c0d90e312d72103c5af9a4e58bb47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ddcdf825b48a21953c4f205fd2015efca8c0d90e312d72103c5af9a4e58bb47e->leave($__internal_ddcdf825b48a21953c4f205fd2015efca8c0d90e312d72103c5af9a4e58bb47e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
