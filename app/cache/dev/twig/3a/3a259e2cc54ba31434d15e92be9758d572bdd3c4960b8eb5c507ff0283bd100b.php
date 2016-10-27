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
        $__internal_27ea4de7ee1006e43f290190f6cdfe1c18de7f55402a0b5e734389fdf29a3012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ea4de7ee1006e43f290190f6cdfe1c18de7f55402a0b5e734389fdf29a3012->enter($__internal_27ea4de7ee1006e43f290190f6cdfe1c18de7f55402a0b5e734389fdf29a3012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_27ea4de7ee1006e43f290190f6cdfe1c18de7f55402a0b5e734389fdf29a3012->leave($__internal_27ea4de7ee1006e43f290190f6cdfe1c18de7f55402a0b5e734389fdf29a3012_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_acd53db05c7344bb339c5c13957e19dfc3ab3009c2c6b595d2425adffdece8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd53db05c7344bb339c5c13957e19dfc3ab3009c2c6b595d2425adffdece8f0->enter($__internal_acd53db05c7344bb339c5c13957e19dfc3ab3009c2c6b595d2425adffdece8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_acd53db05c7344bb339c5c13957e19dfc3ab3009c2c6b595d2425adffdece8f0->leave($__internal_acd53db05c7344bb339c5c13957e19dfc3ab3009c2c6b595d2425adffdece8f0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_618ed67b84ab75e7b275ab46b713d54b000c26f6166464bc7415cfe62aeebe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618ed67b84ab75e7b275ab46b713d54b000c26f6166464bc7415cfe62aeebe71->enter($__internal_618ed67b84ab75e7b275ab46b713d54b000c26f6166464bc7415cfe62aeebe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_618ed67b84ab75e7b275ab46b713d54b000c26f6166464bc7415cfe62aeebe71->leave($__internal_618ed67b84ab75e7b275ab46b713d54b000c26f6166464bc7415cfe62aeebe71_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4ccb29a19b0b9164e1a2cd959fbc3296cb5ab53adbd8f8114a856679b1f98563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccb29a19b0b9164e1a2cd959fbc3296cb5ab53adbd8f8114a856679b1f98563->enter($__internal_4ccb29a19b0b9164e1a2cd959fbc3296cb5ab53adbd8f8114a856679b1f98563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ccb29a19b0b9164e1a2cd959fbc3296cb5ab53adbd8f8114a856679b1f98563->leave($__internal_4ccb29a19b0b9164e1a2cd959fbc3296cb5ab53adbd8f8114a856679b1f98563_prof);

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
