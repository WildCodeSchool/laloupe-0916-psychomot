<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_92b0802d14583f09a39581261079bd917f861e65822e83d2c835fd330785023e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d8b2b32b2aea829e99d3fe53ab25a90f1ed366fa15643467ac8db3cf61dd9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8b2b32b2aea829e99d3fe53ab25a90f1ed366fa15643467ac8db3cf61dd9b1->enter($__internal_4d8b2b32b2aea829e99d3fe53ab25a90f1ed366fa15643467ac8db3cf61dd9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8b2b32b2aea829e99d3fe53ab25a90f1ed366fa15643467ac8db3cf61dd9b1->leave($__internal_4d8b2b32b2aea829e99d3fe53ab25a90f1ed366fa15643467ac8db3cf61dd9b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be7367944e9a9e7228c032f757f90b1b1d85e1eae74ad109149164239abcc618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7367944e9a9e7228c032f757f90b1b1d85e1eae74ad109149164239abcc618->enter($__internal_be7367944e9a9e7228c032f757f90b1b1d85e1eae74ad109149164239abcc618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_be7367944e9a9e7228c032f757f90b1b1d85e1eae74ad109149164239abcc618->leave($__internal_be7367944e9a9e7228c032f757f90b1b1d85e1eae74ad109149164239abcc618_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34586cc48f63b932684d5151af8ebf2b8673e201a9d48a4e14a56b85874f8928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34586cc48f63b932684d5151af8ebf2b8673e201a9d48a4e14a56b85874f8928->enter($__internal_34586cc48f63b932684d5151af8ebf2b8673e201a9d48a4e14a56b85874f8928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_34586cc48f63b932684d5151af8ebf2b8673e201a9d48a4e14a56b85874f8928->leave($__internal_34586cc48f63b932684d5151af8ebf2b8673e201a9d48a4e14a56b85874f8928_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
