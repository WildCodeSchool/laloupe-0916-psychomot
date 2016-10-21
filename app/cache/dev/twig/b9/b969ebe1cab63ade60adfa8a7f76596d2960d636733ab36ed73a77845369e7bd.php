<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_644468fc651ee57b31a25275e4406ac02c9098147e01e7ea163707efca26e12d extends Twig_Template
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
        $__internal_473b4b32013d0e765a144b72798043b1d82874f5ef98ee5fe75567a9e00b9ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473b4b32013d0e765a144b72798043b1d82874f5ef98ee5fe75567a9e00b9ef6->enter($__internal_473b4b32013d0e765a144b72798043b1d82874f5ef98ee5fe75567a9e00b9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_473b4b32013d0e765a144b72798043b1d82874f5ef98ee5fe75567a9e00b9ef6->leave($__internal_473b4b32013d0e765a144b72798043b1d82874f5ef98ee5fe75567a9e00b9ef6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
