<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6307fe16c25e8e075717f6262eec67fb4035739e77119eb55c70d362aa411597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_fce2f35e8a1bdaef3e00f9ab137b034097e8dbeb987e72b037f375345843d5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce2f35e8a1bdaef3e00f9ab137b034097e8dbeb987e72b037f375345843d5d4->enter($__internal_fce2f35e8a1bdaef3e00f9ab137b034097e8dbeb987e72b037f375345843d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce2f35e8a1bdaef3e00f9ab137b034097e8dbeb987e72b037f375345843d5d4->leave($__internal_fce2f35e8a1bdaef3e00f9ab137b034097e8dbeb987e72b037f375345843d5d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06cb6a5d83cdd7998a8847801b7f5397be5d8a7383311120c26c0da76c4a3be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cb6a5d83cdd7998a8847801b7f5397be5d8a7383311120c26c0da76c4a3be3->enter($__internal_06cb6a5d83cdd7998a8847801b7f5397be5d8a7383311120c26c0da76c4a3be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_06cb6a5d83cdd7998a8847801b7f5397be5d8a7383311120c26c0da76c4a3be3->leave($__internal_06cb6a5d83cdd7998a8847801b7f5397be5d8a7383311120c26c0da76c4a3be3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
