<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29895a9916f6ea2fa57c58e826f592fd36a658c821a86dd4140cbe3626a98df6 extends Twig_Template
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
        $__internal_9336d560b28721c9777689c85b14caad6eddf2ab7cd468f21cac6b001c545e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9336d560b28721c9777689c85b14caad6eddf2ab7cd468f21cac6b001c545e29->enter($__internal_9336d560b28721c9777689c85b14caad6eddf2ab7cd468f21cac6b001c545e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9336d560b28721c9777689c85b14caad6eddf2ab7cd468f21cac6b001c545e29->leave($__internal_9336d560b28721c9777689c85b14caad6eddf2ab7cd468f21cac6b001c545e29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3330f73f342f0b37ca8c3d64e0e45a2ef1c675c7585dc08fb87ab922b5b2d187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3330f73f342f0b37ca8c3d64e0e45a2ef1c675c7585dc08fb87ab922b5b2d187->enter($__internal_3330f73f342f0b37ca8c3d64e0e45a2ef1c675c7585dc08fb87ab922b5b2d187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3330f73f342f0b37ca8c3d64e0e45a2ef1c675c7585dc08fb87ab922b5b2d187->leave($__internal_3330f73f342f0b37ca8c3d64e0e45a2ef1c675c7585dc08fb87ab922b5b2d187_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b432e02ed9ad3675bcc17fb400ebe18764d9d6af2950731c8c8e26f2d54d3638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b432e02ed9ad3675bcc17fb400ebe18764d9d6af2950731c8c8e26f2d54d3638->enter($__internal_b432e02ed9ad3675bcc17fb400ebe18764d9d6af2950731c8c8e26f2d54d3638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b432e02ed9ad3675bcc17fb400ebe18764d9d6af2950731c8c8e26f2d54d3638->leave($__internal_b432e02ed9ad3675bcc17fb400ebe18764d9d6af2950731c8c8e26f2d54d3638_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba36d49ffd360d1385df60c8269b1c947c5e21526c8852e75739532858c4e5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba36d49ffd360d1385df60c8269b1c947c5e21526c8852e75739532858c4e5ec->enter($__internal_ba36d49ffd360d1385df60c8269b1c947c5e21526c8852e75739532858c4e5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ba36d49ffd360d1385df60c8269b1c947c5e21526c8852e75739532858c4e5ec->leave($__internal_ba36d49ffd360d1385df60c8269b1c947c5e21526c8852e75739532858c4e5ec_prof);

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
