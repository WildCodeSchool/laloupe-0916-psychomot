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
        $__internal_33ec551a4b3bd168b3a1969a7edacf459b66a3ef838f2b6b7ceae8b5757caa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ec551a4b3bd168b3a1969a7edacf459b66a3ef838f2b6b7ceae8b5757caa32->enter($__internal_33ec551a4b3bd168b3a1969a7edacf459b66a3ef838f2b6b7ceae8b5757caa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ec551a4b3bd168b3a1969a7edacf459b66a3ef838f2b6b7ceae8b5757caa32->leave($__internal_33ec551a4b3bd168b3a1969a7edacf459b66a3ef838f2b6b7ceae8b5757caa32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_426c6620d7913cdd4e33a2d4823dfdbca509fd1a32c8e0b328fea14265bf689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426c6620d7913cdd4e33a2d4823dfdbca509fd1a32c8e0b328fea14265bf689d->enter($__internal_426c6620d7913cdd4e33a2d4823dfdbca509fd1a32c8e0b328fea14265bf689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_426c6620d7913cdd4e33a2d4823dfdbca509fd1a32c8e0b328fea14265bf689d->leave($__internal_426c6620d7913cdd4e33a2d4823dfdbca509fd1a32c8e0b328fea14265bf689d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9c700690950d6644ce52dbb13547131e1e9fc1b0859129296acbd309c277013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c700690950d6644ce52dbb13547131e1e9fc1b0859129296acbd309c277013->enter($__internal_f9c700690950d6644ce52dbb13547131e1e9fc1b0859129296acbd309c277013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9c700690950d6644ce52dbb13547131e1e9fc1b0859129296acbd309c277013->leave($__internal_f9c700690950d6644ce52dbb13547131e1e9fc1b0859129296acbd309c277013_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce9cb122b397c4921dcf259c35a47f16ddbf6cb8f0e3ee97d8afb304029bb8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9cb122b397c4921dcf259c35a47f16ddbf6cb8f0e3ee97d8afb304029bb8d7->enter($__internal_ce9cb122b397c4921dcf259c35a47f16ddbf6cb8f0e3ee97d8afb304029bb8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ce9cb122b397c4921dcf259c35a47f16ddbf6cb8f0e3ee97d8afb304029bb8d7->leave($__internal_ce9cb122b397c4921dcf259c35a47f16ddbf6cb8f0e3ee97d8afb304029bb8d7_prof);

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
