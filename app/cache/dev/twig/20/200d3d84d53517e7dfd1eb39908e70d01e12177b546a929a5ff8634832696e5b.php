<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1ebfcd7faf7ac89afbf975b4465e6ee457d606fa4381ed0d3c49636b3fc64a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fd20c597859c520362fdf67dda00b1965cde3f2ba5dec328cc90503eb7387125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd20c597859c520362fdf67dda00b1965cde3f2ba5dec328cc90503eb7387125->enter($__internal_fd20c597859c520362fdf67dda00b1965cde3f2ba5dec328cc90503eb7387125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd20c597859c520362fdf67dda00b1965cde3f2ba5dec328cc90503eb7387125->leave($__internal_fd20c597859c520362fdf67dda00b1965cde3f2ba5dec328cc90503eb7387125_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_090cbabdd0b8ce7bab5c4f8a6ee3790d9599a5546af6db14a5e05681ed6daaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090cbabdd0b8ce7bab5c4f8a6ee3790d9599a5546af6db14a5e05681ed6daaf0->enter($__internal_090cbabdd0b8ce7bab5c4f8a6ee3790d9599a5546af6db14a5e05681ed6daaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_090cbabdd0b8ce7bab5c4f8a6ee3790d9599a5546af6db14a5e05681ed6daaf0->leave($__internal_090cbabdd0b8ce7bab5c4f8a6ee3790d9599a5546af6db14a5e05681ed6daaf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
