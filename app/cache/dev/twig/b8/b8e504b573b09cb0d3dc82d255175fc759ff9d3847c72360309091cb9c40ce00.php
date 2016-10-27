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
<<<<<<< HEAD
        $__internal_d010b7639e308a064342d68263383452b12eccdcda4aeb787f89de0c8cf0751f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d010b7639e308a064342d68263383452b12eccdcda4aeb787f89de0c8cf0751f->enter($__internal_d010b7639e308a064342d68263383452b12eccdcda4aeb787f89de0c8cf0751f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d010b7639e308a064342d68263383452b12eccdcda4aeb787f89de0c8cf0751f->leave($__internal_d010b7639e308a064342d68263383452b12eccdcda4aeb787f89de0c8cf0751f_prof);
=======
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d->enter($__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d->leave($__internal_49bc227dcbb2e2e24703aa770a6a3c35eec1e158431c1a19b86180abd9a0050d_prof);
>>>>>>> flo

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_aa6b1ef4d98ad90ef36a5dace077f194049dbf0f06a625f9b0e9f21a3317bcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6b1ef4d98ad90ef36a5dace077f194049dbf0f06a625f9b0e9f21a3317bcb5->enter($__internal_aa6b1ef4d98ad90ef36a5dace077f194049dbf0f06a625f9b0e9f21a3317bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
=======
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad->enter($__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
>>>>>>> flo

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
<<<<<<< HEAD
        $__internal_aa6b1ef4d98ad90ef36a5dace077f194049dbf0f06a625f9b0e9f21a3317bcb5->leave($__internal_aa6b1ef4d98ad90ef36a5dace077f194049dbf0f06a625f9b0e9f21a3317bcb5_prof);
=======
        $__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad->leave($__internal_a7ec8dc62def1d29be70b9dfa5a802425111e3ea82e440cbaaf6225c4c13e0ad_prof);
>>>>>>> flo

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
