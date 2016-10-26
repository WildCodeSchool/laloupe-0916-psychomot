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
        $__internal_160f8cf7d5a6e32d87d2c898356f2b5847054351af7d972ab56cbb4a8c56bcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160f8cf7d5a6e32d87d2c898356f2b5847054351af7d972ab56cbb4a8c56bcb8->enter($__internal_160f8cf7d5a6e32d87d2c898356f2b5847054351af7d972ab56cbb4a8c56bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160f8cf7d5a6e32d87d2c898356f2b5847054351af7d972ab56cbb4a8c56bcb8->leave($__internal_160f8cf7d5a6e32d87d2c898356f2b5847054351af7d972ab56cbb4a8c56bcb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f7d8e1aa3c634a035e34ff302ebe627ba9b5cba6365fe7dba0b038cfafea491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7d8e1aa3c634a035e34ff302ebe627ba9b5cba6365fe7dba0b038cfafea491->enter($__internal_0f7d8e1aa3c634a035e34ff302ebe627ba9b5cba6365fe7dba0b038cfafea491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0f7d8e1aa3c634a035e34ff302ebe627ba9b5cba6365fe7dba0b038cfafea491->leave($__internal_0f7d8e1aa3c634a035e34ff302ebe627ba9b5cba6365fe7dba0b038cfafea491_prof);

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
