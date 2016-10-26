<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1552227359fa9bf4c94e41afb5f877d3bc976a17a299ccacb8e49f94d22aa9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a2cdc60beb5f9ce8d4c1999d004c2cfe969dbaf9eadd470fe3f41a03ba797b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cdc60beb5f9ce8d4c1999d004c2cfe969dbaf9eadd470fe3f41a03ba797b71->enter($__internal_a2cdc60beb5f9ce8d4c1999d004c2cfe969dbaf9eadd470fe3f41a03ba797b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cdc60beb5f9ce8d4c1999d004c2cfe969dbaf9eadd470fe3f41a03ba797b71->leave($__internal_a2cdc60beb5f9ce8d4c1999d004c2cfe969dbaf9eadd470fe3f41a03ba797b71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20068d21f8540f8c27b023ec8b707fb822700ec8754808443213a71cf26ea12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20068d21f8540f8c27b023ec8b707fb822700ec8754808443213a71cf26ea12c->enter($__internal_20068d21f8540f8c27b023ec8b707fb822700ec8754808443213a71cf26ea12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_20068d21f8540f8c27b023ec8b707fb822700ec8754808443213a71cf26ea12c->leave($__internal_20068d21f8540f8c27b023ec8b707fb822700ec8754808443213a71cf26ea12c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
