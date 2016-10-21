<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ceb828dff6b0ed8148ff0e5eac3bcdb22043f981db749b707d372b9bc1e6d3b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3b3970b5a08be3b5d240a9b23f49ccfa53a2992fba4eb937fb8f2d4d3b307112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3970b5a08be3b5d240a9b23f49ccfa53a2992fba4eb937fb8f2d4d3b307112->enter($__internal_3b3970b5a08be3b5d240a9b23f49ccfa53a2992fba4eb937fb8f2d4d3b307112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3970b5a08be3b5d240a9b23f49ccfa53a2992fba4eb937fb8f2d4d3b307112->leave($__internal_3b3970b5a08be3b5d240a9b23f49ccfa53a2992fba4eb937fb8f2d4d3b307112_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9c9601301e198d81dea8ab5227dfd0d1e42f53749aa016fc4b135f30c10dc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c9601301e198d81dea8ab5227dfd0d1e42f53749aa016fc4b135f30c10dc86->enter($__internal_d9c9601301e198d81dea8ab5227dfd0d1e42f53749aa016fc4b135f30c10dc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d9c9601301e198d81dea8ab5227dfd0d1e42f53749aa016fc4b135f30c10dc86->leave($__internal_d9c9601301e198d81dea8ab5227dfd0d1e42f53749aa016fc4b135f30c10dc86_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3594eac822da896729d704482112d61351132f967439df2c84ea0215c48d2622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3594eac822da896729d704482112d61351132f967439df2c84ea0215c48d2622->enter($__internal_3594eac822da896729d704482112d61351132f967439df2c84ea0215c48d2622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3594eac822da896729d704482112d61351132f967439df2c84ea0215c48d2622->leave($__internal_3594eac822da896729d704482112d61351132f967439df2c84ea0215c48d2622_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d25837bdd0040a1ef23ae1facf89c6cf792f782a53c193a060fea7aaa2595f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25837bdd0040a1ef23ae1facf89c6cf792f782a53c193a060fea7aaa2595f8e->enter($__internal_d25837bdd0040a1ef23ae1facf89c6cf792f782a53c193a060fea7aaa2595f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d25837bdd0040a1ef23ae1facf89c6cf792f782a53c193a060fea7aaa2595f8e->leave($__internal_d25837bdd0040a1ef23ae1facf89c6cf792f782a53c193a060fea7aaa2595f8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
