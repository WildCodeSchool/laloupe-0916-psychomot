<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8d6f59ab5c0fec3ccbad6c4bbbb66e8768d80951ee3db87da2b0b656899c65eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ba7f37923f0fb37cfbc3fb9967ce8a294cca01fd67a6477bbfa90aceae2244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ba7f37923f0fb37cfbc3fb9967ce8a294cca01fd67a6477bbfa90aceae2244->enter($__internal_f3ba7f37923f0fb37cfbc3fb9967ce8a294cca01fd67a6477bbfa90aceae2244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3ba7f37923f0fb37cfbc3fb9967ce8a294cca01fd67a6477bbfa90aceae2244->leave($__internal_f3ba7f37923f0fb37cfbc3fb9967ce8a294cca01fd67a6477bbfa90aceae2244_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fa79f54d862d20c6f141f6c1a512e5476dd1f2d3d52120cc513b06c461046c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa79f54d862d20c6f141f6c1a512e5476dd1f2d3d52120cc513b06c461046c38->enter($__internal_fa79f54d862d20c6f141f6c1a512e5476dd1f2d3d52120cc513b06c461046c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fa79f54d862d20c6f141f6c1a512e5476dd1f2d3d52120cc513b06c461046c38->leave($__internal_fa79f54d862d20c6f141f6c1a512e5476dd1f2d3d52120cc513b06c461046c38_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_68e1a7418bb82176b98121fbea51e88f58fe081a348e2f52bb383d1a998a830b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e1a7418bb82176b98121fbea51e88f58fe081a348e2f52bb383d1a998a830b->enter($__internal_68e1a7418bb82176b98121fbea51e88f58fe081a348e2f52bb383d1a998a830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_68e1a7418bb82176b98121fbea51e88f58fe081a348e2f52bb383d1a998a830b->leave($__internal_68e1a7418bb82176b98121fbea51e88f58fe081a348e2f52bb383d1a998a830b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c85a1b376ec5957e9b9dee966fc2a8aa7c6bb31cda3cfaee3a23dde3156f9cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85a1b376ec5957e9b9dee966fc2a8aa7c6bb31cda3cfaee3a23dde3156f9cff->enter($__internal_c85a1b376ec5957e9b9dee966fc2a8aa7c6bb31cda3cfaee3a23dde3156f9cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c85a1b376ec5957e9b9dee966fc2a8aa7c6bb31cda3cfaee3a23dde3156f9cff->leave($__internal_c85a1b376ec5957e9b9dee966fc2a8aa7c6bb31cda3cfaee3a23dde3156f9cff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
