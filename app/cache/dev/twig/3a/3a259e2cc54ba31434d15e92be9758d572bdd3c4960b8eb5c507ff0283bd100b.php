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
        $__internal_51226d44b9b6f10c6b12f5f6e9acffc8cdfee0762c82670be1eac33f04bce940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51226d44b9b6f10c6b12f5f6e9acffc8cdfee0762c82670be1eac33f04bce940->enter($__internal_51226d44b9b6f10c6b12f5f6e9acffc8cdfee0762c82670be1eac33f04bce940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_51226d44b9b6f10c6b12f5f6e9acffc8cdfee0762c82670be1eac33f04bce940->leave($__internal_51226d44b9b6f10c6b12f5f6e9acffc8cdfee0762c82670be1eac33f04bce940_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a79ed50621d32ce021556c826e91f10e30efde9b0083f7a5e859b8938ffc03e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79ed50621d32ce021556c826e91f10e30efde9b0083f7a5e859b8938ffc03e2->enter($__internal_a79ed50621d32ce021556c826e91f10e30efde9b0083f7a5e859b8938ffc03e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a79ed50621d32ce021556c826e91f10e30efde9b0083f7a5e859b8938ffc03e2->leave($__internal_a79ed50621d32ce021556c826e91f10e30efde9b0083f7a5e859b8938ffc03e2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_92c1655341bc755b8109d0da7459e677b31c61314656ba9194cb375922e37be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c1655341bc755b8109d0da7459e677b31c61314656ba9194cb375922e37be7->enter($__internal_92c1655341bc755b8109d0da7459e677b31c61314656ba9194cb375922e37be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92c1655341bc755b8109d0da7459e677b31c61314656ba9194cb375922e37be7->leave($__internal_92c1655341bc755b8109d0da7459e677b31c61314656ba9194cb375922e37be7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_30332d90f782f400b302e8acc26f83a5e4425e3aaf3b946c0532aa1c308204a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30332d90f782f400b302e8acc26f83a5e4425e3aaf3b946c0532aa1c308204a2->enter($__internal_30332d90f782f400b302e8acc26f83a5e4425e3aaf3b946c0532aa1c308204a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30332d90f782f400b302e8acc26f83a5e4425e3aaf3b946c0532aa1c308204a2->leave($__internal_30332d90f782f400b302e8acc26f83a5e4425e3aaf3b946c0532aa1c308204a2_prof);

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
