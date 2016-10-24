<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_723423c9d34331c901a4212d8626ea87ffaceddf8250ef5af5826440fdc03b2c extends Twig_Template
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
        $__internal_08e5d44fce2e72e6ef1ea90a06fadc2b54c27bcaaf179cb54858430acfaa15c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e5d44fce2e72e6ef1ea90a06fadc2b54c27bcaaf179cb54858430acfaa15c3->enter($__internal_08e5d44fce2e72e6ef1ea90a06fadc2b54c27bcaaf179cb54858430acfaa15c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e5d44fce2e72e6ef1ea90a06fadc2b54c27bcaaf179cb54858430acfaa15c3->leave($__internal_08e5d44fce2e72e6ef1ea90a06fadc2b54c27bcaaf179cb54858430acfaa15c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c15a3f410dcd23e63b7265ee7b0815caed46dbdad48aca0ef209a8c8d48a8bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15a3f410dcd23e63b7265ee7b0815caed46dbdad48aca0ef209a8c8d48a8bbe->enter($__internal_c15a3f410dcd23e63b7265ee7b0815caed46dbdad48aca0ef209a8c8d48a8bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_c15a3f410dcd23e63b7265ee7b0815caed46dbdad48aca0ef209a8c8d48a8bbe->leave($__internal_c15a3f410dcd23e63b7265ee7b0815caed46dbdad48aca0ef209a8c8d48a8bbe_prof);

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
