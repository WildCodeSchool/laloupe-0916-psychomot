<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8d6f59ab5c0fec3ccbad6c4bbbb66e8768d80951ee3db87da2b0b656899c65eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676->enter($__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676->leave($__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978->enter($__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978->leave($__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4->enter($__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4->leave($__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704->enter($__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704->leave($__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
