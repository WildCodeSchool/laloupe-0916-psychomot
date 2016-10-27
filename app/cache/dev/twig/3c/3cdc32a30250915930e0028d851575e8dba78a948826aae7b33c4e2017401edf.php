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
<<<<<<< HEAD
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f->enter($__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f->leave($__internal_3ee6d209dac955156ad2d50420c5d932e4752f4a0cfb91bee940d34e04e3275f_prof);
=======
        $__internal_c0da37dac4ee7f02afbb3c691081b2a97c928f05965a961b87e2cdae72bf0541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0da37dac4ee7f02afbb3c691081b2a97c928f05965a961b87e2cdae72bf0541->enter($__internal_c0da37dac4ee7f02afbb3c691081b2a97c928f05965a961b87e2cdae72bf0541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0da37dac4ee7f02afbb3c691081b2a97c928f05965a961b87e2cdae72bf0541->leave($__internal_c0da37dac4ee7f02afbb3c691081b2a97c928f05965a961b87e2cdae72bf0541_prof);
>>>>>>> flo

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2->enter($__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
=======
        $__internal_b065c427a6aabda943b8f0c144a267fe6613784ff569dfffb5046eb8d1efc377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b065c427a6aabda943b8f0c144a267fe6613784ff569dfffb5046eb8d1efc377->enter($__internal_b065c427a6aabda943b8f0c144a267fe6613784ff569dfffb5046eb8d1efc377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
>>>>>>> flo

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
<<<<<<< HEAD
        $__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2->leave($__internal_9db98b81b470440f16dcab7a31b5cc3be938dfb59f34ed373a3059658f6830d2_prof);
=======
        $__internal_b065c427a6aabda943b8f0c144a267fe6613784ff569dfffb5046eb8d1efc377->leave($__internal_b065c427a6aabda943b8f0c144a267fe6613784ff569dfffb5046eb8d1efc377_prof);
>>>>>>> flo

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
