<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_003573d78f04e08e6f5b410cb63bf0831de9ca89535b7d4a25bb7ba9e4720fbb extends Twig_Template
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
        $__internal_acb353a2e11cca2b11db82f89c24d1ee61ee7e3b61941e662149ba15702c02ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb353a2e11cca2b11db82f89c24d1ee61ee7e3b61941e662149ba15702c02ac->enter($__internal_acb353a2e11cca2b11db82f89c24d1ee61ee7e3b61941e662149ba15702c02ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_acb353a2e11cca2b11db82f89c24d1ee61ee7e3b61941e662149ba15702c02ac->leave($__internal_acb353a2e11cca2b11db82f89c24d1ee61ee7e3b61941e662149ba15702c02ac_prof);

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
