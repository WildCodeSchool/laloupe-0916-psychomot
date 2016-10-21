<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1d8e8ae06916a070feb73d168d9d971703f99ac85507717df7ca879c1a6216f1 extends Twig_Template
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
        $__internal_72b1f848404b7dc25217bea6bc6248d20e948a2a3e38f92c1309dfebfe4c1bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b1f848404b7dc25217bea6bc6248d20e948a2a3e38f92c1309dfebfe4c1bc0->enter($__internal_72b1f848404b7dc25217bea6bc6248d20e948a2a3e38f92c1309dfebfe4c1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_72b1f848404b7dc25217bea6bc6248d20e948a2a3e38f92c1309dfebfe4c1bc0->leave($__internal_72b1f848404b7dc25217bea6bc6248d20e948a2a3e38f92c1309dfebfe4c1bc0_prof);

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
