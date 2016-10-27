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
        $__internal_6b6f3e0f7ecc4f1bc112c2fc5b7d35786da6851328b2b81c79a5d4fb05f96d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f3e0f7ecc4f1bc112c2fc5b7d35786da6851328b2b81c79a5d4fb05f96d53->enter($__internal_6b6f3e0f7ecc4f1bc112c2fc5b7d35786da6851328b2b81c79a5d4fb05f96d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6f3e0f7ecc4f1bc112c2fc5b7d35786da6851328b2b81c79a5d4fb05f96d53->leave($__internal_6b6f3e0f7ecc4f1bc112c2fc5b7d35786da6851328b2b81c79a5d4fb05f96d53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2942295677f8e42814678ed155a114534b5355315725f76155c2189fd78ecf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2942295677f8e42814678ed155a114534b5355315725f76155c2189fd78ecf65->enter($__internal_2942295677f8e42814678ed155a114534b5355315725f76155c2189fd78ecf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2942295677f8e42814678ed155a114534b5355315725f76155c2189fd78ecf65->leave($__internal_2942295677f8e42814678ed155a114534b5355315725f76155c2189fd78ecf65_prof);

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
