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
        $__internal_56883aa5b23168835e112063b1f2419481a62c2e2d100e324263486502f15b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56883aa5b23168835e112063b1f2419481a62c2e2d100e324263486502f15b66->enter($__internal_56883aa5b23168835e112063b1f2419481a62c2e2d100e324263486502f15b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56883aa5b23168835e112063b1f2419481a62c2e2d100e324263486502f15b66->leave($__internal_56883aa5b23168835e112063b1f2419481a62c2e2d100e324263486502f15b66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58379504c590e85a51a6fa18d5ba8dbbeddf59b5a40b59f48883e63411c6e8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58379504c590e85a51a6fa18d5ba8dbbeddf59b5a40b59f48883e63411c6e8ff->enter($__internal_58379504c590e85a51a6fa18d5ba8dbbeddf59b5a40b59f48883e63411c6e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58379504c590e85a51a6fa18d5ba8dbbeddf59b5a40b59f48883e63411c6e8ff->leave($__internal_58379504c590e85a51a6fa18d5ba8dbbeddf59b5a40b59f48883e63411c6e8ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b45094c7e9208fc98b8cac5878803454bba2c898071849a7f6328a85bbdc6413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45094c7e9208fc98b8cac5878803454bba2c898071849a7f6328a85bbdc6413->enter($__internal_b45094c7e9208fc98b8cac5878803454bba2c898071849a7f6328a85bbdc6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b45094c7e9208fc98b8cac5878803454bba2c898071849a7f6328a85bbdc6413->leave($__internal_b45094c7e9208fc98b8cac5878803454bba2c898071849a7f6328a85bbdc6413_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9dc08e5020471c66fd9616845efc5cbf0676ad9c1681526a0f15db1318bdce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dc08e5020471c66fd9616845efc5cbf0676ad9c1681526a0f15db1318bdce1->enter($__internal_c9dc08e5020471c66fd9616845efc5cbf0676ad9c1681526a0f15db1318bdce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9dc08e5020471c66fd9616845efc5cbf0676ad9c1681526a0f15db1318bdce1->leave($__internal_c9dc08e5020471c66fd9616845efc5cbf0676ad9c1681526a0f15db1318bdce1_prof);

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
