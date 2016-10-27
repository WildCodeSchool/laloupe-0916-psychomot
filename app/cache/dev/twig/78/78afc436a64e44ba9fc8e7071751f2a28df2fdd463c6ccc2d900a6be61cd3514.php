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
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb->enter($__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb->leave($__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab->enter($__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab->leave($__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed->enter($__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed->leave($__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a->enter($__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a->leave($__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a_prof);

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
