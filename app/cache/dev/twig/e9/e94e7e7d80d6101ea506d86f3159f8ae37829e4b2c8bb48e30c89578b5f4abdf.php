<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa6977c61837771a2ca090128970a53b00790b3d22143e30849cc41cec38e365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3803eacef9855d72a62264694d91adebb537ee2010890abe29e00c8ba4e5e3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3803eacef9855d72a62264694d91adebb537ee2010890abe29e00c8ba4e5e3d4->enter($__internal_3803eacef9855d72a62264694d91adebb537ee2010890abe29e00c8ba4e5e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3803eacef9855d72a62264694d91adebb537ee2010890abe29e00c8ba4e5e3d4->leave($__internal_3803eacef9855d72a62264694d91adebb537ee2010890abe29e00c8ba4e5e3d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76f9bb0814eb0fb169895b56c430b52bf07cb301919781f283aa92301f8c7a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f9bb0814eb0fb169895b56c430b52bf07cb301919781f283aa92301f8c7a42->enter($__internal_76f9bb0814eb0fb169895b56c430b52bf07cb301919781f283aa92301f8c7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_76f9bb0814eb0fb169895b56c430b52bf07cb301919781f283aa92301f8c7a42->leave($__internal_76f9bb0814eb0fb169895b56c430b52bf07cb301919781f283aa92301f8c7a42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bb02a3bf3cada7f062083bd2dc4b3192698c622f612a2eb1d136a77b333923f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb02a3bf3cada7f062083bd2dc4b3192698c622f612a2eb1d136a77b333923f->enter($__internal_1bb02a3bf3cada7f062083bd2dc4b3192698c622f612a2eb1d136a77b333923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bb02a3bf3cada7f062083bd2dc4b3192698c622f612a2eb1d136a77b333923f->leave($__internal_1bb02a3bf3cada7f062083bd2dc4b3192698c622f612a2eb1d136a77b333923f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2123aa16a6425ff003ce16cedb80a6c22c0daa79e29176c64d5681ead8878ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2123aa16a6425ff003ce16cedb80a6c22c0daa79e29176c64d5681ead8878ef->enter($__internal_a2123aa16a6425ff003ce16cedb80a6c22c0daa79e29176c64d5681ead8878ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a2123aa16a6425ff003ce16cedb80a6c22c0daa79e29176c64d5681ead8878ef->leave($__internal_a2123aa16a6425ff003ce16cedb80a6c22c0daa79e29176c64d5681ead8878ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
