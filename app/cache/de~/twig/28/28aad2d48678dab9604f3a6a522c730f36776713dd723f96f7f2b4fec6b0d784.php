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
        $__internal_b2e152c182d82c34cc4519f043fc9a0477d8de2f06aad8ed4ff291403a56b3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e152c182d82c34cc4519f043fc9a0477d8de2f06aad8ed4ff291403a56b3f9->enter($__internal_b2e152c182d82c34cc4519f043fc9a0477d8de2f06aad8ed4ff291403a56b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b2e152c182d82c34cc4519f043fc9a0477d8de2f06aad8ed4ff291403a56b3f9->leave($__internal_b2e152c182d82c34cc4519f043fc9a0477d8de2f06aad8ed4ff291403a56b3f9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3c08dd113f5fc07bfae3c5dbd5b0e0792f6b6e41545d1fea4f819be899f02ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c08dd113f5fc07bfae3c5dbd5b0e0792f6b6e41545d1fea4f819be899f02ace->enter($__internal_3c08dd113f5fc07bfae3c5dbd5b0e0792f6b6e41545d1fea4f819be899f02ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3c08dd113f5fc07bfae3c5dbd5b0e0792f6b6e41545d1fea4f819be899f02ace->leave($__internal_3c08dd113f5fc07bfae3c5dbd5b0e0792f6b6e41545d1fea4f819be899f02ace_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c640804d8080647490823276fbe058369d4b112e840dad3ad4dc72c0ad4c3522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c640804d8080647490823276fbe058369d4b112e840dad3ad4dc72c0ad4c3522->enter($__internal_c640804d8080647490823276fbe058369d4b112e840dad3ad4dc72c0ad4c3522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c640804d8080647490823276fbe058369d4b112e840dad3ad4dc72c0ad4c3522->leave($__internal_c640804d8080647490823276fbe058369d4b112e840dad3ad4dc72c0ad4c3522_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3c2a1f8f2d949b8bc24a0c5120da5027d786e5e7ee986bb7faf551c119325317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2a1f8f2d949b8bc24a0c5120da5027d786e5e7ee986bb7faf551c119325317->enter($__internal_3c2a1f8f2d949b8bc24a0c5120da5027d786e5e7ee986bb7faf551c119325317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3c2a1f8f2d949b8bc24a0c5120da5027d786e5e7ee986bb7faf551c119325317->leave($__internal_3c2a1f8f2d949b8bc24a0c5120da5027d786e5e7ee986bb7faf551c119325317_prof);

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
