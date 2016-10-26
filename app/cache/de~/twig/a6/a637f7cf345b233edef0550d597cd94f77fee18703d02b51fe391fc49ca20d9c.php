<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_07a0e504b08e09a29c79bce929fb14a6bd31ed93730babc7be733f80cc25a8c5 extends Twig_Template
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
        $__internal_5512e63160b0989820c9486241453ef6ca0b463e6d6934a3e4fdfc18ffbb8631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5512e63160b0989820c9486241453ef6ca0b463e6d6934a3e4fdfc18ffbb8631->enter($__internal_5512e63160b0989820c9486241453ef6ca0b463e6d6934a3e4fdfc18ffbb8631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5512e63160b0989820c9486241453ef6ca0b463e6d6934a3e4fdfc18ffbb8631->leave($__internal_5512e63160b0989820c9486241453ef6ca0b463e6d6934a3e4fdfc18ffbb8631_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
