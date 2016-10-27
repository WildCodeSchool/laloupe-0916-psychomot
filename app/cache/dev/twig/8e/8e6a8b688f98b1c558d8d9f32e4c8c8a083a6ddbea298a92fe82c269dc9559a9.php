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
        $__internal_d02697ce6edddbf0ec998c072d8bbd99515698494bc3679e6581a483ad118cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02697ce6edddbf0ec998c072d8bbd99515698494bc3679e6581a483ad118cb5->enter($__internal_d02697ce6edddbf0ec998c072d8bbd99515698494bc3679e6581a483ad118cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d02697ce6edddbf0ec998c072d8bbd99515698494bc3679e6581a483ad118cb5->leave($__internal_d02697ce6edddbf0ec998c072d8bbd99515698494bc3679e6581a483ad118cb5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed8931cf1f327b1f00a1eb76bcda797d1c41057b80af418a561329f5fbd81c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8931cf1f327b1f00a1eb76bcda797d1c41057b80af418a561329f5fbd81c24->enter($__internal_ed8931cf1f327b1f00a1eb76bcda797d1c41057b80af418a561329f5fbd81c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed8931cf1f327b1f00a1eb76bcda797d1c41057b80af418a561329f5fbd81c24->leave($__internal_ed8931cf1f327b1f00a1eb76bcda797d1c41057b80af418a561329f5fbd81c24_prof);

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
