<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_764fd62ac3fc52e377da0a3ae35ac413d1dfdbf314a077157afedbb2c4fdead9 extends Twig_Template
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
        $__internal_edc9fa5edf85485a2ec6a1351bfd4f82f3cc2acb89b7d69eb704dd8ae96bc0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc9fa5edf85485a2ec6a1351bfd4f82f3cc2acb89b7d69eb704dd8ae96bc0d6->enter($__internal_edc9fa5edf85485a2ec6a1351bfd4f82f3cc2acb89b7d69eb704dd8ae96bc0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_edc9fa5edf85485a2ec6a1351bfd4f82f3cc2acb89b7d69eb704dd8ae96bc0d6->leave($__internal_edc9fa5edf85485a2ec6a1351bfd4f82f3cc2acb89b7d69eb704dd8ae96bc0d6_prof);

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
