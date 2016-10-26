<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_44d94cfc244490cb741c84252a06604f09c6b33daf9a6cbd80c38da2cd3d43e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a74311b6d768dd6764536131309461f9db331433c31c7800c18a4a089df7c0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74311b6d768dd6764536131309461f9db331433c31c7800c18a4a089df7c0be->enter($__internal_a74311b6d768dd6764536131309461f9db331433c31c7800c18a4a089df7c0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a74311b6d768dd6764536131309461f9db331433c31c7800c18a4a089df7c0be->leave($__internal_a74311b6d768dd6764536131309461f9db331433c31c7800c18a4a089df7c0be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffa123755607d0b099436df5e94b714540991907e93c204838bc6e771f3a6925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa123755607d0b099436df5e94b714540991907e93c204838bc6e771f3a6925->enter($__internal_ffa123755607d0b099436df5e94b714540991907e93c204838bc6e771f3a6925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ffa123755607d0b099436df5e94b714540991907e93c204838bc6e771f3a6925->leave($__internal_ffa123755607d0b099436df5e94b714540991907e93c204838bc6e771f3a6925_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
