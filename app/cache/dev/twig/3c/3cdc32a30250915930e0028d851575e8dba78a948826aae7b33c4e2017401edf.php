<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_95001b6573b55455f7a39c688e5bc70c330d836d1348883d15f27b2c4553bbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8f05cfac1ace0cae2cf7f49e63d6dac11d8f127d5de5b0b8fe6bc8bfc7c607f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f05cfac1ace0cae2cf7f49e63d6dac11d8f127d5de5b0b8fe6bc8bfc7c607f3->enter($__internal_8f05cfac1ace0cae2cf7f49e63d6dac11d8f127d5de5b0b8fe6bc8bfc7c607f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f05cfac1ace0cae2cf7f49e63d6dac11d8f127d5de5b0b8fe6bc8bfc7c607f3->leave($__internal_8f05cfac1ace0cae2cf7f49e63d6dac11d8f127d5de5b0b8fe6bc8bfc7c607f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d26c982c793fc6814b6fe2b26378258b4ec3a93334956976474f22a5d8d1dc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26c982c793fc6814b6fe2b26378258b4ec3a93334956976474f22a5d8d1dc38->enter($__internal_d26c982c793fc6814b6fe2b26378258b4ec3a93334956976474f22a5d8d1dc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d26c982c793fc6814b6fe2b26378258b4ec3a93334956976474f22a5d8d1dc38->leave($__internal_d26c982c793fc6814b6fe2b26378258b4ec3a93334956976474f22a5d8d1dc38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
