<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1c87fa324a6c1cedb1d0d3573c10a345841ea9182c8247d07b1f7ffd6708ff5b extends Twig_Template
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
        $__internal_7dfa5561a3e97046332855e96400fc0a1b67b9023d63db25389928b194134c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfa5561a3e97046332855e96400fc0a1b67b9023d63db25389928b194134c04->enter($__internal_7dfa5561a3e97046332855e96400fc0a1b67b9023d63db25389928b194134c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7dfa5561a3e97046332855e96400fc0a1b67b9023d63db25389928b194134c04->leave($__internal_7dfa5561a3e97046332855e96400fc0a1b67b9023d63db25389928b194134c04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
