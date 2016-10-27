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
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe->enter($__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe->leave($__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f->enter($__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f->leave($__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded->enter($__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded->leave($__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad->enter($__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad->leave($__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad_prof);

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
