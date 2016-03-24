<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_983f91f02a91047bb8d6c1d33362200fa5dc794b5d7a32f738d9a51d84291f17 extends Twig_Template
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
        $__internal_c9e6dfbde7a217ca2279802b104a78078de95206ad278376568b3bc062cf1319 = $this->env->getExtension("native_profiler");
        $__internal_c9e6dfbde7a217ca2279802b104a78078de95206ad278376568b3bc062cf1319->enter($__internal_c9e6dfbde7a217ca2279802b104a78078de95206ad278376568b3bc062cf1319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c9e6dfbde7a217ca2279802b104a78078de95206ad278376568b3bc062cf1319->leave($__internal_c9e6dfbde7a217ca2279802b104a78078de95206ad278376568b3bc062cf1319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
