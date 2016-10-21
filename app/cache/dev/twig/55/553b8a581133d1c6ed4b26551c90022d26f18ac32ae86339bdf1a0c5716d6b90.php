<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b2c1471f900ff2281ba2595d164fbcc091d3e804103068561e67d887a686902a extends Twig_Template
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
        $__internal_eec2486fe8c5dff75224b4b6b37196cc376724d67c3cc78391bc1c43c49a2902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec2486fe8c5dff75224b4b6b37196cc376724d67c3cc78391bc1c43c49a2902->enter($__internal_eec2486fe8c5dff75224b4b6b37196cc376724d67c3cc78391bc1c43c49a2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec2486fe8c5dff75224b4b6b37196cc376724d67c3cc78391bc1c43c49a2902->leave($__internal_eec2486fe8c5dff75224b4b6b37196cc376724d67c3cc78391bc1c43c49a2902_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_500887693bc15f9e7559ab5e5175fce682f48f740aee5b213da3016caf1e3d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500887693bc15f9e7559ab5e5175fce682f48f740aee5b213da3016caf1e3d73->enter($__internal_500887693bc15f9e7559ab5e5175fce682f48f740aee5b213da3016caf1e3d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_500887693bc15f9e7559ab5e5175fce682f48f740aee5b213da3016caf1e3d73->leave($__internal_500887693bc15f9e7559ab5e5175fce682f48f740aee5b213da3016caf1e3d73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81c413a03e8be2f992f1dd4c59677c42de495e9438c95802b98fcd9b919623ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c413a03e8be2f992f1dd4c59677c42de495e9438c95802b98fcd9b919623ae->enter($__internal_81c413a03e8be2f992f1dd4c59677c42de495e9438c95802b98fcd9b919623ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81c413a03e8be2f992f1dd4c59677c42de495e9438c95802b98fcd9b919623ae->leave($__internal_81c413a03e8be2f992f1dd4c59677c42de495e9438c95802b98fcd9b919623ae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c64d727de2db9ac4e697c42b16a4d2c4f16e16a8fd7693cca17da923af2e1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c64d727de2db9ac4e697c42b16a4d2c4f16e16a8fd7693cca17da923af2e1bb->enter($__internal_0c64d727de2db9ac4e697c42b16a4d2c4f16e16a8fd7693cca17da923af2e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c64d727de2db9ac4e697c42b16a4d2c4f16e16a8fd7693cca17da923af2e1bb->leave($__internal_0c64d727de2db9ac4e697c42b16a4d2c4f16e16a8fd7693cca17da923af2e1bb_prof);

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
