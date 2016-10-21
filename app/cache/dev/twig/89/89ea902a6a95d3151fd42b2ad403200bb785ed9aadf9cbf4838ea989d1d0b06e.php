<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7e9a56e637497b48973fabb58490029b7a11ff6b9b8f033e32f53542eec00e9 extends Twig_Template
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
        $__internal_ffcabab3eb71b4f6a6d09d2457cca63e5b0ce736392eb09301a539bd81fce81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcabab3eb71b4f6a6d09d2457cca63e5b0ce736392eb09301a539bd81fce81c->enter($__internal_ffcabab3eb71b4f6a6d09d2457cca63e5b0ce736392eb09301a539bd81fce81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ffcabab3eb71b4f6a6d09d2457cca63e5b0ce736392eb09301a539bd81fce81c->leave($__internal_ffcabab3eb71b4f6a6d09d2457cca63e5b0ce736392eb09301a539bd81fce81c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
