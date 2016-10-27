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
        $__internal_84509cde806c20e8da0c4e0eb176166e41a43cf68257769dd5a5b9ce65c4aede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84509cde806c20e8da0c4e0eb176166e41a43cf68257769dd5a5b9ce65c4aede->enter($__internal_84509cde806c20e8da0c4e0eb176166e41a43cf68257769dd5a5b9ce65c4aede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84509cde806c20e8da0c4e0eb176166e41a43cf68257769dd5a5b9ce65c4aede->leave($__internal_84509cde806c20e8da0c4e0eb176166e41a43cf68257769dd5a5b9ce65c4aede_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9747de0213407d46d1142ed97e0413ff9dfd7adfa1ddf5b47fafef9deaa17a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9747de0213407d46d1142ed97e0413ff9dfd7adfa1ddf5b47fafef9deaa17a5->enter($__internal_c9747de0213407d46d1142ed97e0413ff9dfd7adfa1ddf5b47fafef9deaa17a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c9747de0213407d46d1142ed97e0413ff9dfd7adfa1ddf5b47fafef9deaa17a5->leave($__internal_c9747de0213407d46d1142ed97e0413ff9dfd7adfa1ddf5b47fafef9deaa17a5_prof);

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
