<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e7f3463867cd238a5f3051f75c361238b7290e74d44e4b9bdd55936d4bfd3184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_97fe6c98726d3b8a029ee6fb89d7774a4af61293ddf649d9054644ae6490e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fe6c98726d3b8a029ee6fb89d7774a4af61293ddf649d9054644ae6490e744->enter($__internal_97fe6c98726d3b8a029ee6fb89d7774a4af61293ddf649d9054644ae6490e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fe6c98726d3b8a029ee6fb89d7774a4af61293ddf649d9054644ae6490e744->leave($__internal_97fe6c98726d3b8a029ee6fb89d7774a4af61293ddf649d9054644ae6490e744_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44980c68953ba4bb7d3324fa552392168cce978f911d5fed772df87bb1161e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44980c68953ba4bb7d3324fa552392168cce978f911d5fed772df87bb1161e5f->enter($__internal_44980c68953ba4bb7d3324fa552392168cce978f911d5fed772df87bb1161e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_44980c68953ba4bb7d3324fa552392168cce978f911d5fed772df87bb1161e5f->leave($__internal_44980c68953ba4bb7d3324fa552392168cce978f911d5fed772df87bb1161e5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
