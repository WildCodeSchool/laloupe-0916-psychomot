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
        $__internal_6ff558b43ce11db197a8f12bc424dfb50585b3e2f7ee249e7bdf2af46a47413c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff558b43ce11db197a8f12bc424dfb50585b3e2f7ee249e7bdf2af46a47413c->enter($__internal_6ff558b43ce11db197a8f12bc424dfb50585b3e2f7ee249e7bdf2af46a47413c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ff558b43ce11db197a8f12bc424dfb50585b3e2f7ee249e7bdf2af46a47413c->leave($__internal_6ff558b43ce11db197a8f12bc424dfb50585b3e2f7ee249e7bdf2af46a47413c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b40b57526df3566f1d571e3e3585b11d73a8cf74afacd7ce614affe476571084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40b57526df3566f1d571e3e3585b11d73a8cf74afacd7ce614affe476571084->enter($__internal_b40b57526df3566f1d571e3e3585b11d73a8cf74afacd7ce614affe476571084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b40b57526df3566f1d571e3e3585b11d73a8cf74afacd7ce614affe476571084->leave($__internal_b40b57526df3566f1d571e3e3585b11d73a8cf74afacd7ce614affe476571084_prof);

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
