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
        $__internal_83a3ec0788109dcaa1fdbef81771bfa77dece8ab9dd7667136e70d069e76dda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a3ec0788109dcaa1fdbef81771bfa77dece8ab9dd7667136e70d069e76dda4->enter($__internal_83a3ec0788109dcaa1fdbef81771bfa77dece8ab9dd7667136e70d069e76dda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a3ec0788109dcaa1fdbef81771bfa77dece8ab9dd7667136e70d069e76dda4->leave($__internal_83a3ec0788109dcaa1fdbef81771bfa77dece8ab9dd7667136e70d069e76dda4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0b55de21d82e6979a8d947828d889dc880a716fd52dc97950a830448b3c9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0b55de21d82e6979a8d947828d889dc880a716fd52dc97950a830448b3c9c2->enter($__internal_da0b55de21d82e6979a8d947828d889dc880a716fd52dc97950a830448b3c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_da0b55de21d82e6979a8d947828d889dc880a716fd52dc97950a830448b3c9c2->leave($__internal_da0b55de21d82e6979a8d947828d889dc880a716fd52dc97950a830448b3c9c2_prof);

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
