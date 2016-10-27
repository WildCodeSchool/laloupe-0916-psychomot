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
        $__internal_c2728db78bf74f9dacb4640480ad1cd422d305fef4d1319e84b5e97307f8a375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2728db78bf74f9dacb4640480ad1cd422d305fef4d1319e84b5e97307f8a375->enter($__internal_c2728db78bf74f9dacb4640480ad1cd422d305fef4d1319e84b5e97307f8a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2728db78bf74f9dacb4640480ad1cd422d305fef4d1319e84b5e97307f8a375->leave($__internal_c2728db78bf74f9dacb4640480ad1cd422d305fef4d1319e84b5e97307f8a375_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f7f5b4a8af5249a0a3dcef81f84284493d58a346d78d03b481a8b5c1e1066e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f7f5b4a8af5249a0a3dcef81f84284493d58a346d78d03b481a8b5c1e1066e->enter($__internal_c2f7f5b4a8af5249a0a3dcef81f84284493d58a346d78d03b481a8b5c1e1066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2f7f5b4a8af5249a0a3dcef81f84284493d58a346d78d03b481a8b5c1e1066e->leave($__internal_c2f7f5b4a8af5249a0a3dcef81f84284493d58a346d78d03b481a8b5c1e1066e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c15614f4450ca9cd92efe730db49c7b3f1edb76ed0b9b6ea47c972e528a4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c15614f4450ca9cd92efe730db49c7b3f1edb76ed0b9b6ea47c972e528a4ca->enter($__internal_55c15614f4450ca9cd92efe730db49c7b3f1edb76ed0b9b6ea47c972e528a4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55c15614f4450ca9cd92efe730db49c7b3f1edb76ed0b9b6ea47c972e528a4ca->leave($__internal_55c15614f4450ca9cd92efe730db49c7b3f1edb76ed0b9b6ea47c972e528a4ca_prof);

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
