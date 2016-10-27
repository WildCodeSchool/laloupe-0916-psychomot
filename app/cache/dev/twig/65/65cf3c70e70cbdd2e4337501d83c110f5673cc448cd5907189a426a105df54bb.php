<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1a5e6455d8641bb8914810e08b4ca40c19c9b18757a373304c14c02ba57654e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_74571ce1ad955ed171aec4bbc15f2d782d29287b1497b0163b06b05e00fa6861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74571ce1ad955ed171aec4bbc15f2d782d29287b1497b0163b06b05e00fa6861->enter($__internal_74571ce1ad955ed171aec4bbc15f2d782d29287b1497b0163b06b05e00fa6861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74571ce1ad955ed171aec4bbc15f2d782d29287b1497b0163b06b05e00fa6861->leave($__internal_74571ce1ad955ed171aec4bbc15f2d782d29287b1497b0163b06b05e00fa6861_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2a38ebb99ae4fc4c059a12fcc2c4093dde9ae9d4051573707328e6a49561ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a38ebb99ae4fc4c059a12fcc2c4093dde9ae9d4051573707328e6a49561ced->enter($__internal_d2a38ebb99ae4fc4c059a12fcc2c4093dde9ae9d4051573707328e6a49561ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d2a38ebb99ae4fc4c059a12fcc2c4093dde9ae9d4051573707328e6a49561ced->leave($__internal_d2a38ebb99ae4fc4c059a12fcc2c4093dde9ae9d4051573707328e6a49561ced_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
