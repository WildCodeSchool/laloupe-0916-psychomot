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
        $__internal_0d93e09f346ec5f292284ec470a891b355eb52bcf44bd3874236d83bb1ae852d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d93e09f346ec5f292284ec470a891b355eb52bcf44bd3874236d83bb1ae852d->enter($__internal_0d93e09f346ec5f292284ec470a891b355eb52bcf44bd3874236d83bb1ae852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d93e09f346ec5f292284ec470a891b355eb52bcf44bd3874236d83bb1ae852d->leave($__internal_0d93e09f346ec5f292284ec470a891b355eb52bcf44bd3874236d83bb1ae852d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca137c2f6d3bc777cdfe290c390cb499cba50c12b4f9009e6beab06c7de6408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca137c2f6d3bc777cdfe290c390cb499cba50c12b4f9009e6beab06c7de6408->enter($__internal_0ca137c2f6d3bc777cdfe290c390cb499cba50c12b4f9009e6beab06c7de6408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0ca137c2f6d3bc777cdfe290c390cb499cba50c12b4f9009e6beab06c7de6408->leave($__internal_0ca137c2f6d3bc777cdfe290c390cb499cba50c12b4f9009e6beab06c7de6408_prof);

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
