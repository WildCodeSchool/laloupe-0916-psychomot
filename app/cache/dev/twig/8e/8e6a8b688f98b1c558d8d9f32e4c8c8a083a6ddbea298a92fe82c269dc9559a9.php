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
        $__internal_681589a4fb121caacc41eb430dfe098eab57f5475d422f3062fcb55e8d21d71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681589a4fb121caacc41eb430dfe098eab57f5475d422f3062fcb55e8d21d71b->enter($__internal_681589a4fb121caacc41eb430dfe098eab57f5475d422f3062fcb55e8d21d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_681589a4fb121caacc41eb430dfe098eab57f5475d422f3062fcb55e8d21d71b->leave($__internal_681589a4fb121caacc41eb430dfe098eab57f5475d422f3062fcb55e8d21d71b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_87ae6b891cba67d41b8f30ddfcd6aa08df38a62cde21546988a7c1cdc0266be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ae6b891cba67d41b8f30ddfcd6aa08df38a62cde21546988a7c1cdc0266be0->enter($__internal_87ae6b891cba67d41b8f30ddfcd6aa08df38a62cde21546988a7c1cdc0266be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_87ae6b891cba67d41b8f30ddfcd6aa08df38a62cde21546988a7c1cdc0266be0->leave($__internal_87ae6b891cba67d41b8f30ddfcd6aa08df38a62cde21546988a7c1cdc0266be0_prof);

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
