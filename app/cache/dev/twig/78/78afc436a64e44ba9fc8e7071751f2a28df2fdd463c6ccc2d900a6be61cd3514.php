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
        $__internal_a8c76e6c2e5c639116103f97d6102e4f94e3d6b79296acd38fc8c0fd89470459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c76e6c2e5c639116103f97d6102e4f94e3d6b79296acd38fc8c0fd89470459->enter($__internal_a8c76e6c2e5c639116103f97d6102e4f94e3d6b79296acd38fc8c0fd89470459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c76e6c2e5c639116103f97d6102e4f94e3d6b79296acd38fc8c0fd89470459->leave($__internal_a8c76e6c2e5c639116103f97d6102e4f94e3d6b79296acd38fc8c0fd89470459_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8356d5e8de40c943f8213aafb6a5d1f54353713b7460e32355be4b42709f19a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8356d5e8de40c943f8213aafb6a5d1f54353713b7460e32355be4b42709f19a8->enter($__internal_8356d5e8de40c943f8213aafb6a5d1f54353713b7460e32355be4b42709f19a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8356d5e8de40c943f8213aafb6a5d1f54353713b7460e32355be4b42709f19a8->leave($__internal_8356d5e8de40c943f8213aafb6a5d1f54353713b7460e32355be4b42709f19a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f303cdd725b69e265036b9c00515dfbe643cf6684219339c6a1aad47389727f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f303cdd725b69e265036b9c00515dfbe643cf6684219339c6a1aad47389727f3->enter($__internal_f303cdd725b69e265036b9c00515dfbe643cf6684219339c6a1aad47389727f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f303cdd725b69e265036b9c00515dfbe643cf6684219339c6a1aad47389727f3->leave($__internal_f303cdd725b69e265036b9c00515dfbe643cf6684219339c6a1aad47389727f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d9e36b9adef4f2adab1bef6a0a132626fa2c543142418bfa71d100512747dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9e36b9adef4f2adab1bef6a0a132626fa2c543142418bfa71d100512747dfe->enter($__internal_0d9e36b9adef4f2adab1bef6a0a132626fa2c543142418bfa71d100512747dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d9e36b9adef4f2adab1bef6a0a132626fa2c543142418bfa71d100512747dfe->leave($__internal_0d9e36b9adef4f2adab1bef6a0a132626fa2c543142418bfa71d100512747dfe_prof);

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
