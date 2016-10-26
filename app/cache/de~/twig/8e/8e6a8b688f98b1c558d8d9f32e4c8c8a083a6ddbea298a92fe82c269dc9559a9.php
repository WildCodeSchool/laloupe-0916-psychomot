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
        $__internal_c2a67ce04c478bc6cd9d71f932569b99a908189f2049cb789fcc45b910d37093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a67ce04c478bc6cd9d71f932569b99a908189f2049cb789fcc45b910d37093->enter($__internal_c2a67ce04c478bc6cd9d71f932569b99a908189f2049cb789fcc45b910d37093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2a67ce04c478bc6cd9d71f932569b99a908189f2049cb789fcc45b910d37093->leave($__internal_c2a67ce04c478bc6cd9d71f932569b99a908189f2049cb789fcc45b910d37093_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9b0a360e52552c505fc092f4f39d52ac15cc313d4a9dc9a0451a638d06e6dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b0a360e52552c505fc092f4f39d52ac15cc313d4a9dc9a0451a638d06e6dcb->enter($__internal_c9b0a360e52552c505fc092f4f39d52ac15cc313d4a9dc9a0451a638d06e6dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9b0a360e52552c505fc092f4f39d52ac15cc313d4a9dc9a0451a638d06e6dcb->leave($__internal_c9b0a360e52552c505fc092f4f39d52ac15cc313d4a9dc9a0451a638d06e6dcb_prof);

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
