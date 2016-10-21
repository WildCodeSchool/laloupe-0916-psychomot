<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_148ace07285c60e4cf698569343e3f08ac06b97ddc5162a3fe8f32d131781413 extends Twig_Template
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
        $__internal_98d83b6383d1f9a70da594b61e66019973c36d2158ad47fe580d94a4ee8eba49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d83b6383d1f9a70da594b61e66019973c36d2158ad47fe580d94a4ee8eba49->enter($__internal_98d83b6383d1f9a70da594b61e66019973c36d2158ad47fe580d94a4ee8eba49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_98d83b6383d1f9a70da594b61e66019973c36d2158ad47fe580d94a4ee8eba49->leave($__internal_98d83b6383d1f9a70da594b61e66019973c36d2158ad47fe580d94a4ee8eba49_prof);

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
