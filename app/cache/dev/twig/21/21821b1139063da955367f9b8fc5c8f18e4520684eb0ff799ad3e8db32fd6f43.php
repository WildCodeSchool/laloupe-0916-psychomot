<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1f90a60e9c367a0e9a6796416ea4ee4e55a9e52af19800c4524100844f0d23c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_642e8cb1220281f6e8467a1a38a5415955b0b78c2103a07eb4097a3427c70cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642e8cb1220281f6e8467a1a38a5415955b0b78c2103a07eb4097a3427c70cf5->enter($__internal_642e8cb1220281f6e8467a1a38a5415955b0b78c2103a07eb4097a3427c70cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642e8cb1220281f6e8467a1a38a5415955b0b78c2103a07eb4097a3427c70cf5->leave($__internal_642e8cb1220281f6e8467a1a38a5415955b0b78c2103a07eb4097a3427c70cf5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6db0443f191e9fb97db802e97417758fc260a9d856c4acffe45c0d5828bf02b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db0443f191e9fb97db802e97417758fc260a9d856c4acffe45c0d5828bf02b8->enter($__internal_6db0443f191e9fb97db802e97417758fc260a9d856c4acffe45c0d5828bf02b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6db0443f191e9fb97db802e97417758fc260a9d856c4acffe45c0d5828bf02b8->leave($__internal_6db0443f191e9fb97db802e97417758fc260a9d856c4acffe45c0d5828bf02b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
