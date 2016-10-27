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
        $__internal_b694b1a3894aabf6845b6bfcfbbd6c4e3e07859da1f091134d5f9bcf450aed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b694b1a3894aabf6845b6bfcfbbd6c4e3e07859da1f091134d5f9bcf450aed4c->enter($__internal_b694b1a3894aabf6845b6bfcfbbd6c4e3e07859da1f091134d5f9bcf450aed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b694b1a3894aabf6845b6bfcfbbd6c4e3e07859da1f091134d5f9bcf450aed4c->leave($__internal_b694b1a3894aabf6845b6bfcfbbd6c4e3e07859da1f091134d5f9bcf450aed4c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a01b18a18f9b59d0b403e33312dfad41daeca45eb29abf0266d9d1296985d355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01b18a18f9b59d0b403e33312dfad41daeca45eb29abf0266d9d1296985d355->enter($__internal_a01b18a18f9b59d0b403e33312dfad41daeca45eb29abf0266d9d1296985d355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a01b18a18f9b59d0b403e33312dfad41daeca45eb29abf0266d9d1296985d355->leave($__internal_a01b18a18f9b59d0b403e33312dfad41daeca45eb29abf0266d9d1296985d355_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_146e84f19397d5c545179ae385bf7a46e15e2c2bca0adaebba8686c756f02e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e84f19397d5c545179ae385bf7a46e15e2c2bca0adaebba8686c756f02e2a->enter($__internal_146e84f19397d5c545179ae385bf7a46e15e2c2bca0adaebba8686c756f02e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_146e84f19397d5c545179ae385bf7a46e15e2c2bca0adaebba8686c756f02e2a->leave($__internal_146e84f19397d5c545179ae385bf7a46e15e2c2bca0adaebba8686c756f02e2a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0776c84c17db41e54ef27c902ea4fffcd1ebc331f7c8b1f7cf81e10e46801300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0776c84c17db41e54ef27c902ea4fffcd1ebc331f7c8b1f7cf81e10e46801300->enter($__internal_0776c84c17db41e54ef27c902ea4fffcd1ebc331f7c8b1f7cf81e10e46801300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0776c84c17db41e54ef27c902ea4fffcd1ebc331f7c8b1f7cf81e10e46801300->leave($__internal_0776c84c17db41e54ef27c902ea4fffcd1ebc331f7c8b1f7cf81e10e46801300_prof);

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
