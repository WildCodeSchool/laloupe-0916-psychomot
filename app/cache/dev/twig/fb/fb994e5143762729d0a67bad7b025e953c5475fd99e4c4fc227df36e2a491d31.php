<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0fdc87c9cb0a2e686c0bf7b8ec91cc4a3277de4ddd20924186e2d10694db43eb extends Twig_Template
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
        $__internal_308ea645b4307b423bc85c1bfaf5cb8e889e7b72ac57c8f19fc250c14b87216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308ea645b4307b423bc85c1bfaf5cb8e889e7b72ac57c8f19fc250c14b87216b->enter($__internal_308ea645b4307b423bc85c1bfaf5cb8e889e7b72ac57c8f19fc250c14b87216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_308ea645b4307b423bc85c1bfaf5cb8e889e7b72ac57c8f19fc250c14b87216b->leave($__internal_308ea645b4307b423bc85c1bfaf5cb8e889e7b72ac57c8f19fc250c14b87216b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
