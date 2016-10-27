<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_605539d61a9330a25b5dd4a5a54d7266979e535f76c9a1761b8047562181ea01 extends Twig_Template
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
        $__internal_3b2fbf21f70470caad0bef45e90e1476df677a1bb86925aee2353174e1e10e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2fbf21f70470caad0bef45e90e1476df677a1bb86925aee2353174e1e10e23->enter($__internal_3b2fbf21f70470caad0bef45e90e1476df677a1bb86925aee2353174e1e10e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3b2fbf21f70470caad0bef45e90e1476df677a1bb86925aee2353174e1e10e23->leave($__internal_3b2fbf21f70470caad0bef45e90e1476df677a1bb86925aee2353174e1e10e23_prof);

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
