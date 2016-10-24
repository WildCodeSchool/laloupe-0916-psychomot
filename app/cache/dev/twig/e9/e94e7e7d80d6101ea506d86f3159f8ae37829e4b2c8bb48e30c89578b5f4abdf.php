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
        $__internal_4443bd2d873cdbb28088c3304e395a0dc8bd4600cda80b615949dd0008f37596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4443bd2d873cdbb28088c3304e395a0dc8bd4600cda80b615949dd0008f37596->enter($__internal_4443bd2d873cdbb28088c3304e395a0dc8bd4600cda80b615949dd0008f37596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4443bd2d873cdbb28088c3304e395a0dc8bd4600cda80b615949dd0008f37596->leave($__internal_4443bd2d873cdbb28088c3304e395a0dc8bd4600cda80b615949dd0008f37596_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1781259b4d451a7bf9d38683916b81538698bfb47175e544cd80243aadad78e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1781259b4d451a7bf9d38683916b81538698bfb47175e544cd80243aadad78e1->enter($__internal_1781259b4d451a7bf9d38683916b81538698bfb47175e544cd80243aadad78e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1781259b4d451a7bf9d38683916b81538698bfb47175e544cd80243aadad78e1->leave($__internal_1781259b4d451a7bf9d38683916b81538698bfb47175e544cd80243aadad78e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fd3acc84e59d406d437d2f9251147e1973a6c0b3847aab25c2b5bc206050d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd3acc84e59d406d437d2f9251147e1973a6c0b3847aab25c2b5bc206050d9b->enter($__internal_0fd3acc84e59d406d437d2f9251147e1973a6c0b3847aab25c2b5bc206050d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0fd3acc84e59d406d437d2f9251147e1973a6c0b3847aab25c2b5bc206050d9b->leave($__internal_0fd3acc84e59d406d437d2f9251147e1973a6c0b3847aab25c2b5bc206050d9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0e078e5b918a0763d2aaab38f101ce2da5a228ac7c21af3af755ca83962022b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e078e5b918a0763d2aaab38f101ce2da5a228ac7c21af3af755ca83962022b->enter($__internal_a0e078e5b918a0763d2aaab38f101ce2da5a228ac7c21af3af755ca83962022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a0e078e5b918a0763d2aaab38f101ce2da5a228ac7c21af3af755ca83962022b->leave($__internal_a0e078e5b918a0763d2aaab38f101ce2da5a228ac7c21af3af755ca83962022b_prof);

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
