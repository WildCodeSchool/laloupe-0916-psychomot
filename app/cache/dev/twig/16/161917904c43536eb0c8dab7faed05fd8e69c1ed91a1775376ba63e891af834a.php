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
        $__internal_6ad6dd0f6d846c25290f5f5467826e95cf4e42448aec06601e073bc2dca69d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad6dd0f6d846c25290f5f5467826e95cf4e42448aec06601e073bc2dca69d72->enter($__internal_6ad6dd0f6d846c25290f5f5467826e95cf4e42448aec06601e073bc2dca69d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad6dd0f6d846c25290f5f5467826e95cf4e42448aec06601e073bc2dca69d72->leave($__internal_6ad6dd0f6d846c25290f5f5467826e95cf4e42448aec06601e073bc2dca69d72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d07a7496f62116882ef6a199695032c51d0014462979fb4681630cab4ff14c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07a7496f62116882ef6a199695032c51d0014462979fb4681630cab4ff14c2->enter($__internal_0d07a7496f62116882ef6a199695032c51d0014462979fb4681630cab4ff14c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0d07a7496f62116882ef6a199695032c51d0014462979fb4681630cab4ff14c2->leave($__internal_0d07a7496f62116882ef6a199695032c51d0014462979fb4681630cab4ff14c2_prof);

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
