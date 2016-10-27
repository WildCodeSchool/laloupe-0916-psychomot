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
<<<<<<< HEAD
        $__internal_c9355cc7429553b99fc1152180d0a86dcdb45c75a97cdc7540c7b00d90e354d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9355cc7429553b99fc1152180d0a86dcdb45c75a97cdc7540c7b00d90e354d4->enter($__internal_c9355cc7429553b99fc1152180d0a86dcdb45c75a97cdc7540c7b00d90e354d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));
=======
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676->enter($__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));
>>>>>>> flo

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
<<<<<<< HEAD
        $__internal_c9355cc7429553b99fc1152180d0a86dcdb45c75a97cdc7540c7b00d90e354d4->leave($__internal_c9355cc7429553b99fc1152180d0a86dcdb45c75a97cdc7540c7b00d90e354d4_prof);
=======
        $__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676->leave($__internal_c316afa63c3a9a4c4bec297b9ec309f2f344994f9f3dae33ca9daf2e020e9676_prof);
>>>>>>> flo

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d59c5196a5aaae27bfe1e9331ca5d0f9d6b1613d789eb1c82b76b9c6d80dd5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59c5196a5aaae27bfe1e9331ca5d0f9d6b1613d789eb1c82b76b9c6d80dd5db->enter($__internal_d59c5196a5aaae27bfe1e9331ca5d0f9d6b1613d789eb1c82b76b9c6d80dd5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));
=======
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978->enter($__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));
>>>>>>> flo

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_d59c5196a5aaae27bfe1e9331ca5d0f9d6b1613d789eb1c82b76b9c6d80dd5db->leave($__internal_d59c5196a5aaae27bfe1e9331ca5d0f9d6b1613d789eb1c82b76b9c6d80dd5db_prof);
=======
        $__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978->leave($__internal_d707d6bd473ab3ff19253b631087931662f66b33419d9547b723320a2d918978_prof);
>>>>>>> flo

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_eb741435cd0ee866a3fe03a0457bbfb8fddacc365b9b8a961a9f768e532063a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb741435cd0ee866a3fe03a0457bbfb8fddacc365b9b8a961a9f768e532063a4->enter($__internal_eb741435cd0ee866a3fe03a0457bbfb8fddacc365b9b8a961a9f768e532063a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));
=======
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4->enter($__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));
>>>>>>> flo

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_eb741435cd0ee866a3fe03a0457bbfb8fddacc365b9b8a961a9f768e532063a4->leave($__internal_eb741435cd0ee866a3fe03a0457bbfb8fddacc365b9b8a961a9f768e532063a4_prof);
=======
        $__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4->leave($__internal_869c44006030b533c6e939286edf991b0c3044166c2862e1430cbe2a21618cc4_prof);
>>>>>>> flo

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_dc443ff411666f5e2e382ad04f859a4f8a1578a49ebaaef543af9bdd092baa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc443ff411666f5e2e382ad04f859a4f8a1578a49ebaaef543af9bdd092baa7b->enter($__internal_dc443ff411666f5e2e382ad04f859a4f8a1578a49ebaaef543af9bdd092baa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc443ff411666f5e2e382ad04f859a4f8a1578a49ebaaef543af9bdd092baa7b->leave($__internal_dc443ff411666f5e2e382ad04f859a4f8a1578a49ebaaef543af9bdd092baa7b_prof);
=======
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704->enter($__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704->leave($__internal_4088b77d3cd08468b9257dff004ca83e3b8a42329b53ffb6d3fa35223c2c2704_prof);
>>>>>>> flo

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
