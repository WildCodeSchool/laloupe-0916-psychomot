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
        $__internal_344064a964412c6ac4076fa76953f5b394c71123b5246d5e21d84a4029330f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344064a964412c6ac4076fa76953f5b394c71123b5246d5e21d84a4029330f68->enter($__internal_344064a964412c6ac4076fa76953f5b394c71123b5246d5e21d84a4029330f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344064a964412c6ac4076fa76953f5b394c71123b5246d5e21d84a4029330f68->leave($__internal_344064a964412c6ac4076fa76953f5b394c71123b5246d5e21d84a4029330f68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41ad4e57f674c8e191008e3723a668b1497c5364dffd45dca2bc628a51407942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ad4e57f674c8e191008e3723a668b1497c5364dffd45dca2bc628a51407942->enter($__internal_41ad4e57f674c8e191008e3723a668b1497c5364dffd45dca2bc628a51407942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41ad4e57f674c8e191008e3723a668b1497c5364dffd45dca2bc628a51407942->leave($__internal_41ad4e57f674c8e191008e3723a668b1497c5364dffd45dca2bc628a51407942_prof);

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
