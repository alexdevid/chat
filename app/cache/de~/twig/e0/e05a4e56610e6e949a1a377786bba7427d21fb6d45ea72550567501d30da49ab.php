<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f29e5adf05df39de183a2768b2b7e6caf292cba09cb649c2c3c864087378d9c4 extends Twig_Template
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
        $__internal_99e7a4c5b15e1bc7acf17693d88f73ba393d48649ddbf00c460dbf21f1c52d43 = $this->env->getExtension("native_profiler");
        $__internal_99e7a4c5b15e1bc7acf17693d88f73ba393d48649ddbf00c460dbf21f1c52d43->enter($__internal_99e7a4c5b15e1bc7acf17693d88f73ba393d48649ddbf00c460dbf21f1c52d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_99e7a4c5b15e1bc7acf17693d88f73ba393d48649ddbf00c460dbf21f1c52d43->leave($__internal_99e7a4c5b15e1bc7acf17693d88f73ba393d48649ddbf00c460dbf21f1c52d43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
