<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c37878f30ba6c4b63444e0994b7d307e7c15c4db270efcaff6ab01dc9455d645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_53813719348c003427b63dd1d690c23b8e4f0933d33682334eb05c1b536015ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53813719348c003427b63dd1d690c23b8e4f0933d33682334eb05c1b536015ab->enter($__internal_53813719348c003427b63dd1d690c23b8e4f0933d33682334eb05c1b536015ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53813719348c003427b63dd1d690c23b8e4f0933d33682334eb05c1b536015ab->leave($__internal_53813719348c003427b63dd1d690c23b8e4f0933d33682334eb05c1b536015ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f754cec811e0c1e1a4b23fd924a0c9c2f946e3b3fedbc805fb2a9f36bc24fb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f754cec811e0c1e1a4b23fd924a0c9c2f946e3b3fedbc805fb2a9f36bc24fb79->enter($__internal_f754cec811e0c1e1a4b23fd924a0c9c2f946e3b3fedbc805fb2a9f36bc24fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f754cec811e0c1e1a4b23fd924a0c9c2f946e3b3fedbc805fb2a9f36bc24fb79->leave($__internal_f754cec811e0c1e1a4b23fd924a0c9c2f946e3b3fedbc805fb2a9f36bc24fb79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
