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
        $__internal_f163e9caeebc1df4838ce6df279c81b18bcc8819e0feff003694504ae319bede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f163e9caeebc1df4838ce6df279c81b18bcc8819e0feff003694504ae319bede->enter($__internal_f163e9caeebc1df4838ce6df279c81b18bcc8819e0feff003694504ae319bede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f163e9caeebc1df4838ce6df279c81b18bcc8819e0feff003694504ae319bede->leave($__internal_f163e9caeebc1df4838ce6df279c81b18bcc8819e0feff003694504ae319bede_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34a3063ed2aa31a13bf028090853e30efe01f75211f3bc4787078f18ca48f29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a3063ed2aa31a13bf028090853e30efe01f75211f3bc4787078f18ca48f29c->enter($__internal_34a3063ed2aa31a13bf028090853e30efe01f75211f3bc4787078f18ca48f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_34a3063ed2aa31a13bf028090853e30efe01f75211f3bc4787078f18ca48f29c->leave($__internal_34a3063ed2aa31a13bf028090853e30efe01f75211f3bc4787078f18ca48f29c_prof);

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
