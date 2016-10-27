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
        $__internal_639aa97ba2b1d61daf7d46649ab5562101cf957e43871c765f11199ac239d1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639aa97ba2b1d61daf7d46649ab5562101cf957e43871c765f11199ac239d1d5->enter($__internal_639aa97ba2b1d61daf7d46649ab5562101cf957e43871c765f11199ac239d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639aa97ba2b1d61daf7d46649ab5562101cf957e43871c765f11199ac239d1d5->leave($__internal_639aa97ba2b1d61daf7d46649ab5562101cf957e43871c765f11199ac239d1d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_864bba504cbfcd9a9f472299c34c0fdb915a4719cadab4bffd4cd214ddebecbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864bba504cbfcd9a9f472299c34c0fdb915a4719cadab4bffd4cd214ddebecbb->enter($__internal_864bba504cbfcd9a9f472299c34c0fdb915a4719cadab4bffd4cd214ddebecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_864bba504cbfcd9a9f472299c34c0fdb915a4719cadab4bffd4cd214ddebecbb->leave($__internal_864bba504cbfcd9a9f472299c34c0fdb915a4719cadab4bffd4cd214ddebecbb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0ab669cceaa8d8ea0c46af36e83b67b5eeb548f69b5b9523f61738e2152e33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ab669cceaa8d8ea0c46af36e83b67b5eeb548f69b5b9523f61738e2152e33c->enter($__internal_a0ab669cceaa8d8ea0c46af36e83b67b5eeb548f69b5b9523f61738e2152e33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0ab669cceaa8d8ea0c46af36e83b67b5eeb548f69b5b9523f61738e2152e33c->leave($__internal_a0ab669cceaa8d8ea0c46af36e83b67b5eeb548f69b5b9523f61738e2152e33c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45e43f8b5314d3527a06df029bfd095a788ccc1998cff905014f1105822d43fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e43f8b5314d3527a06df029bfd095a788ccc1998cff905014f1105822d43fc->enter($__internal_45e43f8b5314d3527a06df029bfd095a788ccc1998cff905014f1105822d43fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45e43f8b5314d3527a06df029bfd095a788ccc1998cff905014f1105822d43fc->leave($__internal_45e43f8b5314d3527a06df029bfd095a788ccc1998cff905014f1105822d43fc_prof);

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
