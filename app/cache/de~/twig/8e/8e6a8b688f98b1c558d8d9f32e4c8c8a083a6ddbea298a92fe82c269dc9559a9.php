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
        $__internal_9ef87d7d15751d83cd98af65ae878858c304be8a531f0ca25bec7c797b2698e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef87d7d15751d83cd98af65ae878858c304be8a531f0ca25bec7c797b2698e1->enter($__internal_9ef87d7d15751d83cd98af65ae878858c304be8a531f0ca25bec7c797b2698e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ef87d7d15751d83cd98af65ae878858c304be8a531f0ca25bec7c797b2698e1->leave($__internal_9ef87d7d15751d83cd98af65ae878858c304be8a531f0ca25bec7c797b2698e1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_108dcba4d9f523a23868580a8f0c21caaa7b5682b813d863316ee2c4743e5424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108dcba4d9f523a23868580a8f0c21caaa7b5682b813d863316ee2c4743e5424->enter($__internal_108dcba4d9f523a23868580a8f0c21caaa7b5682b813d863316ee2c4743e5424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_108dcba4d9f523a23868580a8f0c21caaa7b5682b813d863316ee2c4743e5424->leave($__internal_108dcba4d9f523a23868580a8f0c21caaa7b5682b813d863316ee2c4743e5424_prof);

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
