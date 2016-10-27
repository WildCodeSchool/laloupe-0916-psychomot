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
        $__internal_6a070ab76334539202f9ce2783add8d80be84c20d67eb7e1994a956dcb15d82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a070ab76334539202f9ce2783add8d80be84c20d67eb7e1994a956dcb15d82b->enter($__internal_6a070ab76334539202f9ce2783add8d80be84c20d67eb7e1994a956dcb15d82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a070ab76334539202f9ce2783add8d80be84c20d67eb7e1994a956dcb15d82b->leave($__internal_6a070ab76334539202f9ce2783add8d80be84c20d67eb7e1994a956dcb15d82b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a45c71bdfa1a4c7326c47f6bb87b9511fae6c976da77af0c2ca95a26ce74ef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45c71bdfa1a4c7326c47f6bb87b9511fae6c976da77af0c2ca95a26ce74ef07->enter($__internal_a45c71bdfa1a4c7326c47f6bb87b9511fae6c976da77af0c2ca95a26ce74ef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a45c71bdfa1a4c7326c47f6bb87b9511fae6c976da77af0c2ca95a26ce74ef07->leave($__internal_a45c71bdfa1a4c7326c47f6bb87b9511fae6c976da77af0c2ca95a26ce74ef07_prof);

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
