<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6ceb465fb496a736fc6b0a8e9f06c73921c53c006ca6bfae75f93fc79c869eea extends Twig_Template
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
        $__internal_c58059120964670f48a9c353d049061ada2b5250acff9e4bd0a349f1b4423e23 = $this->env->getExtension("native_profiler");
        $__internal_c58059120964670f48a9c353d049061ada2b5250acff9e4bd0a349f1b4423e23->enter($__internal_c58059120964670f48a9c353d049061ada2b5250acff9e4bd0a349f1b4423e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c58059120964670f48a9c353d049061ada2b5250acff9e4bd0a349f1b4423e23->leave($__internal_c58059120964670f48a9c353d049061ada2b5250acff9e4bd0a349f1b4423e23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
