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
        $__internal_9e01fa0e156323f125f230678082066c6a739b1ad383c8ffec61c041c60a10bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e01fa0e156323f125f230678082066c6a739b1ad383c8ffec61c041c60a10bf->enter($__internal_9e01fa0e156323f125f230678082066c6a739b1ad383c8ffec61c041c60a10bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9e01fa0e156323f125f230678082066c6a739b1ad383c8ffec61c041c60a10bf->leave($__internal_9e01fa0e156323f125f230678082066c6a739b1ad383c8ffec61c041c60a10bf_prof);

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
