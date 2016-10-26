<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e169b122daa29f5f44659642bab799effcb1e473dd5ffe1f43399dbd177ba78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_31f92670568ebc824415b9b051714d6b4307bd1d97b5d83a49791eeb7cb3ec16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f92670568ebc824415b9b051714d6b4307bd1d97b5d83a49791eeb7cb3ec16->enter($__internal_31f92670568ebc824415b9b051714d6b4307bd1d97b5d83a49791eeb7cb3ec16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f92670568ebc824415b9b051714d6b4307bd1d97b5d83a49791eeb7cb3ec16->leave($__internal_31f92670568ebc824415b9b051714d6b4307bd1d97b5d83a49791eeb7cb3ec16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1ee006180cdca00e6eec6273928c08df4a28267e63607a507b0f5109668d66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ee006180cdca00e6eec6273928c08df4a28267e63607a507b0f5109668d66a->enter($__internal_c1ee006180cdca00e6eec6273928c08df4a28267e63607a507b0f5109668d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c1ee006180cdca00e6eec6273928c08df4a28267e63607a507b0f5109668d66a->leave($__internal_c1ee006180cdca00e6eec6273928c08df4a28267e63607a507b0f5109668d66a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
