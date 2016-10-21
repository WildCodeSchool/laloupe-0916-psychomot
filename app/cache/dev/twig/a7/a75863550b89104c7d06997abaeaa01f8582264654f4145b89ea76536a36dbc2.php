<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8e27b8531b79ddb4e71b50ff400fe28b8bcf95649edcb114b0c57c56ed96b35b extends Twig_Template
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
        $__internal_7334661cd697087dabcb50d21dbb30181ecdf27ccb2ee38a87d009319b8fcabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7334661cd697087dabcb50d21dbb30181ecdf27ccb2ee38a87d009319b8fcabe->enter($__internal_7334661cd697087dabcb50d21dbb30181ecdf27ccb2ee38a87d009319b8fcabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7334661cd697087dabcb50d21dbb30181ecdf27ccb2ee38a87d009319b8fcabe->leave($__internal_7334661cd697087dabcb50d21dbb30181ecdf27ccb2ee38a87d009319b8fcabe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
