<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4744f1fc1460e8a045c2a3706c9bae94d2a5198ebf6884b078bb87b3f9dcb957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ea31b3cc75d1ad89397eb0845d9fb9c096c41796f4478984e2278de3adf91abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea31b3cc75d1ad89397eb0845d9fb9c096c41796f4478984e2278de3adf91abf->enter($__internal_ea31b3cc75d1ad89397eb0845d9fb9c096c41796f4478984e2278de3adf91abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea31b3cc75d1ad89397eb0845d9fb9c096c41796f4478984e2278de3adf91abf->leave($__internal_ea31b3cc75d1ad89397eb0845d9fb9c096c41796f4478984e2278de3adf91abf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_482aa77e093525dc34ebc9a9f9efacf34e3d30987c6ce1eb09443b019675eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482aa77e093525dc34ebc9a9f9efacf34e3d30987c6ce1eb09443b019675eced->enter($__internal_482aa77e093525dc34ebc9a9f9efacf34e3d30987c6ce1eb09443b019675eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_482aa77e093525dc34ebc9a9f9efacf34e3d30987c6ce1eb09443b019675eced->leave($__internal_482aa77e093525dc34ebc9a9f9efacf34e3d30987c6ce1eb09443b019675eced_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
