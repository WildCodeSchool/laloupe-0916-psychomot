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
        $__internal_d33060c98bb63d771bf039ac4c9b783c7370fb18ef22e0767a00d90c97c324be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33060c98bb63d771bf039ac4c9b783c7370fb18ef22e0767a00d90c97c324be->enter($__internal_d33060c98bb63d771bf039ac4c9b783c7370fb18ef22e0767a00d90c97c324be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d33060c98bb63d771bf039ac4c9b783c7370fb18ef22e0767a00d90c97c324be->leave($__internal_d33060c98bb63d771bf039ac4c9b783c7370fb18ef22e0767a00d90c97c324be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_241aa3a7cb484c613122cb877b51e3c225491282db55c7ce0820b8829f3c8123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241aa3a7cb484c613122cb877b51e3c225491282db55c7ce0820b8829f3c8123->enter($__internal_241aa3a7cb484c613122cb877b51e3c225491282db55c7ce0820b8829f3c8123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_241aa3a7cb484c613122cb877b51e3c225491282db55c7ce0820b8829f3c8123->leave($__internal_241aa3a7cb484c613122cb877b51e3c225491282db55c7ce0820b8829f3c8123_prof);

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
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
