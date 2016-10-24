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
        $__internal_8b976d1a8dd1add9c4a719b865def68f37cc3fe86e2ad8d24c0f2dc412fd7aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b976d1a8dd1add9c4a719b865def68f37cc3fe86e2ad8d24c0f2dc412fd7aff->enter($__internal_8b976d1a8dd1add9c4a719b865def68f37cc3fe86e2ad8d24c0f2dc412fd7aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8b976d1a8dd1add9c4a719b865def68f37cc3fe86e2ad8d24c0f2dc412fd7aff->leave($__internal_8b976d1a8dd1add9c4a719b865def68f37cc3fe86e2ad8d24c0f2dc412fd7aff_prof);

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
