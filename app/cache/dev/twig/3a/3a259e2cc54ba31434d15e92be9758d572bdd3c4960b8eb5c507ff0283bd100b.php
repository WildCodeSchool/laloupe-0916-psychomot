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
        $__internal_ee9572b70f60691460a02268d63506720aff12c06ddc0929f3b38da066c0b017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9572b70f60691460a02268d63506720aff12c06ddc0929f3b38da066c0b017->enter($__internal_ee9572b70f60691460a02268d63506720aff12c06ddc0929f3b38da066c0b017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee9572b70f60691460a02268d63506720aff12c06ddc0929f3b38da066c0b017->leave($__internal_ee9572b70f60691460a02268d63506720aff12c06ddc0929f3b38da066c0b017_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_69f4bab5e4701c4a6f162d756221a43eab28edc52df7cf137846519c2c591860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4bab5e4701c4a6f162d756221a43eab28edc52df7cf137846519c2c591860->enter($__internal_69f4bab5e4701c4a6f162d756221a43eab28edc52df7cf137846519c2c591860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_69f4bab5e4701c4a6f162d756221a43eab28edc52df7cf137846519c2c591860->leave($__internal_69f4bab5e4701c4a6f162d756221a43eab28edc52df7cf137846519c2c591860_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_946c61ea7aa69867803516138125c889d33615c77a5a6cf28e8e1574efc509ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946c61ea7aa69867803516138125c889d33615c77a5a6cf28e8e1574efc509ef->enter($__internal_946c61ea7aa69867803516138125c889d33615c77a5a6cf28e8e1574efc509ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_946c61ea7aa69867803516138125c889d33615c77a5a6cf28e8e1574efc509ef->leave($__internal_946c61ea7aa69867803516138125c889d33615c77a5a6cf28e8e1574efc509ef_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac40c55ace16db15d89c17ff97def7161293422b01cc3d57c37428536cb395dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac40c55ace16db15d89c17ff97def7161293422b01cc3d57c37428536cb395dd->enter($__internal_ac40c55ace16db15d89c17ff97def7161293422b01cc3d57c37428536cb395dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac40c55ace16db15d89c17ff97def7161293422b01cc3d57c37428536cb395dd->leave($__internal_ac40c55ace16db15d89c17ff97def7161293422b01cc3d57c37428536cb395dd_prof);

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
