<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7edfe24db24318c615c74cf9e055b86e23bedcdb360bfa01ebeae877fd1449b5 extends Twig_Template
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
        $__internal_95cac79fa2c2cd356535838be8ced7999782977c598c3a8777d5ed59048ad621 = $this->env->getExtension("native_profiler");
        $__internal_95cac79fa2c2cd356535838be8ced7999782977c598c3a8777d5ed59048ad621->enter($__internal_95cac79fa2c2cd356535838be8ced7999782977c598c3a8777d5ed59048ad621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95cac79fa2c2cd356535838be8ced7999782977c598c3a8777d5ed59048ad621->leave($__internal_95cac79fa2c2cd356535838be8ced7999782977c598c3a8777d5ed59048ad621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
