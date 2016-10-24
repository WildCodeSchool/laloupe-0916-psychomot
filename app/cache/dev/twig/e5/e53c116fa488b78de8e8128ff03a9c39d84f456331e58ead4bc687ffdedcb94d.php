<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_92b0802d14583f09a39581261079bd917f861e65822e83d2c835fd330785023e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89c3031415b0d862727de620db7cb34b38f1493e728140e4aead1e8d7fd3f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89c3031415b0d862727de620db7cb34b38f1493e728140e4aead1e8d7fd3f32->enter($__internal_b89c3031415b0d862727de620db7cb34b38f1493e728140e4aead1e8d7fd3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b89c3031415b0d862727de620db7cb34b38f1493e728140e4aead1e8d7fd3f32->leave($__internal_b89c3031415b0d862727de620db7cb34b38f1493e728140e4aead1e8d7fd3f32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45167f92878c51c3ecf450aa9d1465c967704bc99873d3e127f3ec99b1f8a19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45167f92878c51c3ecf450aa9d1465c967704bc99873d3e127f3ec99b1f8a19c->enter($__internal_45167f92878c51c3ecf450aa9d1465c967704bc99873d3e127f3ec99b1f8a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45167f92878c51c3ecf450aa9d1465c967704bc99873d3e127f3ec99b1f8a19c->leave($__internal_45167f92878c51c3ecf450aa9d1465c967704bc99873d3e127f3ec99b1f8a19c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53788caaa85fc5bfd5dbf6722c4fa7fd8585836f387f8982485bdbb1ebd8c89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53788caaa85fc5bfd5dbf6722c4fa7fd8585836f387f8982485bdbb1ebd8c89c->enter($__internal_53788caaa85fc5bfd5dbf6722c4fa7fd8585836f387f8982485bdbb1ebd8c89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_53788caaa85fc5bfd5dbf6722c4fa7fd8585836f387f8982485bdbb1ebd8c89c->leave($__internal_53788caaa85fc5bfd5dbf6722c4fa7fd8585836f387f8982485bdbb1ebd8c89c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
