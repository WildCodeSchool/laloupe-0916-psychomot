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
        $__internal_22ce90eca9b2de06745467f1b5cf879c18cd77a74fa5d00877289d637768c67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ce90eca9b2de06745467f1b5cf879c18cd77a74fa5d00877289d637768c67c->enter($__internal_22ce90eca9b2de06745467f1b5cf879c18cd77a74fa5d00877289d637768c67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ce90eca9b2de06745467f1b5cf879c18cd77a74fa5d00877289d637768c67c->leave($__internal_22ce90eca9b2de06745467f1b5cf879c18cd77a74fa5d00877289d637768c67c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a621bb5503b1fd39bbff0b10ae362da09d519f2af58db395e769fb5583b81a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a621bb5503b1fd39bbff0b10ae362da09d519f2af58db395e769fb5583b81a5b->enter($__internal_a621bb5503b1fd39bbff0b10ae362da09d519f2af58db395e769fb5583b81a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a621bb5503b1fd39bbff0b10ae362da09d519f2af58db395e769fb5583b81a5b->leave($__internal_a621bb5503b1fd39bbff0b10ae362da09d519f2af58db395e769fb5583b81a5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_177b2060d123e57ad2e1a95f64b84acb09ca206185b6db1aefbdc15c36fa4278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177b2060d123e57ad2e1a95f64b84acb09ca206185b6db1aefbdc15c36fa4278->enter($__internal_177b2060d123e57ad2e1a95f64b84acb09ca206185b6db1aefbdc15c36fa4278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_177b2060d123e57ad2e1a95f64b84acb09ca206185b6db1aefbdc15c36fa4278->leave($__internal_177b2060d123e57ad2e1a95f64b84acb09ca206185b6db1aefbdc15c36fa4278_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b64bb983e4ddadead48b5d4f70fa66516a40e68db2b676a2a6fb2702b89c80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b64bb983e4ddadead48b5d4f70fa66516a40e68db2b676a2a6fb2702b89c80e->enter($__internal_0b64bb983e4ddadead48b5d4f70fa66516a40e68db2b676a2a6fb2702b89c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0b64bb983e4ddadead48b5d4f70fa66516a40e68db2b676a2a6fb2702b89c80e->leave($__internal_0b64bb983e4ddadead48b5d4f70fa66516a40e68db2b676a2a6fb2702b89c80e_prof);

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
