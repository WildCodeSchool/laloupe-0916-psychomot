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
        $__internal_da24f63072507a399b6ccfb4f3c27cd2bbeb9ee9478762c6f8cc32a531061fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da24f63072507a399b6ccfb4f3c27cd2bbeb9ee9478762c6f8cc32a531061fae->enter($__internal_da24f63072507a399b6ccfb4f3c27cd2bbeb9ee9478762c6f8cc32a531061fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da24f63072507a399b6ccfb4f3c27cd2bbeb9ee9478762c6f8cc32a531061fae->leave($__internal_da24f63072507a399b6ccfb4f3c27cd2bbeb9ee9478762c6f8cc32a531061fae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5043ac1732627a4f689888ad98d0d939491382cb062776205ac4a4601ae8bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5043ac1732627a4f689888ad98d0d939491382cb062776205ac4a4601ae8bbe->enter($__internal_c5043ac1732627a4f689888ad98d0d939491382cb062776205ac4a4601ae8bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c5043ac1732627a4f689888ad98d0d939491382cb062776205ac4a4601ae8bbe->leave($__internal_c5043ac1732627a4f689888ad98d0d939491382cb062776205ac4a4601ae8bbe_prof);

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
