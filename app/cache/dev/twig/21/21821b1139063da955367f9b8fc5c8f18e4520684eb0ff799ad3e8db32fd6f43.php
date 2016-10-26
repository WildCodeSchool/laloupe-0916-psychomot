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
        $__internal_89a148208371577e641bb010810e487dd9b991136c4724d4f838a837ce686b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a148208371577e641bb010810e487dd9b991136c4724d4f838a837ce686b33->enter($__internal_89a148208371577e641bb010810e487dd9b991136c4724d4f838a837ce686b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a148208371577e641bb010810e487dd9b991136c4724d4f838a837ce686b33->leave($__internal_89a148208371577e641bb010810e487dd9b991136c4724d4f838a837ce686b33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f161a8042f629b74b17a2ba4de1ffabe2df241e98b89855b7625a3f16b07b7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f161a8042f629b74b17a2ba4de1ffabe2df241e98b89855b7625a3f16b07b7e6->enter($__internal_f161a8042f629b74b17a2ba4de1ffabe2df241e98b89855b7625a3f16b07b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f161a8042f629b74b17a2ba4de1ffabe2df241e98b89855b7625a3f16b07b7e6->leave($__internal_f161a8042f629b74b17a2ba4de1ffabe2df241e98b89855b7625a3f16b07b7e6_prof);

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
