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
        $__internal_6989f3f006b961c3c1f827e7722e8abe33f3f827821768179b24e322a2196403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6989f3f006b961c3c1f827e7722e8abe33f3f827821768179b24e322a2196403->enter($__internal_6989f3f006b961c3c1f827e7722e8abe33f3f827821768179b24e322a2196403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6989f3f006b961c3c1f827e7722e8abe33f3f827821768179b24e322a2196403->leave($__internal_6989f3f006b961c3c1f827e7722e8abe33f3f827821768179b24e322a2196403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_797e3dcf3616deb5cac302188c70d5d4de8759c50cac2e4664ae6715bc4a01eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797e3dcf3616deb5cac302188c70d5d4de8759c50cac2e4664ae6715bc4a01eb->enter($__internal_797e3dcf3616deb5cac302188c70d5d4de8759c50cac2e4664ae6715bc4a01eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_797e3dcf3616deb5cac302188c70d5d4de8759c50cac2e4664ae6715bc4a01eb->leave($__internal_797e3dcf3616deb5cac302188c70d5d4de8759c50cac2e4664ae6715bc4a01eb_prof);

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
