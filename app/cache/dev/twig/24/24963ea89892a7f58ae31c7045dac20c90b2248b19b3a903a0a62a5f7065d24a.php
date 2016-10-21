<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ff6b65dbfc5e377dce2e360cfd880591881d40df16270e2397e974944e64e9eb extends Twig_Template
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
        $__internal_dff4b925c6a23b50e97bb018046d0812c27133c9b0814c13b2dbd22da45a9fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff4b925c6a23b50e97bb018046d0812c27133c9b0814c13b2dbd22da45a9fb4->enter($__internal_dff4b925c6a23b50e97bb018046d0812c27133c9b0814c13b2dbd22da45a9fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dff4b925c6a23b50e97bb018046d0812c27133c9b0814c13b2dbd22da45a9fb4->leave($__internal_dff4b925c6a23b50e97bb018046d0812c27133c9b0814c13b2dbd22da45a9fb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c55f5d8fec8f7c8e6106d6f0ff995d24acf67c339515baa7a6a0dbf5ef2f977e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55f5d8fec8f7c8e6106d6f0ff995d24acf67c339515baa7a6a0dbf5ef2f977e->enter($__internal_c55f5d8fec8f7c8e6106d6f0ff995d24acf67c339515baa7a6a0dbf5ef2f977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c55f5d8fec8f7c8e6106d6f0ff995d24acf67c339515baa7a6a0dbf5ef2f977e->leave($__internal_c55f5d8fec8f7c8e6106d6f0ff995d24acf67c339515baa7a6a0dbf5ef2f977e_prof);

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
