<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_10aa6ad79df0f89940b6e72e7ff1d4aca774f86f1c63f93a7cdfaaec77b82780 extends Twig_Template
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
        $__internal_1ebad64a19e56f2f9ffebd0dc40ddbfb94039efdfbefe97ac27912416955dabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebad64a19e56f2f9ffebd0dc40ddbfb94039efdfbefe97ac27912416955dabe->enter($__internal_1ebad64a19e56f2f9ffebd0dc40ddbfb94039efdfbefe97ac27912416955dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1ebad64a19e56f2f9ffebd0dc40ddbfb94039efdfbefe97ac27912416955dabe->leave($__internal_1ebad64a19e56f2f9ffebd0dc40ddbfb94039efdfbefe97ac27912416955dabe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
