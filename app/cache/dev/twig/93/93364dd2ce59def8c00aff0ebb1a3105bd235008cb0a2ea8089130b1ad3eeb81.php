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
        $__internal_c0e41d4726615694602227285f636b9413ccf0cd17c6749076b25b79fabd9a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e41d4726615694602227285f636b9413ccf0cd17c6749076b25b79fabd9a53->enter($__internal_c0e41d4726615694602227285f636b9413ccf0cd17c6749076b25b79fabd9a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e41d4726615694602227285f636b9413ccf0cd17c6749076b25b79fabd9a53->leave($__internal_c0e41d4726615694602227285f636b9413ccf0cd17c6749076b25b79fabd9a53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cc2fc4965118a2048cf3e0085d5777c265c9547f2b0d4711d57a456c489912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc2fc4965118a2048cf3e0085d5777c265c9547f2b0d4711d57a456c489912c->enter($__internal_0cc2fc4965118a2048cf3e0085d5777c265c9547f2b0d4711d57a456c489912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0cc2fc4965118a2048cf3e0085d5777c265c9547f2b0d4711d57a456c489912c->leave($__internal_0cc2fc4965118a2048cf3e0085d5777c265c9547f2b0d4711d57a456c489912c_prof);

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
