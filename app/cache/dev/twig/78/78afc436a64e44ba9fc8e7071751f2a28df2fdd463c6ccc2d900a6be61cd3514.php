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
        $__internal_dc8432bff82d6119274dfcd2efb2195df1764d0cf09f9cfb0433c693d870f37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8432bff82d6119274dfcd2efb2195df1764d0cf09f9cfb0433c693d870f37c->enter($__internal_dc8432bff82d6119274dfcd2efb2195df1764d0cf09f9cfb0433c693d870f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8432bff82d6119274dfcd2efb2195df1764d0cf09f9cfb0433c693d870f37c->leave($__internal_dc8432bff82d6119274dfcd2efb2195df1764d0cf09f9cfb0433c693d870f37c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641972e0e74751d1f4e3836828fe9aa85d6f499c3b76525beeff957af58830e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641972e0e74751d1f4e3836828fe9aa85d6f499c3b76525beeff957af58830e3->enter($__internal_641972e0e74751d1f4e3836828fe9aa85d6f499c3b76525beeff957af58830e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641972e0e74751d1f4e3836828fe9aa85d6f499c3b76525beeff957af58830e3->leave($__internal_641972e0e74751d1f4e3836828fe9aa85d6f499c3b76525beeff957af58830e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98ae8422a89e48b9dafdfcc8b7064871d9ff5a1f685a82d27e595905aa522038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ae8422a89e48b9dafdfcc8b7064871d9ff5a1f685a82d27e595905aa522038->enter($__internal_98ae8422a89e48b9dafdfcc8b7064871d9ff5a1f685a82d27e595905aa522038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98ae8422a89e48b9dafdfcc8b7064871d9ff5a1f685a82d27e595905aa522038->leave($__internal_98ae8422a89e48b9dafdfcc8b7064871d9ff5a1f685a82d27e595905aa522038_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e33bb7b76b0035bef907c99f5648438c074f2ccc8ff4f625d39e78229980181d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33bb7b76b0035bef907c99f5648438c074f2ccc8ff4f625d39e78229980181d->enter($__internal_e33bb7b76b0035bef907c99f5648438c074f2ccc8ff4f625d39e78229980181d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e33bb7b76b0035bef907c99f5648438c074f2ccc8ff4f625d39e78229980181d->leave($__internal_e33bb7b76b0035bef907c99f5648438c074f2ccc8ff4f625d39e78229980181d_prof);

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
