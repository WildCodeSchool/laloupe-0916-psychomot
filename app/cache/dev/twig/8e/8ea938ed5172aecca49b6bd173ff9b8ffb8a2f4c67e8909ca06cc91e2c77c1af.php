<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b0502142737f9f4a0dd9bdedc437dfd84802ec0d0fbbeff3296fa322ea2f1b8 extends Twig_Template
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
        $__internal_f7ca7ac7ac13a1fec6013e1d3d8deadee05952413f5e7e0cc8aa0f1fbf80913c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ca7ac7ac13a1fec6013e1d3d8deadee05952413f5e7e0cc8aa0f1fbf80913c->enter($__internal_f7ca7ac7ac13a1fec6013e1d3d8deadee05952413f5e7e0cc8aa0f1fbf80913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f7ca7ac7ac13a1fec6013e1d3d8deadee05952413f5e7e0cc8aa0f1fbf80913c->leave($__internal_f7ca7ac7ac13a1fec6013e1d3d8deadee05952413f5e7e0cc8aa0f1fbf80913c_prof);

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
