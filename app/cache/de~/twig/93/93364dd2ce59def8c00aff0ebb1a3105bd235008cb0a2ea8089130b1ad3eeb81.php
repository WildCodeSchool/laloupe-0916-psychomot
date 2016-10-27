<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_44d94cfc244490cb741c84252a06604f09c6b33daf9a6cbd80c38da2cd3d43e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e08dc8fd8037fc7422b4b2cea18fbd022d0bb3711ffbb88da3621c3bbccb1911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08dc8fd8037fc7422b4b2cea18fbd022d0bb3711ffbb88da3621c3bbccb1911->enter($__internal_e08dc8fd8037fc7422b4b2cea18fbd022d0bb3711ffbb88da3621c3bbccb1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08dc8fd8037fc7422b4b2cea18fbd022d0bb3711ffbb88da3621c3bbccb1911->leave($__internal_e08dc8fd8037fc7422b4b2cea18fbd022d0bb3711ffbb88da3621c3bbccb1911_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb44418bcd85f544b8f069a95b015a473d0d60586cf56f0c35808dcae9fb2fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb44418bcd85f544b8f069a95b015a473d0d60586cf56f0c35808dcae9fb2fc8->enter($__internal_bb44418bcd85f544b8f069a95b015a473d0d60586cf56f0c35808dcae9fb2fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bb44418bcd85f544b8f069a95b015a473d0d60586cf56f0c35808dcae9fb2fc8->leave($__internal_bb44418bcd85f544b8f069a95b015a473d0d60586cf56f0c35808dcae9fb2fc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
