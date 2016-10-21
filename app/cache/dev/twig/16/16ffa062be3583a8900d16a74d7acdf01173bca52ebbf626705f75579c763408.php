<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a0c389bd7064fd5613abc0cb5590d2416d8f45b0bbad52cc1501dd04966be22 extends Twig_Template
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
        $__internal_26456c4c828f5e0bb0c049bc9c2eddffe4c97ac78dee1433a7380f704ca15e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26456c4c828f5e0bb0c049bc9c2eddffe4c97ac78dee1433a7380f704ca15e60->enter($__internal_26456c4c828f5e0bb0c049bc9c2eddffe4c97ac78dee1433a7380f704ca15e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26456c4c828f5e0bb0c049bc9c2eddffe4c97ac78dee1433a7380f704ca15e60->leave($__internal_26456c4c828f5e0bb0c049bc9c2eddffe4c97ac78dee1433a7380f704ca15e60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b40e7e3771724e081fc7a833c4d48ae61b6aeb667cb9bc34120c0223dc9a26cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40e7e3771724e081fc7a833c4d48ae61b6aeb667cb9bc34120c0223dc9a26cf->enter($__internal_b40e7e3771724e081fc7a833c4d48ae61b6aeb667cb9bc34120c0223dc9a26cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b40e7e3771724e081fc7a833c4d48ae61b6aeb667cb9bc34120c0223dc9a26cf->leave($__internal_b40e7e3771724e081fc7a833c4d48ae61b6aeb667cb9bc34120c0223dc9a26cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0f1ac28023763385b2f1bab10737f9d63d6e9b4a5d1fd6dcbb3eaa8dbbe829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f1ac28023763385b2f1bab10737f9d63d6e9b4a5d1fd6dcbb3eaa8dbbe829->enter($__internal_4d0f1ac28023763385b2f1bab10737f9d63d6e9b4a5d1fd6dcbb3eaa8dbbe829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d0f1ac28023763385b2f1bab10737f9d63d6e9b4a5d1fd6dcbb3eaa8dbbe829->leave($__internal_4d0f1ac28023763385b2f1bab10737f9d63d6e9b4a5d1fd6dcbb3eaa8dbbe829_prof);

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
