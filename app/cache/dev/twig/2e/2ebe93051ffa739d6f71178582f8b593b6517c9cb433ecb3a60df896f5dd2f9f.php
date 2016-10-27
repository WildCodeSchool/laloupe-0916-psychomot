<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fbd85f8364a2d01f805b875fb3b7977dd761f850b0d1f04811c2a974f7b62514 extends Twig_Template
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
        $__internal_4f801d95331cdf824984e2acf2c25569d0445aa434aa0c4356e7edd90450f638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f801d95331cdf824984e2acf2c25569d0445aa434aa0c4356e7edd90450f638->enter($__internal_4f801d95331cdf824984e2acf2c25569d0445aa434aa0c4356e7edd90450f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4f801d95331cdf824984e2acf2c25569d0445aa434aa0c4356e7edd90450f638->leave($__internal_4f801d95331cdf824984e2acf2c25569d0445aa434aa0c4356e7edd90450f638_prof);

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
