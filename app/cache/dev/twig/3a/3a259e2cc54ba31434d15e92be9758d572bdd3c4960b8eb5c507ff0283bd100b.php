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
        $__internal_d11d30d12b951f491b868eaabeb0f1dda81e4c4383b1896cb132c4dd102f8324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11d30d12b951f491b868eaabeb0f1dda81e4c4383b1896cb132c4dd102f8324->enter($__internal_d11d30d12b951f491b868eaabeb0f1dda81e4c4383b1896cb132c4dd102f8324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d11d30d12b951f491b868eaabeb0f1dda81e4c4383b1896cb132c4dd102f8324->leave($__internal_d11d30d12b951f491b868eaabeb0f1dda81e4c4383b1896cb132c4dd102f8324_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2d4d3bef602d9c8e7fab8037b327876180d29458638e1e8f6e7d715f6a34ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d4d3bef602d9c8e7fab8037b327876180d29458638e1e8f6e7d715f6a34ae9->enter($__internal_a2d4d3bef602d9c8e7fab8037b327876180d29458638e1e8f6e7d715f6a34ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a2d4d3bef602d9c8e7fab8037b327876180d29458638e1e8f6e7d715f6a34ae9->leave($__internal_a2d4d3bef602d9c8e7fab8037b327876180d29458638e1e8f6e7d715f6a34ae9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2a4505a800c985d70c72241f64d4773eab2765fc22fa24cb127385cac161c97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4505a800c985d70c72241f64d4773eab2765fc22fa24cb127385cac161c97d->enter($__internal_2a4505a800c985d70c72241f64d4773eab2765fc22fa24cb127385cac161c97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a4505a800c985d70c72241f64d4773eab2765fc22fa24cb127385cac161c97d->leave($__internal_2a4505a800c985d70c72241f64d4773eab2765fc22fa24cb127385cac161c97d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_13693afd683d2cc58055e4e9d943e2c8910935e4f63b0a1a2c7a52eac6228b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13693afd683d2cc58055e4e9d943e2c8910935e4f63b0a1a2c7a52eac6228b1d->enter($__internal_13693afd683d2cc58055e4e9d943e2c8910935e4f63b0a1a2c7a52eac6228b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_13693afd683d2cc58055e4e9d943e2c8910935e4f63b0a1a2c7a52eac6228b1d->leave($__internal_13693afd683d2cc58055e4e9d943e2c8910935e4f63b0a1a2c7a52eac6228b1d_prof);

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
