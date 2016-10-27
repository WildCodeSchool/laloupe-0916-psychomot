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
        $__internal_71dbb69ba6c842ed18cdb01742ce8e2834a17a641c6aaeb2b56c8e8ad776bbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dbb69ba6c842ed18cdb01742ce8e2834a17a641c6aaeb2b56c8e8ad776bbb2->enter($__internal_71dbb69ba6c842ed18cdb01742ce8e2834a17a641c6aaeb2b56c8e8ad776bbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71dbb69ba6c842ed18cdb01742ce8e2834a17a641c6aaeb2b56c8e8ad776bbb2->leave($__internal_71dbb69ba6c842ed18cdb01742ce8e2834a17a641c6aaeb2b56c8e8ad776bbb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f500c51296802121f111505b38a526b162bfd1c8deaf20c68f5425f145415c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f500c51296802121f111505b38a526b162bfd1c8deaf20c68f5425f145415c8->enter($__internal_1f500c51296802121f111505b38a526b162bfd1c8deaf20c68f5425f145415c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1f500c51296802121f111505b38a526b162bfd1c8deaf20c68f5425f145415c8->leave($__internal_1f500c51296802121f111505b38a526b162bfd1c8deaf20c68f5425f145415c8_prof);

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
