<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_934cec79b8e9588c8de4e09996c5f494c29d26a74bc938cb2c0c8622f6e56deb extends Twig_Template
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
        $__internal_57022a572e31e6cc5741e1071257c1bd68f3e3ccec5005d6ef57052d5704dc18 = $this->env->getExtension("native_profiler");
        $__internal_57022a572e31e6cc5741e1071257c1bd68f3e3ccec5005d6ef57052d5704dc18->enter($__internal_57022a572e31e6cc5741e1071257c1bd68f3e3ccec5005d6ef57052d5704dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_57022a572e31e6cc5741e1071257c1bd68f3e3ccec5005d6ef57052d5704dc18->leave($__internal_57022a572e31e6cc5741e1071257c1bd68f3e3ccec5005d6ef57052d5704dc18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
