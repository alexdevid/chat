<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c7d11bfe8cff0c59946bb5712d2d47fb3e80176f46913211dd280fe54321354a extends Twig_Template
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
        $__internal_a50962ff8d70f75cf9e34f1d9483834eb1cc18655acc82497c1ce104819bff39 = $this->env->getExtension("native_profiler");
        $__internal_a50962ff8d70f75cf9e34f1d9483834eb1cc18655acc82497c1ce104819bff39->enter($__internal_a50962ff8d70f75cf9e34f1d9483834eb1cc18655acc82497c1ce104819bff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a50962ff8d70f75cf9e34f1d9483834eb1cc18655acc82497c1ce104819bff39->leave($__internal_a50962ff8d70f75cf9e34f1d9483834eb1cc18655acc82497c1ce104819bff39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
