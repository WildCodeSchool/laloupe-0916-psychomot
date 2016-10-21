<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cd7cae78926ef476bc6ae99fabe04d8493dc062326705ccc671445336b6540d8 extends Twig_Template
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
        $__internal_64a54fd95b26f2d277dcf6e4b60bd37790bafc892167fc3ff172c9ec37e66ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a54fd95b26f2d277dcf6e4b60bd37790bafc892167fc3ff172c9ec37e66ead->enter($__internal_64a54fd95b26f2d277dcf6e4b60bd37790bafc892167fc3ff172c9ec37e66ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_64a54fd95b26f2d277dcf6e4b60bd37790bafc892167fc3ff172c9ec37e66ead->leave($__internal_64a54fd95b26f2d277dcf6e4b60bd37790bafc892167fc3ff172c9ec37e66ead_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
