<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_0760c9d1165241fc7da79dd86ea4d46448fef1c6959f6a6c48a8ae0adfbc73f0 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_ed72c81f8333454cc99d0ba0919954adccf4ce15ae1892f47078235b48e483b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed72c81f8333454cc99d0ba0919954adccf4ce15ae1892f47078235b48e483b3->enter($__internal_ed72c81f8333454cc99d0ba0919954adccf4ce15ae1892f47078235b48e483b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));
=======
        $__internal_85296ce402587906a3488f4f878a6db50162f101c168de178f814b436abc2a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85296ce402587906a3488f4f878a6db50162f101c168de178f814b436abc2a00->enter($__internal_85296ce402587906a3488f4f878a6db50162f101c168de178f814b436abc2a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));
>>>>>>> flo

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
<<<<<<< HEAD
        $__internal_ed72c81f8333454cc99d0ba0919954adccf4ce15ae1892f47078235b48e483b3->leave($__internal_ed72c81f8333454cc99d0ba0919954adccf4ce15ae1892f47078235b48e483b3_prof);
=======
        $__internal_85296ce402587906a3488f4f878a6db50162f101c168de178f814b436abc2a00->leave($__internal_85296ce402587906a3488f4f878a6db50162f101c168de178f814b436abc2a00_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }
}
