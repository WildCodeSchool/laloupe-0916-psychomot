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
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd->enter($__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd->leave($__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2->enter($__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2->leave($__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2_prof);

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
