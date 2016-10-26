<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4f8f8536583057a2d78f4efa151e3c5e4cdbee82c6e5e60af55309c778797e8b extends Twig_Template
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
        $__internal_0e417e8bacd375f27f27618b54440ba9cdfe5667bc20a114ef8095139ded4e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e417e8bacd375f27f27618b54440ba9cdfe5667bc20a114ef8095139ded4e2f->enter($__internal_0e417e8bacd375f27f27618b54440ba9cdfe5667bc20a114ef8095139ded4e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0e417e8bacd375f27f27618b54440ba9cdfe5667bc20a114ef8095139ded4e2f->leave($__internal_0e417e8bacd375f27f27618b54440ba9cdfe5667bc20a114ef8095139ded4e2f_prof);

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
