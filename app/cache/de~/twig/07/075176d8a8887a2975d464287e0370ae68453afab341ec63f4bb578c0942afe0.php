<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8fa9219ba601437d905ba1eb6956b419bce28abadbc962eb95794c7bd1fe0e88 extends Twig_Template
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
        $__internal_c1a095e8e9087edecc7b64595534ce0e801bc98816bb596ae923f70c6ef3bc3f = $this->env->getExtension("native_profiler");
        $__internal_c1a095e8e9087edecc7b64595534ce0e801bc98816bb596ae923f70c6ef3bc3f->enter($__internal_c1a095e8e9087edecc7b64595534ce0e801bc98816bb596ae923f70c6ef3bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c1a095e8e9087edecc7b64595534ce0e801bc98816bb596ae923f70c6ef3bc3f->leave($__internal_c1a095e8e9087edecc7b64595534ce0e801bc98816bb596ae923f70c6ef3bc3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
