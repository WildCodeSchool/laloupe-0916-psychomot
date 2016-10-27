<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e169b122daa29f5f44659642bab799effcb1e473dd5ffe1f43399dbd177ba78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9bce2d55b8e0271b1edbc4be82b12bfdcea2fc6da14de3f2692b2afb9b053cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bce2d55b8e0271b1edbc4be82b12bfdcea2fc6da14de3f2692b2afb9b053cb2->enter($__internal_9bce2d55b8e0271b1edbc4be82b12bfdcea2fc6da14de3f2692b2afb9b053cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bce2d55b8e0271b1edbc4be82b12bfdcea2fc6da14de3f2692b2afb9b053cb2->leave($__internal_9bce2d55b8e0271b1edbc4be82b12bfdcea2fc6da14de3f2692b2afb9b053cb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e0f5e8d5a1f458c1ec014ca487f91197810327dc2230dd454e895c964b4dbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0f5e8d5a1f458c1ec014ca487f91197810327dc2230dd454e895c964b4dbe9->enter($__internal_8e0f5e8d5a1f458c1ec014ca487f91197810327dc2230dd454e895c964b4dbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8e0f5e8d5a1f458c1ec014ca487f91197810327dc2230dd454e895c964b4dbe9->leave($__internal_8e0f5e8d5a1f458c1ec014ca487f91197810327dc2230dd454e895c964b4dbe9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
