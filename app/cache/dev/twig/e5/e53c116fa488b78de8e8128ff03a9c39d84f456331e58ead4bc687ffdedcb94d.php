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
        $__internal_474b58950b4cd914502da13ab1af2600a90772592653d80c28d018e731696e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474b58950b4cd914502da13ab1af2600a90772592653d80c28d018e731696e76->enter($__internal_474b58950b4cd914502da13ab1af2600a90772592653d80c28d018e731696e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474b58950b4cd914502da13ab1af2600a90772592653d80c28d018e731696e76->leave($__internal_474b58950b4cd914502da13ab1af2600a90772592653d80c28d018e731696e76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69192ada08ffb3c6bc98d3e71fb07b800271b24d0252ad7232d8c8ca6512234b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69192ada08ffb3c6bc98d3e71fb07b800271b24d0252ad7232d8c8ca6512234b->enter($__internal_69192ada08ffb3c6bc98d3e71fb07b800271b24d0252ad7232d8c8ca6512234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_69192ada08ffb3c6bc98d3e71fb07b800271b24d0252ad7232d8c8ca6512234b->leave($__internal_69192ada08ffb3c6bc98d3e71fb07b800271b24d0252ad7232d8c8ca6512234b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_297631837804783e605b38cf882cf3a25c14bec11d3a2e6d20d6c3802056a3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297631837804783e605b38cf882cf3a25c14bec11d3a2e6d20d6c3802056a3fe->enter($__internal_297631837804783e605b38cf882cf3a25c14bec11d3a2e6d20d6c3802056a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_297631837804783e605b38cf882cf3a25c14bec11d3a2e6d20d6c3802056a3fe->leave($__internal_297631837804783e605b38cf882cf3a25c14bec11d3a2e6d20d6c3802056a3fe_prof);

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
