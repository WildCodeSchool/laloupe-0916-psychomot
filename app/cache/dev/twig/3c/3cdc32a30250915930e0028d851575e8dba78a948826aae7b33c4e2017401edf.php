<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_95001b6573b55455f7a39c688e5bc70c330d836d1348883d15f27b2c4553bbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f->enter($__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f->leave($__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2->enter($__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2->leave($__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
