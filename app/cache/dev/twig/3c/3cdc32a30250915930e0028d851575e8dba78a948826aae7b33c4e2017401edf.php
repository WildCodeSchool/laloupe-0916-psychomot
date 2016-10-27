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
        $__internal_99b6a87b945981556cd980f4b382289f1367876b6e640ef66a72f7042f2d718b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b6a87b945981556cd980f4b382289f1367876b6e640ef66a72f7042f2d718b->enter($__internal_99b6a87b945981556cd980f4b382289f1367876b6e640ef66a72f7042f2d718b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b6a87b945981556cd980f4b382289f1367876b6e640ef66a72f7042f2d718b->leave($__internal_99b6a87b945981556cd980f4b382289f1367876b6e640ef66a72f7042f2d718b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e86e95463e3e3edd8657ada6cfd8d24de36319a4bd2b2c5a02a7e2f017f195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e86e95463e3e3edd8657ada6cfd8d24de36319a4bd2b2c5a02a7e2f017f195->enter($__internal_70e86e95463e3e3edd8657ada6cfd8d24de36319a4bd2b2c5a02a7e2f017f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_70e86e95463e3e3edd8657ada6cfd8d24de36319a4bd2b2c5a02a7e2f017f195->leave($__internal_70e86e95463e3e3edd8657ada6cfd8d24de36319a4bd2b2c5a02a7e2f017f195_prof);

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
