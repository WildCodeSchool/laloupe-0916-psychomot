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
        $__internal_6aadb71ec524f150b54993fc8eac998f604c920bc4e8df62655a461692bf0e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aadb71ec524f150b54993fc8eac998f604c920bc4e8df62655a461692bf0e59->enter($__internal_6aadb71ec524f150b54993fc8eac998f604c920bc4e8df62655a461692bf0e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6aadb71ec524f150b54993fc8eac998f604c920bc4e8df62655a461692bf0e59->leave($__internal_6aadb71ec524f150b54993fc8eac998f604c920bc4e8df62655a461692bf0e59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36611fca01ba0b0e4df3dee33e2eaf04e12ebe7088e632ced8481f65aa7e6dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36611fca01ba0b0e4df3dee33e2eaf04e12ebe7088e632ced8481f65aa7e6dc2->enter($__internal_36611fca01ba0b0e4df3dee33e2eaf04e12ebe7088e632ced8481f65aa7e6dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36611fca01ba0b0e4df3dee33e2eaf04e12ebe7088e632ced8481f65aa7e6dc2->leave($__internal_36611fca01ba0b0e4df3dee33e2eaf04e12ebe7088e632ced8481f65aa7e6dc2_prof);

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
