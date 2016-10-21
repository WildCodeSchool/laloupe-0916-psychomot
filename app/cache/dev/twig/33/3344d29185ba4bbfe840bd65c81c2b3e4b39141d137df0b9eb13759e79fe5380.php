<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fb244372966502e76a90ed9f563061488fe4f02df2f212254f4ddfabcfb52e67 extends Twig_Template
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
        $__internal_45bb098d21a295a26e6ecbba763c6eee354848788a7c9291aa009610c1441d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bb098d21a295a26e6ecbba763c6eee354848788a7c9291aa009610c1441d95->enter($__internal_45bb098d21a295a26e6ecbba763c6eee354848788a7c9291aa009610c1441d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_45bb098d21a295a26e6ecbba763c6eee354848788a7c9291aa009610c1441d95->leave($__internal_45bb098d21a295a26e6ecbba763c6eee354848788a7c9291aa009610c1441d95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
