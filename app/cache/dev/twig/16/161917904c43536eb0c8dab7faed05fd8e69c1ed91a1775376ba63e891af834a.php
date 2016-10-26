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
        $__internal_9c573c52aabb28d3b9ac9705da9c8beb0507e3463e4218b1c0839475a7b3599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c573c52aabb28d3b9ac9705da9c8beb0507e3463e4218b1c0839475a7b3599f->enter($__internal_9c573c52aabb28d3b9ac9705da9c8beb0507e3463e4218b1c0839475a7b3599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c573c52aabb28d3b9ac9705da9c8beb0507e3463e4218b1c0839475a7b3599f->leave($__internal_9c573c52aabb28d3b9ac9705da9c8beb0507e3463e4218b1c0839475a7b3599f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c8ce091a4a2130d73852c002a3f52ca541bc4c0cd547a9f1973b3f9d7c42ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8ce091a4a2130d73852c002a3f52ca541bc4c0cd547a9f1973b3f9d7c42ffb->enter($__internal_9c8ce091a4a2130d73852c002a3f52ca541bc4c0cd547a9f1973b3f9d7c42ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_9c8ce091a4a2130d73852c002a3f52ca541bc4c0cd547a9f1973b3f9d7c42ffb->leave($__internal_9c8ce091a4a2130d73852c002a3f52ca541bc4c0cd547a9f1973b3f9d7c42ffb_prof);

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
