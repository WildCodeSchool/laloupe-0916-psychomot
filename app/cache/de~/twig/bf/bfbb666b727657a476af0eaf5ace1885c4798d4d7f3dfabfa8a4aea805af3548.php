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
        $__internal_e049f281f07de7b3d3d989929418ae9e2abac9fad5a8e63cadfafc74c20ff014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e049f281f07de7b3d3d989929418ae9e2abac9fad5a8e63cadfafc74c20ff014->enter($__internal_e049f281f07de7b3d3d989929418ae9e2abac9fad5a8e63cadfafc74c20ff014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e049f281f07de7b3d3d989929418ae9e2abac9fad5a8e63cadfafc74c20ff014->leave($__internal_e049f281f07de7b3d3d989929418ae9e2abac9fad5a8e63cadfafc74c20ff014_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc0626495d82a0a29c63a05568d328f415dd91b009c468ca89cdefba00418c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0626495d82a0a29c63a05568d328f415dd91b009c468ca89cdefba00418c27->enter($__internal_cc0626495d82a0a29c63a05568d328f415dd91b009c468ca89cdefba00418c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cc0626495d82a0a29c63a05568d328f415dd91b009c468ca89cdefba00418c27->leave($__internal_cc0626495d82a0a29c63a05568d328f415dd91b009c468ca89cdefba00418c27_prof);

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
