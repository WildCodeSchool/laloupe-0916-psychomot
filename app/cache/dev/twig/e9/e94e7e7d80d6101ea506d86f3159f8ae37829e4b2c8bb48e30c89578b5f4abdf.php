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
        $__internal_ec18869dbdc975ee2279c7b57fdfb7636fbc27c633c7118f9d893586c5f3f8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec18869dbdc975ee2279c7b57fdfb7636fbc27c633c7118f9d893586c5f3f8b5->enter($__internal_ec18869dbdc975ee2279c7b57fdfb7636fbc27c633c7118f9d893586c5f3f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec18869dbdc975ee2279c7b57fdfb7636fbc27c633c7118f9d893586c5f3f8b5->leave($__internal_ec18869dbdc975ee2279c7b57fdfb7636fbc27c633c7118f9d893586c5f3f8b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebdbd5aa466917feca39eeebc4e144f36113e350b1dc4e9ad04a4372f25c78a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdbd5aa466917feca39eeebc4e144f36113e350b1dc4e9ad04a4372f25c78a4->enter($__internal_ebdbd5aa466917feca39eeebc4e144f36113e350b1dc4e9ad04a4372f25c78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebdbd5aa466917feca39eeebc4e144f36113e350b1dc4e9ad04a4372f25c78a4->leave($__internal_ebdbd5aa466917feca39eeebc4e144f36113e350b1dc4e9ad04a4372f25c78a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aea0c7f65210f96ec5aa948a2c8a5a2b3a30215ca537aa26d6e10d66b3b110a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea0c7f65210f96ec5aa948a2c8a5a2b3a30215ca537aa26d6e10d66b3b110a3->enter($__internal_aea0c7f65210f96ec5aa948a2c8a5a2b3a30215ca537aa26d6e10d66b3b110a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aea0c7f65210f96ec5aa948a2c8a5a2b3a30215ca537aa26d6e10d66b3b110a3->leave($__internal_aea0c7f65210f96ec5aa948a2c8a5a2b3a30215ca537aa26d6e10d66b3b110a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e1484762d84accdb47e117babe0cbad44b50b94fbe57506ddf763791a792401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1484762d84accdb47e117babe0cbad44b50b94fbe57506ddf763791a792401->enter($__internal_7e1484762d84accdb47e117babe0cbad44b50b94fbe57506ddf763791a792401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7e1484762d84accdb47e117babe0cbad44b50b94fbe57506ddf763791a792401->leave($__internal_7e1484762d84accdb47e117babe0cbad44b50b94fbe57506ddf763791a792401_prof);

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
