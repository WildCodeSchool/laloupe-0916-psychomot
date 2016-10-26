<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b04386e6d3abcddbaca96fde9a6fd05cb6d16049d64701a88e9ee53fbd884a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3d1c86df2abcfb9e989cf2fd0f3fc10783254e9fd78e4cb3285c5e380bed17a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1c86df2abcfb9e989cf2fd0f3fc10783254e9fd78e4cb3285c5e380bed17a1->enter($__internal_3d1c86df2abcfb9e989cf2fd0f3fc10783254e9fd78e4cb3285c5e380bed17a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1c86df2abcfb9e989cf2fd0f3fc10783254e9fd78e4cb3285c5e380bed17a1->leave($__internal_3d1c86df2abcfb9e989cf2fd0f3fc10783254e9fd78e4cb3285c5e380bed17a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3419bb42d585e922cd6bc8be3187122f62a1d07e2985c9cdb51d7127770d0e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419bb42d585e922cd6bc8be3187122f62a1d07e2985c9cdb51d7127770d0e4e->enter($__internal_3419bb42d585e922cd6bc8be3187122f62a1d07e2985c9cdb51d7127770d0e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3419bb42d585e922cd6bc8be3187122f62a1d07e2985c9cdb51d7127770d0e4e->leave($__internal_3419bb42d585e922cd6bc8be3187122f62a1d07e2985c9cdb51d7127770d0e4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
