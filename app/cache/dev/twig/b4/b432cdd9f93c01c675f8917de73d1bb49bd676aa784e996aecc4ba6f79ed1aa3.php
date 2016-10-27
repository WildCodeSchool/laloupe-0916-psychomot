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
        $__internal_fde4da21ad78ec81954b1dc370e3fbacfa341e6c6d07d0c2f3ed92d3239412fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde4da21ad78ec81954b1dc370e3fbacfa341e6c6d07d0c2f3ed92d3239412fd->enter($__internal_fde4da21ad78ec81954b1dc370e3fbacfa341e6c6d07d0c2f3ed92d3239412fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde4da21ad78ec81954b1dc370e3fbacfa341e6c6d07d0c2f3ed92d3239412fd->leave($__internal_fde4da21ad78ec81954b1dc370e3fbacfa341e6c6d07d0c2f3ed92d3239412fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3e86ba7816bf8950006c7c6344a6bee24f9cd756cbea46ca0396d54530535de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e86ba7816bf8950006c7c6344a6bee24f9cd756cbea46ca0396d54530535de->enter($__internal_c3e86ba7816bf8950006c7c6344a6bee24f9cd756cbea46ca0396d54530535de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c3e86ba7816bf8950006c7c6344a6bee24f9cd756cbea46ca0396d54530535de->leave($__internal_c3e86ba7816bf8950006c7c6344a6bee24f9cd756cbea46ca0396d54530535de_prof);

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
