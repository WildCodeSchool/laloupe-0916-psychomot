<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3bf054eea358699ad448090d3d4bc6612816c963fb552a4b65b878dd71ad360a extends Twig_Template
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
        $__internal_34b42f46794ebcb58d6869f93dcfcd14a18eecaa93af119f1e78882216b94ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b42f46794ebcb58d6869f93dcfcd14a18eecaa93af119f1e78882216b94ce5->enter($__internal_34b42f46794ebcb58d6869f93dcfcd14a18eecaa93af119f1e78882216b94ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_34b42f46794ebcb58d6869f93dcfcd14a18eecaa93af119f1e78882216b94ce5->leave($__internal_34b42f46794ebcb58d6869f93dcfcd14a18eecaa93af119f1e78882216b94ce5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
