<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa6977c61837771a2ca090128970a53b00790b3d22143e30849cc41cec38e365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a2fd2eb6b655ce242ad6aeb2d2658d034b36e95af7116e4b38b7efd69c4d2e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fd2eb6b655ce242ad6aeb2d2658d034b36e95af7116e4b38b7efd69c4d2e8f->enter($__internal_a2fd2eb6b655ce242ad6aeb2d2658d034b36e95af7116e4b38b7efd69c4d2e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2fd2eb6b655ce242ad6aeb2d2658d034b36e95af7116e4b38b7efd69c4d2e8f->leave($__internal_a2fd2eb6b655ce242ad6aeb2d2658d034b36e95af7116e4b38b7efd69c4d2e8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edb75ebeeef2046e0c6ecbec38ae95c9b214681d56aa76f142cd4e02500512fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb75ebeeef2046e0c6ecbec38ae95c9b214681d56aa76f142cd4e02500512fb->enter($__internal_edb75ebeeef2046e0c6ecbec38ae95c9b214681d56aa76f142cd4e02500512fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_edb75ebeeef2046e0c6ecbec38ae95c9b214681d56aa76f142cd4e02500512fb->leave($__internal_edb75ebeeef2046e0c6ecbec38ae95c9b214681d56aa76f142cd4e02500512fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc2f4485333449a30e191402c617327abbd99cb0ec7bf317c5042d2103b8e014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2f4485333449a30e191402c617327abbd99cb0ec7bf317c5042d2103b8e014->enter($__internal_cc2f4485333449a30e191402c617327abbd99cb0ec7bf317c5042d2103b8e014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc2f4485333449a30e191402c617327abbd99cb0ec7bf317c5042d2103b8e014->leave($__internal_cc2f4485333449a30e191402c617327abbd99cb0ec7bf317c5042d2103b8e014_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ebdccdeaf3e98606a6ab5260394a97453700dff1e3b458c42a433678571a4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebdccdeaf3e98606a6ab5260394a97453700dff1e3b458c42a433678571a4e1->enter($__internal_0ebdccdeaf3e98606a6ab5260394a97453700dff1e3b458c42a433678571a4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ebdccdeaf3e98606a6ab5260394a97453700dff1e3b458c42a433678571a4e1->leave($__internal_0ebdccdeaf3e98606a6ab5260394a97453700dff1e3b458c42a433678571a4e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
