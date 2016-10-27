<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a1dca7a099f63657a481124139bb86723eabd046231e246ca97a1b3175315501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1736bbb598cc6a4e89ad6347df5f1cba9fafdae0b62009b8648a0ca33e776528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1736bbb598cc6a4e89ad6347df5f1cba9fafdae0b62009b8648a0ca33e776528->enter($__internal_1736bbb598cc6a4e89ad6347df5f1cba9fafdae0b62009b8648a0ca33e776528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1736bbb598cc6a4e89ad6347df5f1cba9fafdae0b62009b8648a0ca33e776528->leave($__internal_1736bbb598cc6a4e89ad6347df5f1cba9fafdae0b62009b8648a0ca33e776528_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3b57b3b823e7f31a718dedd76a02869d4bc9d370f09e5a66e15e74b433a14ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b57b3b823e7f31a718dedd76a02869d4bc9d370f09e5a66e15e74b433a14ac->enter($__internal_f3b57b3b823e7f31a718dedd76a02869d4bc9d370f09e5a66e15e74b433a14ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f3b57b3b823e7f31a718dedd76a02869d4bc9d370f09e5a66e15e74b433a14ac->leave($__internal_f3b57b3b823e7f31a718dedd76a02869d4bc9d370f09e5a66e15e74b433a14ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
