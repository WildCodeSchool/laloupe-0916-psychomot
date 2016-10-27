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
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d->enter($__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d->leave($__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad->enter($__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad->leave($__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad_prof);

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
