<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1c87fa324a6c1cedb1d0d3573c10a345841ea9182c8247d07b1f7ffd6708ff5b extends Twig_Template
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
        $__internal_694a9326c9d7e45d77a8f9c6a03d71f3e4da2da589e47495f4ccf01a692c1e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694a9326c9d7e45d77a8f9c6a03d71f3e4da2da589e47495f4ccf01a692c1e2f->enter($__internal_694a9326c9d7e45d77a8f9c6a03d71f3e4da2da589e47495f4ccf01a692c1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_694a9326c9d7e45d77a8f9c6a03d71f3e4da2da589e47495f4ccf01a692c1e2f->leave($__internal_694a9326c9d7e45d77a8f9c6a03d71f3e4da2da589e47495f4ccf01a692c1e2f_prof);

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
