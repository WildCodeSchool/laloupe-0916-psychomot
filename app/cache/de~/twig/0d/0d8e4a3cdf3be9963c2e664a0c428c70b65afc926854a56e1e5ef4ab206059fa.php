<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1552227359fa9bf4c94e41afb5f877d3bc976a17a299ccacb8e49f94d22aa9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d5de4e8d6f185948ed13f6786c6721011643ccdbf8e008386bbc74d906508fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5de4e8d6f185948ed13f6786c6721011643ccdbf8e008386bbc74d906508fc9->enter($__internal_d5de4e8d6f185948ed13f6786c6721011643ccdbf8e008386bbc74d906508fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5de4e8d6f185948ed13f6786c6721011643ccdbf8e008386bbc74d906508fc9->leave($__internal_d5de4e8d6f185948ed13f6786c6721011643ccdbf8e008386bbc74d906508fc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e46a2ba5d2e8c6b4ea7cb120422c3a55fe8e43be8aa34e132e1896f7b3acec38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46a2ba5d2e8c6b4ea7cb120422c3a55fe8e43be8aa34e132e1896f7b3acec38->enter($__internal_e46a2ba5d2e8c6b4ea7cb120422c3a55fe8e43be8aa34e132e1896f7b3acec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e46a2ba5d2e8c6b4ea7cb120422c3a55fe8e43be8aa34e132e1896f7b3acec38->leave($__internal_e46a2ba5d2e8c6b4ea7cb120422c3a55fe8e43be8aa34e132e1896f7b3acec38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
