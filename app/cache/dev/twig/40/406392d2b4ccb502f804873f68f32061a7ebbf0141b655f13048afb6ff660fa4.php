<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c37878f30ba6c4b63444e0994b7d307e7c15c4db270efcaff6ab01dc9455d645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ad2157172dd58f1074eb14550a0b9b2210a926d551cacdbb9e56a902be8bce66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2157172dd58f1074eb14550a0b9b2210a926d551cacdbb9e56a902be8bce66->enter($__internal_ad2157172dd58f1074eb14550a0b9b2210a926d551cacdbb9e56a902be8bce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2157172dd58f1074eb14550a0b9b2210a926d551cacdbb9e56a902be8bce66->leave($__internal_ad2157172dd58f1074eb14550a0b9b2210a926d551cacdbb9e56a902be8bce66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9d4d223965883bd0f3d4324f23d9d5db711dcb490c5e1535f57de808b1157c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d4d223965883bd0f3d4324f23d9d5db711dcb490c5e1535f57de808b1157c7->enter($__internal_a9d4d223965883bd0f3d4324f23d9d5db711dcb490c5e1535f57de808b1157c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a9d4d223965883bd0f3d4324f23d9d5db711dcb490c5e1535f57de808b1157c7->leave($__internal_a9d4d223965883bd0f3d4324f23d9d5db711dcb490c5e1535f57de808b1157c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
