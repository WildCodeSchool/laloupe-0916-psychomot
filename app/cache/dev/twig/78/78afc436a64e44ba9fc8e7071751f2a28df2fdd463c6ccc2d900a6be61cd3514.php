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
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c->enter($__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c->leave($__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab->enter($__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab->leave($__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971->enter($__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971->leave($__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca->enter($__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca->leave($__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca_prof);

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
