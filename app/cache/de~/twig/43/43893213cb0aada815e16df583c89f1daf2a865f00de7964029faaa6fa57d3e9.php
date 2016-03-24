<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b51007edf94311c4f31f87b7f5a9ee2d97cad9d4ff9c77254fabeea9308d9711 extends Twig_Template
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
        $__internal_dab5a9c53bbd6ac3a7db0ab80a4f6a932d46afb95959bbe0c941f9ce28ba2398 = $this->env->getExtension("native_profiler");
        $__internal_dab5a9c53bbd6ac3a7db0ab80a4f6a932d46afb95959bbe0c941f9ce28ba2398->enter($__internal_dab5a9c53bbd6ac3a7db0ab80a4f6a932d46afb95959bbe0c941f9ce28ba2398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dab5a9c53bbd6ac3a7db0ab80a4f6a932d46afb95959bbe0c941f9ce28ba2398->leave($__internal_dab5a9c53bbd6ac3a7db0ab80a4f6a932d46afb95959bbe0c941f9ce28ba2398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
