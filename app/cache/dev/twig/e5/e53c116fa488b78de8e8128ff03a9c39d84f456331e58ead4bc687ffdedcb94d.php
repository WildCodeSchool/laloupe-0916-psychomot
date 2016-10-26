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
        $__internal_3e2a7ec4467628e84338248d09811c6dbfa7e7c7aaed5f7f83b03518a77995aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2a7ec4467628e84338248d09811c6dbfa7e7c7aaed5f7f83b03518a77995aa->enter($__internal_3e2a7ec4467628e84338248d09811c6dbfa7e7c7aaed5f7f83b03518a77995aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2a7ec4467628e84338248d09811c6dbfa7e7c7aaed5f7f83b03518a77995aa->leave($__internal_3e2a7ec4467628e84338248d09811c6dbfa7e7c7aaed5f7f83b03518a77995aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8576fc0947654e70b804d8cca5935d6e7f3f6de2b523fc29d2d4cec9efa3ae08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8576fc0947654e70b804d8cca5935d6e7f3f6de2b523fc29d2d4cec9efa3ae08->enter($__internal_8576fc0947654e70b804d8cca5935d6e7f3f6de2b523fc29d2d4cec9efa3ae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8576fc0947654e70b804d8cca5935d6e7f3f6de2b523fc29d2d4cec9efa3ae08->leave($__internal_8576fc0947654e70b804d8cca5935d6e7f3f6de2b523fc29d2d4cec9efa3ae08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a83923837d39dac56607e4773e7051a00e55b156012f688c7bb2360c7ab4f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a83923837d39dac56607e4773e7051a00e55b156012f688c7bb2360c7ab4f8e->enter($__internal_6a83923837d39dac56607e4773e7051a00e55b156012f688c7bb2360c7ab4f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a83923837d39dac56607e4773e7051a00e55b156012f688c7bb2360c7ab4f8e->leave($__internal_6a83923837d39dac56607e4773e7051a00e55b156012f688c7bb2360c7ab4f8e_prof);

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
