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
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89->enter($__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89->leave($__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c->enter($__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c->leave($__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f->enter($__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f->leave($__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e->enter($__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e->leave($__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e_prof);

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
