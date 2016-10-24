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
        $__internal_806e4c03c046828258e31692a9140b86921eb1fba395ebedeec8876679b9d36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806e4c03c046828258e31692a9140b86921eb1fba395ebedeec8876679b9d36b->enter($__internal_806e4c03c046828258e31692a9140b86921eb1fba395ebedeec8876679b9d36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806e4c03c046828258e31692a9140b86921eb1fba395ebedeec8876679b9d36b->leave($__internal_806e4c03c046828258e31692a9140b86921eb1fba395ebedeec8876679b9d36b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6263cf810b3726c55df68d8f7266a4c5030c7434321397e124ed2f890c189b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6263cf810b3726c55df68d8f7266a4c5030c7434321397e124ed2f890c189b89->enter($__internal_6263cf810b3726c55df68d8f7266a4c5030c7434321397e124ed2f890c189b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6263cf810b3726c55df68d8f7266a4c5030c7434321397e124ed2f890c189b89->leave($__internal_6263cf810b3726c55df68d8f7266a4c5030c7434321397e124ed2f890c189b89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b767019adc6d7174d350a252aa2146da7c3b87e8e41bcc5797d880d0cd20b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b767019adc6d7174d350a252aa2146da7c3b87e8e41bcc5797d880d0cd20b80->enter($__internal_5b767019adc6d7174d350a252aa2146da7c3b87e8e41bcc5797d880d0cd20b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b767019adc6d7174d350a252aa2146da7c3b87e8e41bcc5797d880d0cd20b80->leave($__internal_5b767019adc6d7174d350a252aa2146da7c3b87e8e41bcc5797d880d0cd20b80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97a118b3440aa09d19c887f727f7db1f13630741f393a5b41d2a6864eab592e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a118b3440aa09d19c887f727f7db1f13630741f393a5b41d2a6864eab592e5->enter($__internal_97a118b3440aa09d19c887f727f7db1f13630741f393a5b41d2a6864eab592e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97a118b3440aa09d19c887f727f7db1f13630741f393a5b41d2a6864eab592e5->leave($__internal_97a118b3440aa09d19c887f727f7db1f13630741f393a5b41d2a6864eab592e5_prof);

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
