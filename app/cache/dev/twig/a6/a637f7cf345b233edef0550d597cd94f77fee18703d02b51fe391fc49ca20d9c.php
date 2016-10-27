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
<<<<<<< HEAD
        $__internal_d7770e8e0d538b0bfa2c7d0fa47ef0bedfbc71ac1d097ebeef3543220c5d1b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7770e8e0d538b0bfa2c7d0fa47ef0bedfbc71ac1d097ebeef3543220c5d1b0e->enter($__internal_d7770e8e0d538b0bfa2c7d0fa47ef0bedfbc71ac1d097ebeef3543220c5d1b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));
=======
        $__internal_e4adc2f4d07125bb4d9049fbd1027ec747d4c9225a5f9944f993b377124db5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4adc2f4d07125bb4d9049fbd1027ec747d4c9225a5f9944f993b377124db5c4->enter($__internal_e4adc2f4d07125bb4d9049fbd1027ec747d4c9225a5f9944f993b377124db5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));
>>>>>>> flo

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
<<<<<<< HEAD
        $__internal_d7770e8e0d538b0bfa2c7d0fa47ef0bedfbc71ac1d097ebeef3543220c5d1b0e->leave($__internal_d7770e8e0d538b0bfa2c7d0fa47ef0bedfbc71ac1d097ebeef3543220c5d1b0e_prof);
=======
        $__internal_e4adc2f4d07125bb4d9049fbd1027ec747d4c9225a5f9944f993b377124db5c4->leave($__internal_e4adc2f4d07125bb4d9049fbd1027ec747d4c9225a5f9944f993b377124db5c4_prof);
>>>>>>> flo

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
