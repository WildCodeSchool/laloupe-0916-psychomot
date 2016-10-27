<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_44d94cfc244490cb741c84252a06604f09c6b33daf9a6cbd80c38da2cd3d43e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_18b1e89ef2e0222765ca66d9e4b76b9bc30f02952aa6191e560bdcc0f0504b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b1e89ef2e0222765ca66d9e4b76b9bc30f02952aa6191e560bdcc0f0504b71->enter($__internal_18b1e89ef2e0222765ca66d9e4b76b9bc30f02952aa6191e560bdcc0f0504b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b1e89ef2e0222765ca66d9e4b76b9bc30f02952aa6191e560bdcc0f0504b71->leave($__internal_18b1e89ef2e0222765ca66d9e4b76b9bc30f02952aa6191e560bdcc0f0504b71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45abcf246787e4c82a14bcec5bce08be459d2bf80053b49f3764e370176ae0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45abcf246787e4c82a14bcec5bce08be459d2bf80053b49f3764e370176ae0cb->enter($__internal_45abcf246787e4c82a14bcec5bce08be459d2bf80053b49f3764e370176ae0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_45abcf246787e4c82a14bcec5bce08be459d2bf80053b49f3764e370176ae0cb->leave($__internal_45abcf246787e4c82a14bcec5bce08be459d2bf80053b49f3764e370176ae0cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
