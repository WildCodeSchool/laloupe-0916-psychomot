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
        $__internal_8b8d922d8d00609f9c7858c347849b97d53842c510ae4d702fbd8909b7fce2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8d922d8d00609f9c7858c347849b97d53842c510ae4d702fbd8909b7fce2d9->enter($__internal_8b8d922d8d00609f9c7858c347849b97d53842c510ae4d702fbd8909b7fce2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8d922d8d00609f9c7858c347849b97d53842c510ae4d702fbd8909b7fce2d9->leave($__internal_8b8d922d8d00609f9c7858c347849b97d53842c510ae4d702fbd8909b7fce2d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4085c810cb1c0bb6057719a233c752df5dc0797283ca7c18dfc76c93610c35d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4085c810cb1c0bb6057719a233c752df5dc0797283ca7c18dfc76c93610c35d3->enter($__internal_4085c810cb1c0bb6057719a233c752df5dc0797283ca7c18dfc76c93610c35d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4085c810cb1c0bb6057719a233c752df5dc0797283ca7c18dfc76c93610c35d3->leave($__internal_4085c810cb1c0bb6057719a233c752df5dc0797283ca7c18dfc76c93610c35d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_011b3c2c90f430a01eeb25df563775acf79cbaf9efb06328db8cb6a41da3b7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011b3c2c90f430a01eeb25df563775acf79cbaf9efb06328db8cb6a41da3b7e9->enter($__internal_011b3c2c90f430a01eeb25df563775acf79cbaf9efb06328db8cb6a41da3b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_011b3c2c90f430a01eeb25df563775acf79cbaf9efb06328db8cb6a41da3b7e9->leave($__internal_011b3c2c90f430a01eeb25df563775acf79cbaf9efb06328db8cb6a41da3b7e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee3d9a44a4320dc90a15e76f13d6e336f50be76da1ad6dc17cdcbdf5f47096da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3d9a44a4320dc90a15e76f13d6e336f50be76da1ad6dc17cdcbdf5f47096da->enter($__internal_ee3d9a44a4320dc90a15e76f13d6e336f50be76da1ad6dc17cdcbdf5f47096da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ee3d9a44a4320dc90a15e76f13d6e336f50be76da1ad6dc17cdcbdf5f47096da->leave($__internal_ee3d9a44a4320dc90a15e76f13d6e336f50be76da1ad6dc17cdcbdf5f47096da_prof);

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
