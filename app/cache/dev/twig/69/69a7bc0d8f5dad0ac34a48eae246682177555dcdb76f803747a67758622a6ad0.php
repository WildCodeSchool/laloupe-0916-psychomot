<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a5a400e43b5014b79acbd3c3dabf3f76239b280d2a057b59d6c4c3a203850c86 extends Twig_Template
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
        $__internal_9ad4bc296815d27908bf53a4df089b0e5581826370e41dcfd0506e8d824c5155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad4bc296815d27908bf53a4df089b0e5581826370e41dcfd0506e8d824c5155->enter($__internal_9ad4bc296815d27908bf53a4df089b0e5581826370e41dcfd0506e8d824c5155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9ad4bc296815d27908bf53a4df089b0e5581826370e41dcfd0506e8d824c5155->leave($__internal_9ad4bc296815d27908bf53a4df089b0e5581826370e41dcfd0506e8d824c5155_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
