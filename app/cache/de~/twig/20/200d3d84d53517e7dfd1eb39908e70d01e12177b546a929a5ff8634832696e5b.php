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
        $__internal_863b05d640420cb80d0e13629f668ec1ce87e4a0ed070899e6ee780e83439f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b05d640420cb80d0e13629f668ec1ce87e4a0ed070899e6ee780e83439f8b->enter($__internal_863b05d640420cb80d0e13629f668ec1ce87e4a0ed070899e6ee780e83439f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863b05d640420cb80d0e13629f668ec1ce87e4a0ed070899e6ee780e83439f8b->leave($__internal_863b05d640420cb80d0e13629f668ec1ce87e4a0ed070899e6ee780e83439f8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666282cd03485ed9b24c043852534eb2fd04416f8b9161b1cb93aa2bb68352c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666282cd03485ed9b24c043852534eb2fd04416f8b9161b1cb93aa2bb68352c1->enter($__internal_666282cd03485ed9b24c043852534eb2fd04416f8b9161b1cb93aa2bb68352c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_666282cd03485ed9b24c043852534eb2fd04416f8b9161b1cb93aa2bb68352c1->leave($__internal_666282cd03485ed9b24c043852534eb2fd04416f8b9161b1cb93aa2bb68352c1_prof);

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
