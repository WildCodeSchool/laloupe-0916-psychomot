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
        $__internal_4a53b27aa3b46c3090100f8aaf17e4d464211533e01c72c80aaed2106e0a8057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a53b27aa3b46c3090100f8aaf17e4d464211533e01c72c80aaed2106e0a8057->enter($__internal_4a53b27aa3b46c3090100f8aaf17e4d464211533e01c72c80aaed2106e0a8057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a53b27aa3b46c3090100f8aaf17e4d464211533e01c72c80aaed2106e0a8057->leave($__internal_4a53b27aa3b46c3090100f8aaf17e4d464211533e01c72c80aaed2106e0a8057_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9414e4638f80dfbcc7b6fb187dc4c2fc7ba29e271eaeefde17e8c849af952b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9414e4638f80dfbcc7b6fb187dc4c2fc7ba29e271eaeefde17e8c849af952b2->enter($__internal_a9414e4638f80dfbcc7b6fb187dc4c2fc7ba29e271eaeefde17e8c849af952b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9414e4638f80dfbcc7b6fb187dc4c2fc7ba29e271eaeefde17e8c849af952b2->leave($__internal_a9414e4638f80dfbcc7b6fb187dc4c2fc7ba29e271eaeefde17e8c849af952b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f65ed9e79aacf995fc0fa86db80e7258b4e52a29a82dfbdb47cb0c8dd784a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f65ed9e79aacf995fc0fa86db80e7258b4e52a29a82dfbdb47cb0c8dd784a4d->enter($__internal_5f65ed9e79aacf995fc0fa86db80e7258b4e52a29a82dfbdb47cb0c8dd784a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f65ed9e79aacf995fc0fa86db80e7258b4e52a29a82dfbdb47cb0c8dd784a4d->leave($__internal_5f65ed9e79aacf995fc0fa86db80e7258b4e52a29a82dfbdb47cb0c8dd784a4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e06ebd51f85b3428bcf78dd2b216f868bed8a9ca2e9e3d40c1ab7f2993038521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06ebd51f85b3428bcf78dd2b216f868bed8a9ca2e9e3d40c1ab7f2993038521->enter($__internal_e06ebd51f85b3428bcf78dd2b216f868bed8a9ca2e9e3d40c1ab7f2993038521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e06ebd51f85b3428bcf78dd2b216f868bed8a9ca2e9e3d40c1ab7f2993038521->leave($__internal_e06ebd51f85b3428bcf78dd2b216f868bed8a9ca2e9e3d40c1ab7f2993038521_prof);

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
