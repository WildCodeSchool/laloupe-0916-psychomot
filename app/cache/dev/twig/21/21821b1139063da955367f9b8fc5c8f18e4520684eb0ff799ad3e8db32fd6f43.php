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
        $__internal_b098dc2b977cc299c72d8c6b623fd968612f5882463ce79b6841eb9d8d5c11bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b098dc2b977cc299c72d8c6b623fd968612f5882463ce79b6841eb9d8d5c11bb->enter($__internal_b098dc2b977cc299c72d8c6b623fd968612f5882463ce79b6841eb9d8d5c11bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b098dc2b977cc299c72d8c6b623fd968612f5882463ce79b6841eb9d8d5c11bb->leave($__internal_b098dc2b977cc299c72d8c6b623fd968612f5882463ce79b6841eb9d8d5c11bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e32138c545b26642bc484031b6bd1b09c6f7a6770f7e12710615fe1234dd0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e32138c545b26642bc484031b6bd1b09c6f7a6770f7e12710615fe1234dd0db->enter($__internal_7e32138c545b26642bc484031b6bd1b09c6f7a6770f7e12710615fe1234dd0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7e32138c545b26642bc484031b6bd1b09c6f7a6770f7e12710615fe1234dd0db->leave($__internal_7e32138c545b26642bc484031b6bd1b09c6f7a6770f7e12710615fe1234dd0db_prof);

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
