<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6ae1e06c183aa198c863a7754602e604d5e0c034873c4e2147f4750dcbf9aaef extends Twig_Template
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
        $__internal_76e16c65ad1b23b227b22a46248884798b828e3e649de70a61d822a5e94e6bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e16c65ad1b23b227b22a46248884798b828e3e649de70a61d822a5e94e6bde->enter($__internal_76e16c65ad1b23b227b22a46248884798b828e3e649de70a61d822a5e94e6bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76e16c65ad1b23b227b22a46248884798b828e3e649de70a61d822a5e94e6bde->leave($__internal_76e16c65ad1b23b227b22a46248884798b828e3e649de70a61d822a5e94e6bde_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a68694852488482c32c3d05dd2250271a81b57eae268991db0d8876bfd528d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68694852488482c32c3d05dd2250271a81b57eae268991db0d8876bfd528d36->enter($__internal_a68694852488482c32c3d05dd2250271a81b57eae268991db0d8876bfd528d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a68694852488482c32c3d05dd2250271a81b57eae268991db0d8876bfd528d36->leave($__internal_a68694852488482c32c3d05dd2250271a81b57eae268991db0d8876bfd528d36_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_610bd4ff7e9133fc37784fb6bfea957e9917f53b3288ff509f0012c143459f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610bd4ff7e9133fc37784fb6bfea957e9917f53b3288ff509f0012c143459f05->enter($__internal_610bd4ff7e9133fc37784fb6bfea957e9917f53b3288ff509f0012c143459f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_610bd4ff7e9133fc37784fb6bfea957e9917f53b3288ff509f0012c143459f05->leave($__internal_610bd4ff7e9133fc37784fb6bfea957e9917f53b3288ff509f0012c143459f05_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_039b9d1ef29fd76eb58715003d1d48d9ca1cfea67d996b4ae065e5491b34f3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039b9d1ef29fd76eb58715003d1d48d9ca1cfea67d996b4ae065e5491b34f3a5->enter($__internal_039b9d1ef29fd76eb58715003d1d48d9ca1cfea67d996b4ae065e5491b34f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_039b9d1ef29fd76eb58715003d1d48d9ca1cfea67d996b4ae065e5491b34f3a5->leave($__internal_039b9d1ef29fd76eb58715003d1d48d9ca1cfea67d996b4ae065e5491b34f3a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
