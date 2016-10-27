<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4a45ed23ecae4280636a0dcaf3e32831bb53ed8784e6b24b86135b37dc37e649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_36a6ae8b6d8db84a2d1dd7038b0170f22cb42bda1e7899da1fff44ba16cd0592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a6ae8b6d8db84a2d1dd7038b0170f22cb42bda1e7899da1fff44ba16cd0592->enter($__internal_36a6ae8b6d8db84a2d1dd7038b0170f22cb42bda1e7899da1fff44ba16cd0592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a6ae8b6d8db84a2d1dd7038b0170f22cb42bda1e7899da1fff44ba16cd0592->leave($__internal_36a6ae8b6d8db84a2d1dd7038b0170f22cb42bda1e7899da1fff44ba16cd0592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d8d7d16a5236bbb263455e495fbbb1889db1515a90d4cc259f5ff33ca79a423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8d7d16a5236bbb263455e495fbbb1889db1515a90d4cc259f5ff33ca79a423->enter($__internal_0d8d7d16a5236bbb263455e495fbbb1889db1515a90d4cc259f5ff33ca79a423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0d8d7d16a5236bbb263455e495fbbb1889db1515a90d4cc259f5ff33ca79a423->leave($__internal_0d8d7d16a5236bbb263455e495fbbb1889db1515a90d4cc259f5ff33ca79a423_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
