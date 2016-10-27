<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4f8f8536583057a2d78f4efa151e3c5e4cdbee82c6e5e60af55309c778797e8b extends Twig_Template
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
        $__internal_7914d3bf3f2749fed0efae37074a6f56da5404f47b2910bf0ebc3551d24f22e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7914d3bf3f2749fed0efae37074a6f56da5404f47b2910bf0ebc3551d24f22e8->enter($__internal_7914d3bf3f2749fed0efae37074a6f56da5404f47b2910bf0ebc3551d24f22e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7914d3bf3f2749fed0efae37074a6f56da5404f47b2910bf0ebc3551d24f22e8->leave($__internal_7914d3bf3f2749fed0efae37074a6f56da5404f47b2910bf0ebc3551d24f22e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
