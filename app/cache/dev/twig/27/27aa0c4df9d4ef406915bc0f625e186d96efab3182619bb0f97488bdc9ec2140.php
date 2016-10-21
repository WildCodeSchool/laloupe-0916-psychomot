<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3b768e28fc6cd199c8a62bfacf47ec80e58239f1be717c9e5ce176ae9bda06ce extends Twig_Template
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
        $__internal_7a472653388e4b9ee6f3d8be984ffde423e3f26c2b8882d9f1513fb58a3e9839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a472653388e4b9ee6f3d8be984ffde423e3f26c2b8882d9f1513fb58a3e9839->enter($__internal_7a472653388e4b9ee6f3d8be984ffde423e3f26c2b8882d9f1513fb58a3e9839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a472653388e4b9ee6f3d8be984ffde423e3f26c2b8882d9f1513fb58a3e9839->leave($__internal_7a472653388e4b9ee6f3d8be984ffde423e3f26c2b8882d9f1513fb58a3e9839_prof);

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
