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
        $__internal_f0c99c2eccc6ca49623c19e9c032d344ed7b68546b25c45d88c48444c1c76410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c99c2eccc6ca49623c19e9c032d344ed7b68546b25c45d88c48444c1c76410->enter($__internal_f0c99c2eccc6ca49623c19e9c032d344ed7b68546b25c45d88c48444c1c76410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f0c99c2eccc6ca49623c19e9c032d344ed7b68546b25c45d88c48444c1c76410->leave($__internal_f0c99c2eccc6ca49623c19e9c032d344ed7b68546b25c45d88c48444c1c76410_prof);

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
