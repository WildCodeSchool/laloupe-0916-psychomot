<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f0e008b79c2cec319a698160efecc1299674c7cdbaddf8dcb26fb4828dace8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f171f5fb2ea30d8a60939bdd2e9523e9d1b7e75939b1dcfa4430fdca225a7465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f171f5fb2ea30d8a60939bdd2e9523e9d1b7e75939b1dcfa4430fdca225a7465->enter($__internal_f171f5fb2ea30d8a60939bdd2e9523e9d1b7e75939b1dcfa4430fdca225a7465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f171f5fb2ea30d8a60939bdd2e9523e9d1b7e75939b1dcfa4430fdca225a7465->leave($__internal_f171f5fb2ea30d8a60939bdd2e9523e9d1b7e75939b1dcfa4430fdca225a7465_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0f0cec2ed1671c74f9ab2b6a9104432d2bf7114971b6af3f30df601bc5843ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f0cec2ed1671c74f9ab2b6a9104432d2bf7114971b6af3f30df601bc5843ad->enter($__internal_b0f0cec2ed1671c74f9ab2b6a9104432d2bf7114971b6af3f30df601bc5843ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0f0cec2ed1671c74f9ab2b6a9104432d2bf7114971b6af3f30df601bc5843ad->leave($__internal_b0f0cec2ed1671c74f9ab2b6a9104432d2bf7114971b6af3f30df601bc5843ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6c9f91d9fff1fe52e19b5a9df0627770335578977c852c9f26e00bfba004245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c9f91d9fff1fe52e19b5a9df0627770335578977c852c9f26e00bfba004245->enter($__internal_c6c9f91d9fff1fe52e19b5a9df0627770335578977c852c9f26e00bfba004245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6c9f91d9fff1fe52e19b5a9df0627770335578977c852c9f26e00bfba004245->leave($__internal_c6c9f91d9fff1fe52e19b5a9df0627770335578977c852c9f26e00bfba004245_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0aa264db820fbe5b6121e09b8e35b5e8467148f84be0e9efa7804f32821810f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa264db820fbe5b6121e09b8e35b5e8467148f84be0e9efa7804f32821810f2->enter($__internal_0aa264db820fbe5b6121e09b8e35b5e8467148f84be0e9efa7804f32821810f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0aa264db820fbe5b6121e09b8e35b5e8467148f84be0e9efa7804f32821810f2->leave($__internal_0aa264db820fbe5b6121e09b8e35b5e8467148f84be0e9efa7804f32821810f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
