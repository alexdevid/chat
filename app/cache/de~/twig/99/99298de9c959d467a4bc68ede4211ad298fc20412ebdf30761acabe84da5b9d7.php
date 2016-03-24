<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0f32f81aaffb64a50fd41f7242dc4bcd38bd213137d8a71ef24124b22971e945 extends Twig_Template
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
        $__internal_5360c475ea8698185da7340e73c64ccc878413a09da2b40199c4615f6d3327a9 = $this->env->getExtension("native_profiler");
        $__internal_5360c475ea8698185da7340e73c64ccc878413a09da2b40199c4615f6d3327a9->enter($__internal_5360c475ea8698185da7340e73c64ccc878413a09da2b40199c4615f6d3327a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5360c475ea8698185da7340e73c64ccc878413a09da2b40199c4615f6d3327a9->leave($__internal_5360c475ea8698185da7340e73c64ccc878413a09da2b40199c4615f6d3327a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
