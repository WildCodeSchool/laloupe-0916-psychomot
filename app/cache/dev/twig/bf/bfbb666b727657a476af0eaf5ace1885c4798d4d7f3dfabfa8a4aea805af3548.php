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
        $__internal_72e92ad3cfa1e361ae31409120ac5a1db0273308a78208f6a4783dd5fe1240fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e92ad3cfa1e361ae31409120ac5a1db0273308a78208f6a4783dd5fe1240fa->enter($__internal_72e92ad3cfa1e361ae31409120ac5a1db0273308a78208f6a4783dd5fe1240fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e92ad3cfa1e361ae31409120ac5a1db0273308a78208f6a4783dd5fe1240fa->leave($__internal_72e92ad3cfa1e361ae31409120ac5a1db0273308a78208f6a4783dd5fe1240fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fe811140b1fd59dee05108c29676223373835e5c6837fea0c39621e8a71f23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe811140b1fd59dee05108c29676223373835e5c6837fea0c39621e8a71f23f->enter($__internal_2fe811140b1fd59dee05108c29676223373835e5c6837fea0c39621e8a71f23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2fe811140b1fd59dee05108c29676223373835e5c6837fea0c39621e8a71f23f->leave($__internal_2fe811140b1fd59dee05108c29676223373835e5c6837fea0c39621e8a71f23f_prof);

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
