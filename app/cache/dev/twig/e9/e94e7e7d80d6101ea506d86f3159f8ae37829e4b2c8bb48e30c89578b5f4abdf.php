<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa6977c61837771a2ca090128970a53b00790b3d22143e30849cc41cec38e365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6b309534f80306c57b058494f94ab8384c7c11e83f12ba3f258fd7da28535236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b309534f80306c57b058494f94ab8384c7c11e83f12ba3f258fd7da28535236->enter($__internal_6b309534f80306c57b058494f94ab8384c7c11e83f12ba3f258fd7da28535236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b309534f80306c57b058494f94ab8384c7c11e83f12ba3f258fd7da28535236->leave($__internal_6b309534f80306c57b058494f94ab8384c7c11e83f12ba3f258fd7da28535236_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6872b55e0e174fd02c8ed93f984457b4c409ed45254002d0e74d511be5c8172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6872b55e0e174fd02c8ed93f984457b4c409ed45254002d0e74d511be5c8172e->enter($__internal_6872b55e0e174fd02c8ed93f984457b4c409ed45254002d0e74d511be5c8172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6872b55e0e174fd02c8ed93f984457b4c409ed45254002d0e74d511be5c8172e->leave($__internal_6872b55e0e174fd02c8ed93f984457b4c409ed45254002d0e74d511be5c8172e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b619f9d84cae89289e31d59affcddb90135ec5d28decf8b76c382e9843d7e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b619f9d84cae89289e31d59affcddb90135ec5d28decf8b76c382e9843d7e7cf->enter($__internal_b619f9d84cae89289e31d59affcddb90135ec5d28decf8b76c382e9843d7e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b619f9d84cae89289e31d59affcddb90135ec5d28decf8b76c382e9843d7e7cf->leave($__internal_b619f9d84cae89289e31d59affcddb90135ec5d28decf8b76c382e9843d7e7cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6c9e2c9955f77fac72502e0f2bada7f0e796e511d323d114bb989e1204e50a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c9e2c9955f77fac72502e0f2bada7f0e796e511d323d114bb989e1204e50a1->enter($__internal_c6c9e2c9955f77fac72502e0f2bada7f0e796e511d323d114bb989e1204e50a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c6c9e2c9955f77fac72502e0f2bada7f0e796e511d323d114bb989e1204e50a1->leave($__internal_c6c9e2c9955f77fac72502e0f2bada7f0e796e511d323d114bb989e1204e50a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
