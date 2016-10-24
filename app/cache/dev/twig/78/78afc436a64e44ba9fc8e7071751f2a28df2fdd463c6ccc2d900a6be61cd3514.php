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
        $__internal_17af976e00cb13560ea7045ff6d5d60f008554491331c7b05e059ba92878a7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17af976e00cb13560ea7045ff6d5d60f008554491331c7b05e059ba92878a7b2->enter($__internal_17af976e00cb13560ea7045ff6d5d60f008554491331c7b05e059ba92878a7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17af976e00cb13560ea7045ff6d5d60f008554491331c7b05e059ba92878a7b2->leave($__internal_17af976e00cb13560ea7045ff6d5d60f008554491331c7b05e059ba92878a7b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_984cfa4404eaae817403b09bfaa9ee367832145aefa8d463bd8d3d7e15907769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984cfa4404eaae817403b09bfaa9ee367832145aefa8d463bd8d3d7e15907769->enter($__internal_984cfa4404eaae817403b09bfaa9ee367832145aefa8d463bd8d3d7e15907769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_984cfa4404eaae817403b09bfaa9ee367832145aefa8d463bd8d3d7e15907769->leave($__internal_984cfa4404eaae817403b09bfaa9ee367832145aefa8d463bd8d3d7e15907769_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b7939dbef650ebad3b2f454f311a53a23d7b52fecfdb7a1474ea9b069b7eaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7939dbef650ebad3b2f454f311a53a23d7b52fecfdb7a1474ea9b069b7eaa6->enter($__internal_5b7939dbef650ebad3b2f454f311a53a23d7b52fecfdb7a1474ea9b069b7eaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b7939dbef650ebad3b2f454f311a53a23d7b52fecfdb7a1474ea9b069b7eaa6->leave($__internal_5b7939dbef650ebad3b2f454f311a53a23d7b52fecfdb7a1474ea9b069b7eaa6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a65549481d512439c100ef48866718df895f3c2017d1f343a9c1ff2c425de13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a65549481d512439c100ef48866718df895f3c2017d1f343a9c1ff2c425de13->enter($__internal_9a65549481d512439c100ef48866718df895f3c2017d1f343a9c1ff2c425de13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a65549481d512439c100ef48866718df895f3c2017d1f343a9c1ff2c425de13->leave($__internal_9a65549481d512439c100ef48866718df895f3c2017d1f343a9c1ff2c425de13_prof);

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
