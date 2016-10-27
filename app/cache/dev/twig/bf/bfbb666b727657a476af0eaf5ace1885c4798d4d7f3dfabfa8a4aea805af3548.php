<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b04386e6d3abcddbaca96fde9a6fd05cb6d16049d64701a88e9ee53fbd884a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2637287fe05e9f3c179dd0edb30181d55aa9974ee726caf449b8bce28f7a67ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2637287fe05e9f3c179dd0edb30181d55aa9974ee726caf449b8bce28f7a67ff->enter($__internal_2637287fe05e9f3c179dd0edb30181d55aa9974ee726caf449b8bce28f7a67ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2637287fe05e9f3c179dd0edb30181d55aa9974ee726caf449b8bce28f7a67ff->leave($__internal_2637287fe05e9f3c179dd0edb30181d55aa9974ee726caf449b8bce28f7a67ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_720730b6d6f6a82d2706353abb04f5990b43cfa88039737c5179589957a7a6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720730b6d6f6a82d2706353abb04f5990b43cfa88039737c5179589957a7a6fe->enter($__internal_720730b6d6f6a82d2706353abb04f5990b43cfa88039737c5179589957a7a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_720730b6d6f6a82d2706353abb04f5990b43cfa88039737c5179589957a7a6fe->leave($__internal_720730b6d6f6a82d2706353abb04f5990b43cfa88039737c5179589957a7a6fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
