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
<<<<<<< HEAD
        $__internal_ef7062f9012e97b23681be9f67aa4222c4959d14c1327ae25ae7fc18d6156455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7062f9012e97b23681be9f67aa4222c4959d14c1327ae25ae7fc18d6156455->enter($__internal_ef7062f9012e97b23681be9f67aa4222c4959d14c1327ae25ae7fc18d6156455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7062f9012e97b23681be9f67aa4222c4959d14c1327ae25ae7fc18d6156455->leave($__internal_ef7062f9012e97b23681be9f67aa4222c4959d14c1327ae25ae7fc18d6156455_prof);
=======
        $__internal_60d56573a1376ec7222a2ebcce77098281289e0329c45db957a3b6acd0e64c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d56573a1376ec7222a2ebcce77098281289e0329c45db957a3b6acd0e64c64->enter($__internal_60d56573a1376ec7222a2ebcce77098281289e0329c45db957a3b6acd0e64c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d56573a1376ec7222a2ebcce77098281289e0329c45db957a3b6acd0e64c64->leave($__internal_60d56573a1376ec7222a2ebcce77098281289e0329c45db957a3b6acd0e64c64_prof);
>>>>>>> flo

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_95e1a417ac6ccc564ce7ccd5d7293c48aa72721a44c6547e293ec06d4b207a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e1a417ac6ccc564ce7ccd5d7293c48aa72721a44c6547e293ec06d4b207a26->enter($__internal_95e1a417ac6ccc564ce7ccd5d7293c48aa72721a44c6547e293ec06d4b207a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
=======
        $__internal_b5cc1f26d1e8dc8257d6f4a07636dfde5a77582a3d127732ce7c0312436fa2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cc1f26d1e8dc8257d6f4a07636dfde5a77582a3d127732ce7c0312436fa2e5->enter($__internal_b5cc1f26d1e8dc8257d6f4a07636dfde5a77582a3d127732ce7c0312436fa2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
>>>>>>> flo

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
<<<<<<< HEAD
        $__internal_95e1a417ac6ccc564ce7ccd5d7293c48aa72721a44c6547e293ec06d4b207a26->leave($__internal_95e1a417ac6ccc564ce7ccd5d7293c48aa72721a44c6547e293ec06d4b207a26_prof);
=======
        $__internal_b5cc1f26d1e8dc8257d6f4a07636dfde5a77582a3d127732ce7c0312436fa2e5->leave($__internal_b5cc1f26d1e8dc8257d6f4a07636dfde5a77582a3d127732ce7c0312436fa2e5_prof);
>>>>>>> flo

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
