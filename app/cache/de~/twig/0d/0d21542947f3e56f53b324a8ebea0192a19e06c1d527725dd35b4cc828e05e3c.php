<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_1d6341926785682eed33ce646402f26ad0a553eb006fc709ff357c875d9d3d1e extends Twig_Template
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
        $__internal_9c960c10430d9635d0710f1f8d9fa5d5d7cf078181b9801b759e886100a8dc33 = $this->env->getExtension("native_profiler");
        $__internal_9c960c10430d9635d0710f1f8d9fa5d5d7cf078181b9801b759e886100a8dc33->enter($__internal_9c960c10430d9635d0710f1f8d9fa5d5d7cf078181b9801b759e886100a8dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"language\" content=\"english\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo " | Alexander Tsukanov - Web Developer</title>
    <link rel=\"icon\" href=\"/favicon.ico\">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans|Play:400,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link href=\"/static/css/errors.css\" rel=\"stylesheet\" media=\"screen\"/>
</head>
<body class=\"error-page\">
<div class=\"error-container\">
    <div class=\"error-message\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h1>
        The requested page couldn't be located. <br>
        ";
        // line 19
        $context["lang"] = ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "ru")) ? ("ru") : (""));
        // line 20
        echo "        Checkout for any URL misspelling or <a href=\"/";
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
        echo "\">return to the homepage</a>.
        <div class=\"footer\">
            <p>© 2016 <a href=\"/\">Alexander Tsukanov</a></p>
        </div>
    </div>
</div>
</div>
</body>
</html>
";
        
        $__internal_9c960c10430d9635d0710f1f8d9fa5d5d7cf078181b9801b759e886100a8dc33->leave($__internal_9c960c10430d9635d0710f1f8d9fa5d5d7cf078181b9801b759e886100a8dc33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  52 => 19,  45 => 17,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en-US">*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     <meta name="language" content="english">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <title>{{ status_code }} {{ status_text }} | Alexander Tsukanov - Web Developer</title>*/
/*     <link rel="icon" href="/favicon.ico">*/
/*     <link href='https://fonts.googleapis.com/css?family=Noto+Sans|Play:400,700&subset=latin,cyrillic' rel='stylesheet'*/
/*           type='text/css'>*/
/*     <link href="/static/css/errors.css" rel="stylesheet" media="screen"/>*/
/* </head>*/
/* <body class="error-page">*/
/* <div class="error-container">*/
/*     <div class="error-message">*/
/*         <h1>{{ status_code }} {{ status_text }}</h1>*/
/*         The requested page couldn't be located. <br>*/
/*         {% set lang = app.request.locale == 'ru' ? 'ru' : '' %}*/
/*         Checkout for any URL misspelling or <a href="/{{ lang }}">return to the homepage</a>.*/
/*         <div class="footer">*/
/*             <p>© 2016 <a href="/">Alexander Tsukanov</a></p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
