<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_95001b6573b55455f7a39c688e5bc70c330d836d1348883d15f27b2c4553bbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0b5127662a9c3bc4fd8c37e1d1c24137f9ca6ae5e65a3041a53194f19d90ec19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5127662a9c3bc4fd8c37e1d1c24137f9ca6ae5e65a3041a53194f19d90ec19->enter($__internal_0b5127662a9c3bc4fd8c37e1d1c24137f9ca6ae5e65a3041a53194f19d90ec19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5127662a9c3bc4fd8c37e1d1c24137f9ca6ae5e65a3041a53194f19d90ec19->leave($__internal_0b5127662a9c3bc4fd8c37e1d1c24137f9ca6ae5e65a3041a53194f19d90ec19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c0555b33b0117c5feb7c0c9faab8b6ff296eac24a61827da7fc057344927fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0555b33b0117c5feb7c0c9faab8b6ff296eac24a61827da7fc057344927fd3->enter($__internal_1c0555b33b0117c5feb7c0c9faab8b6ff296eac24a61827da7fc057344927fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1c0555b33b0117c5feb7c0c9faab8b6ff296eac24a61827da7fc057344927fd3->leave($__internal_1c0555b33b0117c5feb7c0c9faab8b6ff296eac24a61827da7fc057344927fd3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
