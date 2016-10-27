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
        $__internal_04a11c3810f361f8bc689c382b2e8d2f58d0bbe54175db5f3bbebc9c778dd4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a11c3810f361f8bc689c382b2e8d2f58d0bbe54175db5f3bbebc9c778dd4d5->enter($__internal_04a11c3810f361f8bc689c382b2e8d2f58d0bbe54175db5f3bbebc9c778dd4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a11c3810f361f8bc689c382b2e8d2f58d0bbe54175db5f3bbebc9c778dd4d5->leave($__internal_04a11c3810f361f8bc689c382b2e8d2f58d0bbe54175db5f3bbebc9c778dd4d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a467b5e7c5b5f0e4d8ce3f7902b2d3bc69037e37e4ce194f34fd75cd0be693ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a467b5e7c5b5f0e4d8ce3f7902b2d3bc69037e37e4ce194f34fd75cd0be693ad->enter($__internal_a467b5e7c5b5f0e4d8ce3f7902b2d3bc69037e37e4ce194f34fd75cd0be693ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_a467b5e7c5b5f0e4d8ce3f7902b2d3bc69037e37e4ce194f34fd75cd0be693ad->leave($__internal_a467b5e7c5b5f0e4d8ce3f7902b2d3bc69037e37e4ce194f34fd75cd0be693ad_prof);

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
