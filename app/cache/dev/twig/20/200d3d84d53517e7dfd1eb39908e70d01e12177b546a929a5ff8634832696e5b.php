<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1ebfcd7faf7ac89afbf975b4465e6ee457d606fa4381ed0d3c49636b3fc64a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ef85dedb48f3bd6a2bb11caacd3888271eb1b7528b17026659f2ac9b5dcd922f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef85dedb48f3bd6a2bb11caacd3888271eb1b7528b17026659f2ac9b5dcd922f->enter($__internal_ef85dedb48f3bd6a2bb11caacd3888271eb1b7528b17026659f2ac9b5dcd922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef85dedb48f3bd6a2bb11caacd3888271eb1b7528b17026659f2ac9b5dcd922f->leave($__internal_ef85dedb48f3bd6a2bb11caacd3888271eb1b7528b17026659f2ac9b5dcd922f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a47e23482bc7c5f0c5e2d5800516c02678eab3bc2c7680a02fea960823c236e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47e23482bc7c5f0c5e2d5800516c02678eab3bc2c7680a02fea960823c236e1->enter($__internal_a47e23482bc7c5f0c5e2d5800516c02678eab3bc2c7680a02fea960823c236e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a47e23482bc7c5f0c5e2d5800516c02678eab3bc2c7680a02fea960823c236e1->leave($__internal_a47e23482bc7c5f0c5e2d5800516c02678eab3bc2c7680a02fea960823c236e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
