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
        $__internal_f56bec8bae39e50fc7b00fe1ae26bf21603d3999616c5b6201d3690b5765cbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56bec8bae39e50fc7b00fe1ae26bf21603d3999616c5b6201d3690b5765cbf2->enter($__internal_f56bec8bae39e50fc7b00fe1ae26bf21603d3999616c5b6201d3690b5765cbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56bec8bae39e50fc7b00fe1ae26bf21603d3999616c5b6201d3690b5765cbf2->leave($__internal_f56bec8bae39e50fc7b00fe1ae26bf21603d3999616c5b6201d3690b5765cbf2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3ab5214a2f18c5bc5563a91e482993e9e7f8903fb9e021126de2d648e5fabbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ab5214a2f18c5bc5563a91e482993e9e7f8903fb9e021126de2d648e5fabbe->enter($__internal_d3ab5214a2f18c5bc5563a91e482993e9e7f8903fb9e021126de2d648e5fabbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d3ab5214a2f18c5bc5563a91e482993e9e7f8903fb9e021126de2d648e5fabbe->leave($__internal_d3ab5214a2f18c5bc5563a91e482993e9e7f8903fb9e021126de2d648e5fabbe_prof);

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
