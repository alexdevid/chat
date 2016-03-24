<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_264bb697557c92411fb96d1f35ed5919c94386e9380be65a332f537e27a6ba21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Body' => array($this, 'block_Body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f0807e97515a6fbabf85f379274e6766643e533479f2d1858b6737b7aff134e = $this->env->getExtension("native_profiler");
        $__internal_1f0807e97515a6fbabf85f379274e6766643e533479f2d1858b6737b7aff134e->enter($__internal_1f0807e97515a6fbabf85f379274e6766643e533479f2d1858b6737b7aff134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d8166f3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8166f3_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/main_main_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "d8166f3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8166f3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/main.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "<body>
    ";
        // line 15
        $this->displayBlock('Body', $context, $blocks);
        // line 16
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d6b3ee8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d6b3ee8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/vendors_highlight.pack_1.js");
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "d6b3ee8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d6b3ee8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/vendors.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "</body>
</html>
";
        
        $__internal_1f0807e97515a6fbabf85f379274e6766643e533479f2d1858b6737b7aff134e->leave($__internal_1f0807e97515a6fbabf85f379274e6766643e533479f2d1858b6737b7aff134e_prof);

    }

    // line 15
    public function block_Body($context, array $blocks = array())
    {
        $__internal_e18d026a46c242d08e6ef08fc276d3a39526eec5e2fa6377a4dd08eda39123ef = $this->env->getExtension("native_profiler");
        $__internal_e18d026a46c242d08e6ef08fc276d3a39526eec5e2fa6377a4dd08eda39123ef->enter($__internal_e18d026a46c242d08e6ef08fc276d3a39526eec5e2fa6377a4dd08eda39123ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        
        $__internal_e18d026a46c242d08e6ef08fc276d3a39526eec5e2fa6377a4dd08eda39123ef->leave($__internal_e18d026a46c242d08e6ef08fc276d3a39526eec5e2fa6377a4dd08eda39123ef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  72 => 22,  58 => 20,  53 => 16,  51 => 15,  48 => 14,  34 => 12,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*     {% stylesheets*/
/*         '@AppBundle/Resources/public/scss/main.scss'*/
/*         filter='compass'*/
/*         filter='?yui_css'*/
/*         output='css/main.css'*/
/*     %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}">*/
/*     {% endstylesheets %}*/
/* <body>*/
/*     {% block Body %}{% endblock %}*/
/*     {% javascripts*/
/*         '@AppBundle/Resources/public/js/highlight.pack.js'*/
/*         output='js/vendors.js'*/
/*     %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* </body>*/
/* </html>*/
/* */
