<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c37878f30ba6c4b63444e0994b7d307e7c15c4db270efcaff6ab01dc9455d645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d3c8c4936aef79bc738931bac62bb50365be1c2367fd632555bfc561b5ef18cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c8c4936aef79bc738931bac62bb50365be1c2367fd632555bfc561b5ef18cc->enter($__internal_d3c8c4936aef79bc738931bac62bb50365be1c2367fd632555bfc561b5ef18cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c8c4936aef79bc738931bac62bb50365be1c2367fd632555bfc561b5ef18cc->leave($__internal_d3c8c4936aef79bc738931bac62bb50365be1c2367fd632555bfc561b5ef18cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40f7c63856b789c8f55f09f63ee80da8e222729a4c3a65ef21b449aa72cca60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f7c63856b789c8f55f09f63ee80da8e222729a4c3a65ef21b449aa72cca60a->enter($__internal_40f7c63856b789c8f55f09f63ee80da8e222729a4c3a65ef21b449aa72cca60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_40f7c63856b789c8f55f09f63ee80da8e222729a4c3a65ef21b449aa72cca60a->leave($__internal_40f7c63856b789c8f55f09f63ee80da8e222729a4c3a65ef21b449aa72cca60a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
