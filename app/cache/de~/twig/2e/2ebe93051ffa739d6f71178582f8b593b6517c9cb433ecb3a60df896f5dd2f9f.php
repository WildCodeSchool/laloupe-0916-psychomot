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
        $__internal_a88737887ee000fc74dc658118b7a8d562d25077bcfc8ff23e2f453f056708be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88737887ee000fc74dc658118b7a8d562d25077bcfc8ff23e2f453f056708be->enter($__internal_a88737887ee000fc74dc658118b7a8d562d25077bcfc8ff23e2f453f056708be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a88737887ee000fc74dc658118b7a8d562d25077bcfc8ff23e2f453f056708be->leave($__internal_a88737887ee000fc74dc658118b7a8d562d25077bcfc8ff23e2f453f056708be_prof);

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
