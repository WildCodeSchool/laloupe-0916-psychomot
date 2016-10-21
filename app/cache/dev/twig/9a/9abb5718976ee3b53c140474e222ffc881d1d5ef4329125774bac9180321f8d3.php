<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bd99a5a8201b0c511cdc79152eb751c2f09378948aaa284d1351b5c6229d0a15 extends Twig_Template
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
        $__internal_820f15f508ed9dbb9581b226d3afe3c8bd3f9d675f9de86d50ef162cc7488e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820f15f508ed9dbb9581b226d3afe3c8bd3f9d675f9de86d50ef162cc7488e79->enter($__internal_820f15f508ed9dbb9581b226d3afe3c8bd3f9d675f9de86d50ef162cc7488e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_820f15f508ed9dbb9581b226d3afe3c8bd3f9d675f9de86d50ef162cc7488e79->leave($__internal_820f15f508ed9dbb9581b226d3afe3c8bd3f9d675f9de86d50ef162cc7488e79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
