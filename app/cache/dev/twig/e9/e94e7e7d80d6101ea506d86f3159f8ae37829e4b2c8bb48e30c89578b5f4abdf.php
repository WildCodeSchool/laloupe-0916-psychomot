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
        $__internal_418db06258eb3e22965ffb8b594d1acbccbc3758b25121ce33fa2f79dbba5c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418db06258eb3e22965ffb8b594d1acbccbc3758b25121ce33fa2f79dbba5c5f->enter($__internal_418db06258eb3e22965ffb8b594d1acbccbc3758b25121ce33fa2f79dbba5c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418db06258eb3e22965ffb8b594d1acbccbc3758b25121ce33fa2f79dbba5c5f->leave($__internal_418db06258eb3e22965ffb8b594d1acbccbc3758b25121ce33fa2f79dbba5c5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2501c176a8d8971f07670e44d2ff6913384de93aa770d7da9e87f07386c46034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2501c176a8d8971f07670e44d2ff6913384de93aa770d7da9e87f07386c46034->enter($__internal_2501c176a8d8971f07670e44d2ff6913384de93aa770d7da9e87f07386c46034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2501c176a8d8971f07670e44d2ff6913384de93aa770d7da9e87f07386c46034->leave($__internal_2501c176a8d8971f07670e44d2ff6913384de93aa770d7da9e87f07386c46034_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3cb973acba7e6a77214c3a76e596ac566a91e874ba55f41f60956d23f1a43d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cb973acba7e6a77214c3a76e596ac566a91e874ba55f41f60956d23f1a43d0->enter($__internal_f3cb973acba7e6a77214c3a76e596ac566a91e874ba55f41f60956d23f1a43d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3cb973acba7e6a77214c3a76e596ac566a91e874ba55f41f60956d23f1a43d0->leave($__internal_f3cb973acba7e6a77214c3a76e596ac566a91e874ba55f41f60956d23f1a43d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2bdc7a4da8776d56cb1ce9096a36b5b8f3f7616da32b0f4664b2c8647fef296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bdc7a4da8776d56cb1ce9096a36b5b8f3f7616da32b0f4664b2c8647fef296->enter($__internal_c2bdc7a4da8776d56cb1ce9096a36b5b8f3f7616da32b0f4664b2c8647fef296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2bdc7a4da8776d56cb1ce9096a36b5b8f3f7616da32b0f4664b2c8647fef296->leave($__internal_c2bdc7a4da8776d56cb1ce9096a36b5b8f3f7616da32b0f4664b2c8647fef296_prof);

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
