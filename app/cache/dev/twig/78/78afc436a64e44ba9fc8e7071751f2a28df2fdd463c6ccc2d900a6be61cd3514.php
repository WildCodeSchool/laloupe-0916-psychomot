<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f0e008b79c2cec319a698160efecc1299674c7cdbaddf8dcb26fb4828dace8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5771ef43618ce77f62371c18a8fa22f6e394d558febfc3a3dfb1c358160a2cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5771ef43618ce77f62371c18a8fa22f6e394d558febfc3a3dfb1c358160a2cb5->enter($__internal_5771ef43618ce77f62371c18a8fa22f6e394d558febfc3a3dfb1c358160a2cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5771ef43618ce77f62371c18a8fa22f6e394d558febfc3a3dfb1c358160a2cb5->leave($__internal_5771ef43618ce77f62371c18a8fa22f6e394d558febfc3a3dfb1c358160a2cb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_030b88ac1f8398496a7d80de19e52e0b2418df68ab85e62b664dcc3240e704e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030b88ac1f8398496a7d80de19e52e0b2418df68ab85e62b664dcc3240e704e6->enter($__internal_030b88ac1f8398496a7d80de19e52e0b2418df68ab85e62b664dcc3240e704e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_030b88ac1f8398496a7d80de19e52e0b2418df68ab85e62b664dcc3240e704e6->leave($__internal_030b88ac1f8398496a7d80de19e52e0b2418df68ab85e62b664dcc3240e704e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23c01320e686a195b64509bf7f3fc5f86a316b5aac8049f9efbfcdec7136e8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c01320e686a195b64509bf7f3fc5f86a316b5aac8049f9efbfcdec7136e8a0->enter($__internal_23c01320e686a195b64509bf7f3fc5f86a316b5aac8049f9efbfcdec7136e8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23c01320e686a195b64509bf7f3fc5f86a316b5aac8049f9efbfcdec7136e8a0->leave($__internal_23c01320e686a195b64509bf7f3fc5f86a316b5aac8049f9efbfcdec7136e8a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6eec1e8202c69a6ebc9e1189e961aa0c49dae6626adc4f6b328ffc30cc1cfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6eec1e8202c69a6ebc9e1189e961aa0c49dae6626adc4f6b328ffc30cc1cfac->enter($__internal_f6eec1e8202c69a6ebc9e1189e961aa0c49dae6626adc4f6b328ffc30cc1cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6eec1e8202c69a6ebc9e1189e961aa0c49dae6626adc4f6b328ffc30cc1cfac->leave($__internal_f6eec1e8202c69a6ebc9e1189e961aa0c49dae6626adc4f6b328ffc30cc1cfac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
